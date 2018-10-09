<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_showoffer extends CI_Model {
    
    public function getProduct(){
        $this->db->where("produk",$id=73);
        $this->db->select("*");
        return $this->db->get('produk');
    }

}

/* End of file M_showoffer.php */
