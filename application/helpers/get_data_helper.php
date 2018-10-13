<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_data_helper'))
{
    function get_id($table,$where,$select=NULL){
        $CI =& get_instance();
        if ($select != NULL){
        $CI->db->select($select);
        }
        return $CI->db->get_where($table,$where)->result();
    }
    function get_data($table,$where,$select=NULL)
    {
        $CI =& get_instance();
        if($select != NULL){
            $CI->db->select($select);
        }
        $CI->db->from($table);
        $CI->db->where($where);
        return $CI->db->get()->result();
    } 
    function get_data_media(){
        $CI =& get_instance();
        // $CI->db->
    }
    function change_userpass($where){
        
    }
}