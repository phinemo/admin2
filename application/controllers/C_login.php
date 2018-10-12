<?php 

class C_login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');

	}

	function index(){
        $this->load->view('header');
        $this->load->view('v_login');
        $this->load->view('footer');
        
	}

	function getauth(){
		$email = $this->input->post('email');
		$password = $this->input->post('pass');
		// var_dump(array($email,$password));
		$where = array(
			'user.email' => $email,
            'user.pass' => $password);
		$auth = $this->M_login->auth_email($where);
		// var_dump($auth);
        $cek = $auth->num_rows();
        $data = $auth->result();
        // var_dump($data);
		if($cek > 0){
			$data_session = array(
                'id_operator' => $data[0]->id_operator,
                'nama' => $data[0]->nama_operator,
                'email' => $email,
                'status' => 'login',
                'level' => $data[0]->level,
                'thumb' => $data[0]->resized,
                'image' => $data[0]->gambar,
				);
            $this->session->set_userdata($data_session);
            // var_dump($this->session);
			redirect(site_url("C_auth"));

		}else{
			echo "<script> alert('Username dan password salah !')</script>";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(site_url('C_login'));
	}
}