<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_product extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_product');
        $this->load->library('upload');
    }

    //CRUD function
    public function getdata(){
        $data['product'] = $this->M_product->read()->result();
        return $data;
    }
    public function toadd()
    {
        $this->load->view('header');
        $this->load->view('v_product_tambah');
        $this->load->view('footer');
    }
    
    public function add(){
        $nama = $this->input->post('nama');
        $range = $this->input->post('range');
        $pic = $this->upload_image();
        $jml_anggota = $this->input->post('jml_anggota');
        $harga = $this->input->post('harga');
        $deskripsi = $this->input->post('deskripsi');
        // $logo = $this->input->post('logo');
        // $splitString = explode('-', $range);
        $start = date("Y/m/d",strtotime($this->splitDate(0)));
        $end = date("Y/m/d",strtotime($this->splitDate(1)));
        $data_product = array(
            'nama_produk'=>$nama,
            'tanggal_mulai'=>$start,
			'tanggal_akhir'=>$end,
			'jml_anggota'=>$jml_anggota,
			'harga'=>$harga,
			'deskripsi' =>$deskripsi,
			'foto'=>$pic);
        $this->M_product->insert('produk',$data_product);
        redirect('C_product/');
    }
    public function getdatawhere($id){
        $where = array('id_produk' => $id);
        $data['product'] = $this->M_product->getwhere('produk',$where)->result();
        $this->load->view('header');
        $this->load->view('v_product_edit',$data);
        $this->load->view('footer',$data);
    }
   public function update(){
	   	$id = $this->input->post('id_produk');
		$nama = $this->input->post('nama');
		$start = date("Y/m/d",strtotime($this->splitDate(0)));
        $end = date("Y/m/d",strtotime($this->splitDate(1)));
		$pic = $this->input->post('pic'); 
		$jml_anggota = $this->input->post('jml_anggota');
		$harga = $this->input->post('harga');
		$deskripsi = $this->input->post('deskripsi');
    
        $data = array(
            'nama_produk'=>$nama,
            'tanggal_mulai'=>$start,
			'tanggal_akhir'=>$end,
			'jml_anggota'=>$jml_anggota,
			'harga'=>$harga,
			'deskripsi' =>$deskripsi,
			'foto'=>$pic);
    
        $where = array(
            'id_produk' => $id
        );
    
        $this->M_product->update('produk',$data,$where);
        redirect('C_product/');
    }
    public function delete($id){
        $where = array('id_produk'=> $id);
        $this->M_product->delete('produk',$where);
        redirect('C_product/index');
    }
    //View
    public function index()
    {
        $data = $this->getdata();
        $this->load->view('header');
        $this->load->view('v_product',$data);
        $this->load->view('footer',$data);
    }
    //another function
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
    public function splitDate($i){
        $date = $this->input->post('range');
        $splitString = explode('-', $date);
        return $splitString[$i];
    }
    public function upload_image(){
		$config['upload_path'] = 'upload/images/'; 
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    // $config['encrypt_name'] = TRUE; //if want to encrypt picture name
        $this->upload->initialize($config);
        // var_dump($_FILES);
        // $imglocation = $config['upload_path'].$_FILES['filefoto']['name'];
        foreach ($_FILES['filefoto']['tmp_name'] as $key => $tmp_name){
            if(!empty($_FILES['filefoto']['name'][$key]))
	        {
                $_FILES['fileft']['name'] = $_FILES['filefoto']['name'][$key];
                $_FILES['fileft']['type'] = $_FILES['filefoto']['type'][$key];
                $_FILES['fileft']['tmp_name'] = $_FILES['filefoto']['tmp_name'][$key];
                $_FILES['fileft']['error'] = $_FILES['filefoto']['error'][$key];
                $_FILES['fileft']['size'] = $_FILES['filefoto']['size'][$key];

	            if ($this->upload->do_upload('fileft'))
	                {
	                $pic = $this->upload->data();
                    //Compress Image
                    var_dump($pic);
                    // $this->compressmedia($pic);
                    // End compress image
                    // var_dump($pic);
                    // Define name of file

                    $conf['image_library']='gd2';
                    $conf['source_image']='upload/images/'.$pic['file_name'];
                    $conf['create_thumb']= TRUE;
                    $conf['maintain_ratio']= TRUE;
                    $conf['quality']= '60%';
                    $conf['width']= 80;
                    $conf['height']= 80;
                    $conf['new_image']= 'upload/images/'.$pic['file_name'];
                    $this->load->library('image_lib', $conf);
                    $this->image_lib->initialize($conf);
                    $this->image_lib->resize();
                    $picture = $pic['file_name'];
                    $pic_name = $pic['raw_name'];
                    $resized = $pic['raw_name'].'_thumb'.$pic['file_ext'];
                    // upload to database
                    $this->M_product->upload_media($pic_name,$picture,$resized);
                    // Retrive id_media from media
                    $getid = array('file_name'=>$pic_name);//ambigues, when pic. names are same.
                    $id = $this->M_product->fetch_media($getid)->result();
                    $id_media = (int)$id[0]->id_media;
                    }
                else{
                    
                    }
	                 
	        }else{
                    }
        }
        
        return $id_media; //return to caller
				
	}

}

/* End of file product.php */
