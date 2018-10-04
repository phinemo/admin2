<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_product extends CI_Model {

    public function pushArray(){
        
    }
    //get where value
    public function getwhere($table,$where){
        return $this->db->get_where($table,$where);
    }
    //============CRUD===========
    // read data
    public function read(){
        return $this->db->get('produk');
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

}

/* End of file product.php */
