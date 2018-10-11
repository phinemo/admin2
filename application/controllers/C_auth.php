<?php 

class C_auth extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url("C_login"));
		}
		if($this->session->userdata('level') == 'BASIC'){
			
		}
		elseif($this->session->userdata('level') == "PRO"){
			
		}
	}

	function index(){
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('v_dashboard');
		$this->load->view('bottombar');
		$this->load->view('footer');
		
		
	}
}