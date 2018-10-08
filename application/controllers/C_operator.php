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
        // var_dump($data['operator']);
        foreach ($data['operator'] as $row){
            $where_media = array('id_media'=>$row->id_media);
            $data['gambar'] = $this->M_operator->getwhere('media',$where_media)->result();
            // $data['gambar'] = $this->M_operator->getwehere('media',$where)->result();
        }
        // var_dump($data['gambar']);
        $this->load->view('header');
        $this->load->view('v_operator_edit',$data);
        $this->load->view('footer',$data);
    }
   public function update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $biografi = $this->input->post('biografi');
        $contact = $this->socialencode();
        $id_media = $this->upload_image();
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
        redirect('C_operator/index');
    }

    // View
    public function toadd()
    {
        $data['gambar'] = [];
        $this->load->view('header');
        $this->load->view('v_operator_tambah');
        $this->load->view('footer',$data);
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
        }
        return $id_media; //return to caller
				
	}

}

/* End of file operator.php */
