<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_showoffer extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_showoffer');
    }
    public function showDetail($key)
    {
        $where = array('id_produk'=>$key);
        $result['title']  = $this->M_showoffer->getProduct($where)->result();
        echo json_encode($result);
    }
    public function showDetailProduct($key)
    {   
        $where = array('id_produk'=>$key);
        $result['detail']  = $this->M_showoffer->getProductDetail($where)->result();
        foreach ($result['detail'] as $row){
            echo $row->deskripsi;
        }
        
    }
    
    public function index($key)
    {
        $where = array('produk'=>$key);
        $this->load->view('header_vue');
        $this->load->view('v_showoffer',$where);
        $this->load->view('footer_vue'); 
    }

}

/* End of file C_showoffer.php */
