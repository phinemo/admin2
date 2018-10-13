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
    $where = array(
        'email'=>'roy@p.com',
        'pass'=>'123',
        'level'=>'free',
        'id_operator'=>'131',
        ''

    );
    var_dump($this->M_tes->getUser($where)->result());
}
    
    
}

/* End of file tes.php */

 ?>