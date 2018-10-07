
<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C_media extends CI_Model {

    public function read(){
        return $this->db->get('media');
    }

}

/* End of file C_media.php */
