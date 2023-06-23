<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        if ($this->session->userdata('autogate_logged') <> 1) {            
            redirect(site_url('login'));
        }
        $this->jobpjt = $this->load->database('jobpjt', TRUE);    
        $this->ptmsagate = $this->load->database('ptmsagate', TRUE);
    }
    
    function index(){

        /************************************************/
        /************************************************/
        /************************************************/
        /************************************************/
        /*********Untuk Benerin Tanggal            ******/
        /************************************************/
        /************************************************/
        /************************************************/
        /************************************************/
        /************************************************/


        //$this->ptmsagate->query(" ALTER TABLE t_t_entry_cont_in ADD tgl_eir2 date DEFAULT NULL ");    
        //$this->ptmsagate->query(" ALTER TABLE t_eir ADD tgl_eir2 date DEFAULT NULL ");
        // $data_in = $this->ptmsagate->query(" select id_cont_in,tgl_eir from  t_t_entry_cont_in  where tgl_eir<>'' ")->result_array();
        // foreach($data_in as $row){
        //     $tgl_eir = date_db($row['tgl_eir']) ;
        //     $id_cont_in = $row['id_cont_in'] ;
        //     $this->ptmsagate->query(" update t_t_entry_cont_in set tgl_eir2='".$tgl_eir."'  where  id_cont_in=".$id_cont_in." ");
        //     $this->ptmsagate->query(" update t_t_stock set tgl_eir2='".$tgl_eir."'  where  id_cont_in=".$id_cont_in." ");
        // }

        // echo 'finish...' ;
        // die;


        // $this->ptmsagate->query(" ALTER TABLE t_t_stock ADD tgl_eir2 date DEFAULT NULL ");
        // $data_stock = $this->ptmsagate->query(" select * from  t_t_stock  where tgl_eir<>'' ");
        // foreach($data_stock as $row){
        //     $tgl_eir = date_db($row['tgl_eir']) ;
        //     $id_cont_in = $row['id_cont_in'] ;
        //     $this->ptmsagate->query(" update t_t_stock set tgl_eir2='".$tgl_eir."'  where  id_cont_in=".$id_cont_in." ");
        // }
        // echo 'finish...' ;
        // die;




        
        // $data = $this->ptmsagate->query(" select * from  t_eir  where tgl_eir<>'' ");


        







        $folder_content = $this->get_folder();
        redirect($folder_content);
    }
    
    function get_folder(){
        $id_home = $this->session->userdata('autogate_home') ;        
        $arraydata = $this->jobpjt->query("SELECT link_route FROM tbl_menu_app where id_menu=".$id_home)->row();   
        $folder_content = getvalueb($arraydata);
        return $folder_content;
    }


    function c_settingtemplate(){
        $id_user = $this->session->userdata('autogate_userid') ; 
        $thema_name =  $this->jobpjt->query(" SELECT a.thema_name FROM tbl_menu_template a 
            INNER JOIN tbl_user b on a.thema_name = b.thema_name 
            where id_user='".$id_user."' ")->row()->thema_name ;


        $arraydata = $this->jobpjt->query("SELECT thema_name,thema_name as 'thema_name1' FROM tbl_menu_template order by id asc ")->result_array();
        $createcombo = array(
            'data' => $arraydata,
            'set_data' => array('set_id' => $thema_name),
            'attribute' => array('idname' => 'thema_name', 'class' => ''),
        );
        $data['thema_name'] = ComboDbx($createcombo);

        $this->load->view('v_template', $data);
    }

    function c_update(){
        $thema_name = $this->input->post('thema_name');

        $where = array('id_user' => $this->session->userdata('autogate_userid'));
        $data = array('thema_name' => $thema_name);

        $hasil = $this->jobpjt->update('tbl_user', $data, $where);
        if ($hasil >= 1) {
            $pesan_data = array(
                'msg' => 'Ya',
                'pesan' => 'Save Data Sukses..',
                'query' => $this->jobpjt->last_query(),
            );
        } else {
            $pesan_data = array(
                'msg' => 'Tidak',
                'pesan' => 'Update Data ke Tabel tbl_user Error....!!!!',
                'query' => $this->jobpjt->last_query(),
            );
            echo json_encode($pesan_data);
            die;
        }

        $this->m_model->StringToSession('autogate_thema', $thema_name);

        $pesan_data = array(
            'msg' => 'Ya',
            'pesan' => 'Ganti Thema Sukses..',
            'query' => $this->jobpjt->last_query(),
        );

        echo json_encode($pesan_data);

    }
    
}