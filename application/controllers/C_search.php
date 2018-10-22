<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C_search extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_search');
    }
    
    public function index($result = null)
    {   
        $this->load->view('header');
        if($result != null)
        $this->load->view('v_search',$result);
        else
        $this->load->view('v_search');
        $this->load->view('footer');
           
    }
    public function find(){
        $term = isset($_GET['query'])?$_GET['query']: '';
        $search_results = $this->M_search->search($term);
        var_dump($term);
        $result = array();
        if(!$search_results){
        $result['result'] =  
            '<div class="jumbotron">
                <div class="container">
                    <h1>No Result!</h1>
                    <p>Keyword you used not match anything in this site</p>
                    <p>
                        <a class="btn btn-primary btn-lg">Learn more</a>
                    </p>
                </div>
            </div>';
        }
    $this->index($result);
    }
    
    // Remove unnecessary words from the search term and return them as an array


}

/* End of file C_search.php */
