<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_signup extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
    public function index()
    {
        $this->load->view('header');
        $this->load->view('v_signup');
        $this->load->view('footer');
    }

}


/* End of file C_signup.php */
