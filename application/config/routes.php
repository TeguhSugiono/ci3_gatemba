<?php

defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'dashboard/c_dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['login'] = 'login/c_login';
$route['auth'] = 'login/c_login/auth';
$route['logout'] = 'login/c_login/logout';

$route['dashboard'] = 'dashboard/c_dashboard';
$route['dashboard/settingtemplate'] = 'dashboard/c_dashboard/c_settingtemplate';
$route['dashboard/update'] = 'dashboard/c_dashboard/c_update';

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
$route['report/cont_stock_detail/export'] = 'report_cont_stock_detail/c_cont_stock_detail/c_export';


/*MODULE TPSONLINE*/
$route['master/jenis_angkutan/tbl_jenis_angkutan'] = 'master_jenis_angkutan/c_jenis_angkutan/c_tbl_jenis_angkutan';
$route['master/jenis_angkutan/formadd'] = 'master_jenis_angkutan/c_jenis_angkutan/c_formadd';
$route['master/jenis_angkutan/save'] = 'master_jenis_angkutan/c_jenis_angkutan/c_save';
$route['master/jenis_angkutan/formedit'] = 'master_jenis_angkutan/c_jenis_angkutan/c_formedit';
$route['master/jenis_angkutan/update'] = 'master_jenis_angkutan/c_jenis_angkutan/c_update';
$route['master/jenis_angkutan/delete'] = 'master_jenis_angkutan/c_jenis_angkutan/c_delete';

$route['master/jenis_document/tbl_jenis_document'] = 'master_jenis_document/c_jenis_document/c_tbl_jenis_document';
$route['master/jenis_document/formadd'] = 'master_jenis_document/c_jenis_document/c_formadd';
$route['master/jenis_document/save'] = 'master_jenis_document/c_jenis_document/c_save';
$route['master/jenis_document/formedit'] = 'master_jenis_document/c_jenis_document/c_formedit';
$route['master/jenis_document/update'] = 'master_jenis_document/c_jenis_document/c_update';
$route['master/jenis_document/delete'] = 'master_jenis_document/c_jenis_document/c_delete';

$route['master/jenis_container/tbl_jenis_container'] = 'master_jenis_container/c_jenis_container/c_tbl_jenis_container';
$route['master/jenis_container/formadd'] = 'master_jenis_container/c_jenis_container/c_formadd';
$route['master/jenis_container/save'] = 'master_jenis_container/c_jenis_container/c_save';
$route['master/jenis_container/formedit'] = 'master_jenis_container/c_jenis_container/c_formedit';
$route['master/jenis_container/update'] = 'master_jenis_container/c_jenis_container/c_update';
$route['master/jenis_container/delete'] = 'master_jenis_container/c_jenis_container/c_delete';

$route['master/jenis_export_import/tbl_jenis_export_import'] = 'master_jenis_export_import/c_jenis_export_import/c_tbl_jenis_export_import';
$route['master/jenis_export_import/formadd'] = 'master_jenis_export_import/c_jenis_export_import/c_formadd';
$route['master/jenis_export_import/save'] = 'master_jenis_export_import/c_jenis_export_import/c_save';
$route['master/jenis_export_import/formedit'] = 'master_jenis_export_import/c_jenis_export_import/c_formedit';
$route['master/jenis_export_import/update'] = 'master_jenis_export_import/c_jenis_export_import/c_update';
$route['master/jenis_export_import/delete'] = 'master_jenis_export_import/c_jenis_export_import/c_delete';

$route['master/jenis_stscontainer/tbl_jenis_stscontainer'] = 'master_jenis_stscontainer/c_jenis_stscontainer/c_tbl_jenis_stscontainer';
$route['master/jenis_stscontainer/formadd'] = 'master_jenis_stscontainer/c_jenis_stscontainer/c_formadd';
$route['master/jenis_stscontainer/save'] = 'master_jenis_stscontainer/c_jenis_stscontainer/c_save';
$route['master/jenis_stscontainer/formedit'] = 'master_jenis_stscontainer/c_jenis_stscontainer/c_formedit';
$route['master/jenis_stscontainer/update'] = 'master_jenis_stscontainer/c_jenis_stscontainer/c_update';
$route['master/jenis_stscontainer/delete'] = 'master_jenis_stscontainer/c_jenis_stscontainer/c_delete';


