<?php
class siswa extends CI_Model{
    // get gender
    public function gender($gender){
        $this->db->where('jenis_kelamin',$gender);
        return $this->jumlahsiswa();
    }
    // count siswa
    public function jumlahsiswa(){
        return $this->db->count_all_results('data_siswa');
    }
    //get where value
    public function getwhere($table,$where){
        return $this->db->get_where($table,$where);
    }
    public function getdistinctyear(){
        return $this->db->query("SELECT DISTINCT (year(tanggal_lahir)) AS tahun FROM data_siswa ORDER BY tahun ASC");
    }
    public function getcount(){
        return $this->db->query("SELECT (year(tanggal_lahir)) AS tahun, count(*) AS jumlah FROM data_siswa GROUP BY tahun");
    }
    //============CRUD===========
    // read data
    public function read(){
        return $this->db->get('data_siswa');
    }
    //insert data
    public function insert($table,$data){
        return $this->db->insert($table,$data);
    }
    //update data
    public function update($table,$data,$where)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    //delete data
    public function delete($table,$where){
        $this->db->where($where);
        $this->db->delete($table);
    }
}