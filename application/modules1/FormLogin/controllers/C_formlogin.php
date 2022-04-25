<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_formlogin extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($error = NULL) {

        $comp = array(
            'action_btnlogin' => site_url("auth"),
            'status_loginku' => $error,
        );

        $this->load->view('view', $comp);
    }

    public function auth() {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $where = array(
            'username' => $username,
            'password' => $password
        );

        $ceklogin = $this->m_model->cek_data("pjt_user", $where);

        if ($ceklogin->num_rows() == 1) {

            //ambil username
            $data_login = $this->m_model->cek_data("pjt_user", $where)->row();
            
            //cari thema
            $themaweb = $this->m_model->cek_data("pjt_thema_web", array('id_user'	=> $ceklogin->row()->id_user));
                        
            //daftarkan session
            $data = array(
                'autogate_logged' => TRUE,
                'autogate_username' => $data_login->username,
                'autogate_userid' => $data_login->id_user,
                'autogate_thema' => $themaweb->row()->thema_name,
            );

            $this->session->set_userdata($data);
            redirect(site_url("dashboard"));
        } else {
            $error = 'Username / Password salah';
            $this->index($error);
        }
    }

    function logout() {
        $this->session->unset_userdata('autogate_logged');
        $this->session->unset_userdata('autogate_username');
        $this->session->unset_userdata('autogate_userid');
        $this->session->unset_userdata('autogate_thema');
        redirect(site_url());
    }

}
