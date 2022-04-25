<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_formmenu extends CI_Controller {

    function __construct() {
        parent::__construct();
         $this->tpsonline = $this->load->database('tpsonline', TRUE);
         $this->mbatps = $this->load->database('mbatps', TRUE);
         $this->ptmsagate = $this->load->database('ptmsagate', TRUE);

        if ($this->session->userdata('autogate_logged') <> 1) {
            redirect(site_url('login'));
        }
    }

    function index() {
        

        
//        $where = array(
//            'rec_id' => 0,
//            'cont_number' => 'PONU 0662851',                
//        );
//        $this->ptmsagate->where($where);            
//        $data_stock = $this->ptmsagate->get('t_t_stock');
//
//        echo $this->ptmsagate->last_query();
//        die;
            
        
//        $gate_in = $this->tpsonline->get_where('tbl_gate_out',array('id_cont_out' => NULL,'proses_gate_out' => 'OnProgress','no_plat_mobil !=' => NULL));
//        echo $this->tpsonline->last_query();
//        die;
        
//        $nocont = 'TGHU1234567';
//        print_r(substr($nocont, 0,4));
//        print_r(substr($nocont, 4,11));
//        die;
        
//        $name_principal = $this->m_model->getvalue('ptmsagate','name_principal','t_m_principal',array('rec_id' => 0,'code_principal' => 'TPS'));
//        echo $name_principal;
//        die;
        
//        $gate_in = $this->tpsonline->get_where('tbl_gate_in',array('id_cont_in' => NULL,'no_plat_mobil !=' => NULL));
//        echo $this->tpsonline->last_query();
//        die;
        
//        print_r($this->m_model->id_in());
//        die;
        
//        $data['a'] = 'ayam' ;
//        //print_r($data);
//        $data['a'] = 'bebek' ;
//        print_r($data);
//        die;
        
//        $data['a'] = 'ayam' ;
//        print_r($data);
//        array_push($data['a'], array('bebek'));
//        print_r($data);
//        die;

//        $result = $this->db->query("SELECT * from TRAN_OB where FLAG_SINKRON=0 ORDER BY pid asc")->result_array();
//        print_r($result);
//        die;
//        echo $this->session->userdata('autogate_logged');
//        echo $this->session->userdata('autogate_username');
//        echo $this->session->userdata('autogate_userid');
//        echo $this->session->userdata('autogate_thema');
//        die;

        $data = array(
            'menu_aktif' => 'dashboard',
            'content' => 'view',
            'themaweb' => $this->session->userdata('autogate_thema'),
        );
        $this->load->view('formmenu/index', $data);
    }

    function c_tbl_gatein() {
        $select = '';
        $form = 'tbl_gate_in';

        $join = array();

        $where = array(
//            'flag_pengarang' => 0,
//            'flag_kategori' => 0,
//            'flag_penerbit' => 0,
//            'flag_tempat_terbit' => 0,
        );

        $where_term = array(
            'id_gate_in', 'no_kontainer','reff_code', 'no_plat_mobil', 'tgl_masuk', 'jam_masuk', 'tgl_keluar_trucking', 'jam_keluar_trucking', 'proses_gate_in','terminal','code_principal','vessel'
        );
        $column_order = array(
            Null, 'id_gate_in', 'no_kontainer','reff_code', 'no_plat_mobil', 'tgl_masuk', 'jam_masuk', 'tgl_keluar_trucking', 'jam_keluar_trucking', 'proses_gate_in','terminal','code_principal','vessel'
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
            $row[] = $field->no_kontainer;
            $row[] = $field->reff_code;            
            $row[] = $field->no_plat_mobil;
            $row[] = showdate_dmy($field->tgl_masuk);
            $row[] = $field->jam_masuk;
            $row[] = showdate_dmy($field->tgl_keluar_trucking);
            $row[] = $field->jam_keluar_trucking;
            $row[] = $field->proses_gate_in;
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

    function c_tbl_gateout() {
        $select = '';
        $form = 'tbl_gate_out';

        $join = array();

        $where = array(
//            'flag_pengarang' => 0,
//            'flag_kategori' => 0,
//            'flag_penerbit' => 0,
//            'flag_tempat_terbit' => 0,
        );

        $where_term = array(
            'id_gate_out', 'no_transaksi', 'no_kontainer', 'no_plat_mobil', 'tgl_keluar', 'jam_keluar', 'tgl_masuk_trucking', 'jam_masuk_trucking', 'proses_gate_out'
        );
        $column_order = array(
            Null, 'id_gate_out', 'no_transaksi', 'no_kontainer', 'no_plat_mobil', 'tgl_keluar', 'jam_keluar', 'tgl_masuk_trucking', 'jam_masuk_trucking', 'proses_gate_out'
        );
        $order = array(
            'tgl_keluar' => 'asc',
            'jam_keluar' => 'asc'
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
            $row[] = $field->id_gate_out;
            $row[] = $field->no_transaksi;
            $row[] = $field->no_kontainer;
            $row[] = $field->no_plat_mobil;
            $row[] = showdate_dmy($field->tgl_keluar);
            $row[] = $field->jam_keluar;
            $row[] = showdate_dmy($field->tgl_masuk_trucking);
            $row[] = $field->jam_masuk_trucking;
            $row[] = $field->proses_gate_out;

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

    function c_tbl_ob() {
        $select = '';
        $form = 'TRAN_OB';

        $join = array();

        $where = array(
            'FLAG_SINKRON' => 0,
        );

        $where_term = array(
            'pid', 'NO_CONT', 'KD_TPS_ASAL'
        );
        $column_order = array(
            Null, 'pid', 'NO_CONT', 'KD_TPS_ASAL'
        );
        $order = array(
            'pid' => 'asc',
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

        $list = $this->m_sql->get_datatables($array_table);
        $data = array();
        $no = $_POST['start'];

        foreach ($list as $field) {
            $no++;
            $row = array();

            $row[] = $no;
            $row[] = $field->pid;
            $row[] = $field->NO_CONT;
            
            if ($field->KD_TPS_ASAL == "TTL0") {
                $row[] = "PT Terminal Teluk Lamong";
            } elseif ($field->KD_TPS_ASAL == "TPS0") {
                $row[] = "PT Terminal Petikemas Surabaya (TPS)";
            } else {
                $row[] = "";
            }

            if ($field->GUDANG_TUJUAN == "CMBA") {
                $row[] = "TPS";
            } elseif ($field->GUDANG_TUJUAN == "GMBA") {
                $row[] = "PJT";
            } else {
                $row[] = "";
            }
            
            

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->m_sql->count_all($array_table),
            "recordsFiltered" => $this->m_sql->count_filtered($array_table),
            "data" => $data,
        );

        echo json_encode($output);
    }

    function c_get_data_tpsonline() {
        $result = $this->db->query("SELECT * from TRAN_OB where FLAG_SINKRON=0 ORDER BY pid asc")->result_array();
        $a=0;
        $b=0;
        //$pesan_data = array('msg' => 'Tidak', 'queryinsert' => '','queryupdate' => '');
        
        foreach ($result as $row) {
            $pid = $row['pid'];
            
            if ($row['KD_TPS_ASAL'] == "TTL0") {
                $terminal = "PT Terminal Teluk Lamong";
            } elseif ($row['KD_TPS_ASAL'] == "TPS0") {
                $terminal = "PT Terminal Petikemas Surabaya (TPS)";
            } else {
                $terminal = "";
            }

            if ($row['GUDANG_TUJUAN'] == "CMBA") {
                $code_principal = "TPS";
            } elseif ($row['GUDANG_TUJUAN'] == "GMBA") {
                $code_principal = "PJT";
            } else {
                $code_principal = "";
            }
            
            $vessel = $row['NM_ANGKUT'].' '.$row['NO_VOY_FLIGHT'] ;
            
            if($row['UK_CONT'] == "20"){
                $reff_code = '2DS' ;
            }else{
                $reff_code = '4DS' ;
            }
            
            //$resultz = $this->db->query("SELECT * from TRAN_OB where pid=".$pid);
            //$querydata[$a++] = $this->db->last_query();
            
            //insert data ke tbl_gate_in
            $result = $this->tpsonline->query("insert into tbl_gate_in(no_kontainer,pid,terminal,code_principal,vessel,reff_code) 
                    values('".$row['NO_CONT']."','".$row['pid']."','".$terminal."','".$code_principal."','".$vessel."','".$reff_code."')");
            $queryinsert[$a++] = $this->tpsonline->last_query();
            if ($result >= 1) {
                $pesan_data = array( 'msg' => 'Ya', 'queryinsert' => $queryinsert);
            }else{
                $pesan_data = array('msg' => 'Tidak','queryinsert' => $queryinsert);
                echo json_encode($pesan_data);
            }
            
            $result = $this->db->query("Update TRAN_OB set  FLAG_SINKRON=1 where pid=".$pid);
            $queryupdate[$b++] = $this->db->last_query();

            if ($result >= 1) {
                $pesan_data = array( 'msg' => 'Ya', 'queryinsert' => $queryinsert, 'queryupdate' => $queryupdate);
            }else{
                $pesan_data = array('msg' => 'Tidak', 'queryinsert' => $queryinsert,'queryupdate' => $queryupdate);
                echo json_encode($pesan_data);
            }
        }

        echo json_encode($pesan_data);
    }

    function c_get_do_contout(){
        //$result = $this->mbatps->query("SELECT *,REPLACE(Cont_Number,' ','') as Cont_Number2 FROM tps_t_plp_do where FLAG_SINKRON=0 ORDER BY No_Transaksi asc")->result_array();
        
        $query = "  SELECT a.*,REPLACE(Cont_Number,' ','') as Cont_Number2,principal,vessel,b.KdCtr 
                        from tps_t_plp_do a
                        INNER JOIN tps_t_plp_detail b on a.T_In_Detail_ID=b.T_In_Detail_ID
                        INNER JOIN tps_t_plp c on b.t_in_id = c.t_in_id
                        where b.RecID<> 9 and c.recid<>9 and FLAG_SINKRON=0 ORDER BY No_Transaksi asc " ;
        $result = $this->mbatps->query($query)->result_array();
        
        $a=0;
        $b=0;
        $pesan_data = array('msg' => 'Tidak', 'queryinsert' => '','queryupdate' => '');
        
        foreach ($result as $row) {
            $No_Transaksi = $row['No_Transaksi'];
            
//            $resultz = $this->mbatps->query("SELECT * from tps_t_plp_do where No_Transaksi=".$No_Transaksi);
//            $queryinsert[$a++] = $this->mbatps->last_query();
            
            //insert data ke tbl_gate_out
            $result = $this->tpsonline->query("insert into tbl_gate_out(no_transaksi,no_kontainer,do_number,code_principal,vessel,reff_code) values('".$row['No_Transaksi']."','".$row['Cont_Number2']."','".$row['Do_Number']."','".$row['principal']."','".$row['vessel']."','".$row['KdCtr']."')");
            $queryinsert[$a++] = $this->tpsonline->last_query();
            if ($result >= 1) {
                $pesan_data = array( 'msg' => 'Ya', 'queryinsert' => $queryinsert);
            }else{
                $pesan_data = array('msg' => 'Tidak','queryinsert' => $queryinsert);
                echo json_encode($pesan_data);
            }
            
        }
        
        echo json_encode($pesan_data);
        
    }
    
    function c_create_do_contout(){
        $result = $this->mbatps->query("SELECT * FROM tps_t_plp_do where  
                FLAG_SINKRON=0 GROUP BY Do_Number ORDER BY No_Transaksi asc")->result_array(); 
        
        $a=0;
        $b=0;
        $pesan_data = array();
        //PJT dan TPS
        foreach ($result as $row) {
            $Do_Number = $row['Do_Number'] ;
            
            $query = "select No_Transaksi,Do_Number,Cont_Number,KdCtr,Principal,c.Vessel,b.SealNumber,Date_DO_Print 
                            FROM tps_t_plp_do a
                            INNER JOIN tps_t_plp_detail b on a.T_In_Detail_ID=b.T_In_Detail_ID
                            INNER JOIN tps_t_plp c on b.T_In_ID=c.T_In_ID
                            where Do_Number='".$Do_Number."' and b.RecID<>9 GROUP BY KdCtr" ;
            $get_size = $this->mbatps->query($query);            
            
            foreach($get_size->result_array() as $rowsize){
                
                $code_principal = $rowsize['Principal'];
                $vessel = $rowsize['Vessel'] ;
                $seal_number= $rowsize['SealNumber'] ;
                $reff_code = $rowsize['KdCtr'] ;
                $do_date = $rowsize['Date_DO_Print'] ;
                
                $name_principal = $this->m_model->getvalue('ptmsagate','name_principal','t_m_principal',array('rec_id' => 0,'code_principal' => $code_principal));
                
                $query = "  SELECT COUNT(*) as party from tps_t_plp_do a
                                INNER JOIN tps_t_plp_detail b on a.T_In_Detail_ID=b.T_In_Detail_ID
                                where b.RecID=0 and b.KdCtr='".$reff_code."'  and Do_Number='".$Do_Number."' " ;
                $get_party = $this->mbatps->query($query); 

                $party = 0 ;
                foreach($get_party->result_array() as $rowparty){
                    $party = $rowparty['party'];
                }
                
                $data = array(
    //                'id_entry_do'=>'',
                    'do_number'=>$Do_Number,
                    'code_principal'=>$code_principal,
                    'name_principal'=>$name_principal,
                    'vessel'=>$vessel,
    //                'shipper'=>'',
                    'seal_number'=>$seal_number,
                    'destination'=>'autogate',
    //                'notes'=>'',
                    'do_date'=>  $do_date,
                    'reff_code'=>$reff_code,
                    'party'=>$party,
                    'cont_out'=>0,
                    'created_by'=>  'autogate',
                    'created_on'=>tanggal_sekarang(),
//                    'edited_by'=>'',
//                    'edited_on'=>'',
                    'rec_id'=>0,
                );
                
                $result_save = $this->ptmsagate->insert('t_t_entry_do_cont_out', $data);
                $queryinsert[$a++] = $this->ptmsagate->last_query();
                
                if ($result_save >= 1) {
                    $pesan_data = array( 'msg' => 'Ya', 'queryinsert' => $queryinsert);
                }else{
                    $pesan_data = array( 'msg' => 'Tidak', 'queryinsert' => $queryinsert);
                    echo json_encode($pesan_data);die;
                }
                
            }
            
            $query = "Update tps_t_plp_do set  FLAG_SINKRON=1 where FLAG_SINKRON=0 and Do_Number='".$Do_Number."'" ;
            $result = $this->mbatps->query($query);
            $queryupdate[$b++] = $this->mbatps->last_query();

            if ($result >= 1) {
                $pesan_data = array( 'msg' => 'Ya', 'queryinsert' => $queryinsert, 'queryupdate' => $queryupdate);
            }else{
                $pesan_data = array('msg' => 'Tidak', 'queryinsert' => $queryinsert,'queryupdate' => $queryupdate);
                echo json_encode($pesan_data);
            }
            
        }
        
         echo json_encode($pesan_data);
    }
    
//    function c_create_do_contout_tpp(){
//        $result = $this->mbatps->query("SELECT * FROM tps_t_plp_do where  
//                FLAG_SINKRON=0 GROUP BY Do_Number ORDER BY No_Transaksi asc")->result_array(); //Do_Number='EGLV002700215341'  and
//        
//        $a=0;
//        $b=0;
//        $pesan_data = array( 'msg' => 'Tidak','pesan' => 'Tidak Ada Data Yang Diprosess');
//        //PJT dan TPS
//        foreach ($result as $row) {
//            $Do_Number = $row['Do_Number'] ;
//            
//            $query = "select No_Transaksi,Do_Number,Cont_Number,KdCtr,Principal,c.Vessel,b.SealNumber,Date_DO_Print 
//                            FROM tps_t_plp_do a
//                            INNER JOIN tps_t_plp_detail b on a.T_In_Detail_ID=b.T_In_Detail_ID
//                            INNER JOIN tps_t_plp c on b.T_In_ID=c.T_In_ID
//                            where Do_Number='".$Do_Number."' and b.RecID=0 GROUP BY KdCtr" ;
//            $get_size = $this->mbatps->query($query);            
//            
//            foreach($get_size->result_array() as $rowsize){
//                
//                $code_principal = $rowsize['Principal'];
//                $vessel = $rowsize['Vessel'] ;
//                $seal_number= $rowsize['SealNumber'] ;
//                $reff_code = $rowsize['KdCtr'] ;
//                $do_date = $rowsize['Date_DO_Print'] ;
//                
//                $name_principal = $this->m_model->getvalue('ptmsagate','name_principal','t_m_principal',array('rec_id' => 0,'code_principal' => $code_principal));
//                
//                $query = "  SELECT COUNT(*) as party from tps_t_plp_do a
//                                INNER JOIN tps_t_plp_detail b on a.T_In_Detail_ID=b.T_In_Detail_ID
//                                where b.RecID=0 and b.KdCtr='".$reff_code."'  and Do_Number='".$Do_Number."' " ;
//                $get_party = $this->mbatps->query($query); 
//
//                $party = 0 ;
//                foreach($get_party->result_array() as $rowparty){
//                    $party = $rowparty['party'];
//                }
//                
//                $data = array(
//    //                'id_entry_do'=>'',
//                    'do_number'=>$Do_Number,
//                    'code_principal'=>$code_principal,
//                    'name_principal'=>$name_principal,
//                    'vessel'=>$vessel,
//    //                'shipper'=>'',
//                    'seal_number'=>$seal_number,
//                    'destination'=>'autogate',
//    //                'notes'=>'',
//                    'do_date'=>  $do_date,
//                    'reff_code'=>$reff_code,
//                    'party'=>$party,
//                    'cont_out'=>0,
//                    'created_by'=>  'autogate',
//                    'created_on'=>tanggal_sekarang(),
////                    'edited_by'=>'',
////                    'edited_on'=>'',
//                    'rec_id'=>0,
//                );
//                
//                $result = $this->m_model->Save_Data('ptmsagate','t_t_entry_do_cont_out',$data);
//                $queryinsert[$a++] = $this->ptmsagate->last_query();
//                
//                if ($result >= 1) {
//                    $pesan_data = array( 'msg' => 'Ya', 'queryinsert' => $queryinsert);
//                }else{
//                    $pesan_data = array( 'msg' => 'Tidak', 'queryinsert' => $queryinsert);
//                    echo json_encode($pesan_data);die;
//                }
//                
//            }
//            
//            $query = "Update tps_t_plp_do set  FLAG_SINKRON=1 where FLAG_SINKRON=0 and Do_Number='".$Do_Number."'" ;
//            $result = $this->mbatps->query($query);
//            $queryupdate[$b++] = $this->mbatps->last_query();
//
//            if ($result >= 1) {
//                $pesan_data = array( 'msg' => 'Ya', 'queryinsert' => $queryinsert, 'queryupdate' => $queryupdate);
//            }else{
//                $pesan_data = array('msg' => 'Tidak', 'queryinsert' => $queryinsert,'queryupdate' => $queryupdate);
//                echo json_encode($pesan_data);
//            }
//            
//        }
//        
//         echo json_encode($pesan_data);
//    }
    
    function c_gate_in(){
        
        $gate_in = $this->tpsonline->get_where('tbl_gate_in',array('id_cont_in' => NULL,'proses_gate_in' => 'OnProgress','no_plat_mobil !=' => NULL));
        $t_t_entry_cont_in = array();
        $t_t_stock = array();
        $t_eir = array();
        
        if($gate_in->num_rows() > 0){
            
            
            foreach($gate_in->result_array() as $row){
                $id_cont_in = $this->m_model->id_in();
                $bon_bongkar_number = $this->m_model->bon_bongkar_number();
                $eir_in = $this->m_model->eir_r_number();
                
                
                if($row['code_principal'] == ""){
                    $code_principal = 'TPP' ;
                    $name_principal = $this->m_model->getvalue('ptmsagate','name_principal','t_m_principal',array('rec_id' => 0,'code_principal' => $code_principal));
                }else{
                    $code_principal = $row['code_principal'] ;
                    $name_principal = $this->m_model->getvalue('ptmsagate','name_principal','t_m_principal',array('rec_id' => 0,'code_principal' => $code_principal));
                }
                
                
                $no_kontainer = substr($row['no_kontainer'], 0,4)." ".substr($row['no_kontainer'], 4,11) ;
                $vessel = $row['vessel'];
                $reff_code = $row['reff_code'];
                $reff_description = $this->m_model->getvalue('ptmsagate','reff_description','t_m_refference',array('rec_id' => 0,'reff_code' => $reff_code));
                
                
                
                $t_t_entry_cont_in = array(
                    'id_cont_in'=>$id_cont_in,
                    'bon_bongkar_number'=>$bon_bongkar_number,
                    'eir_in'=>$eir_in,
                    'code_principal'=>$code_principal,
                    'name_principal'=>$name_principal,
                    'cont_number'=>$no_kontainer,
                    'dangers_goods'=>'No',
                    'vessel'=>$vessel,
                    'shipper'=>'.',
                    'truck_number'=>$row['no_plat_mobil'],
                    'driver_name'=>'',
                    'reff_code'=> $reff_code,
                    'reff_description'=>$reff_description,
                    'cont_condition'=>'AV',
                    'new_cont_condition'=>'AV',
                    'cont_status'=>'Full',
                    'new_cont_status'=>'Full',
                    'cont_date_in'=>$row['tgl_masuk'],
                    'cont_time_in'=>$row['jam_masuk'],
                    'block_loc'=>'.',
                    'location'=>'.. .. ..',
                    'ship_line_code'=>'.',
                    'ship_line_name'=>'.',
//                    'bc_code'=>'',
//                    'bc_name'=>'',
                    'invoice_in'=>'.',
                    'plate'=>'.',
                    'clean_type'=>'.',
                    'clean_date'=>NULL,
                    'notes'=>'.',
                    'created_by'=>'autogate',
                    'created_on'=> tanggal_sekarang(),
                    'rec_id'=>0,
                    'bruto'=>0,
                );
                
                $indata = $this->m_model->Save_Data('ptmsagate','t_t_entry_cont_in',$t_t_entry_cont_in);
                
                if ($indata >= 1) {
                    $pesan_data = array('msg' => 'Ya','t_t_entry_cont_in' => $t_t_entry_cont_in);
                }else{
                    $pesan_data = array('msg' => 'Tidak','t_t_entry_cont_in' => $t_t_entry_cont_in);
                    echo json_encode($pesan_data);die;
                }
                
                $t_t_stock = array(
//                    'id_stock' => '',
                    'id_cont_in' => $id_cont_in,
                    'code_principal'=>$code_principal,
                    'name_principal'=>$name_principal,
                    'cont_number' => $no_kontainer,
                    'dangers_goods' => 'No',
                    'vessel' => $vessel,
                    'reff_code' => $reff_code,
                    'reff_description' => $reff_description,
                    'cont_condition' => 'AV',
                    'cont_status' => 'Full',
                    'cont_date_in' => $row['tgl_masuk'],
                    'cont_time_in' => $row['jam_masuk'],
//                    'cont_date_out' => '',
//                    'cont_time_out' => '',
//                    'do_number' => '',
                    'bon_bongkar_number' => $bon_bongkar_number,
//                    'bon_muat_number' => '',
                    'block_loc'=>'.',
                    'location'=>'.. .. ..',
                    'ship_line_code'=>'.',
                    'ship_line_name'=>'.',
//                    'bc_code' => '',
                    'notes' => '.',
//                    'date_shifting' => '',
//                    'date_stripping' => '',
//                    'date_stuffing' => '',
                    'invoice_in' => '.',
                    'created_by'=>'autogate',
                    'created_on'=> tanggal_sekarang(),
                    'rec_id' => 0,
//                    'seal_number' => '',
//                    'no_eir' => '',
//                    'tgl_eir' => '',
//                    'No_Transaksi' => '',
                    'bruto' => 0,
                );
                
                $stockdata = $this->m_model->Save_Data('ptmsagate','t_t_stock',$t_t_stock);
                
                if ($stockdata >= 1) {
                    $pesan_data = array('msg' => 'Ya','t_t_entry_cont_in' => $t_t_entry_cont_in,'t_t_stock' => $t_t_stock);
                }else{
                    $pesan_data = array('msg' => 'Tidak','t_t_entry_cont_in' => $t_t_entry_cont_in,'t_t_stock' => $t_t_stock);
                    echo json_encode($pesan_data);die;
                }
                
                $t_eir = array(
//                    'id_eir_number'=>'',
                    'eir_type'=>'I',
                    'eir_number'=>$eir_in,
                    'bon_bongkar_number'=>$bon_bongkar_number,
//                    'bon_muat_number'=>'',
                    'code_principal'=>$code_principal,
                    'name_principal'=>$name_principal,
                    'cont_number'=>$no_kontainer,
//                    'do_number'=>'',
                    'vessel'=>$vessel,
//                    'shipper'=>'',
                    'truck_number'=>$row['no_plat_mobil'],
//                    'driver_name'=>'',
                    'reff_code' => $reff_code,
                    'reff_description' => $reff_description,
                    'cont_condition'=>'AV',
                    'cont_status'=>'Full',
                    'cont_date_in' => $row['tgl_masuk'],
                    'cont_time_in' => $row['jam_masuk'],
//                    'cont_date_out'=>'',
//                    'cont_time_out'=>'',
//                    'destination'=>'',
//                    'seal_number'=>'',
                    'block_loc'=>'.',
                    'location'=>'.. .. ..',
                    'notes'=>'.',
                    'created_by'=>'autogate',
                    'created_on'=> tanggal_sekarang(),
//                    'edited_by'=>'',
//                    'edited_on'=>'',
                    'rec_id'=>0,
//                    'no_eir'=>'',
//                    'tgl_eir'=>'',
//                    'No_Transaksi'=>'',
                    'bruto'=>0
                );
                
                $eirdata = $this->m_model->Save_Data('ptmsagate','t_eir',$t_eir);
                
                if ($eirdata >= 1) {
                    $pesan_data = array('msg' => 'Ya','t_t_entry_cont_in' => $t_t_entry_cont_in,'t_t_stock' => $t_t_stock,'t_eir' => $t_eir);
                }else{
                    $pesan_data = array('msg' => 'Tidak','t_t_entry_cont_in' => $t_t_entry_cont_in,'t_t_stock' => $t_t_stock,'t_eir' => $t_eir);
                    echo json_encode($pesan_data);die;
                }
                
                $data_tblgatein = array(
                    'id_cont_in' => $id_cont_in
                );
                $gatein_update = $this->m_model->Update_Data('tpsonline','tbl_gate_in',$data_tblgatein,array('id_gate_in' => $row['id_gate_in'],'proses_gate_in' => 'OnProgress'));
                
                if ($gatein_update >= 1) {
                    $pesan_data = array('msg' => 'Ya','t_t_entry_cont_in' => $t_t_entry_cont_in,'t_t_stock' => $t_t_stock,'t_eir' => $t_eir,'data_tblgatein' => $data_tblgatein);
                }else{
                    $pesan_data = array('msg' => 'Tidak','t_t_entry_cont_in' => $t_t_entry_cont_in,'t_t_stock' => $t_t_stock,'t_eir' => $t_eir,'data_tblgatein' => $data_tblgatein);
                    echo json_encode($pesan_data);die;
                }
                
                $update_eir_r_number = $this->m_model->update_eir_r_number();
                
            }
            
        }else{
            $pesan_data = array('msg' => 'Tidak','pesan' => 'Tidak Ada Data Yang Di Proses...');
            echo json_encode($pesan_data);die;
        }
        
        echo json_encode($pesan_data);
        
    }
    
    function c_gate_out(){
        
        $this->tpsonline->order_by('do_number','asc');
//        $this->tpsonline->limit(10);
        $gate_in = $this->tpsonline->get_where('tbl_gate_out',array('id_cont_out' => NULL,'proses_gate_out' => 'Finish','no_plat_mobil !=' => NULL,'do_number !=' => NULL));
//        $gate_in = $this->tpsonline->get_where('tbl_gate_out',array('id_cont_out' => NULL,'proses_gate_out' => 'Finish','no_plat_mobil !=' => NULL));
//        echo $this->tpsonline->last_query();
//        die;
        $a=0 ;$b=0 ;
        $queryinsert = array();
        $queryupdate = array();
        foreach($gate_in->result_array() as $row){
            
            $id_cont_out = $this->m_model->id_out();
            $bon_muat_number = $this->m_model->bon_muat_number();            
            $code_principal = $row['code_principal'] ;
            $name_principal = $this->m_model->getvalue('ptmsagate','name_principal','t_m_principal',array('rec_id' => 0,'code_principal' => $code_principal));
            $no_kontainer = substr($row['no_kontainer'], 0,4)." ".substr($row['no_kontainer'], 4,11) ;
            $reff_code = $row['reff_code'];
            $reff_description = $this->m_model->getvalue('ptmsagate','reff_description','t_m_refference',array('rec_id' => 0,'reff_code' => $reff_code));
            $eir_number = $this->m_model->eir_r_number_out();
            
            //Cek Banyak nya party berdasarkan do number dan ukuran kontainer
            $query = "  SELECT party,cont_out FROM t_t_entry_do_cont_out where cont_out<party and rec_id=0 and  do_number='".$row['do_number']."' and reff_code='".$row['reff_code']."'" ;
            $getparty = $this->ptmsagate->query($query)->result();
            $party = 0 ;
            foreach($getparty as $resparty){
                $party = $resparty->party ;
            }
            
            $where_out = array(
                'do_number' => $row['do_number'],
                'reff_code' => $row['reff_code'],
                'rec_id' => 0
            );
            
            $dataout = $this->ptmsagate->get_where('t_t_entry_cont_out',$where_out);

            $r_party = 0 ;
            if($dataout->num_rows() > 0 ){
                //ini do selanjutnya
//                if($dataout->num_rows() == 1){
//                    $r_party = 1;
//                }else{
//                    $r_party = $dataout->num_rows() + 1 ;
//                }
                $r_party = $dataout->num_rows() ;
            }else{
                //ini do pertama
                $r_party = 1;
            }
            
            $where = array(
                'rec_id' => 0,
                'cont_number' => $no_kontainer,                
            ); 
            
            $datastock = $this->ptmsagate->get_where('t_t_stock' ,$where)->result();
            
            $cont_date_in = "" ; $cont_time_in = "" ; $seal_number = "" ; $block_loc="" ; $location = "" ; $notes = "" ; $bruto = 0 ;
            foreach($datastock as $rowstock){
                $cont_date_in = $rowstock->cont_date_in;
                $cont_time_in = $rowstock->cont_time_in;
                $seal_number = $rowstock->seal_number;
                $block_loc = $rowstock->block_loc;
                $location = $rowstock->location;
                $notes = $rowstock->notes;
                $bon_bongkar_number = $rowstock->bon_bongkar_number;
                $bruto = $rowstock->bruto;
            }
            
            $t_t_entry_cont_out = array(
                'id_cont_out' => $id_cont_out ,
                'bon_muat_number' => $bon_muat_number ,
                'code_principal' => $code_principal ,
                'name_principal' => $name_principal ,
                'cont_number' => $no_kontainer,
                'dangers_goods' => 'No' ,
                'do_number' => $row['do_number'] ,
                'vessel' => $row['vessel'],
//                'shipper' => '' ,
                'truck_number' => $row['no_plat_mobil'] ,
//                'driver_name' => '' ,
                'reff_code' => $reff_code ,
                'reff_description' => $reff_description ,
                'cont_condition' => 'AV' ,
                'cont_status' => 'Full' ,
//                'invoice_in' => '' ,
                'ship_line_code' => '.' ,
                'ship_line_name' => '.' ,
                'cont_date_in' => $cont_date_in ,
                'cont_date_out' => $row['tgl_keluar'] ,
                'cont_time_out' => $row['jam_keluar'] ,
                'destination' => 'autogate' ,
                'seal_number' => $seal_number ,
                'block_loc' => $block_loc ,
                'location' => $location ,
                'notes' => $notes ,
                'r_party' => $r_party , //posisi keluar
                'party' => $party , //jumlah party
//                'bc_code' => '' ,
                'eir_number' => $eir_number,
                'bon_bongkar_number' => $bon_bongkar_number ,
                'created_by'=>'autogate',
                'created_on'=> tanggal_sekarang(),
                'rec_id' => 0 ,
                'No_Transaksi' => $row['no_transaksi'] ,
            );
            
            $outdata = $this->ptmsagate->insert('t_t_entry_cont_out', $t_t_entry_cont_out);
            $queryinsert[$a++] = $this->ptmsagate->last_query();
                
            if ($outdata >= 1) {
                $pesan_data = array('msg' => 'Ya','t_t_entry_cont_out' => $queryinsert);
            }else{
                $pesan_data = array('msg' => 'Tidak','t_t_entry_cont_out' => $queryinsert);
                echo json_encode($pesan_data);die;
            }
            
            $t_t_stock = array(
                'cont_date_out' => $row['tgl_keluar'],
                'cont_time_out' => $row['jam_keluar'],
                'do_number' => $row['do_number'],
                'bon_muat_number' => $bon_muat_number, 
                'notes' => $notes,
                'cont_condition' => 'AV',
                'edited_by' => 'autogate',
                'edited_on' => tanggal_sekarang(),
                'rec_id' => 0,
                'No_Transaksi' => $row['no_transaksi'],
            );
            $wherestock = array(
                'cont_number' => $no_kontainer,
                'rec_id' => 0,
            );
            $updatestock = $this->ptmsagate->update('t_t_stock', $t_t_stock, $wherestock);
            $queryupdate[$b++] = $this->ptmsagate->last_query();
            
            if ($updatestock >= 1) {
                $pesan_data = array('msg' => 'Ya','t_t_entry_cont_out' => $queryinsert,'t_t_stock' => $queryupdate);
            }else{
                $pesan_data = array('msg' => 'Tidak','t_t_entry_cont_out' => $queryinsert,'t_t_stock' => $queryupdate);
                echo json_encode($pesan_data);die;
            }
            
            $t_eir = array(
//                    'id_eir_number'=>'',
                    'eir_type'=>'O',
                    'eir_number'=>$eir_number,
//                    'bon_bongkar_number'=>'',
                    'bon_muat_number'=>$bon_muat_number,
                    'code_principal'=>$code_principal,
                    'name_principal'=>$name_principal,
                    'cont_number'=>$no_kontainer,
                    'do_number'=>$row['do_number'],
                    'vessel'=>$row['vessel'],
//                    'shipper'=>'',
                    'truck_number'=>$row['no_plat_mobil'],
//                    'driver_name'=>'',
                    'reff_code' => $reff_code,
                    'reff_description' => $reff_description,
                    'cont_condition'=>'AV',
                    'cont_status'=>'Full',
                    'cont_date_in' => $cont_date_in,
                    'cont_time_in' => $cont_time_in,
                    'cont_date_out'=> $row['tgl_keluar'] ,
                    'cont_time_out'=> $row['jam_keluar'],
//                    'destination'=>'',
                    'seal_number'=> $seal_number,
                    'block_loc'=> $block_loc,
                    'location'=> $location,
                    'notes'=>$notes,
                    'created_by'=>'autogate',
                    'created_on'=> tanggal_sekarang(),
//                    'edited_by'=>'',
//                    'edited_on'=>'',
                    'rec_id'=>0,
//                    'no_eir'=>'',
//                    'tgl_eir'=>'',
//                    'No_Transaksi'=>'',
                    'bruto'=>$bruto
                );
            
            $eirdata = $this->ptmsagate->insert('t_eir', $t_eir);
            $queryinsert[$a++] = $this->ptmsagate->last_query();
            
            if ($eirdata >= 1) {
                $pesan_data = array('msg' => 'Ya','t_t_entry_cont_out' => $queryinsert,'t_t_stock' => $queryupdate);
            }else{
                $pesan_data = array('msg' => 'Tidak','t_t_entry_cont_out' => $queryinsert,'t_t_stock' => $queryupdate);
                echo json_encode($pesan_data);die;
            }
            
            $data_tblgateout = array(
                'id_cont_out' => $id_cont_out
            );
            $gateout_update = $this->m_model->Update_Data('tpsonline','tbl_gate_out',$data_tblgateout,array('id_gate_out' => $row['id_gate_out'],'proses_gate_out' => 'Finish'));

            if ($gateout_update >= 1) {
                $pesan_data = array('msg' => 'Ya','t_t_entry_cont_out' => $queryinsert,'t_t_stock' => $queryupdate,'data_tblgateout' => $data_tblgateout);
            }else{
                $pesan_data = array('msg' => 'Tidak','t_t_entry_cont_out' => $queryinsert,'t_t_stock' => $queryupdate,'data_tblgateout' => $data_tblgateout);
                echo json_encode($pesan_data);die;
            }
                
            
            $query = " update t_t_entry_do_cont_out set cont_out=".$r_party." where  cont_out<party and do_number='".$row['do_number']."' and rec_id = 0" ;
            $update_do = $this->ptmsagate->query($query);
            if ($update_do >= 1) {
                $pesan_data = array('msg' => 'Ya','t_t_entry_cont_out' => $queryinsert,'t_t_stock' => $queryupdate,'data_tblgateout' => $data_tblgateout,'query' => $query);
            }else{
                $pesan_data = array('msg' => 'Tidak','t_t_entry_cont_out' => $queryinsert,'t_t_stock' => $queryupdate,'data_tblgateout' => $data_tblgateout,'query' => $query);
                echo json_encode($pesan_data);die;
            }

            $update_eir_r_number = $this->m_model->update_eir_r_number_out();
            
        }
        
        echo json_encode($pesan_data);
    }
    
}
