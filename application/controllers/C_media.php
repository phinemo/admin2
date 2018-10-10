<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_media extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('v_media');
        $this->load->view('bottombar');
        $this->load->view('footer');
    }

}

/* End of file C_media.php */
