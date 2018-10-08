<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_article extends CI_Controller {

    public function index()
    {
        $this->load->view('header_vue');
        $this->load->view('v_article');
        $this->load->view('footer_vue');
    }

}

/* End of file C_article.php */
