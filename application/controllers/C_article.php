<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_article extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_article');
    }
    // fetching product
    public function showOffers()
    {
           $query =  $this->M_article->getProduct()->result();
        if($query){
                   $result['offers']  = $this->M_article->getProduct()->result();
                }
        // for ($i = 0; $i < count($result['offers']);$i++){
            // $getid = $result['offers'][$i]->id_media;
            // $getid = $result['offers'][$i]->id_thumb;
        // $converted = json_decode[$getid];
        // $converted = json_decode($getid);
        // var_dump($converted);
        //choose first array
        // $where = array('id_media'=> $getid);
        // $result['media'] = $this->M_article->getThumbnail($where)->result();
        // for ($j =0; $j < count($converted); $j++){
        //     // echo $converted[$j];
        //     $rest = $result['offers'];
        //     $where = array('id_media'=>$converted[$j]);
        //     $media[] = $this->M_article->getThumbnail($where)->result();
        //     $slice = array_slice($rest,0,count($rest),true)
        // + array('media'=> $media[$j]);
        // var_dump($result['media']);
            
        // }
        // var_dump($media[$i]);
        echo json_encode($result);
    // }
        // var_dump($slice);
        // var_dump($result['offers']);
        
        // showMedia()
        
    }
    //fetching media from product it self
    public function showMedia($key){
        $where = array('id_media'=>$key);
        if(isset($where)){
            $result['id_media'] = $this->M_article->getThumbnail($where)->result();
        }
        echo json_encode($result);
    }
    public function index()
    {
        $data['offer'] = $this->M_article->getProduct()->result();
        $dat['json'] = json_encode($data['offer']);
        // var_dump($dat);
        $this->load->view('header_vue');
        $this->load->view('v_article');
        $this->load->view('footer_vue');
    }

}

/* End of file C_article.php */
