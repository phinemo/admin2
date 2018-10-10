<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        // $this->$this->load->helper('');
        
    }
    public function index()
    {
        $this->load->view('header');
        $this->load->view('v_login');
        $this->load->view('footer');
    }

}

/* End of file C_login.php */
