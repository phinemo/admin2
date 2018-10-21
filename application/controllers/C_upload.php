<?php
class C_upload extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('media_helper');
		$this->load->model(array('M_upload','M_product'));
		$this->load->library('upload');
	}
    
    public function delete_image($method,$id_media){
        if($method == 'insert'){
            $where = array('id_media'=>$id_media);
        // var_dump($where);
        // delete media from server 
        $select = array('file_name','extension');
        $result = $this->M_upload->fetch('media',$select,$where);
        // var_dump($result);
        if(!empty($result)){
            //delete file media
            $path = '/Users/random/Desktop/Project/magang/codeigniter/admin2/upload/images/';// =========CHANGE THIS =========VERY IMPORTANT=========
            //delete original file
            if(!empty($result[0]->extension))
            unlink($path.$result[0]->file_name.$result[0]->extension);            
            //delete variant size
            $image_sizes = array(
                'thumb' => array(150, 100),
                'medium' => array(300, 300),
                'large' => array(1100, 618)
            );
            foreach($image_sizes as $size){
                if(!empty($result[0]->extension))
                unlink($path.$result[0]->file_name.'-'.$size[0].'x'.$size[1].$result[0]->extension);
            }
            // delete from media
            $this->M_upload->delete('media',$where);
            // delete from array
            }
        echo "{}";
        }
        elseif($method == 'update'){
        $id_product = $this->session->userdata('id_produk');
        $where = array('id_media'=>$id_media);
        // var_dump($where);
        // delete media from server 
        $select = array('file_name','extension');
        $result = $this->M_upload->fetch('media',$select,$where);
        // var_dump($result);
        if(!empty($result)){
            //delete file media
            $path = '/Users/random/Desktop/Project/magang/codeigniter/admin2/upload/images/';// =========CHANGE THIS =========VERY IMPORTANT=========
            //delete original file
            if(!empty($result[0]->extension))
            unlink($path.$result[0]->file_name.$result[0]->extension);            
            //delete variant size
            $image_sizes = array(
                'thumb' => array(150, 100),
                'medium' => array(300, 300),
                'large' => array(1100, 618)
            );
            foreach($image_sizes as $size){
                if(!empty($result[0]->extension))
                unlink($path.$result[0]->file_name.'-'.$size[0].'x'.$size[1].$result[0]->extension);
            }
            // delete from media
            $this->M_upload->delete('media',$where);
            // delete id_media from array product
            pop_array($id_media,$id_product);
        }
        // reshuffle id_thumb after media deleted
        $this->randomthumb($id_product);
        echo '{}';
        }
        
    }
    
    public function randomthumb($id_product){
        $where = ['id_produk' => $id_product];
        //get id_media in array json
        $media = $this->M_upload->fetch('produk','id_media',$where);
        //convert array json to array php
        $media_array = json_decode($media[0]->id_media);
        if(!empty($media_array)){
            $shuffle = $media_array[mt_rand(0,count($media_array)-1)];
        }
        else{
            
            $shuffle = 1; //set default picture
        }
        // var_dump($shuffle);
        //store random index to id_thumb
        $id_thumb = ['id_thumb'=>$shuffle];
        $this->M_upload->update('produk',$id_thumb,$where);
    }
    public function set_temp_session($value){
        $data_array = [];
        $data_array = $this->session->userdata('id_media');
        return $data_array;
    }
    public function upload_image($method){
        //get id Product from session
        $id_product = $this->session->userdata('id_produk');
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
                    $picture = $pic['file_name'];
                    $pic_name = $pic['raw_name'];
                    $resized = $pic['raw_name']. '-' . 150 . 'x' . 100 . $pic['file_ext'];
                    $ext = $pic['file_ext'];
                    // upload to database
                    $this->M_product->upload_media($pic_name,$picture,$resized,$ext);
                    $getid = array('file_name'=>$pic_name);//ambigues, when pic. names are same.
                    $id = $this->M_upload->fetch_media($getid)->result(); // fetching data media just uploaded from media
                    if($method == 'insert'){//if method insert then
                         //define empty array
                        $int_id = (int)$id[0]->id_media;
                        for($key = 0;$key < count($int_id); $key++){
                            $yeah[$key] = $id[0]->id_media;
                        }

                        $id_media['initialPreview'] = array(base_url().'upload/images/'.$id[0]->gambar);
                        $caption = ['caption'=>$id[0]->gambar,
                                    'url' => site_url('C_upload/delete_image/insert/').$id[0]->id_media,
                                    'key'=>$id[0]->id_media];
                        $id_media['initialPreviewConfig'] = array($caption);
                        // var_dump($yeah);
                        // $id_media[] = $this->input;
                    }
                    elseif($method == 'update'){ //if method update
                        // Retrive id_media from media
                        
                        //update id_media from produk
                        //check id_media value first
                        //initialize 
                        $where = array('id_produk' =>$id_product);
                        // var_dump($where);
                        $getid_media = get_id('produk','id_media',$where); //retrive id_media from produk
                        // var_dump($getid_media[0]->id_media);
                        //retrive id_media
                        $condition = $getid_media[0]->id_media;
                        // check if id_media null or empty array
                        if($condition == null || $condition == '[]'){
                            // var_dump($getid_media);
                        push_first_array('produk',array('id_media'=>'['.$id[0]->id_media.']'),$where);
                        $id_thumb = ['id_thumb'=>$id[0]->id_media];
                        $this->M_upload->update('produk',$id_thumb,$where);
                        }
                        else{
                            if($id!=NULL || !empty($id) || count($id) == 1){
                                //push id media to array id_media produk
                                push_array($id[0]->id_media,$id_product);
                                //choose random id_media set to id_thumb
                                $this->randomthumb($id_product);
                                
                            }
                        }
                        $id_media['initialPreview'] = array(base_url().'upload/images/'.$id[0]->gambar);
                        $caption = ['caption'=>$id[0]->gambar,
                                    'url' => site_url('C_upload/delete_image/update/').$id[0]->id_media,
                                    'key'=>$id[0]->id_media];
                        $id_media['initialPreviewConfig'] = array($caption);
                    } 
                    }
                else{
                        echo "<script>alert('failed to upload photo')</script>";
                    }
	                 
	        }else{
                    return;
                    // var_dump($id_media);
                }
        }
        //update 
        echo json_encode($id_media);
				
    }
	
}
