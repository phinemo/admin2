<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_tes extends CI_Model {

    public function getUser($id = NULL){
        $this->db->select(array('user.email','user.pass','user.level','operator.id_operator','operator.id_operator','operator.nama_operator','operator.contact','media.resized','media.gambar'));
        $this->db->from('user');
        $this->db->join('operator', 'user.id_user = operator.id_user','left outer');
        $this->db->join('media', 'media.id_media = operator.id_media', 'left outer');
        if ($id != NULL){
            $this->db->where($id);
        }
        return $this->db->get();
    }

}

/* End of file ModelName.php */

?>