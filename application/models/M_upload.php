<?php
class M_upload extends CI_Model{

	function insert_media($judul,$gambar){
		$this->db->query("INSERT INTO media(file_name,gambar) VALUES ('$judul','$gambar')");
	}
	public function fetch_media($where){
        return $this->db->get_where('media',$where);
	}
	public function delete($table,$where){
        $this->db->where($where);
        $this->db->delete($table);
	}
	public function fetch($table, $select=NULL, $where = NULL){
		if($select !=NULL){
			$this->db->select($select);
		}
		if($where!=NULL){
			$this->db->where($where);
		}
		$this->db->from($table);
		return $this->db->get()->result();
	}
	public function update($table,$set,$where){
		$this->db->where($where);
		$this->db->update($table,$set);
	}
	public function get_all_id(){
		
	}
}