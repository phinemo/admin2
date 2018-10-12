<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class C_dashboard extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        redirect(site_url("C_auth"));
        //Do your magic here
        $this->load->model('M_dashboard');
    }
    

    public function index()
    {
        // $this->M_dashboard->getProduct();
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('v_dashboard');
        $this->load->view('bottombar');
        $this->load->view('footer');
    }

}

/* End of file C_dashboard.php */