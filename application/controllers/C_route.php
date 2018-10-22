<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C_route extends CI_Controller {

    public function index()
    {
        $this->load->view('app');
    }

}

/* End of file C_route.php */
