<?php

defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'dashboard/c_dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['login'] = 'login/c_login';
$route['auth'] = 'login/c_login/auth';
$route['logout'] = 'login/c_login/logout';

$route['dashboard'] = 'dashboard/c_dashboard';

$route['search'] = 'search/c_search';
$route['search/table_search'] = 'search/c_search/c_table_search';
$route['search/getdata'] = 'search/c_search/c_getdata';
$route['search/cek_lock_gate'] = 'search/c_search/c_cek_lock_gate';
$route['search/cek_lock_segel'] = 'search/c_search/c_cek_lock_segel';

$route['pjt/tbl_chkpjt'] = 'pjt_list/c_list/c_tbl_chkpjt';

$route['pjt/entry/tbl_chkpjt'] = 'pjt_entry/c_entry/c_tbl_chkpjt';
$route['pjt/entry/formadd'] = 'pjt_entry/c_entry/c_formadd';
$route['pjt/entry/save'] = 'pjt_entry/c_entry/c_save';
$route['pjt/entry/formedit'] = 'pjt_entry/c_entry/c_formedit';
$route['pjt/entry/update'] = 'pjt_entry/c_entry/c_update';
$route['pjt/entry/delete'] = 'pjt_entry/c_entry/c_delete';
$route['pjt/entry/print'] = 'pjt_entry/c_entry/c_print';

$route['master/company/save'] = 'master_company/c_company/c_save';
 
$route['master/refference/tbl_refference'] = 'master_refference/c_refference/c_tbl_refference';
$route['master/refference/formadd'] = 'master_refference/c_refference/c_formadd';
$route['master/refference/save'] = 'master_refference/c_refference/c_save';
$route['master/refference/formedit'] = 'master_refference/c_refference/c_formedit';
$route['master/refference/update'] = 'master_refference/c_refference/c_update';
$route['master/refference/delete'] = 'master_refference/c_refference/c_delete';

$route['master/principal/tbl_principal'] = 'master_principal/c_principal/c_tbl_principal';
$route['master/principal/formadd'] = 'master_principal/c_principal/c_formadd';
$route['master/principal/save'] = 'master_principal/c_principal/c_save';
$route['master/principal/formedit'] = 'master_principal/c_principal/c_formedit';
$route['master/principal/update'] = 'master_principal/c_principal/c_update';
$route['master/principal/delete'] = 'master_principal/c_principal/c_delete';

$route['master/unblock/tbl_unblock'] = 'master_unblock/c_unblock/c_tbl_unblock';
$route['master/unblock/formadd'] = 'master_unblock/c_unblock/c_formadd';
$route['master/unblock/save'] = 'master_unblock/c_unblock/c_save';
$route['master/unblock/formedit'] = 'master_unblock/c_unblock/c_formedit';
$route['master/unblock/update'] = 'master_unblock/c_unblock/c_update';
$route['master/unblock/delete'] = 'master_unblock/c_unblock/c_delete';

$route['master/shipping/tbl_shipping'] = 'master_shipping/c_shipping/c_tbl_shipping';
$route['master/shipping/formadd'] = 'master_shipping/c_shipping/c_formadd';
$route['master/shipping/save'] = 'master_shipping/c_shipping/c_save';
$route['master/shipping/formedit'] = 'master_shipping/c_shipping/c_formedit';
$route['master/shipping/update'] = 'master_shipping/c_shipping/c_update';
$route['master/shipping/delete'] = 'master_shipping/c_shipping/c_delete';

$route['master/beacukai/tbl_beacukai'] = 'master_beacukai/c_beacukai/c_tbl_beacukai';
$route['master/beacukai/formadd'] = 'master_beacukai/c_beacukai/c_formadd';
$route['master/beacukai/save'] = 'master_beacukai/c_beacukai/c_save';
$route['master/beacukai/formedit'] = 'master_beacukai/c_beacukai/c_formedit';
$route['master/beacukai/update'] = 'master_beacukai/c_beacukai/c_update';
$route['master/beacukai/delete'] = 'master_beacukai/c_beacukai/c_delete';

