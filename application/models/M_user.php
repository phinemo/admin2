<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public function getUser($where = NULL, $select = NULL, $table){
        if ($where != NULL){
            $this->db->where($where);
        }
        if($select != NULL){
            $this->db->select($select);
        }
        return $this->db->get($table)->result();
    }
    public function getAllProfile(){
        $this->db->select('user.id_user,user.email, user.full_name, operator.nama_operator, operator.contact, media.resized');
        $this->db->from('user');
        $this->db->join('operator','user.id_operator = operator.id_operator','left outer');
        $this->db->join('media','media.id_media = user.id_media','left outer');
        return $this->db->get()->result();
    }
    public function insert($table,$data){
        return $this->db->insert($table,$data);
    }
    public function getwhere($table,$where){
        return $this->db->get_where($table,$where);
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
    public function upload_media($title,$picture,$resized){
        $now = date("Y-m-d H:i:s");
		$result = $this->db->query("INSERT INTO media(file_name,uploaded_on,gambar,resized) VALUES ('$title','$now','$picture','$resized')");
        return $result;
        
    }
    public function fetch_media($where){
        $this->db->select('id_media','gambar');
        return $this->db->get_where('media',$where);
    }

}

/* End of file M_user.php */
