<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_bisnispage extends CI_Model {
    
    
    public function getProduct($key){
        $this->db->select(array('operator.id_operator','operator.nama_operator','operator.biografi','media.gambar'));
        $this->db->from('operator');
        $this->db->join('media', 'operator.id_media = media.id_media', 'inner');
        $this->db->where($key);
        return $this->db->get();
    }
    public function getProductDetail($key){
        return $this->db->get_where('operator',$key);
    }

}

/* End of file M_bisnispage.php */
