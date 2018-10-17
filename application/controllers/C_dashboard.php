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
        $this->load->model(array('M_dashboard','M_login','M_product'));
    }
    public function getdata($id_operator = NULL){
        if ($this->session->userdata('level') == 'admin' || $this->session->userdata('level') == 'superadmin' ){
            $data['product'] = $this->M_product->read()->result();
        }   
        elseif($this->session->userdata('level') == 'user' && $id_operator !=NULL){
        // var_dump($id_operator);
            $where = array('id_operator'=>$id_operator);
            // var_dump($where);
            $data['product'] = $this->M_product->getwhere('produk',$where)->result();
            // var_dump($data);
        }
        else{
            $data = NULL;
        }
        return $data;
    }

    public function index()
    {
        $result['profil'] = $this->M_login->getDataProfile($this->session->userdata('id_user'));
        $data = $this->getdata($result['profil'][0]->id_operator);
        $this->load->view('header');
        $this->load->view('navbar',$result);
        $this->load->view('v_dashboard',$data);
        $this->load->view('bottombar');
        $this->load->view('footer',$data);
    }

}

/* End of file C_dashboard.php */