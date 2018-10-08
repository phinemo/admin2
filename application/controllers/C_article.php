<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_article extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_article');
    }
    public function tampil()
    {
           $query =  $this->M_article->getProduct()->result();
        if($query){
                   $result['oper']  = $this->M_article->getProduct()->result();
                }
        echo json_encode($result);
        
    }
    public function index()
    {
        $data['offer'] = $this->M_article->getProduct()->result();
        $dat['json'] = json_encode($data['offer']);
        var_dump($dat);
        $this->load->view('header_vue');
        $this->load->view('v_article',$dat);
        $this->load->view('footer_vue');
    }

}

/* End of file C_article.php */
