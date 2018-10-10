<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_landing extends CI_Controller {

    public function index()
    {
        $this->load->view('v_landing');
    }

}

/* End of file C_landing.php */
