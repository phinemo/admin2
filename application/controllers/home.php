<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('siswa');
    }
    
    public function index()
    {
        
    }
    public function getdata(){
        $data['operator'] = $this->siswa->read()->result();
        return $data;
    }
}

/* End of file home.php */
