<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_showoffer extends CI_Model {
    
    public function getProduct(){
        $this->db->select(array('produk.id_produk','produk.nama_produk','produk.harga','media.resized','media.gambar'));
        $this->db->from('produk');
        $this->db->join('media', 'produk.id_thumb = media.id_media', 'inner');
        return $this->db->get();
    }
    public function getProductDetail(){
        $this->db->select(array('produk.deskripsi'));
        $this->db->from('produk');
        $this->db->join('media', 'produk.id_thumb = media.id_media', 'inner');
        return $this->db->get();
    }

}

/* End of file M_showoffer.php */
