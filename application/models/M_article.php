<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_article extends CI_Model {

    public function getProduct(){
        $this->db->select(array('nama_produk','harga'));
        return $this->db->get('produk');
    }

}

/* End of file C_model.php */
