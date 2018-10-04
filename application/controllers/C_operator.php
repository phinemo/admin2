<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_operator extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_operator');
		$this->load->library('upload');
    }

    public function getdata(){
        $data['operator'] = $this->M_operator->read()->result();
        return $data;
    }
    public function index()
    {
        $data = $this->getdata();
        $this->load->view('header');
        $this->load->view('v_operator',$data);
        $this->load->view('footer',$data);
    }
    public function socialencode(){
        $data['facebook'] = $this->input->post('facebook');
        $data['twitter'] = $this->input->post('twitter');
        $data['number'] = $this->input->post('number');
        $data['instagram'] = $this->input->post('instagram');
        $encoded = json_encode($data);
        return $encoded;
    }
    public function toadd()
    {
        $this->load->view('header');
        $this->load->view('v_operator_tambah');
        $this->load->view('footer');
    }
    public function add(){
        $nama = $this->input->post('nama');
        $biografi = $this->input->post('biografi');
        $contact = $this->socialencode();
        $logo = $this->input->post('filefoto');
        $data_operator = array(
            'nama_operator'=>$nama,
            'biografi'=>$biografi,
            'contact'=>$contact,
            'logo'=>'782fd906409eecd11d5cc626c73a06fd.png');
        $this->upload_image();
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
    public function upload_image(){
		$config['upload_path'] = './upload/images/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        
        $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name']))
	    {
	        if ($this->upload->do_upload('filefoto'))
	            {
	                $pic = $this->upload->data();
	                $picture=$pic['file_name']; //Mengambil file name dari gambar yang diupload
                    // $title=strip_tags($this->input->post('judul'));
                    $title = explode('.',$picture);
                    $this->M_operator->upload_media($title[0],$picture);
                    $id['media'] = $this->M_operator->fetch_media();
					// echo "<script>alert('Upload Success')</script>";
				}else{
	                // echo "<script>alert('Upload Fail. Picture must be gif|jpg|png|jpeg|bmp')</script>";
	            }
	                 
	        }else{
				// echo "<script>alert('Fail, select your picture first')</script>";
		}
				
	}

}

/* End of file operator.php */
