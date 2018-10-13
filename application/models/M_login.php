<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
    public function auth_email($where){
        $this->db->select(array('user.id_user','user.email','user.pass','user.level'));
        $this->db->from('user');
        $this->db->where($where);
        return $this->db->get();
    }
    public function getDataProfile($id_user){
        $this->db->select(array('media.gambar','media.resized','operator.nama_operator','operator.contact'));
        $this->db->from('user');
        $this->db->join('media', 'media.id_media = user.id_media', 'inner');
        $this->db->join('operator', 'operator.id_operator = user.id_operator', 'inner');
        $this->db->where('id_user',$id_user);
        return $this->db->get()->result();
    }
}

/* EnM_login ModelName.php */


