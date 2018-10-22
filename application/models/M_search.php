<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_search extends CI_Model {

    function filterSearchKeys($query){
        $query = trim(preg_replace("/(\s+)+/", " ", $query));
        $words = array();
        // expand this list with your words.
        $list = array("in","it","a","the","of","or","I","you","he","me","us","they","she","to","but","that","this","those","then");
        $c = 0;
        foreach(explode(" ", $query) as $key){
            if (in_array($key, $list)){
                continue;
            }
            $words[] = $key;
            if ($c >= 15){
                break;
            }
            $c++;
        }
        return $words;
    }

    // limit words number of characters
    function limitChars($query, $limit = 200){
        return substr($query, 0,$limit);
    }

    function search($query){

        $query = trim($query);
        if (mb_strlen($query)===0){
            // no need for empty search right?
            return false; 
        }
        $query = $this->limitChars($query);

        // Weighing scores
        $scoreFullTitle = 6;
        $scoreTitleKeyword = 5;
        $scoreFullSummary = 5;
        $scoreSummaryKeyword = 4;
        $scoreFullDocument = 4;
        $scoreDocumentKeyword = 3;
        $scoreCategoryKeyword = 2;
        $scoreUrlKeyword = 1;

        $keywords = $this->filterSearchKeys($query);
        $escQuery = $query; // see note above to get db object
        $titleSQL = array();
        $sumSQL = array();
        $docSQL = array();
        $categorySQL = array();
        $urlSQL = array();

        /** Matching full occurences **/
        if (count($keywords) > 1){
            $titleSQL[] = "if (nama_produk LIKE '%".$escQuery."%',{$scoreFullTitle},0)";
            $sumSQL[] = "if (json_extract(deskripsi,'$.dekskripsi') LIKE '%".$escQuery."%',{$scoreFullSummary},0)";
            $docSQL[] = "if (json_extract(deskripsi,'$.highlight') LIKE '%".$escQuery."%',{$scoreFullDocument},0)";
        }

        /** Matching Keywords **/
        foreach($keywords as $key){
            $titleSQL[] = "if (nama_produk LIKE  '%".$key."%',{$scoreTitleKeyword},0)";
            $sumSQL[] = "if (json_extract(deskripsi,'$.dekskripsi') LIKE '%".$key."%',{$scoreSummaryKeyword},0)";
            $docSQL[] = "if (json_extract(deskripsi,'$.highlight') LIKE '%".$key."%',{$scoreDocumentKeyword},0)";
            $urlSQL[] = "if (json_extract(deskripsi,'$.fasilitas') LIKE '%".$key."%',{$scoreUrlKeyword},0)";
            /*$categorySQL[] = "if ((
            SELECT count(category.tag_id)
            FROM category
            JOIN post_category ON post_category.tag_id = category.tag_id
            WHERE post_category.post_id = p.post_id
            AND category.name = ".$key."
                        ) > 0,{$scoreCategoryKeyword},0)";*/
        }

        // Just incase it's empty, add 0
        if (empty($titleSQL)){
            $titleSQL[] = 0;
        }
        if (empty($sumSQL)){
            $sumSQL[] = 0;
        }
        if (empty($docSQL)){
            $docSQL[] = 0;
        }
        if (empty($urlSQL)){
            $urlSQL[] = 0;
        }
        if (empty($tagSQL)){
            $tagSQL[] = 0;
        }

        $sql = "SELECT p.id_produk,p.nama_produk,p.tanggal_mulai,p.tanggal_akhir,
                p.jml_anggota,p.harga,
                (
                    (/* Title score */".implode(' + ', $titleSQL).")+
                    (/* Summary */".implode( '+ ', $sumSQL)." )+
                    (/* document */".implode(' + ', $docSQL)." )+
                    
                    (/* url */".implode(' + ', $urlSQL)." )
                ) as relevance
                FROM produk p
                HAVING relevance > 0
                ORDER BY relevance DESC
                LIMIT 25";
        $results = $this->db->query($sql)->result();
        var_dump($results);
        if (!$results){
            return false;
        }
        return $results;
    }

}

/* End of file M_search.php */
