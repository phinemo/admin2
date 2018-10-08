<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_operator extends CI_Model {

    //get where value
    public function getwhere($table,$where){
        return $this->db->get_where($table,$where);
    }
    //============CRUD===========
    // read data
    public function read(){
        return $this->db->get('operator');
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
    // ===========MEDIA QUERY=============
    //uploade foto
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

/* End of file operator.php */
