<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C_tes extends CI_Controller {

public function __construct()
{
    parent::__construct();
    //Do your magic here
    $this->load->model('M_tes');
}
public function index(){
    var_dump($this->M_tes->getUser()->result());
}
    
    
}

/* End of file tes.php */

 ?>