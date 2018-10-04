<?php
class C_upload extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_upload');
		$this->load->library('upload');
	}
	public function upload_image(){
		$config['upload_path'] = './upload/images/'; 
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
	    $config['encrypt_name'] = TRUE; 
        
        $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name']))
	    {
	        if ($this->upload->do_upload('filefoto'))
	            {
	                $pic = $this->upload->data();
	                $picture=$pic['file_name']; //Mengambil file name dari gambar yang diupload
                    // $title=strip_tags($this->input->post('judul'));
                    $title = explode('.',$picture);
                    $this->M_upload->upload_media($title[0],$picture);
                    // $id['media'] = $this->M_operator->fetch_media();
					// echo "<script>alert('Upload Success')</script>";
				}else{
	                // echo "<script>alert('Upload Fail. Picture must be gif|jpg|png|jpeg|bmp')</script>";
	            }
	                 
	        }else{
				// echo "<script>alert('Fail, select your picture first')</script>";
		}
				
	}
	
}