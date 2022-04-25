<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

if (!function_exists('showdate_dmy')) {
    function showdate_dmy($tgl)
    {
        //return date('d-m-Y', strtotime($tgl));
        if ($tgl == '' || $tgl == NULL || $tgl == '0000:00:00' || $tgl == '0000:00:00 00:00:00') {
            return '';
        } else {
            return date('d-m-Y', strtotime($tgl));
        }
    }
}

if (!function_exists('showdate_dmybc')) {
    function showdate_dmybc($tgl)
    {
        //return date('d-m-Y', strtotime($tgl));
        if ($tgl == '' || $tgl == NULL || $tgl == '0000:00:00' || $tgl == '0000:00:00 00:00:00') {
            return '';
        } else {
            return date('d/m/Y', strtotime($tgl));
        }
    }
}


if (!function_exists('tanggal_sekarang')) {
    function tanggal_sekarang()
    {
        return date('Y-m-d H:i:s');
    }
}

if (!function_exists('jam_sekarang')) {
    function jam_sekarang()
    {
        return date('H:m:i');
    }
}

if (!function_exists('jam')) {
    function jam($jam)
    {
        return date('h:m A', strtotime($jam)); 
    }
}

if (!function_exists('tanggal_sekarang_with_nol')) {
    function tanggal_sekarang_with_nol()
    {
        return date('Y-m-d 00:00:00');
    }
}

if (!function_exists('date_db')) {
    function date_db($tgl)
    {
        if ($tgl == '' || $tgl == NULL || $tgl == '0000:00:00' || $tgl == '0000:00:00 00:00:00') {
            return NULL;
        } else {
            return date('Y-m-d', strtotime($tgl));
        }
    }
}

if (!function_exists('date_format_with_nol')) {
    function date_format_with_nol($tgl)
    {
        return date('Y-m-d 00:00:00', strtotime($tgl));
    }
}

if (!function_exists('selisih_tanggal')) {
    function selisih_tanggal($tgl1, $tgl2)
    {
        $date1 = date_create($tgl1);
        $date2 = date_create($tgl2);
        $diff = date_diff($date1, $date2)->format("%a");
        return $diff;
    }
}

if (!function_exists('getvalue')) {
    function getvalue($arraydata)
    {      
        $array = json_decode(json_encode($arraydata), true);
        return array_values($array)[0] ;
    }
}

if (!function_exists('ComboNonDb')) {
    function ComboNonDb($arraydata, $namecbo, $setname, $setclass) {
        $data['$namecbo'] = form_dropdown($namecbo, $arraydata, $setname, 'id="' . $namecbo . '" class="form-control ' . $setclass . '" style="width: 100%"');
        return $data['$namecbo'];
    }
}

if (!function_exists('ComboDb')) {
    function ComboDb($createcombo) {
        foreach ($createcombo['data'] as $row) {
            $arraydata[array_values($row)[0]] = array_values($row)[1];
        }
        $combo = form_dropdown($createcombo['attribute']['idname'], $arraydata, $createcombo['set_data']['set_id'], 'id="' . $createcombo['attribute']['idname'] . '" class="form-control ' . $createcombo['attribute']['class'] . '" style="width: 100%;" data-live-search="true"');
        return $combo;
    }

}

if (!function_exists('cbodisplay')) {
    function cbodisplay() {
        $data = array('10'=> '10 Data Per Halaman', '25' => '25 Data Per Halaman','50' => '50 Data Per Halaman','100' => '100 Data Per Halaman','1000' => '1000 Data Per Halaman') ;
        $createselect = ComboNonDb($data,'display','10','form-control');
        return $createselect;
    }
}

if (!function_exists('cbodisplay_on_modal')) {
    function cbodisplay_on_modal() {
        $data = array('10'=> '10 Data Per Halaman', '25' => '25 Data Per Halaman','50' => '50 Data Per Halaman','100' => '100 Data Per Halaman','1000' => '1000 Data Per Halaman') ;
        $createselect = ComboNonDb($data,'cbodisplay_on_modal','10','form-control');
        return $createselect;
    }
}

if (!function_exists('cbodisplay_out')) {
    function cbodisplay_out() {
        $data = array('10'=> '10 Data Per Halaman', '25' => '25 Data Per Halaman','50' => '50 Data Per Halaman','100' => '100 Data Per Halaman','1000' => '1000 Data Per Halaman') ;
        $createselect = ComboNonDb($data,'display_out','10','form-control');
        return $createselect;
    }
}

if (!function_exists('cbodisplay_do')) {
    function cbodisplay_do() {
        $data = array('10'=> '10 Data Per Halaman', '25' => '25 Data Per Halaman','50' => '50 Data Per Halaman','100' => '100 Data Per Halaman','1000' => '1000 Data Per Halaman') ;
        $createselect = ComboNonDb($data,'display_do','10','form-control');
        return $createselect;
    }
}


if (!function_exists('tambah_spasi')) {
    function tambah_spasi($field,$field_name) {
        $batas_value_per_field = 20 ;

        $jml_string_awal = strlen($field) ;
        $sisa_karakter = $batas_value_per_field - $jml_string_awal ;

        // if($field == "45DS"){
        //     $sisa_karakter = $sisa_karakter - 1 ;
        // }

        // if($field_name == "masuk"){
        //     if($jml_string_awal == 2){

        //     }
        // }

        //tambahkan spasi berdasarkan $sisa_karakter
        $spasi = "" ;
        for($a=1;$a<=$sisa_karakter;$a++){
            $spasi.=" " ;
        }

        $field = $field.$spasi ;
        return $field ;
    }
}
