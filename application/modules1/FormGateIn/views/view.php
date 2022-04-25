<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Transaction</li>
        <li class="breadcrumb-item active">..::: Entry Container In :::..</li>
    </ol>
</div>

<div class="content-wrapper">

    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            
            <div class="card">
                <div class="card-body">
                    <div class="row gutters">
                        
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                            <div class="form-group">
                                <label for="inputName">Proses Gate In</label>
                                <?=$proses_gate_in;?>
                            </div>
                        </div>
                        
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                            <div class="form-group">
                                <label for="inputName">Start Date</label>
                                <input type="text" class="form-control datepicker" id="tgl_masuk_start"  name="tgl_masuk_start" value=<?php echo date('d-m-Y') ?> >
                            </div>
                        </div>
                        
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                            <div class="form-group">
                                <label for="inputName">End Date</label>
                                <input type="text" class="form-control datepicker" id="tgl_masuk_end"  name="tgl_masuk_end" value=<?php echo date('d-m-Y') ?> >
                            </div>
                        </div>
                        
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="table-container boxshadow">                
                                <div class="table-responsive">
<!--                                    <h5 class="table-title" style="text-align: center">Table System Palang Gate In</h5>-->
                                    <table id="tbl_gatein" class="table display nowrap table m-0" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Id In</th>
                                                <th>Proses Gate In</th>
                                                <th>No Kontainer</th>
                                                <th>Ukuran</th>
                                                <th>No Plat</th>
                                                <th>Tgl Masuk</th>
                                                <th>Jam Masuk</th>
                                                <th>Tgl Keluar Trucking</th>
                                                <th>Jam Keluar Trucking</th>                                                
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
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>


</div>

<script src="<?= site_url(); ?>assets/js/jquery.min.js"></script>
<script type="text/javascript">
    var tbl_gatein;
    
    $(document).ready(function() {
        tbl_gatein = $('#tbl_gatein').DataTable({
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
                "url": "<?php echo site_url('gatein/tabel') ?>",
                "type": "POST",
                "beforeSend": function() {
                        $("#loading-wrapper").show();
                    },
                "data": function(data) {
                    data.tgl_masuk_start = $('#tgl_masuk_start').val();
                    data.tgl_masuk_end = $('#tgl_masuk_end').val();
                    data.proses_gate_in = $('#proses_gate_in').val();
                },
                "complete": function() {
                        $("#loading-wrapper").hide();
                    }

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

    $('#proses_gate_in').change(function () {
//        alert(this.value);
        if(this.value == "OnProgress"){
            $('#tgl_masuk_start').prop('disabled', true);
            $('#tgl_masuk_end').prop('disabled', true);
        }else{
            $('#tgl_masuk_start').prop('disabled', false);
            $('#tgl_masuk_end').prop('disabled', false);
        }
        tbl_gatein.ajax.reload(null, false);
        
    });
    
    
</script>