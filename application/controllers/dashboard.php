<?php
class dashboard extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('siswa');
    }
    
    public function getdata(){
        $data['data_siswa'] = $this->siswa->read()->result();
        $data['jml_laki'] = $this->siswa->gender('laki-laki');
        $data['jml_per'] = $this->siswa->gender('perempuan');
        $data['jml'] = $this->siswa->jumlahsiswa();

        $data['persen_laki'] = $data['jml_laki']/$data['jml']*100;
        $data['persen_per'] = $data['jml_per']/$data['jml']*100;
        $data['tahun'] = $this->siswa->getdistinctyear()->result();
        $data['count'] = $this->siswa->getcount()->result();
        return $data;
    }
    public function index($section){
        $data = $this->getdata();
        $this->load->view('header');
        $this->load->view($section,$data);
        $this->load->view('footer',$data);
        $this->load->view('modaltambah');
    }
    public function add(){
        $nis = $this->input->post('nis');
        $nama = $this->input->post('nama');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $gender = $this->input->post('gender');
        $alamat = $this->input->post('alamat');
        $data_siswa = array(
            'nis'=>$nis,
            'nama'=>$nama,
            'tanggal_lahir'=>$tanggal_lahir,
            'jenis_kelamin'=>$gender,
            'alamat'=>$alamat);
        $this->siswa->insert('data_siswa',$data_siswa);
        redirect('dashboard/index/wrappersiswa');
    }
    public function getdatawhere($id){
        $where = array('nis' => $id);
        $data['siswa'] = $this->siswa->getwhere('data_siswa',$where)->result();
        $data['action'] = 'update';
        $this->load->view('modal',$data);
    }
    public function update(){
        
    }
    public function delete($id){
        $where = array('nis'=> $id);
        $this->siswa->delete('data_siswa',$where);
        redirect('dashboard/index/wrappersiswa');
    }
}