$route['cek/CekDataTerkirim'] = 'cek_CekDataTerkirim/c_CekDataTerkirim';
$route['cek/CekDataTerkirim/download'] = 'cek_CekDataTerkirim/c_CekDataTerkirim/c_download';
$route['cek/CekDataTerkirim/sinkron_to_gateinfcl'] = 'cek_CekDataTerkirim/c_CekDataTerkirim/c_sinkron_to_gateinfcl';
$route['cek/CekDataTerkirim/sinkron_to_gateinlcl'] = 'cek_CekDataTerkirim/c_CekDataTerkirim/c_sinkron_to_gateinlcl';

$route['cek/CekDataGagalKirim'] = 'cek_CekDataGagalKirim/c_CekDataGagalKirim';
$route['cek/CekDataGagalKirim/download'] = 'cek_CekDataGagalKirim/c_CekDataGagalKirim/c_download';

$route['cek/GetRejectData'] = 'cek_GetRejectData/c_GetRejectData';
$route['cek/GetRejectData/download'] = 'cek_GetRejectData/c_GetRejectData/c_download';

$route['cek/CekDataSPPB'] = 'cek_CekDataSPPB/c_CekDataSPPB';
$route['cek/CekDataSPPB/download'] = 'cek_CekDataSPPB/c_CekDataSPPB/c_download';

$route['download/GetResponPLP_Tujuan'] = 'download_GetResponPLP_Tujuan/c_GetResponPLP_Tujuan';
$route['download/GetResponPLP_Tujuan/download'] = 'download_GetResponPLP_Tujuan/c_GetResponPLP_Tujuan/c_download';
$route['download/GetResponPLP_Tujuan/tbl_petikemas_header'] = 'download_GetResponPLP_Tujuan/c_GetResponPLP_Tujuan/c_tbl_petikemas_header';
$route['download/GetResponPLP_Tujuan/tbl_petikemas_detail'] = 'download_GetResponPLP_Tujuan/c_GetResponPLP_Tujuan/c_tbl_petikemas_detail';
$route['download/GetResponPLP_Tujuan/transfer_fcl'] = 'download_GetResponPLP_Tujuan/c_GetResponPLP_Tujuan/c_transfer_fcl';
$route['download/GetResponPLP_Tujuan/transfer_lcl'] = 'download_GetResponPLP_Tujuan/c_GetResponPLP_Tujuan/c_transfer_lcl';
$route['download/GetResponPLP_Tujuan/export'] = 'download_GetResponPLP_Tujuan/c_GetResponPLP_Tujuan/c_export';



$route['download/GetResponPLP_onDemands'] = 'download_GetResponPLP_onDemands/c_GetResponPLP_onDemands';
$route['download/GetResponPLP_onDemands/download'] = 'download_GetResponPLP_onDemands/c_GetResponPLP_onDemands/c_download';
$route['download/GetResponPLP_onDemands/tbl_petikemas_header'] = 'download_GetResponPLP_onDemands/c_GetResponPLP_onDemands/c_tbl_petikemas_header';
$route['download/GetResponPLP_onDemands/tbl_petikemas_detail'] = 'download_GetResponPLP_onDemands/c_GetResponPLP_onDemands/c_tbl_petikemas_detail';
$route['download/GetResponPLP_onDemands/transfer_plp'] = 'download_GetResponPLP_onDemands/c_GetResponPLP_onDemands/c_transfer_plp';


$route['download/spjm'] = 'download_spjm/c_spjm';
$route['download/spjm/load_data'] = 'download_spjm/c_spjm/c_load_data';
$route['download/spjm/download'] = 'download_spjm/c_spjm/c_download';


$route['download/sppb_pib'] = 'download_sppb_pib/c_sppb_pib';
$route['download/sppb_pib/load_data'] = 'download_sppb_pib/c_sppb_pib/c_load_data';
$route['download/sppb_pib/download'] = 'download_sppb_pib/c_sppb_pib/c_download';


