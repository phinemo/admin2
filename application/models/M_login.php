<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function auth_email($where){
        $this->db->select(array('operator.id_operator','operator.nama_operator','operator.contact','operator.level','media.resized','media.gambar',));
        $this->db->from('operator');
        $this->db->join('media', 'operator.id_media = media.id_media', 'inner');
        $this->db->where($where);
        return $this->db->get();
    }
}

/* EnM_login ModelName.php */


