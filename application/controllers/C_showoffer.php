<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_showoffer extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('');
    }

    public function index()
    {
        $this->load->view('header_vue');
        $this->load->view('v_showoffer');
        $this->load->view('footer_vue'); 
    }

}

/* End of file C_showoffer.php */
