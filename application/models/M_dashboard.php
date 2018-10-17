<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_dashboard extends CI_Model {
    
        
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
        }
        
        
        public function getProduct($table,$where=NULL,$column){
            if($where !=NULL){
            $this->db->where($where);
            }
            $this->db->select($column);
            return $this->db->get($table);
        }
    }
    
    /* End of file ModelName.php */
    
?>
