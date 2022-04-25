<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_formgateout extends CI_Controller {

    function __construct() {
        parent::__construct();
         $this->tpsonline = $this->load->database('tpsonline', TRUE);
         $this->mbatps = $this->load->database('mbatps', TRUE);

        if ($this->session->userdata('autogate_logged') <> 1) {
            redirect(site_url('login'));
        }
    }

    function index() {
        $data = array(
            'menu_aktif' => 'gateout',
            'content' => 'view',
            'themaweb' => $this->session->userdata('autogate_thema'),
        );
        $this->load->view('formmenu/index', $data);
    }
    
}