$route['download/sppb_bc'] = 'download_sppb_bc/c_sppb_bc';
$route['download/sppb_bc/load_data'] = 'download_sppb_bc/c_sppb_bc/c_load_data';
$route['download/sppb_bc/download'] = 'download_sppb_bc/c_sppb_bc/c_download';




$route['transaksi/gatein_fcl'] = 'transaksi_gatein_fcl/c_gatein_fcl';
$route['transaksi/gatein_fcl/tbl_gatein_fcl'] = 'transaksi_gatein_fcl/c_gatein_fcl/c_tbl_gatein_fcl';
$route['transaksi/gatein_fcl/formedit'] = 'transaksi_gatein_fcl/c_gatein_fcl/c_formedit';
$route['transaksi/gatein_fcl/update'] = 'transaksi_gatein_fcl/c_gatein_fcl/c_update';
$route['transaksi/gatein_fcl/formkirimdata'] = 'transaksi_gatein_fcl/c_gatein_fcl/c_formkirimdata';
$route['transaksi/gatein_fcl/kirimdata'] = 'transaksi_gatein_fcl/c_gatein_fcl/c_kirimdata';
$route['transaksi/gatein_fcl/sinkron_to_gateinfcl'] = 'transaksi_gatein_fcl/c_gatein_fcl/c_sinkron_to_gateinfcl';
$route['transaksi/gatein_fcl/change_reff_number'] = 'transaksi_gatein_fcl/c_gatein_fcl/c_change_reff_number';
$route['transaksi/gatein_fcl/delete_reff_number'] = 'transaksi_gatein_fcl/c_gatein_fcl/c_delete_reff_number';


$route['transaksi/gateout_fcl'] = 'transaksi_gateout_fcl/c_gateout_fcl';
$route['transaksi/gateout_fcl/tbl_gateout_fcl'] = 'transaksi_gateout_fcl/c_gateout_fcl/c_tbl_gateout_fcl';
$route['transaksi/gateout_fcl/formedit'] = 'transaksi_gateout_fcl/c_gateout_fcl/c_formedit';
$route['transaksi/gateout_fcl/update'] = 'transaksi_gateout_fcl/c_gateout_fcl/c_update';
$route['transaksi/gateout_fcl/formkirimdata'] = 'transaksi_gateout_fcl/c_gateout_fcl/c_formkirimdata';
$route['transaksi/gateout_fcl/kirimdata'] = 'transaksi_gateout_fcl/c_gateout_fcl/c_kirimdata';
$route['transaksi/gateout_fcl/sinkron_to_gateoutfcl'] = 'transaksi_gateout_fcl/c_gateout_fcl/c_sinkron_to_gateoutfcl';
$route['transaksi/gateout_fcl/change_reff_number'] = 'transaksi_gateout_fcl/c_gateout_fcl/c_change_reff_number';
$route['transaksi/gateout_fcl/delete_reff_number'] = 'transaksi_gateout_fcl/c_gateout_fcl/c_delete_reff_number';
$route['transaksi/gateout_fcl/import_gate_out'] = 'transaksi_gateout_fcl/c_gateout_fcl/c_import_gate_out';
$route['transaksi/gateout_fcl/table_data_out'] = 'transaksi_gateout_fcl/c_gateout_fcl/c_table_data_out';
$route['transaksi/gateout_fcl/proses_import_entryout'] = 'transaksi_gateout_fcl/c_gateout_fcl/c_proses_import_entryout';


