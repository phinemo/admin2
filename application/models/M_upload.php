<?php
class M_upload extends CI_Model{

	function insert_media($judul,$gambar){
		$hasil=$this->db->query("INSERT INTO media(file_name,gambar) VALUES ('$judul','$gambar')");
		return $hasil;
	}
	function fetch_media($where){
		
	}
}