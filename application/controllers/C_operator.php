<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_operator extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('status') != "login"){
			redirect(site_url("C_login"));
		}
        // redirect(site_url("C_auth"));
        $this->load->helper(array('url','form'));
        $this->load->model(array('M_operator','M_login'));
        $this->load->library(array('form_validation','upload'));
    }
    // CRUD operation

    public function getdata($id_operator = NULL){
        if ($this->session->userdata('level') == 'admin' || $this->session->userdata('level') == 'superadmin' ){
            $join = array('layanan','operator.id_layanan = layanan.id_layanan','left outer');
            $data['operator'] = $this->M_operator->readData('*','operator',$join,NULL);
            // $data['layanan'] = $this->M_operator->readData();
        
        }
        elseif($this->session->userdata('level') == 'user' && $id_operator !=NULL){
        // var_dump($id_operator);
            $where = array('id_operator'=>$id_operator);
            // var_dump($where);
            $join = array('layanan','operator.id_layanan = layanan.id_layanan','left outer');
            $data['operator'] = $this->M_operator->readData('*','operator',$join,$where);
            // $data['operator'] = $this->M_operator->getwhere('operator',$where)->result();
            // var_dump($data);
        }
        else{
            $data = NULL;
        }
        return $data;
    }
    public function addUser(){
        // $this->validate();
        $id = $this->input->post('id');
        $emailphinemo = $this->input->post('emailphinemo');
        $passphinemo = $this->input->post('passphinemo');
        $package = $this->input->post('package');
        $data_operator = array(
            'id_user'=>$id,
            'email'=>$emailphinemo,
            'pass'=>$passphinemo,
            'level'=>$package);
        $this->M_operator->insert('user',$data_operator);
    }
    public function editUser(){
        // $this-> validate();
        $id = $this->input->post('id');
        $package = $this->input->post('jenis_layanan');
        $wherelayanan = array('jenis_layanan'=>$package);
        $layanan = $this->M_operator->getwhere('layanan',$wherelayanan,'id_layanan')->result();
        // var_dump($layanan);
        $where = array('id_operator'=>$id);
        // echo "<script>console.log('".$where."')</script>";
        $data_layanan = array('id_layanan'=>$layanan[0]->id_layanan);
        $res = $this->M_operator->update('operator',$data_layanan,$where);
        echo json_encode(array("status" => TRUE,"layanan"=>$package));
    }
    public function add(){
        $nama = $this->input->post('namaoperator');
        $biografi = $this->input->post('biografi');
        $contact = $this->socialencode();
        $pic = $this->upload_image();
        $data_operator = array(
            'nama_operator'=>$nama,
            'biografi'=>$biografi,
            'contact'=>$contact,
            'id_media'=>$pic);
        $this->M_operator->insert('operator',$data_operator);
        redirect('C_operator/');
    }
    public function getdatawhere($id){
        $where = array('id_operator' => $id);
        $data['operator'] = $this->M_operator->getwhere('operator',$where)->result();
        // var_dump($data['operator']);
        foreach ($data['operator'] as $row){
            $where_media = array('id_media'=>$row->id_media);
            $data['gambar'] = $this->M_operator->getwhere('media',$where_media)->result();
            // $data['default'] = null;
        }
        // var_dump($data['gambar']);
		$result['profil'] = $this->M_login->getDataProfile($this->session->userdata('id_user'));
        $this->load->view('header');
        $this->load->view('navbar',$result);
        $this->load->view('v_operator_edit',$data);
        $data['gambar'] = null;
        $this->load->view('bottombar');
        $this->load->view('footer',$data);
    }
    public function getuser($id){
        $where = array('id_operator' => $id);
        $getdata = $this->M_operator->getwhere('operator',$where,array('id_layanan','id_operator'))->result();
        if($getdata[0]->id_layanan == NULL){
            $getIdLayanan = array('id_layanan'=>0); //automatically set user have free package
        }
        else{
            $getIdLayanan = array('id_layanan'=>$getdata[0]->id_layanan);
        }
        $result = $this->M_operator->getwhere('layanan',$getIdLayanan)->result();
        // var_dump($result);
        $result[0]->id_operator  = $getdata[0]->id_operator;
        
        echo json_encode($result[0]);
        
    }
   public function update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('namaoperator');
        $biografi = $this->input->post('biografi');
        $contact = $this->socialencode();
        $upload = $this->upload_image();
        if ($upload == NULL){
            $id_media = $this->input->post('id_foto_old');
        }
        else{
            $id_media = $upload;
        }

        // varfdsakfd;ladfkl_dump($id_media);
        $data = array(
            'nama_operator' => $nama,
            'biografi' => $biografi,
            'contact' => $contact,
            'id_media' => $id_media
        );
        $where = array(
            'id_operator' => $id
        );
        $this->M_operator->update('operator',$data,$where);
        redirect('C_operator/index');
    }
    public function delete($id){
        $where = array('id_operator'=> $id);
        $this->M_operator->delete('operator',$where);
        echo json_encode(array('status' => TRUE));
        // redirect('C_operator/index');
        
    }

    // View
    public function toadd()
    {
		$result['profil'] = $this->M_login->getDataProfile($this->session->userdata('id_user'));

        $data['gambar'] = [];
        $this->load->view('header');
        $this->load->view('navbar',$result);
        $this->load->view('v_operator_tambah');
        $this->load->view('bottombar');
        $this->load->view('footer',$data);
    }
    public function index()
    {   
        $result['profil'] = $this->M_login->getDataProfile($this->session->userdata('id_user'));
        // var_dump($result);
        $data = $this->getdata($result['profil'][0]->id_operator);
        $this->load->view('header');
        $this->load->view('navbar',$result);
        $this->load->view('v_operator',$data);
        $this->load->view('bottombar');
        $this->load->view('footer',$data);
    }
    
    // another Function
    public function socialencode(){
        $data['whatsapp'] = $this->input->post('whatsapp');
        $data['address'] = $this->input->post('alamatoperator');
        $data['email']  = $this->input->post('emailoperator');
        $data['facebook'] = $this->input->post('facebook');
        $data['twitter'] = $this->input->post('twitter');
        $data['number'] = $this->input->post('numberoperator');
        $data['instagram'] = $this->input->post('instagram');
        $encoded = json_encode($data);
        return $encoded;
    }
    public function compressmedia($pic){
        $conf['image_library']='gd2';
        $conf['source_image']='upload/images/'.$pic['file_name'];
        $conf['create_thumb']= TRUE;
        $conf['maintain_ratio']= TRUE;
        $conf['quality']= '60%';
        $conf['width']= 80;
        $conf['height']= 80;
        $conf['new_image']= 'upload/images/'.$pic['file_name'];
        $this->load->library('image_lib', $conf);
        $this->image_lib->resize();
    }
    public function upload_image(){
		$config['upload_path'] = 'upload/images/'; 
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    // $config['encrypt_name'] = TRUE; //if want to encrypt picture name
        $this->upload->initialize($config);
        // var_dump($_FILES);
        $imglocation = $config['upload_path'].$_FILES['filefoto']['name'];
	    if(!empty($_FILES['filefoto']['name']))
	    {
	        if ($this->upload->do_upload('filefoto'))
	            {
	                $pic = $this->upload->data();
                    //Compress Image
                    $this->compressmedia($pic);
                    // End compress image
                    // var_dump($pic);
                    // Define name of file
                    $picture = $pic['file_name'];
                    $pic_name = $pic['raw_name'];
                    $resized = $pic['raw_name'].'_thumb'.$pic['file_ext'];
                    // upload to database
                    $this->M_operator->upload_media($pic_name,$picture,$resized);
                    // Retrive id_media from media
                    $getid = array('file_name'=>$pic_name);//ambigues, when pic. names are same.
                    $id = $this->M_operator->fetch_media($getid)->result();
                    $id_media = (int)$id[0]->id_media;
				}else{

                }
	                 
	        }else{
                $getid = array('file_name'=>'default_profile');//ambigues, when pic. names are same.
                $id = $this->M_operator->fetch_media($getid)->result();
                    // var_dump($id);
                $id_media = null;
        }
        return $id_media; //return to caller
				
	}

}

/* End of file operator.php */
