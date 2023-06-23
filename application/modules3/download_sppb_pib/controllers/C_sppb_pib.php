<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use GuzzleHttp\HandlerStack;
use GuzzleHttp\Client;
use GuzzleXml\XmlMiddleware;

class C_sppb_pib extends CI_Controller {

    function __construct() {
        parent::__construct();
        if ($this->session->userdata('autogate_logged') <> 1) {
            redirect(site_url('login'));
        }     
        $this->db_tpsonline = $this->load->database('db_tpsonline', TRUE);     
    }

    function index(){

        $menu_active = $this->m_model->menu_active();

        $arraydata = array('GetImpor_SPPB' => 'Per SPPB','GetImporPermit200' => 'Per Gudang','GetImporPErmit_FASP' => 'Per Kode TPS');
        $nmservice = ComboNonDb($arraydata, 'nmservice', '', 'form-control form-control-sm');

        $data = array(
            'content' => 'view',
            'themaweb' => $this->session->userdata('autogate_thema'),
            'menu_dinamis' => $this->m_model->menu_dinamis($menu_active),
            'nmservice' => $nmservice,
        );
        $this->load->view('dashboard/index', $data);
    }


    function c_download(){
        $Username = $this->input->post('Username') ;
        $Password = $this->input->post('Password') ;
        $No_Sppb = $this->input->post('No_Sppb') ;
        $Tgl_Sppb = $this->input->post('Tgl_Sppb') ;
        $NPWP_Imp = $this->input->post('NPWP_Imp') ;
        $Kd_Gudang = $this->input->post('Kd_Gudang') ;
        $Kd_ASP = $this->input->post('Kd_ASP') ;
        $nmservice = $this->input->post('nmservice') ;
    }
}