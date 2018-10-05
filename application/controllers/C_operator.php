<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_operator extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_operator');
		$this->load->library('upload');
    }
    // CRUD operation

    public function getdata(){
        $data['operator'] = $this->M_operator->read()->result();
        return $data;
    }

    public function add(){
        $nama = $this->input->post('nama');
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
        $this->load->view('header');
        $this->load->view('v_operator_edit',$data);
        $this->load->view('footer',$data);
    }
   public function update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $biografi = $this->input->post('biografi');
        $contact = $this->socialencode();
        $logo = $this->input->post('logo');
    
        $data = array(
            
            'nama_operator' => $nama,
            'biografi' => $biografi,
            'contact' => $contact,
            'logo' => $logo
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
        redirect('C_operator/index');
    }

    // View
    public function toadd()
    {
        $this->load->view('header');
        $this->load->view('v_operator_tambah');
        $this->load->view('footer');
    }
    public function index()
    {
        $data = $this->getdata();
        $this->load->view('header');
        $this->load->view('v_operator',$data);
        $this->load->view('footer',$data);
    }
    // another Function
    public function socialencode(){
        $data['facebook'] = $this->input->post('facebook');
        $data['twitter'] = $this->input->post('twitter');
        $data['number'] = $this->input->post('number');
        $data['instagram'] = $this->input->post('instagram');
        $encoded = json_encode($data);
        return $encoded;
    }
    public function compressmedia($path){
        $this->load->library('image_lib');
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'http://random.host:8888/magang/codeigniter/admin2/upload/images/user.jpg';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width']         = 50;
        $config['height']       = 50;
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        $this->image_lib->clear();
        if (!$this->image_lib->resize()) {
            echo $this->image_lib->display_error();
        };
    }
    public function upload_image(){
		$config['upload_path'] = 'upload/images/'; 
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    // $config['encrypt_name'] = TRUE; 
        $this->upload->initialize($config);
        // var_dump($_FILES);
        $imglocation = $config['upload_path'].$_FILES['filefoto']['name'];
        // compressed media
        
        // $this->compressmedia(base_url('/upload/images/user.jpg'));

        // end compress
	    if(!empty($_FILES['filefoto']['name']))
	    {
	        if ($this->upload->do_upload('filefoto'))
	            {
	                $pic = $this->upload->data();
                    //Compress Image
                    $conf['image_library']='gd2';
                    $conf['source_image']='upload/images/'.$pic['file_name'];
                    $conf['create_thumb']= TRUE;
                    $conf['maintain_ratio']= TRUE;
                    $conf['quality']= '60%';
                    $conf['width']= 80;
                    $conf['height']= 80;
                    $conf['new_image']= 'upload/images/new_'.$pic['file_name'];
                    $this->load->library('image_lib', $conf);
                    $this->image_lib->resize();
                    // End compress image
                    $picture=$pic['file_name']; 
                    // $title=strip_tags($this->input->post('judul'));
                    $title = explode('.',$picture);
                    $getid = array('file_name'=>$title[0]);
                    $this->M_operator->upload_media($title[0],$picture);
                    $id = $this->M_operator->fetch_media($getid)->result();
                    // echo "<script>alert('Upload Success')</script>";
                    $id_media = (int)$id[0]->id_media;
				}else{
	                // echo "<script>alert('Upload Fail. Picture must be gif|jpg|png|jpeg|bmp')</script>";
	            }
	                 
	        }else{
				// echo "<script>alert('Fail, select your picture first')</script>";
        }
        return $id_media;
				
	}

}

/* End of file operator.php */
