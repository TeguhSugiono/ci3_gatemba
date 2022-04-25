<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_formgatein extends CI_Controller {

    function __construct() {
        parent::__construct();
         $this->tpsonline = $this->load->database('tpsonline', TRUE);
         $this->mbatps = $this->load->database('mbatps', TRUE);

        if ($this->session->userdata('autogate_logged') <> 1) {
            redirect(site_url('login'));
        }
    }
    
//    function manipulasiTanggal($tgl,$jumlah=1,$format='days'){
//	$currentDate = $tgl;
//	return date('Y-m-d', strtotime($jumlah.' '.$format, strtotime($currentDate)));
//    }

    function index() {
        
//        echo date('Y-m-d') ;
//        die;
//        
//        $tgl='2020-03-10';
//        echo manipulasiTanggal(date('Y-m-d') ,'-7','days');
//        die;
        
        $arraydata = array('OnProgress' => 'OnProgress','Finish' => 'Finish');
        $proses_gate_in = $this->m_model->CreateCombo1($arraydata, 'proses_gate_in', 'proses_gate_in', '');

        
        $data = array(
            'menu_aktif' => 'transaction',
            'content' => 'view',
            'themaweb' => $this->session->userdata('autogate_thema'),
            'proses_gate_in' => $proses_gate_in,
        );
        $this->load->view('formmenu/index', $data);
    }
    
    function c_tbl_gatein() {
        
        $tgl_masuk_start = $this->input->post('tgl_masuk_start');
        $tgl_masuk_end = $this->input->post('tgl_masuk_end');
        $proses_gate_in = $this->input->post('proses_gate_in');
        
        $select = '';
        $form = 'tbl_gate_in';

        $join = array();

        $where = array();
        
        if($proses_gate_in == "Finish"){
            $tambah_where = array('DATE_FORMAT(tgl_masuk,"%Y-%m-%d") >=' => date_db($tgl_masuk_start));
            $where = array_merge($where, $tambah_where);
            
            $tambah_where = array('DATE_FORMAT(tgl_masuk,"%Y-%m-%d") <=' => date_db($tgl_masuk_end));
            $where = array_merge($where, $tambah_where);
        }else{
            $tambah_where = array('proses_gate_in' => $proses_gate_in);
            $where = array_merge($where, $tambah_where);
        }

        $where_term = array(
            'id_gate_in', 'proses_gate_in', 'no_kontainer','reff_code', 'no_plat_mobil', 'tgl_masuk', 'jam_masuk', 'tgl_keluar_trucking', 'jam_keluar_trucking','terminal','code_principal','vessel'
        );
        $column_order = array(
            Null, 'id_gate_in', 'proses_gate_in', 'no_kontainer','reff_code', 'no_plat_mobil', 'tgl_masuk', 'jam_masuk', 'tgl_keluar_trucking', 'jam_keluar_trucking','terminal','code_principal','vessel'
        );
        $order = array(
            'tgl_masuk' => 'asc',
            'jam_masuk' => 'asc'
        );
        $array_table = array(
            'select' => $select,
            'form' => $form,
            'join' => $join,
            'where' => $where,
            'where_like' => array(),
            'where_in' => array(),
            'where_not_in' => array(),
            'where_term' => $where_term,
            'column_order' => $column_order,
            'group' => '',
            'order' => $order,
        );

        $list = $this->m_tpsonline->get_datatables($array_table);
        $data = array();
        $no = $_POST['start'];

        foreach ($list as $field) {
            $no++;
            $row = array();

            $row[] = $no;
            $row[] = $field->id_gate_in;
            $row[] = $field->proses_gate_in;
            $row[] = $field->no_kontainer;
            $row[] = $field->reff_code;            
            $row[] = $field->no_plat_mobil;
            $row[] = showdate_dmy($field->tgl_masuk);
            $row[] = $field->jam_masuk;
            $row[] = showdate_dmy($field->tgl_keluar_trucking);
            $row[] = $field->jam_keluar_trucking;            
            $row[] = $field->terminal;
            $row[] = $field->code_principal;
            $row[] = $field->vessel;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->m_tpsonline->count_all($array_table),
            "recordsFiltered" => $this->m_tpsonline->count_filtered($array_table),
            "data" => $data,
        );

        echo json_encode($output);
    }
    
}