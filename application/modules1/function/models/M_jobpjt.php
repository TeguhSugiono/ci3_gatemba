<?php

defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class M_jobpjt extends CI_Model {

    function __construct() { // untuk awalan membuat class atau lawan kata nya index
        parent::__construct();
        $this->jobpjt = $this->load->database('jobpjt', TRUE);
    }



}
