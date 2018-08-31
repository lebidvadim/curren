<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_currencies extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    function get_row_id($id){
        $this->db->select('*');
        $this->db->from('currencies');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    function get_row_arr($arr){
        $this->db->select('*');
        $this->db->from('currencies');
        $this->db->where($arr);
        $query = $this->db->get();
        return $query->row();
    }
    function get_result_array(){
        $this->db->select('*');
        $this->db->from('currencies');
        $query = $this->db->get();
        return $query->result_array();
    }
    function get_result_array_lim($limit){
        $this->db->select('*');
        $this->db->from('currencies');
        $this->db->limit($limit[0],$limit[1]);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }
    function get_result_array_lim_arr($arr,$limit){
        $this->db->select('*');
        $this->db->where($arr);
        $this->db->from('currencies');
        $this->db->limit($limit[0],$limit[1]);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }
    function get_num(){
        $query = $this->db->get('currencies');
        return $query->num_rows();
    }
    function get_num_id($id){
        $this->db->where('id', $id);
        $query = $this->db->get('currencies');
        return $query->num_rows();
    }
    function get_num_arr($arr){
        $this->db->where($arr);
        $query = $this->db->get('currencies');
        return $query->num_rows();
    }
    function ins($arr){
        $this->db->insert('currencies', $arr);
    }
    function up($id, $arr){
        $this->db->where('id', $id);
        $this->db->update('currencies', $arr);
    }
    function del($id){
        $this->db->where('id', $id);
        $this->db->delete('currencies');
    }

}