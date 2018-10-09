<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_showoffer extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_showoffer');
    }
    public function tampil()
    {
           $query =  $this->M_showoffer->getProduct()->result();
        if($query){
                   $result['detail']  = $this->M_showoffer-->getProduct()->result();
                }
        echo json_encode($result);
        
    }
    public function index()
    {
        $data['showoffer'] = $this->M_showoffer->getProduct()->result();
        $dat['json'] = json_encode($data['showoffer']);
        var_dump($dat);
        $this->load->view('header_vue');
        $this->load->view('v_showoffer',$dat);
        $this->load->view('footer_vue'); 
    }

}

/* End of file C_showoffer.php */
