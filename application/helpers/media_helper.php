<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('media_helper'))
{   
    function get_id($table,$id = NULL,$where = NULL){
        $CI =& get_instance();
        if($id !=NULL)
        $CI->db->select($id);
        if($where !=NULL)
        $CI->db->where($where);
        return $CI->db->get($table)->result();
    }
    function get_data($table, $select = NULL , $where = NULL){
        $CI =& get_instance();
        if($select != NULL)
        $CI->db->select($select);
        return $CI->db->get_where($table,$where)->result();
    }
    function push_array($data_media,$id_produk){
        $CI =& get_instance();
        $CI->db->query("update produk set id_media = json_array_append(id_media,'$',".$data_media.") where id_produk =".$id_produk."");
    }
    function pop_array($data_media,$id_produk){
        $CI =& get_instance();
        $CI->db->query("update produk set id_media = json_remove (id_media, json_unquote( json_search(id_media,'one','".$data_media."'))) where json_search(id_media,'one','".$data_media."') is not null and id_produk = ".$id_produk."");
    }
    function push_first_array($table,$data,$where){
        $CI =& get_instance();
        $CI->db->where($where);
        $CI->db->update($table,$data);
        $CI->db->last_query();
    }
    function save_as_array($data){
        $CI =& get_instance();
        $CI->id_media = array();
        return $CI->id_media;
    }
}