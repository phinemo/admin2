<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
    public function auth_email($where){
        $this->db->select(array('user.email','user.pass','user.level','operator.id_operator','operator.nama_operator','operator.contact','media.resized','media.gambar'));
        $this->db->from('user');
        $this->db->join('operator', 'user.id_user = operator.id_user');
        $this->db->join('media', 'media.id_media = operator.id_media', 'inner');
        $this->db->where($where);
        return $this->db->get();
    }
    public function define_level($where){
        $this->db->select(array('operator.id_operator','operator.nama_operator','operator.contact','operator.level','media.resized','media.gambar',));
        $this->db->from('operator');
        $this->db->join('media', 'operator.id_media = media.id_media', 'inner');
        $this->db->where($where);
        return $this->db->get();
    }
}

/* EnM_login ModelName.php */


