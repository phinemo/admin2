<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class C_dashboard extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
			redirect(site_url("C_login"));
		}
        //Do your magic here
        $this->load->model(array('M_dashboard','M_login'));
    }
    

    public function index()
    {
        $result['profil'] = $this->M_login->getDataProfile($this->session->userdata('id_user'));
        $result['product'] = $this->M_dashboard->getProduct('produk',NULL,'nama_produk')->result();
        // $this->M_dashboard->getProduct();
        $this->load->view('header');
        $this->load->view('navbar',$result);
        $this->load->view('v_dashboard',$result);
        $this->load->view('bottombar');
        $this->load->view('footer');
    }

}

/* End of file C_dashboard.php */