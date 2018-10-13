<?php 
class C_auth extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('M_login');
		if($this->session->userdata('status') != "login"){
			redirect(site_url("C_login"));
		}
		if($this->session->userdata('level') == 'free'){
			
		}
		elseif($this->session->userdata('level') == "PRO"){
			
		}
	}

	public function index(){
		$result['profil'] = $this->M_login->getDataProfile($this->session->userdata('id_user'));
		// var_dump($result);
		$this->load->view('header');
		$this->load->view('navbar',$result);
		$this->load->view('v_dashboard');
		$this->load->view('bottombar');
		$this->load->view('footer');
		
		
	}
}