$route['transaksi/entry_cont_in/tbl_entry_cont_in'] = 'transaksi_entry_cont_in/c_entry_cont_in/c_tbl_entry_cont_in';
$route['transaksi/entry_cont_in/formadd'] = 'transaksi_entry_cont_in/c_entry_cont_in/c_formadd';
$route['transaksi/entry_cont_in/search'] = 'transaksi_entry_cont_in/c_entry_cont_in/c_search';
$route['transaksi/entry_cont_in/save'] = 'transaksi_entry_cont_in/c_entry_cont_in/c_save';
$route['transaksi/entry_cont_in/formedit'] = 'transaksi_entry_cont_in/c_entry_cont_in/c_formedit';
$route['transaksi/entry_cont_in/update'] = 'transaksi_entry_cont_in/c_entry_cont_in/c_update';
$route['transaksi/entry_cont_in/delete'] = 'transaksi_entry_cont_in/c_entry_cont_in/c_delete';
$route['transaksi/entry_cont_in/print'] = 'transaksi_entry_cont_in/c_entry_cont_in/c_print';

$route['transaksi/entry_cont_out/tbl_do_cont_out'] = 'transaksi_entry_cont_out/c_entry_cont_out/c_tbl_do_cont_out';
$route['transaksi/entry_cont_out/get_do_contout'] = 'transaksi_entry_cont_out/c_entry_cont_out/c_get_do_contout';
$route['transaksi/entry_cont_out/formadd_do'] = 'transaksi_entry_cont_out/c_entry_cont_out/c_formadd_do';
$route['transaksi/entry_cont_out/save_do'] = 'transaksi_entry_cont_out/c_entry_cont_out/c_save_do';
$route['transaksi/entry_cont_out/formedit_do'] = 'transaksi_entry_cont_out/c_entry_cont_out/c_formedit_do';
$route['transaksi/entry_cont_out/update_do'] = 'transaksi_entry_cont_out/c_entry_cont_out/c_update_do';
$route['transaksi/entry_cont_out/delete_do'] = 'transaksi_entry_cont_out/c_entry_cont_out/c_delete_do';

$route['transaksi/entry_cont_out/tbl_entry_cont_out'] = 'transaksi_entry_cont_out/c_entry_cont_out/c_tbl_entry_cont_out';
$route['transaksi/entry_cont_out/formadd'] = 'transaksi_entry_cont_out/c_entry_cont_out/c_formadd';
$route['transaksi/entry_cont_out/search'] = 'transaksi_entry_cont_out/c_entry_cont_out/c_search';
$route['transaksi/entry_cont_out/save'] = 'transaksi_entry_cont_out/c_entry_cont_out/c_save';
$route['transaksi/entry_cont_out/formedit'] = 'transaksi_entry_cont_out/c_entry_cont_out/c_formedit';
$route['transaksi/entry_cont_out/update'] = 'transaksi_entry_cont_out/c_entry_cont_out/c_update';
$route['transaksi/entry_cont_out/delete'] = 'transaksi_entry_cont_out/c_entry_cont_out/c_delete';
$route['transaksi/entry_cont_out/print'] = 'transaksi_entry_cont_out/c_entry_cont_out/c_print';


$route['transaksi/cont_shifting/tbl_cont_shifting'] = 'transaksi_cont_shifting/c_cont_shifting/c_tbl_cont_shifting';
$route['transaksi/cont_shifting/formadd'] = 'transaksi_cont_shifting/c_cont_shifting/c_formadd';
$route['transaksi/cont_shifting/save'] = 'transaksi_cont_shifting/c_cont_shifting/c_save';
$route['transaksi/cont_shifting/search'] = 'transaksi_cont_shifting/c_cont_shifting/c_search';
$route['transaksi/cont_shifting/formedit'] = 'transaksi_cont_shifting/c_cont_shifting/c_formedit';
$route['transaksi/cont_shifting/update'] = 'transaksi_cont_shifting/c_cont_shifting/c_update';


$route['transaksi/cont_overview/search'] = 'transaksi_cont_overview/c_cont_overview/c_search';