$route['transaksi/gatein_lcl'] = 'transaksi_gatein_lcl/c_gatein_lcl';
$route['transaksi/gatein_lcl/tbl_gatein_lcl'] = 'transaksi_gatein_lcl/c_gatein_lcl/c_tbl_gatein_lcl';
$route['transaksi/gatein_lcl/formedit'] = 'transaksi_gatein_lcl/c_gatein_lcl/c_formedit';
$route['transaksi/gatein_lcl/update'] = 'transaksi_gatein_lcl/c_gatein_lcl/c_update';
$route['transaksi/gatein_lcl/formkirimdata'] = 'transaksi_gatein_lcl/c_gatein_lcl/c_formkirimdata';
$route['transaksi/gatein_lcl/kirimdata'] = 'transaksi_gatein_lcl/c_gatein_lcl/c_kirimdata';
$route['transaksi/gatein_lcl/sinkron_to_gateinlcl'] = 'transaksi_gatein_lcl/c_gatein_lcl/c_sinkron_to_gateinlcl';
$route['transaksi/gatein_lcl/change_reff_number'] = 'transaksi_gatein_lcl/c_gatein_lcl/c_change_reff_number';
$route['transaksi/gatein_lcl/sinkron_data'] = 'transaksi_gatein_lcl/c_gatein_lcl/c_sinkron_data';
$route['transaksi/gatein_lcl/unsinkron_data'] = 'transaksi_gatein_lcl/c_gatein_lcl/c_unsinkron_data';
$route['transaksi/gatein_lcl/delete_reff_number'] = 'transaksi_gatein_lcl/c_gatein_lcl/c_delete_reff_number';


$route['transaksi/gateout_lcl'] = 'transaksi_gateout_lcl/c_gateout_lcl';
$route['transaksi/gateout_lcl/tbl_gateout_lcl'] = 'transaksi_gateout_lcl/c_gateout_lcl/c_tbl_gateout_lcl';
$route['transaksi/gateout_lcl/formedit'] = 'transaksi_gateout_lcl/c_gateout_lcl/c_formedit';
$route['transaksi/gateout_lcl/update'] = 'transaksi_gateout_lcl/c_gateout_lcl/c_update';
$route['transaksi/gateout_lcl/formkirimdata'] = 'transaksi_gateout_lcl/c_gateout_lcl/c_formkirimdata';
$route['transaksi/gateout_lcl/kirimdata'] = 'transaksi_gateout_lcl/c_gateout_lcl/c_kirimdata';
$route['transaksi/gateout_lcl/sinkron_to_gateoutlcl'] = 'transaksi_gateout_lcl/c_gateout_lcl/c_sinkron_to_gateoutlcl';
$route['transaksi/gateout_lcl/change_reff_number'] = 'transaksi_gateout_lcl/c_gateout_lcl/c_change_reff_number';
$route['transaksi/gateout_lcl/sinkron_data'] = 'transaksi_gateout_lcl/c_gateout_lcl/c_sinkron_data';
$route['transaksi/gateout_lcl/unsinkron_data'] = 'transaksi_gateout_lcl/c_gateout_lcl/c_unsinkron_data';
$route['transaksi/gateout_lcl/change_reff_number_temp'] = 'transaksi_gateout_lcl/c_gateout_lcl/c_change_reff_number_temp';
$route['transaksi/gateout_lcl/delete_reff_number'] = 'transaksi_gateout_lcl/c_gateout_lcl/c_delete_reff_number';

/* END MODULE TPSONLINE*/


/* Report Invoice Request Mba Nisa */
$route['report/invoice_tpp_out/proses'] = 'report_invoice_tpp_out/c_report_invoice_tpp_out/c_proses' ;
$route['report/invoice_tpp_out/print'] = 'report_invoice_tpp_out/c_report_invoice_tpp_out/c_print' ;
$route['report/invoice_tpp_out/export'] = 'report_invoice_tpp_out/c_report_invoice_tpp_out/c_export';

$route['report/invoice_tpp_entry/proses'] = 'report_invoice_tpp_entry/c_report_invoice_tpp_entry/c_proses' ;
$route['report/invoice_tpp_entry/print'] = 'report_invoice_tpp_entry/c_report_invoice_tpp_entry/c_print' ;
$route['report/invoice_tpp_entry/export'] = 'report_invoice_tpp_entry/c_report_invoice_tpp_entry/c_export';

$route['report/invoice_ict_out/proses'] = 'report_invoice_ict_out/c_report_invoice_ict_out/c_proses' ;
$route['report/invoice_ict_out/print'] = 'report_invoice_ict_out/c_report_invoice_ict_out/c_print' ;
$route['report/invoice_ict_out/export'] = 'report_invoice_ict_out/c_report_invoice_ict_out/c_export';

