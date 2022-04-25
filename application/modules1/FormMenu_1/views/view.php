<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
</div>

<div class="content-wrapper">

    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            
            
            
            <div class="table-container boxshadow">                
                <div class="table-responsive">
                    <h5 class="table-title" style="text-align: center">Table System Palang Gate In</h5>
                    <table id="tbl_gatein" class="table display nowrap table m-0" style="width: 100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id In</th>
                                <th>No Kontainer</th>
                                <th>Ukuran</th>
                                <th>No Plat</th>
                                <th>Tgl Masuk</th>
                                <th>Jam Masuk</th>
                                <th>Tgl Keluar Trucking</th>
                                <th>Jam Keluar Trucking</th>
                                <th>Proses Gate In</th>
                                <th>TPS Asal</th>
                                <th>Principal</th>
                                <th>Vessel</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="table-container boxshadow" style="margin-top: 3%">                
                <div class="table-responsive">
                    <h5 class="table-title" style="text-align: center">Table System Palang Gate Out</h5>
                    <table id="tbl_gateout" class="table display nowrap table m-0" style="width: 100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id In</th>
                                <th>No Transaksi</th>
                                <th>No Kontainer</th>
                                <th>No Plat</th>
                                <th>Tgl Keluar</th>
                                <th>Jam Keluar</th>
                                <th>Tgl Masuk Trucking</th>
                                <th>Jam Masuk Trucking</th>
                                <th>Proses Gate Out</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="table-container boxshadow" style="margin-top: 3%">
                <div class="table-responsive">
                    <h5 class="table-title" style="text-align: center">Table OB TPS Online</h5>
                    <table id="tbl_ob" class="table display nowrap table m-0" style="width: 100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id</th>
                                <th>No Kontainer</th>
                                <th>TPS Asal</th>
                                <th>Principal</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>


</div>

<script src="<?= site_url(); ?>assets/js/jquery.min.js"></script>
<script type="text/javascript">
    var tbl_gatein; var tbl_gateout ; var tbl_ob ;
    
    $(document).ready(function() {
        tbl_gatein = $('#tbl_gatein').DataTable({
            "destroy": true,
            "processing": true,
            "serverSide": true,
            "order": [],
            "searching": true,
            "ordering": true,
            "scrollX": true,
            "scrollY": "200px",
            "scrollCollapse": true,
            "info": true,
            "lengthMenu": [50],
            "pageLength": 50,
            "bLengthChange": true,
            "ajax": {
                "url": "<?php echo site_url('dashboard/tbl_gatein') ?>",
                "type": "POST",
//                "beforeSend": function() {
//                        $("#loading-wrapper").show();
//                    },
                "data": function(data) {
                    
                },
//                "complete": function() {
//                        $("#loading-wrapper").hide();
//                    }

            },
            "columnDefs": [{
                    "targets": [0,1],
                    "orderable": false
                }
                ,                
                {
                    "targets": [1],
                    "visible": false
                }
            ]
        });
        
        
        tbl_gateout = $('#tbl_gateout').DataTable({
            "destroy": true,
            "processing": true,
            "serverSide": true,
            "order": [],
            "searching": true,
            "ordering": true,
            "scrollX": true,
            "scrollY": "200px",
            "scrollCollapse": true,
            "info": true,
            "lengthMenu": [50],
            "pageLength": 50,
            "bLengthChange": true,
            "ajax": {
                "url": "<?php echo site_url('dashboard/tbl_gateout') ?>",
                "type": "POST",
//                "beforeSend": function() {
//                        $("#loading-wrapper").show();
//                    },
                "data": function(data) {
                    
                },
//                "complete": function() {
//                        $("#loading-wrapper").hide();
//                    }

            },
            "columnDefs": [{
                    "targets": [0,1],
                    "orderable": false
                }
                ,                
                {
                    "targets": [1],
                    "visible": false
                }
            ]
        });
        
        tbl_ob = $('#tbl_ob').DataTable({
            "destroy": true,
            "processing": true,
            "serverSide": true,
            "order": [],
            "searching": true,
            "ordering": true,
            "scrollX": true,
            "scrollY": "200px",
            "scrollCollapse": true,
            "info": true,
            "lengthMenu": [50],
            "pageLength": 50,
            "bLengthChange": true,
            "ajax": {
                "url": "<?php echo site_url('dashboard/tbl_ob') ?>",
                "type": "POST",
//                "beforeSend": function() {
//                        $("#loading-wrapper").show();
//                    },
                "data": function(data) {
                    
                },
//                "complete": function() {
//                        $("#loading-wrapper").hide();
//                    }

            },
            "columnDefs": [{
                    "targets": [0,1],
                    "orderable": false
                }
                ,                
                {
                    "targets": [1],
                    "visible": false
                }
            ]
        });
        setInterval(function(){
            get_data_tpsonline();
            gate_in();
            get_do_contout();
            create_do_contout();
            gate_out();
            tbl_gatein.ajax.reload(null, false);
            tbl_gateout.ajax.reload(null, false);
            tbl_ob.ajax.reload(null, false);
        }, 100000); //100 detik
        
    });
    
    function get_data_tpsonline(){
        url = '<?php echo site_url('dashboard/get_data_tpsonline') ?>';
        dataok = multi_ajax_proses(url, '', '');
        console.log(dataok) ;
    }
    
    function gate_in(){
        url = '<?php echo site_url('dashboard/gate_in') ?>';
        dataok = multi_ajax_proses(url, '', '');
        console.log(dataok) ;
    }
    
    function get_do_contout(){
        url = '<?php echo site_url('dashboard/get_do_contout') ?>';
        dataok = multi_ajax_proses(url, '', '');
        console.log(dataok) ;
    }
    
    function create_do_contout(){
         url = '<?php echo site_url('dashboard/create_do_contout') ?>';
        dataok = multi_ajax_proses(url, '', '');
        console.log(dataok) ;
    }

    function gate_out(){
        url = '<?php echo site_url('dashboard/gate_out') ?>';
        dataok = multi_ajax_proses(url, '', '');
        console.log(dataok) ;
    }
    
</script>