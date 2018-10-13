<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_product extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('status') != "login"){
			redirect(site_url("C_login"));
		}
        // redirect(site_url("C_auth"));
        $this->load->helper('url');
        $this->load->model(array('M_product','M_login'));
        $this->load->library('upload');
    }

    //CRUD function
    public function getdata(){
        $data['product'] = $this->M_product->read()->result();
        return $data;
    }
    public function toadd()
    {
		$result['profil'] = $this->M_login->getDataProfile($this->session->userdata('id_user'));

        $data['gambar'] = array();
        $this->load->view('header');
        $this->load->view('navbar',$result);
        $this->load->view('v_product_tambah');
        $this->load->view('bottombar');
        $this->load->view('footer');
    }
    
    public function add(){
        $namaoperator = $this->input->post('touroperator');
        $jenisproduct = $this->input->post('jenisproduct');
        $kotaproduct = $this->input->post('kotaproduct');
        // var_dump($jenisproduct);
        // var_dump($kotaproduct);
        $id_operator = $this->M_product->getwhere('operator',array('nama_operator'=>$namaoperator),'id_operator')->result();
        $id_kota = $this->M_product->getwhere('kota',array('nama_kota'=>$kotaproduct),'id_kota')->result();
        $id_jenis = $this->M_product->getwhere('jenis',array('jenis_tour'=>$jenisproduct),'id_jenis')->result();
        // var_dump($id_kota);
        $id_product = $this->input->post('touroperator');
        $namaproduct = $this->input->post('namaproduct');
        // $kotaproduct = $this->input->post('kotaproduct'); //not yet
        // $jenisproduct = $this->input->post('jenisproduct');//not yet
        $range = $this->input->post('range');
        $id_media = $this->upload_image();
        $jml_anggota = $this->input->post('jml_anggota');
        $harga = $this->input->post('harga');
        $deskripsi = $this->desc_encode();
        $id_thumb = $id_media[0];
        // $logo = $this->input->post('logo');
        // $splitString = explode('-', $range);
        $start = date("Y/m/d",strtotime($this->splitDate(0)));
        $end = date("Y/m/d",strtotime($this->splitDate(1)));
        $data_product = array(
            'nama_produk'=>$namaproduct,
            'tanggal_mulai'=>$start,
			'tanggal_akhir'=>$end,
			'jml_anggota'=>$jml_anggota,
			'harga'=>str_replace('.','',$harga),
			'deskripsi' =>$deskripsi,
            'id_media'=>json_encode($id_media),
            'id_thumb'=>$id_thumb,
            'id_operator'=>$id_operator[0]->id_operator,
            'id_kota' => $id_kota[0]->id_kota,
            'id_jenis'=>$id_jenis[0]->id_jenis
        );
        // var_dump($data_product);
        // var_dump(json_encode($id_media));

        $this->M_product->insert('produk',$data_product);
        redirect('C_product/');
        }

    public function getdatawhere($id){
        $where = array('id_produk' => $id);
        $data['product'] = $this->M_product->getwhere('produk',$where)->result();
        $data['media'] = $this->M_product->getid_media($where)->result();
        $data['kota'] = $this->M_product->getwhere('kota',array('id_kota'=>$data['product'][0]->id_kota))->result();
        $data['jenis'] = $this->M_product->getwhere('jenis',array('id_jenis'=>$data['product'][0]->id_jenis))->result();
        $data['operator'] = $this->M_product->getwhere('operator',array('id_operator'=>$data['product'][0]->id_operator))->result();
        // $explode = ltrim($data['media'],'[');
        // $explode = explode(',',$data['media']);
        // var_dump(json_encode($data['media']));
        // $getid = json_decode($data['media']);
        // var_dump($data['kota']);
        $result = json_decode($data['product'][0]->id_media);
        // var_dump($result);
        foreach ($result as $row){//get json data and decode data to array (id_media)
            // var_dump($data['media']);
            $getid = $row;
            $where_media = array('id_media'=>$getid);//define where
            $data['gambar'][] = $this->M_product->getwhere('media',$where_media,array('resized','id_media'))->result(); 
            //get media data from DB and saved to array
        }
        // var_dump($data['gambar']);

        // for($i = 0; $i < count($getid); $i++){
        //     // var_dump($getid[$i]);
        //     $where_media = array('id_media'=>$getid);
        //     // $data['gambar'] = $this->M_product->getwhere('media',$where_media)->result();
        //     // var_dump($data);
        //     // $data['gambar'] = $this->M_operator->getwehere('media',$where)->result();
        // }
        // var_dump($data);
		$result['profil'] = $this->M_login->getDataProfile($this->session->userdata('id_user'));

        $this->load->view('header');
        $this->load->view('navbar',$result);
        $this->load->view('v_product_edit',$data);
        $this->load->view('bottombar');
        // var_dump($data);
        $this->load->view('footer',$data);
    }
    public function getMedia($key){
        
    }
   public function update(){
        $namaoperator = $this->input->post('touroperator');
        $jenisproduct = $this->input->post('jenisproduct');
        $kotaproduct = $this->input->post('kotaproduct');
        // var_dump($jenisproduct);
        // var_dump($kotaproduct);
        $id_operator = $this->M_product->getwhere('operator',array('nama_operator'=>$namaoperator),'id_operator')->result();
        $id_kota = $this->M_product->getwhere('kota',array('nama_kota'=>$kotaproduct),'id_kota')->result();
        $id_jenis = $this->M_product->getwhere('jenis',array('jenis_tour'=>$jenisproduct),'id_jenis')->result();
	   	$id = $this->input->post('id_produk');
        $nama = $this->input->post('namaproduct');
        $kotaproduct = $this->input->post('kotaproduct'); //not yet
        $jenisproduct = $this->input->post('jenisproduct');//not yet
		$start = date("Y/m/d",strtotime($this->splitDate(0)));
        $end = date("Y/m/d",strtotime($this->splitDate(1)));
        $id_med = $this->upload_image();
		$jml_anggota = $this->input->post('jml_anggota');
        $harga = $this->input->post('harga');
        $deskripsi = $this->desc_encode();
        $id_thumb = $this->input->post('id_foto[0]');
        // $id_operator = $this->input->post('operator');
        $data = array(
            'nama_produk'=>$nama,
            'tanggal_mulai'=>$start,
			'tanggal_akhir'=>$end,
			'jml_anggota'=>$jml_anggota,
			'harga'=>str_replace('.','',$harga),
            'deskripsi' =>$deskripsi,
            'id_thumb'=>$id_thumb,
            'id_operator'=>$id_operator[0]->id_operator,
            'id_kota'=>$id_kota[0]->id_kota,
            'id_jenis'=>$id_jenis[0]->id_jenis,
        );

        if ($id_med[0] != NULL) {
            $where = array('id_produk' => $id);
            $get['product'] = $this->M_product->getwhere('produk',$where)->result();
            $result = json_decode($get['product'][0]->id_media);
            if($result[0] !=NULL){
                $id_med = array_merge($result,$id_med); 
            }
            $id_media_encode = json_encode($id_med);
            $data['id_media'] = $id_media_encode;
        } 
        // var_dump($data);
            
        $where = array(
            'id_produk' => $id
        );
        // var_dump($data);
        // var_dump($where);
        $this->M_product->update('produk',$data,$where);
        redirect('C_product/');
    }
    public function delete($id){
        $where = array('id_produk'=> $id);
        $this->M_product->delete('produk',$where);
        redirect('C_product/index');
    }
    public function autokota(){
        
        if (isset($_GET['nama_kota'])){
            $result = $this->M_product->search_city($_GET['nama_kota']);
            // var_dump($result);
            if (count($result) > 0){
                foreach ($result as $row){
                    // var_dump($row);
                    $arr_result[] = $row->nama_kota;
                }
                echo json_encode($arr_result);
            }
        }
    }
    public function autooperator(){
        
        if (isset($_GET['nama_operator'])){
            $result = $this->M_product->search_operator($_GET['nama_operator']);
            // var_dump($result);
            if (count($result) > 0){
                foreach ($result as $row){
                    // var_dump($row);
                    $arr_result[] = $row->nama_operator;
                }
                echo json_encode($arr_result);
            }
        }
    }
    public function autojenis(){
            $result = $this->M_product->search_jenis();
            // var_dump($result);
            if (count($result) > 0){
                foreach ($result as $row){
                    // var_dump($row);
                    $arr_result[] = $row->jenis_tour;
                }
                echo json_encode($arr_result);
            }
    }
    //View
    public function index()
    {
		$result['profil'] = $this->M_login->getDataProfile($this->session->userdata('id_user'));

        $data = $this->getdata();
        $this->load->view('header');
        $this->load->view('navbar',$result);
        $this->load->view('v_product',$data);
        $this->load->view('bottombar');
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
    public function desc_encode(){
        $data['deskripsi'] = $this->input->post('descsingkat');
        $data['highlight'] = $this->input->post('highlight');
        $data['fasilitas'] = $this->input->post('fasilitas');
        $data['kebijakan'] = $this->input->post('kebijakan');
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
        $id_media = array();
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
                    // var_dump($pic);
                    // $this->compressmedia($pic);
                    // End compress image
                    // var_dump($pic);
                    // Define name of file
                    $image_sizes = array(
                        'thumb' => array(150, 100),
                        'medium' => array(300, 300),
                        'large' => array(1100, 618)
                    );
                
                    $this->load->library('image_lib');
                    foreach ($image_sizes as $resize) {
                    
                        $config = array(
                            'source_image' => $pic['full_path'],
                            'new_image' =>  $pic['raw_name']. '-' . $resize[0] . 'x' . $resize[1].$pic['file_ext'],
                            'maintain_ration' => true,
                            'width' => $resize[0],
                            'height' => $resize[1]
                        );
                    
                        $this->image_lib->initialize($config);
                        $this->image_lib->resize();
                        $this->image_lib->clear();
                    }
                    // $conf['image_library']='gd2';
                    // $conf['source_image']='upload/images/'.$pic['file_name'];
                    // $conf['create_thumb']= TRUE;
                    // $conf['maintain_ratio']= TRUE;
                    // $conf['quality']= '80%';
                    // $conf['width']= 150;
                    // $conf['height']= 150;
                    // $conf['new_image']= 'upload/images/'.$pic['file_name'];
                    // $this->load->library('image_lib', $conf);
                    // $this->image_lib->initialize($conf);
                    // $this->image_lib->resize();
                    $picture = $pic['file_name'];
                    $pic_name = $pic['raw_name'];
                    $resized = $pic['raw_name']. '-' . 150 . 'x' . 100 . $pic['file_ext'];
                    // upload to database
                    $this->M_product->upload_media($pic_name,$picture,$resized);
                    
                    // Retrive id_media from media
                    $getid = array('file_name'=>$pic_name);//ambigues, when pic. names are same.
                    $id = $this->M_product->fetch_media($getid)->result();
                    // var_dump($id);
                    $id_media[] = (int)$id[0]->id_media;
                    }
                else{
                        echo "<script>alert('failed to upload photo')</script>";
                    }
	                 
	        }else{
                $id_media[] = null;
                    // var_dump($id_media);
                }
        }
        // if (isset($id_media) && $id_media != null){
        //     $this->id_thumb = $id_media[0];
        // }
        // else{
        //     $this->id_thumb = null;
        // }
        // $med = json_encode($id_media);
        // var_dump(json_encode($med));       
        // var_dump(json_decode($med));    
        
        // var_dump($this->id_thumb);
        // var_dump($id_media);
        // var_dump($id_media);
        // var_dump(json_decode($id_media,true));
        return $id_media; //return to caller
				
    }
}

/* End of file product.php */
