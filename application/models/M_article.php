<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_article extends CI_Model {
// array('produk.id_produk','produk.nama_produk','produk.harga','media.id_media','media.gambar','media.resized')
    public function getProduct(){
        $this->db->select(array('produk.id_produk','produk.nama_produk','produk.harga','media.resized'));
        $this->db->from('produk');
        $this->db->join('media', 'produk.id_thumb = media.id_media', 'inner');
        return $this->db->get();
    }

}

/* End of file C_model.php */
