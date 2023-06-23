<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Master</li>
        <li class="breadcrumb-item active">..::: Master Refference :::..</li>
    </ol>
</div>

<div class="content-wrapper">
    <div class="row gutters">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" >

            <div class="card">
                <div class="card-body boxshadow">

                    <div class="row gutters">                        
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                            <div class="form-group">
                                <label for="inputName">Cari Data</label>
                                <input type="text" class="form-control" id="search"  name="search">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                            <div class="form-group">
                                <label for="inputName">Tampilkan</label>
                                <?=cbodisplay();?>
                            </div>
                        </div>
                    </div>


                    <div class="table-container">                        
                        <div class="table-responsive" style="margin-top: 1%">
                            
                            <div class="btn-group" style="margin-bottom:0.1%">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu" id="showaksi">
                                    <a class="dropdown-item btnadd"><span class="icon-control_point"></span>&nbsp;Add</a>
                                    <a class="dropdown-item btnedit"><span class="icon-edit"></span>&nbsp;Edit</a>
                                    <a class="dropdown-item btndelete"><span class="icon-x-circle"></span>&nbsp;Delete</a>
                                </div>
                            </div>
                            
                            <table id="tbl_refference" class="table m-0 dataTable no-footer nowrap" style="width: 100%"> 
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>id_refference</th>
                                        <th>Code</th>
                                        <th>Description</th>                                        
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

<div id='div_popup_form'></div>

<script src="<?= site_url(); ?>assets/js/jquery.min.js"></script>


<script type="text/javascript">
    var tbl_refference ;
    var id_refference = "" ;
    var selectbaris = 0 ;
    
    $('#search').on('keyup',function () {
        tbl_refference.search(this.value).draw();
    });
    
    $("#display").change(function() {
        tbl_refference.page.len(this.value).draw();
    });

    $(document).ready(function() {
        tbl_refference = $('#tbl_refference').DataTable({
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
            "lengthMenu": [[10, 25, 50,100, 1000], [10, 25, 50,100, 1000]],
            "pageLength": 10,
            "bLengthChange": true,
//            "dom": 'l<"toolbar">frtip',
//            "dom": '<"toolbar">Bfrtip',
//            "pagingType" : "full",
//            "dom" : "Bfrtip",
//            "dom": 'Bfrtip',
//                "buttons": [
//                'print'
//                ],
            "ajax": {
                "url": "<?php echo site_url('master/refference/tbl_refference') ?>",
                "type": "POST",
                "beforeSend": function() {
                        $("#loading-wrapper").show();
                    },
                "data": function(data) {
                    
                },
                "complete": function() {
                        $("#loading-wrapper").hide();
                        tbl_refference.$('tr.selected').removeClass('selected');
                        tbl_refference.row(selectbaris).nodes().to$().toggleClass( 'selected' );
                        
                        var data = tbl_refference.row(selectbaris).data();
                        id_refference = data[1];
                        
                    }

            },
            "columnDefs": [
                {
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

//        var html1 = ' <div class="btn-group" style="margin-bottom:3%">\n\
//                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\n\
//                                Action\n\
//                            </button>\n\
//                            <div class="dropdown-menu" id="showaksi">\n\
//                                <a class="dropdown-item btnadd"><span class="icon-control_point"></span>&nbsp;Add</a>\n\
//                                <a class="dropdown-item btnedit"><span class="icon-edit"></span>&nbsp;Edit</a>\n\
//                                <a class="dropdown-item btndelete"><span class="icon-x-circle"></span>&nbsp;Delete</a>\n\
//                            </div>\n\
//                        </div>\n\
//                        ';
//
//        $("div.toolbar").html(html1);
        
        

        $('#tbl_refference tbody').on('click', 'tr', function() {
            var data = tbl_refference.row(this).data();

            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
                id_refference = '' ;
                selectbaris = 0 ;
            } else {
                tbl_refference.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');

                id_refference = data[1];
                selectbaris = tbl_refference.row(this)[0];  
            }
        });

        
    });
    
    
    
    $(document).on('click', '.btnadd', function(e) {
        $.post('<?php echo site_url() ?>master/refference/formadd', {},
        function(xx) {
            $('#div_popup_form').html(xx);
            $("#modal_add").modal({
                show: true,
                backdrop: 'static',
            });
            $('.modal-title').text('Add Refference');
        });
    });


    $(document).on('click', '.btnedit', function(e) {
        if(id_refference == ''){
            alert('belum ada data yang dipilih..!!');
            return false;
        }

        $.post('<?php echo site_url() ?>master/refference/formedit', {id_refference:id_refference},
        function(xx) {
            $('#div_popup_form').html(xx);
            $("#modal_edit").modal({
                show: true,
                backdrop: 'static',
            });
            $('.modal-title').text('Edit Refference');
        });
    });

    $(document).on('click', '.btndelete', function(e) {
        if(id_refference == ''){
            alert('belum ada data yang dipilih..!!');
            return false;
        }

        var jawab = confirm('Anda yakin ingin menghapus data ini ?');

        if (jawab === true) { 
            url = '<?php echo site_url('master/refference/delete') ?>';
            data = {id_refference: id_refference};
            pesan = 'JavaScript Delete Error...';
            dataok = multi_ajax_proses(url, data, pesan);
        }else{
            return false;
        }

        if(dataok.msg != 'Ya'){
            alert(dataok.pesan);
            return false;
        }

        alert(dataok.pesan);
        id_refference = '';
        selectbaris = 0 ;
        tbl_refference.ajax.reload(null, false);
    });

   

    
</script>