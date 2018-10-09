<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_article extends CI_Model {

    public function getProduct(){
        $this->db->select(array('id_produk','nama_produk','harga','id_media'));
        return $this->db->get('produk');
    }
    public function getThumbnail($key){
        $this->db->where($key);
        $this->db->select(array('gambar','resized'));
        return $this->db->get('media');
    }

}

/* End of file C_model.php */
