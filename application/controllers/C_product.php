<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_product extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_product');
        $this->load->library('upload');
    }

    public function getdata(){
        $data['product'] = $this->M_product->read()->result();
        return $data;
    }
    public function index()
    {
        $data = $this->getdata();
        $this->load->view('header');
        $this->load->view('v_product',$data);
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
        $this->load->view('v_product_tambah');
        $this->load->view('footer');
    }
    public function splitDate($i){
        $date = $this->input->post('range');
        $splitString = explode('-', $date);
        return $splitString[$i];
    }
    public function add(){
        $nama = $this->input->post('nama');
        $range = $this->input->post('range');
        $pic = $this->input->post('pic');
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

}

/* End of file product.php */