$route['transaksi/shifting_overview/search'] = 'transaksi_shifting_overview/c_shifting_overview/c_search';
$route['transaksi/shifting_overview/tbl_cont_shifting_overview'] = 'transaksi_shifting_overview/c_shifting_overview/c_tbl_cont_shifting_overview';
$route['transaksi/shifting_overview/print'] = 'transaksi_shifting_overview/c_shifting_overview/c_print';


$route['transaksi/do_order_overview/search'] = 'transaksi_do_order_overview/c_do_order_overview/c_search';
$route['transaksi/do_order_overview/tbl_do_order_overview'] = 'transaksi_do_order_overview/c_do_order_overview/c_tbl_do_order_overview';


$route['transaksi/stock_by_principal/search'] = 'transaksi_stock_by_principal/c_stock_by_principal/c_search';
$route['transaksi/stock_by_principal/tbl_stock_by_principal'] = 'transaksi_stock_by_principal/c_stock_by_principal/c_tbl_stock_by_principal';

$route['transaksi/stock_by_location/search'] = 'transaksi_stock_by_location/c_stock_by_location/c_search';
$route['transaksi/stock_by_location/tbl_stock_by_location'] = 'transaksi_stock_by_location/c_stock_by_location/c_tbl_stock_by_location';
$route['transaksi/stock_by_location/print'] = 'transaksi_stock_by_location/c_stock_by_location/c_print';

$route['transaksi/in_out_container/search'] = 'transaksi_in_out_container/c_in_out_container/c_search';
$route['transaksi/in_out_container/tbl_in_out_container'] = 'transaksi_in_out_container/c_in_out_container/c_tbl_in_out_container';

$route['report/daily_cont_shifting/search'] = 'report_daily_cont_shifting/c_daily_cont_shifting/c_search';
$route['report/daily_cont_shifting/tbl_daily_cont_shifting'] = 'report_daily_cont_shifting/c_daily_cont_shifting/c_tbl_daily_cont_shifting';
$route['report/daily_cont_shifting/print'] = 'report_daily_cont_shifting/c_daily_cont_shifting/c_print';

$route['report/daily_movement_detail/search'] = 'report_daily_movement_detail/c_daily_movement_detail/c_search';
$route['report/daily_movement_detail/tbl_daily_movement_detail'] = 'report_daily_movement_detail/c_daily_movement_detail/c_tbl_daily_movement_detail';
$route['report/daily_movement_detail/print'] = 'report_daily_movement_detail/c_daily_movement_detail/c_print';
$route['report/daily_movement_detail/create_title_thead'] = 'report_daily_movement_detail/c_daily_movement_detail/c_create_title_thead';
$route['report/daily_movement_detail/export'] = 'report_daily_movement_detail/c_daily_movement_detail/c_export';

//$route['setting/report_excel'] = 'setting_report_excel/c_report_excel';
$route['setting/report_excel/tbl_excel_configuration'] = 'setting_report_excel/c_report_excel/c_tbl_excel_configuration';
$route['setting/report_excel/frmupload'] = 'setting_report_excel/c_report_excel/c_frmupload';
$route['setting/report_excel/upload'] = 'setting_report_excel/c_report_excel/c_upload';
$route['setting/report_excel/simpan_upload'] = 'setting_report_excel/c_report_excel/c_simpan_upload';
$route['setting/report_excel/test'] = 'setting_report_excel/c_report_excel/c_test';

$route['report/cont_movement_recapitulation/proses'] = 'report_cont_movement_recapitulation/c_cont_movement_recapitulation/c_proses' ;
$route['report/cont_movement_recapitulation/print'] = 'report_cont_movement_recapitulation/c_cont_movement_recapitulation/c_print';


$route['report/cont_stock_detail/proses'] = 'report_cont_stock_detail/c_cont_stock_detail/c_proses' ;
$route['report/cont_stock_detail/print'] = 'report_cont_stock_detail/c_cont_stock_detail/c_print' ;


require_once( BASEPATH . 'database/DB' . EXT );
$jobpjt = & DB('jobpjt');
$strquery = " SELECT  link_route,link_menu from tbl_menu_app where link_route<>'#' " ;
$query = $jobpjt->query($strquery);  
$result = $query->result();
foreach( $result as $row )
{
    $route[$row->link_route] = $row->link_menu;
}