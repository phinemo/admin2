<?php 
class C_auth extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('M_login');
		if($this->session->userdata('status') != "login"){
			redirect(site_url("C_login"));
		}
		if($this->session->userdata('level') == 'superadmin'){
			
		}
		elseif($this->session->userdata('level') == "admin"){
			
		}
		elseif($this->session->userdata('level') == 'user'){

		}
	}

	public function index(){
		// $result['profil'] = $this->M_login->getDataProfile($this->session->userdata('id_user'));
		// var_dump($result);
		redirect(site_url('C_dashboard'));
		
		
	}
}