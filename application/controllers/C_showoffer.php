<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_showoffer extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_showoffer');
    }
    public function showDetail()
    {
        $query =  $this->M_showoffer->getProduct();
        if($query){
            $result['title']  = $this->M_showoffer->getProduct()->result();
        }
        echo json_encode($result);
    }
    public function showDetailProduct()
    {
        $query =  $this->M_showoffer->getProductDetail();
        if($query){
            $result['detail']  = $this->M_showoffer->getProductDetail()->result();
        }
        foreach ($result['detail'] as $row){
            echo $row->deskripsi;
        }
        
    }
    public function index()
    {
        $this->load->view('header_vue');
        $this->load->view('v_showoffer');
        $this->load->view('footer_vue'); 
    }

}

/* End of file C_showoffer.php */