$route['report/invoice_ict_entry/proses'] = 'report_invoice_ict_entry/c_report_invoice_ict_entry/c_proses' ;
$route['report/invoice_ict_entry/print'] = 'report_invoice_ict_entry/c_report_invoice_ict_entry/c_print' ;
$route['report/invoice_ict_entry/export'] = 'report_invoice_ict_entry/c_report_invoice_ict_entry/c_export';

$route['report/invoice_pjt_out/proses'] = 'report_invoice_pjt_out/c_report_invoice_pjt_out/c_proses' ;
$route['report/invoice_pjt_out/print'] = 'report_invoice_pjt_out/c_report_invoice_pjt_out/c_print' ;
$route['report/invoice_pjt_out/export'] = 'report_invoice_pjt_out/c_report_invoice_pjt_out/c_export';

$route['report/invoice_pjt_entry/proses'] = 'report_invoice_pjt_entry/c_report_invoice_pjt_entry/c_proses' ;
$route['report/invoice_pjt_entry/print'] = 'report_invoice_pjt_entry/c_report_invoice_pjt_entry/c_print' ;
$route['report/invoice_pjt_entry/export'] = 'report_invoice_pjt_entry/c_report_invoice_pjt_entry/c_export';

$route['report/invoice_lcl_out/proses'] = 'report_invoice_lcl_out/c_report_invoice_lcl_out/c_proses' ;
$route['report/invoice_lcl_out/print'] = 'report_invoice_lcl_out/c_report_invoice_lcl_out/c_print' ;
$route['report/invoice_lcl_out/export'] = 'report_invoice_lcl_out/c_report_invoice_lcl_out/c_export';

$route['report/invoice_lcl_entry/proses'] = 'report_invoice_lcl_entry/c_report_invoice_lcl_entry/c_proses' ;
$route['report/invoice_lcl_entry/print'] = 'report_invoice_lcl_entry/c_report_invoice_lcl_entry/c_print' ;
$route['report/invoice_lcl_entry/export'] = 'report_invoice_lcl_entry/c_report_invoice_lcl_entry/c_export';

$route['report/invoice_lcl_lain/proses'] = 'report_invoice_lcl_lain/c_report_invoice_lcl_lain/c_proses' ;
$route['report/invoice_lcl_lain/print'] = 'report_invoice_lcl_lain/c_report_invoice_lcl_lain/c_print' ;
$route['report/invoice_lcl_lain/export'] = 'report_invoice_lcl_lain/c_report_invoice_lcl_lain/c_export';

//warehouse check
$route['warehouse_transaksi/delivery'] = 'warehouse_transaksi_delivery/c_delivery' ;
$route['warehouse_transaksi/delivery/tbl_whsout_delivery'] = 'warehouse_transaksi_delivery/c_delivery/tbl_whsout_delivery' ;
$route['warehouse_transaksi/delivery/refresh_combo'] = 'warehouse_transaksi_delivery/c_delivery/c_refresh_combo' ;
$route['warehouse_transaksi/delivery/detail_bl'] = 'warehouse_transaksi_delivery/c_delivery/c_detail_bl' ;
$route['warehouse_transaksi/delivery/formadd'] = 'warehouse_transaksi_delivery/c_delivery/c_formadd' ;
$route['warehouse_transaksi/delivery/load_data_bl'] = 'warehouse_transaksi_delivery/c_delivery/c_load_data_bl' ;
$route['warehouse_transaksi/delivery/save'] = 'warehouse_transaksi_delivery/c_delivery/c_save' ;
$route['warehouse_transaksi/delivery/formedit'] = 'warehouse_transaksi_delivery/c_delivery/c_formedit';
$route['warehouse_transaksi/delivery/update'] = 'warehouse_transaksi_delivery/c_delivery/c_update';
$route['warehouse_transaksi/delivery/delete'] = 'warehouse_transaksi_delivery/c_delivery/c_delete';


