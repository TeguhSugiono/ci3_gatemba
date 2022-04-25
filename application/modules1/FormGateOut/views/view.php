<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Gate Out</li>
    </ol>
</div>

<div class="content-wrapper">

    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            
            
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

        </div>

    </div>


</div>

<script src="<?= site_url(); ?>assets/js/jquery.min.js"></script>
<script type="text/javascript">
   var tbl_gateout ;
    
    $(document).ready(function() {

        tbl_gateout = $('#tbl_gateout').DataTable({
            "destroy": true,
            "processing": true,
            "serverSide": true,
            "order": [],
            "searching": true,
            "ordering": true,
            "scrollX": true,
            "scrollY": "400px",
            "scrollCollapse": true,
            "info": true,
            "lengthMenu": [100,200,500,1000],
            "pageLength": 100,
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
        
        
    });
    
    
    
</script>