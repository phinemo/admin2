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
    public function getdata($id_operator = NULL){
        if ($this->session->userdata('level') == 'admin' || $this->session->userdata('level') == 'superadmin' ){
            $data['product'] = $this->M_product->read()->result();
        }
        elseif($this->session->userdata('level') == 'user' && $id_operator !=NULL){
        // var_dump($id_operator);
            $where = array('id_operator'=>$id_operator);
            // var_dump($where);
            $data['product'] = $this->M_product->getwhere('produk',$where);
            // var_dump($data);
        }
        else{
            $data = NULL;
        }
        return $data;
    }
    public function toadd()
    { 

		$result['profil'] = $this->M_login->getDataProfile($this->session->userdata('id_user'));
        $where = array('id_operator'=>$result['profil'][0]->id_operator);
        $result['operator'] = $this->M_product->getwhere('operator',$where,'nama_operator');
        // var_dump($data);
        $this->load->view('header');
        $this->load->view('navbar',$result);
        $this->load->view('v_product_tambah',$result);
        $this->load->view('bottombar');
        $this->load->view('footer');
    }
    
    public function add(){
        $namaoperator = $this->input->post('touroperator');
        $jenisproduct = $this->input->post('jenisproduct');
        $kotaproduct = $this->input->post('kotaproduct');
        // var_dump($namaoperator);
        // var_dump($kotaproduct);
        $id_operator = $this->M_product->getwhere('operator',array('nama_operator'=>$namaoperator),'id_operator');
        $id_kota = $this->M_product->getwhere('kota',array('nama_kota'=>$kotaproduct),'id_kota');
        $id_jenis = $this->M_product->getwhere('jenis',array('jenis_tour'=>$jenisproduct),'id_jenis');
        // var_dump($id_kota);
        $id_product = $this->input->post('touroperator');
        $namaproduct = $this->input->post('namaproduct');
        // $kotaproduct = $this->input->post('kotaproduct'); //not yet
        // $jenisproduct = $this->input->post('jenisproduct');//not yet
        $range = $this->input->post('range');
        $id_media = $this->input->post('idmedia');
        if(!empty($id_media)){
            $id_media_array = explode(',',$id_media);
            $id_thumb = $id_media_array[0];
        }else{
            $id_media_array = array();
            $id_thumb = null;
        }
        $jml_anggota = $this->input->post('jml_anggota');
        $harga = $this->input->post('harga');
        $deskripsi = $this->desc_encode();
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
            'id_media'=>json_encode($id_media_array,JSON_NUMERIC_CHECK),
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
        // var_dump($where);

        //set id_produk to session temporary
        $this->session->set_userdata($where);
        //intialize
        $data['product'] = $this->M_product->getwhere('produk',$where);
        // $data['media'] = $this->M_product->getid_media($where)->result();
        $data['kota'] = $this->M_product->getwhere('kota',array('id_kota'=>$data['product'][0]->id_kota));
        $data['jenis'] = $this->M_product->getwhere('jenis',array('id_jenis'=>$data['product'][0]->id_jenis));
        $data['operator'] = $this->M_product->getwhere('operator',array('id_operator'=>$data['product'][0]->id_operator));
        $result = json_decode($data['product'][0]->id_media);
        //decode all id_media from produk
        // var_dump($data);
        if(!empty($result)){//selection id_media
        foreach($result as $id_media){
                $getmedia = $this->M_product->getwhere('media',array('id_media'=>$id_media));
                if(!empty($getmedia)){//if id_media exist, then will be print out
                // var_dump($getmedia);
                $data['media'][] = base_url().'upload/images/'.$getmedia[0]->gambar;
                $data['meta'][] = array('caption'=>$getmedia[0]->gambar,
                'key'=>$getmedia[0]->id_media,
                'url'=>site_url().'/C_upload/delete_image/update/'.$getmedia[0]->id_media);
                // $encoded[] = json_encode($data[]->file_name);
                }
                else{
                    //if id_media not exist in media, then update table product, and remove id_media
                }
                
            }
            
            // var_dump($result);

        }
        // var_dump(json_encode($data['media']));
        // var_dump(json_encode($data['meta']));
        // var_dump($encoded);
        if(!empty($data['media']) || !empty($data['meta'])){
            $data['med'] = json_encode($data['media'], JSON_UNESCAPED_SLASHES);
            $data['met'] = json_encode($data['meta'], JSON_UNESCAPED_SLASHES);
        }
        
        // foreach ($result as $row){//get json data and decode data to array (id_media)
        //     // var_dump($data['media']);
        //     $getid = $row;
        //     $where_media = array('id_media'=>$getid);//define where
        //     $data['gambar'][] = $this->M_product->getwhere('media',$where_media,array('file_name','uploaded_on','resized','id_media'))->result(); 
        //     //get media data from DB and saved to array
        // }
        // var_dump($data['gambar']);

        // var_dump($data);
		$result['profil'] = $this->M_login->getDataProfile($this->session->userdata('id_user'));
        $this->load->view('header');
        $this->load->view('navbar',$result);
        $this->load->view('v_product_edit',$data);
        $this->load->view('bottombar');
        // var_dump($data);
        $this->load->view('footer',$data);
    }
    public function update(){
        //unset id_produk from session
        $this->session->unset_userdata('id_produk');

        $namaoperator = $this->input->post('touroperator');
        $jenisproduct = $this->input->post('jenisproduct');
        $kotaproduct = $this->input->post('kotaproduct');
        // var_dump($namaoperator);
        // var_dump($kotaproduct);
        if(!empty($namaoperator)){
        $operator = $this->M_product->getwhere('operator',array('nama_operator'=>$namaoperator),'id_operator');
        $id_operator = $operator[0]->id_operator;
        }
        else{
            $id_operator = NULL;
        }

        $id_kota = $this->M_product->getwhere('kota',array('nama_kota'=>$kotaproduct),'id_kota');
        $id_jenis = $this->M_product->getwhere('jenis',array('jenis_tour'=>$jenisproduct),'id_jenis');
	   	$id = $this->input->post('id_produk');
        $nama = $this->input->post('namaproduct');
        $kotaproduct = $this->input->post('kotaproduct'); //not yet
        $jenisproduct = $this->input->post('jenisproduct');//not yet
		$start = date("Y/m/d",strtotime($this->splitDate(0)));
        $end = date("Y/m/d",strtotime($this->splitDate(1)));
		$jml_anggota = $this->input->post('jml_anggota');
        $harga = $this->input->post('harga');
        $deskripsi = $this->desc_encode();
        // $id_operator = $this->input->post('operator');
        $data = array(
            'nama_produk'=>$nama,
            'tanggal_mulai'=>$start,
			'tanggal_akhir'=>$end,
			'jml_anggota'=>$jml_anggota,
			'harga'=>str_replace('.','',$harga),
            'deskripsi' =>$deskripsi,
            'id_operator'=>$id_operator,
            'id_kota'=>$id_kota[0]->id_kota,
            'id_jenis'=>$id_jenis[0]->id_jenis,
        );
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
        // redirect('C_product/index');
        echo json_encode(array('status' => TRUE));

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
        // var_dump($result);
        $data = $this->getdata($result['profil'][0]->id_operator);
        // var_dump($data);
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

}

/* End of file product.php */
