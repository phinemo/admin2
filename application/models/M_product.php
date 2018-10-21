<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_product extends CI_Model {

    //get where value
    public function getwhere($table,$where,$select = NULL){
        if ($select != NULL){
            $this->db->select($select);
        }
        return $this->db->get_where($table,$where)->result();
    }
    //============CRUD===========
    // read data
    public function read(){
        return $this->db->get('produk');
    }
    //insert data
    public function insert($table,$data){
        return $this->db->insert($table,$data);
    }
    //update data
    public function update($table,$data,$where)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    //delete data
    public function delete($table,$where){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function push_array($data_media,$id_produk){
        $this->db->query("update produk set id_media = json_array_append(id_media,'$',".$data_media.") where id_produk =".$id_produk."");
    }
    public function pop_array($data_media,$id_produk){
        $this->db->query("update produk set id_media = json_remove (id_media, json_unquote( json_search(id_media,'one','".$data_media."'))) where json_search(id_media,'one','".$data_media."') is not null and id_produk = ".$id_produk."");
    }
    //autocomplete
    public function search_city($key){
        $this->db->like('nama_kota', $key, 'both');
        $this->db->order_by('nama_kota', 'asc');
        $this->db->limit(10);
        return $this->db->get('kota')->result();
    }
    public function search_jenis(){
        $this->db->order_by('jenis_tour', 'asc');
        return $this->db->get('jenis')->result();
    }
    public function search_operator($key){
        $this->db->like('nama_operator', $key, 'both');
        $this->db->order_by('nama_operator', 'asc');
        $this->db->limit(10);
        return $this->db->get('operator')->result();
    }
    // ===========MEDIA QUERY=============
    //uploade foto
    public function upload_media($title,$picture,$resized,$ext){
        $now = date("Y-m-d H:i:s");
		$result = $this->db->query("INSERT INTO media(file_name,uploaded_on,gambar,resized,extension) VALUES ('$title','$now','$picture','$resized','$ext')");
        return $result;
        
    }
    public function fetch_media($where){
        $this->db->select('id_media');
        return $this->db->get_where('media',$where);
    }
    public function getid_media($where){
        $this->db->select('id_media');
        return $this->db->get_where('produk',$where);
    }
    public function update_product($select){
        $this->db->query($select);
        return $this->db->get()->result();
    }
}

/* End of file product.php */
