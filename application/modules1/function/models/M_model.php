<?php

defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class M_model extends CI_Model {

    function __construct() { // untuk awalan membuat class atau lawan kata nya index
        parent::__construct();
        $this->jobpjt = $this->load->database('jobpjt', TRUE);
        $this->mbatps = $this->load->database('mbatps', TRUE);
        $this->ptmsagate = $this->load->database('ptmsagate', TRUE);
        $this->ptmsadbo = $this->load->database('ptmsadbo', TRUE);
        $this->tpsonline = $this->load->database('tpsonline', TRUE);
    }
    
   function cek_data($table, $where = "") {
        $data = $this->jobpjt->get_where($table, $where);
        return $data;
    }
    
    function bon_bongkar_number(){
        $query = "SELECT bon_bongkar_number FROM t_t_entry_cont_in WHERE rec_id = '0' ORDER BY bon_bongkar_number desc limit 1";
        $data = $this->ptmsagate->query($query);
        if($data->num_rows() > 0){
            foreach ($data->result() as $row) {
                $dpt = $row->bon_bongkar_number;
                $intdpt = (int)$dpt ;
                $intdpt++;
            }
        }else{
            $intdpt = 1 ;
        }
        return str_pad($intdpt, 5, "0", STR_PAD_LEFT) ;
    }
    
    function bon_muat_number(){
        $query = "SELECT bon_muat_number FROM t_t_entry_cont_out WHERE rec_id = '0' ORDER BY bon_muat_number desc limit 1";
        $data = $this->ptmsagate->query($query);
        if($data->num_rows() > 0){
            foreach ($data->result() as $row) {
                $dpt = $row->bon_muat_number;
                $intdpt = (int)$dpt ;
                $intdpt++;
            }
        }else{
            $intdpt = 1 ;
        }
        return str_pad($intdpt, 5, "0", STR_PAD_LEFT) ;
    }
    
    function eir_r_number(){
        $query = "SELECT r_eir_in as no FROM r_number";
        $data = $this->ptmsagate->query($query);
        $dpt = $data->row()->no;        
        if($dpt == 0 || $dpt == ""){
            $dpt = 1 ;
        }        
        $intdpt = (int)$dpt ;        
        return str_pad($intdpt, 5, "0", STR_PAD_LEFT) ;
    }
    
    function update_eir_r_number(){
        $query = "update r_number set r_eir_in = r_eir_in + 1";
        $data = $this->ptmsagate->query($query);
        return $data ;
    }
    
    function eir_r_number_out(){
        $query = "SELECT r_eir_out as no FROM r_number";
        $data = $this->ptmsagate->query($query);
        $dpt = $data->row()->no;        
        if($dpt == 0 || $dpt == ""){
            $dpt = 1 ;
        }        
        $intdpt = (int)$dpt ;        
        return str_pad($intdpt, 5, "0", STR_PAD_LEFT) ;
    }
    
    function update_eir_r_number_out(){
        $query = "update r_number set r_eir_out = r_eir_out + 1";
        $data = $this->ptmsagate->query($query);
        return $data ;
    }
    
    function id_in(){
        $query = "SELECT max(id_cont_in) as id_cont_in FROM t_t_entry_cont_in";
        $data = $this->ptmsagate->query($query);
        if($data->num_rows() > 0){
            foreach ($data->result() as $row) {
                $dpt = $row->id_cont_in;
                $intdpt = (int)$dpt ;
                $intdpt++;
            }
        }else{
            $intdpt = 1 ;
        }
        //return str_pad($intdpt, 5, "0", STR_PAD_LEFT) ;
        return $intdpt ;
    }
    
    function id_out(){
        $query = "SELECT max(id_cont_out) as id_cont_out FROM t_t_entry_cont_out";
        $data = $this->ptmsagate->query($query);
        if($data->num_rows() > 0){
            foreach ($data->result() as $row) {
                $dpt = $row->id_cont_out;
                $intdpt = (int)$dpt ;
                $intdpt++;
            }
        }else{
            $intdpt = 1 ;
        }
        //return str_pad($intdpt, 5, "0", STR_PAD_LEFT) ;
        return $intdpt ;
    }
    
    function getvalue($database,$select = '', $form = '', $where = array(), $limit = '', $orderby = '') {
        $this->$database->select($select);
        $this->$database->from($form);
        $this->$database->where($where);

        if ($orderby != '') {
            $this->$database->order_by($orderby);
        }

        if ($limit != '') {
            $this->$database->limit($limit);
        }

        $data = $this->$database->get();
//        echo $this->db->last_query();
//        die;
        $dpt = '';
        foreach ($data->result() as $row) {
            $dpt = $row->$select;
        }
        return $dpt;
    }
    
    public function Save_Data($database,$table, $data)
    {
        $data = $this->$database->insert($table, $data);
        // echo $this->$database->last_query();
        // die;
        
//        echo $this->$database->last_query();
//        die;
                
        return $data;
    }
    
    public function Update_Data($database,$table, $data, $where)
    {
        $res = $this->$database->update($table, $data, $where);
        // echo $this->$database->last_query();
        // die;
        return $res;
    }
    
    public function CreateCombo1($arraydata, $namecbo, $setname, $setclass) {
        $data['$namecbo'] = form_dropdown($namecbo, $arraydata, $setname, 'id="' . $namecbo . '" class="form-control ' . $setclass . '" style="width: 100%"');
        return $data['$namecbo'];
    }

    public function CreateCombo2($database,$param_array) {

        $this->$database->distinct();
        $this->$database->select($param_array['field_Search']);

        $where = isset($param_array['where']) ? $param_array['where'] : array();
        if (count((array) $where) > 0) {
            $this->$database->where($param_array['where']);
        }

        $where_in = isset($param_array['where_in']) ? $param_array['where_in'] : array();
        if (count((array) $where_in) > 0) {
            $this->$database->where_in($param_array['where_in']['name'], $param_array['where_in']['value']);
        }

//        $where_not_in = isset($param_array['where_not_in']) ? $param_array['where_not_in'] : array();
//        if (count((array) $where_not_in) > 0) {
//            $this->$database->where_not_in($param_array['where_not_in']['name'],$param_array['where_not_in']['value']);
//        }

        $orderby = isset($param_array['orderby']) ? $param_array['orderby'] : '';
        if ($orderby != '') {
            $this->$database->order_by($param_array['orderby']);
        }

        $result = $this->$database->get($param_array['table_name']);
        //echo "</br>".$this->db->last_query(); die;

        $dapatdata[$param_array['set_data']['set_id']] = $param_array['set_data']['set_name'];
        if ($result->num_rows() > 0) {
            foreach ($result->result() as $row) {
                $field_id = $param_array['field_id'];
                if ($row->$field_id <> '') {
                    $idku = $param_array['field_id'];
                    $nameku = $param_array['field_name'];
                    $dapatdata[$row->$idku] = $row->$nameku;
                }
            }
        }

        $attribute = 'id="' . $param_array['attribute']['idname'] . '" class="form-control ' . $param_array['attribute']['class'] . '" style="width:100%" ';
        $selected = $this->input->post("'" . $param_array['attribute']['idname'] . "'") ? $this->input->post("'" . $param_array['attribute']['idname'] . "'") : '';
        return form_dropdown($param_array['attribute']['idname'], $dapatdata, $selected, $attribute);
    }

}