$route['warehouse_master/category/tbl_category'] = 'warehouse_master_category/c_category/c_tbl_category';
$route['warehouse_master/category/formadd'] = 'warehouse_master_category/c_category/c_formadd';
$route['warehouse_master/category/save'] = 'warehouse_master_category/c_category/c_save';
$route['warehouse_master/category/formedit'] = 'warehouse_master_category/c_category/c_formedit';
$route['warehouse_master/category/update'] = 'warehouse_master_category/c_category/c_update';
$route['warehouse_master/category/delete'] = 'warehouse_master_category/c_category/c_delete';

$route['warehouse_master/vessel/tbl_vessel'] = 'warehouse_master_vessel/c_vessel/c_tbl_vessel';
$route['warehouse_master/vessel/formadd'] = 'warehouse_master_vessel/c_vessel/c_formadd';
$route['warehouse_master/vessel/save'] = 'warehouse_master_vessel/c_vessel/c_save';
$route['warehouse_master/vessel/formedit'] = 'warehouse_master_vessel/c_vessel/c_formedit';
$route['warehouse_master/vessel/update'] = 'warehouse_master_vessel/c_vessel/c_update';
$route['warehouse_master/vessel/delete'] = 'warehouse_master_vessel/c_vessel/c_delete';


$route['warehouse_master/consignee/tbl_consignee'] = 'warehouse_master_consignee/c_consignee/c_tbl_consignee';
$route['warehouse_master/consignee/formadd'] = 'warehouse_master_consignee/c_consignee/c_formadd';
$route['warehouse_master/consignee/save'] = 'warehouse_master_consignee/c_consignee/c_save';
$route['warehouse_master/consignee/formedit'] = 'warehouse_master_consignee/c_consignee/c_formedit';
$route['warehouse_master/consignee/update'] = 'warehouse_master_consignee/c_consignee/c_update';
$route['warehouse_master/consignee/delete'] = 'warehouse_master_consignee/c_consignee/c_delete';

$route['warehouse_master/tps/tbl_tps'] = 'warehouse_master_tps/c_tps/c_tbl_tps';
$route['warehouse_master/tps/formadd'] = 'warehouse_master_tps/c_tps/c_formadd';
$route['warehouse_master/tps/save'] = 'warehouse_master_tps/c_tps/c_save';
$route['warehouse_master/tps/formedit'] = 'warehouse_master_tps/c_tps/c_formedit';
$route['warehouse_master/tps/update'] = 'warehouse_master_tps/c_tps/c_update';
$route['warehouse_master/tps/delete'] = 'warehouse_master_tps/c_tps/c_delete';

$route['warehouse_master/shipper/tbl_shipper'] = 'warehouse_master_shipper/c_shipper/c_tbl_shipper';
$route['warehouse_master/shipper/formadd'] = 'warehouse_master_shipper/c_shipper/c_formadd';
$route['warehouse_master/shipper/save'] = 'warehouse_master_shipper/c_shipper/c_save';
$route['warehouse_master/shipper/formedit'] = 'warehouse_master_shipper/c_shipper/c_formedit';
$route['warehouse_master/shipper/update'] = 'warehouse_master_shipper/c_shipper/c_update';
$route['warehouse_master/shipper/delete'] = 'warehouse_master_shipper/c_shipper/c_delete';

$route['warehouse_master/lokasi/tbl_lokasi'] = 'warehouse_master_lokasi/c_lokasi/c_tbl_lokasi';
$route['warehouse_master/lokasi/formadd'] = 'warehouse_master_lokasi/c_lokasi/c_formadd';
$route['warehouse_master/lokasi/save'] = 'warehouse_master_lokasi/c_lokasi/c_save';
$route['warehouse_master/lokasi/formedit'] = 'warehouse_master_lokasi/c_lokasi/c_formedit';
$route['warehouse_master/lokasi/update'] = 'warehouse_master_lokasi/c_lokasi/c_update';
$route['warehouse_master/lokasi/delete'] = 'warehouse_master_lokasi/c_lokasi/c_delete';

require_once( BASEPATH . 'database/DB' . EXT );
$jobpjt = & DB('jobpjt');
$strquery = " SELECT  link_route,link_menu from tbl_menu_app where link_route<>'#' " ;
$query = $jobpjt->query($strquery);  
$result = $query->result();
foreach( $result as $row )
{
    $route[$row->link_route] = $row->link_menu;
}