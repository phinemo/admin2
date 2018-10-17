<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_login','M_user'));
        $this->load->library('upload');
        
    }
    
    public function getDetailUser ($id){
        $where = array('id_user'=>$id);
        return $this->M_user->getUser($where,'*','user');
    }
    public function getAllUser(){
        
        return $this->M_user->getUser(NULL,NULL,'user');
    }

    public function password(){
        $result['profil'] = $this->M_login->getDataProfile($this->session->userdata('id_user'));
        $result['user'] = $result['profil'];
        $data['gambar'] = [];
        $this->load->view('header');
        $this->load->view('navbar',$result);
        $this->load->view('v_user_password');
        $this->load->view('bottombar');
        $this->load->view('footer',$data);
    }
    public function passwordchange(){
        $oldpass = $this->input->post('passworduser');
        $where = array('id_user'=>$this->session->userdata('id_user'));
        $oldpass2 = $this->M_user->getUser($where,'pass','user');
        $newpass = $this->input->post('passwordusernew');
        $newpass2 = $this->input->post('passwordusernew2');
        
        // var_dump($oldpass2);
        if($newpass == $newpass2 && $oldpass == $oldpass2[0]->pass){
            $where  = array('id_user' => $this->session->userdata('id_user'));
            $data = array('pass'=> $newpass);
            $this->M_user->update('user',$data,$where);
            echo '<script>alert("Password Successfully Changed")</script>';
            $this->password();
        }
        elseif($newpass != $newpass2 && $oldpass == $oldpass2[0]->pass){
            echo '<script>alert("New password and confirmation missmatch")</script>';
            $this->password();
        }
        elseif($newpass == $newpass2 && $oldpass != $oldpass2[0]->pass){
            echo '<script>alert("Old password false")</script>';
            $this->password();
        }
        else{
            echo '<script>alert("Please insert your password correctly")</script>';
            $this->password();
        }
    }
    public function toadd()
    {
		$result['profil'] = $this->M_login->getDataProfile($this->session->userdata('id_user'));

        $data['gambar'] = [];
        $this->load->view('header');
        $this->load->view('navbar',$result);
        $this->load->view('v_user_tambah');
        $this->load->view('bottombar');
        $this->load->view('footer',$data);
    }
    public function add(){
        $nama = $this->input->post('namauser');
        $email = $this->input->post('emailuser');
        $pass = $this->input->post('passworduser');
        $level = $this->input->post('leveluser');
        $pic = $this->upload_image();
        $operator = $this->input->post('operator');
        $nama_operator = array('nama_operator'=>$operator);
        $result = $this->M_user->getwhere('operator',$nama_operator)->result();
        $data_user = array(
            'full_name'=>$nama,
            'email'=>$email,
            'pass'=>$pass,
            'level'=>$level,
            'id_operator'=>$result[0]->id_operator,
            'id_media'=>$pic);
        $this->M_user->insert('user',$data_user);
        redirect('C_user/');
    }

    public function getdatawhere($id){
        $where = array('id_user' => $id);
        $data['user'] = $this->M_user->getwhere('user',$where)->result();
        // var_dump($data['user']);
        foreach ($data['user'] as $row){
            $where_media = array('id_media'=>$row->id_media);
            $data['media'] = $this->M_user->getwhere('media',$where_media)->result();
            // $data['default'] = null;
        }
        // var_dump($data);
		$result['profil'] = $this->M_login->getDataProfile($this->session->userdata('id_user'));
        $this->load->view('header');
        $this->load->view('navbar',$result);
        $this->load->view('v_user_edit',$data);
        $data['gambar'] = null;
        $this->load->view('bottombar');
        $this->load->view('footer',$data);
    }
    public function update(){
        $id  = $this->input->post('id');
        $nama = $this->input->post('namauser');
        $email = $this->input->post('emailuser');
        $pass = $this->input->post('passworduser');
        $level = $this->input->post('leveluser');
        $upload = $this->upload_image();
        $operator = $this->input->post('operator');
        $nama_operator = array('nama_operator'=>$operator);
        // var_dump($nama_operator);
        $result = $this->M_user->getwhere('operator',$nama_operator)->result();
        if ($upload == NULL){
            $id_media = $this->input->post('id_foto_old');
        }
        else{
            $id_media = $upload;
        }
        // var_dump(count($result) == 0);
        if ($result == NULL){
            $id_operator = NULL;
        }
        else{
            $result = $this->M_user->getwhere('operator',$nama_operator)->result();
            $id_operator = $result[0]->id_operator;
        }
        // var_dump($id_operator[0]->id_operator);
        $data = array(
            'full_name'=>$nama,
            'email'=>$email,
            'pass'=>$pass,
            'level'=>$level,
            'id_operator'=>$id_operator,
            'id_media' => $id_media
        );
        $where = array(
            'id_user' => $id
        );
        $this->M_user->update('user',$data,$where);
        redirect('C_user/index');
    }
    public function delete($id){
        $where = array('id_user'=> $id);
        $this->M_user->delete('user',$where);
        redirect('C_user/index');
    }
    public function index()
    {
        $result['profil'] = $this->M_login->getDataProfile($this->session->userdata('id_user'));
        $result['users'] = $this->M_user->getAllProfile();//show all user
        $this->load->view('header');
        $this->load->view('navbar', $result);
        $this->load->view('v_user',$result);
        $this->load->view('bottombar');
        $this->load->view('footer');        
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
                    $this->M_user->upload_media($pic_name,$picture,$resized);
                    // Retrive id_media from media
                    $getid = array('file_name'=>$pic_name);//ambigues, when pic. names are same.
                    $id = $this->M_user->fetch_media($getid)->result();
                    $id_media = (int)$id[0]->id_media;
				}else{

                }
	                 
	        }else{
                $getid = array('file_name'=>'default_profile');//ambigues, when pic. names are same.
                $id = $this->M_user->fetch_media($getid)->result();
                    // var_dump($id);
                $id_media = null;
        }
        return $id_media; //return to caller
				
	}

}

/* End of file C_user.php */
