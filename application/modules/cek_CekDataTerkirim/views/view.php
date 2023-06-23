<style>        
    .margin-input{margin-bottom: -2% !important;}
    .boldp{
        font-weight: 700;
    }
</style>

<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Cek Data</li>
        <li class="breadcrumb-item active">..::: Data Terkirim :::..</li>
    </ol>
</div>

<div class="content-wrapper">
    <div class="row gutters">
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">

            <div class="card">
                <div class="card-body boxshadow">
                    <form id="submit" class="form-horizontal" method="post" action="#" enctype="multipart/form-data">
                        <div class="row gutters" style="padding-top:0.6%;margin-bottom: -0%;">                                            
                            <div class="col-xl-6 col-lglg-6 col-md-6 col-sm-12 col-12">
                                <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12 margin-input">
                                    <div class="form-group row gutters">
                                        <label for="inputName" class="col-sm-4 col-form-label text-left">Username</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-sm" id="Username"  name="Username" autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group row gutters">
                                        <label for="inputName" class="col-sm-4 col-form-label text-left">Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control form-control-sm" id="Password"  name="Password" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lglg-6 col-md-6 col-sm-12 col-12">
                                <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12 margin-input">
                                    <div class="form-group row gutters">
                                        <label for="inputName" class="col-sm-4 col-form-label text-left">Start Date</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-sm datepicker-dropdowns" id="startdate"  name="startdate" value="<?php echo date('d-m-Y') ?>" >
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12 margin-input">
                                    <div class="form-group row gutters">
                                        <label for="inputName" class="col-sm-4 col-form-label text-left">End Date</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-sm datepicker-dropdowns" id="enddate"  name="enddate" value="<?php echo date('d-m-Y') ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12">
                                    <div style="float: right !important;">
                                        <button type="submit" style="width:100%;" class="btn btn-primary" id="btncekdata" id="btncekdata"><b><span class="icon-download1"></span> Cek Data</b></button>
                                    </div>                                    
                                </div>
                            </div>

                        </div>
                    </form>

                    
                    <div class="row gutters" style="margin-top: 1%;">                        
                        <div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-12">
                            <div class="table-container" style="width:100%;"> 

                                <div class="form-group row gutters" style="margin-top:2%;padding: 0 0 0 5px;">
                                    <label for="inputName" class="col-sm-12 col-form-label text-left"><div id="totalcontainer"></div></label>
                                </div>

                                <div class="table-responsive" style="margin-top: 1%;">
                                    <table id="tbl_respon_container" class="table m-0 dataTable no-footer nowrap" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>No Referensi</th>                                            
                                            </tr>
                                        </thead>
                                        <tbody>                                     
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-12">
                            <div class="table-container" style="width:100%"> 

                                <div class="form-group row gutters" style="margin-top:2%;padding: 0 0 0 5px;">
                                    <label for="inputName" class="col-sm-12 col-form-label text-left"><div id="totalkemasan"></div></label>
                                </div>

                                <div class="table-responsive" style="margin-top: 1%;">
                                    <table id="tbl_respon_kemasan" class="table m-0 dataTable no-footer nowrap" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>No Referensi</th>                                            
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
    var tbl_data_respon ;
    $(document).ready(function(){
        $('#totalcontainer').html('Jumlah Data Container : 0') ;
        $('#totalkemasan').html('Jumlah Data Kemasan : 0') ;
    });
    
    $('#submit').submit(function(e){
        e.preventDefault(); 
        
        $('#totalcontainer').html('Jumlah Data Container : 0') ;
        $('#totalkemasan').html('Jumlah Data Kemasan : 0') ;

        url = '<?php echo site_url('cek/CekDataTerkirim/download') ?>';
        data = new FormData(this); 
        pesan = 'JavaScript Cek Data Terkirim Error...';
        dataok = submit_ajax_proses(url, data, pesan);
        //console.log(dataok);

        if(dataok.msg != "Ya"){
            alert(dataok.pesan); 
            tbl_data_container('tbl_respon_container','',0);     
            tbl_data_container('tbl_respon_kemasan','',0);      
            return;
        }

        alert(dataok.pesan);

        if(dataok.jml_data_container > 0){
            $('#totalcontainer').html('Jumlah Data Container : '+dataok.data_container['JUMLAH']) ;
            tbl_data_container('tbl_respon_container',dataok.data_container['REF_NO']['RN'],dataok.data_container['JUMLAH']);

            console.log(dataok.data_container['REF_NO']['RN']) ;

            url = '<?php echo site_url('cek/CekDataTerkirim/sinkron_to_gateinfcl') ?>';
            datas = {data_container:dataok.data_container['REF_NO']['RN']}; 
            pesan = 'JavaScript sinkron_to_gateinfcl Error...';
            dataokx = multi_ajax_proses(url, datas, pesan);

            console.log(dataokx) ;


        }else{
            tbl_data_container('tbl_respon_container','',0);
        }

        if(dataok.jml_data_kemasan > 0){
            $('#totalkemasan').html('Jumlah Data Kemasan : '+dataok.data_kemasan['JUMLAH']) ;
            tbl_data_container('tbl_respon_kemasan',dataok.data_kemasan['REF_NO']['RN'],dataok.data_kemasan['JUMLAH']);


            url = '<?php echo site_url('cek/CekDataTerkirim/sinkron_to_gateinlcl') ?>';
            datas = {data_kemasan:dataok.data_kemasan['REF_NO']['RN']}; 
            pesan = 'JavaScript sinkron_to_gateinlcl Error...';
            dataokx = multi_ajax_proses(url, datas, pesan);

            console.log("LCL  => "+dataokx) ;

        }else{
            tbl_data_container('tbl_respon_kemasan','',0);
        }


    });

    function tbl_data_container(IdDatatable,data,jml){
        $('#' + IdDatatable).DataTable().destroy();
        $('#' + IdDatatable + ' tbody').empty();

        var html = "" ;
        let no = 1 ;

        if(jml > 0){
            for(let a = 0 ; a < jml ; a++){
                html = html+'<tr>' ;
                    html = html+'<td>' ;
                        html = html+no;
                    html = html+'</td>' ;
                    html = html+'<td>' ;
                        html = html+data[a];
                    html = html+'</td>' ;
                html = html+'</tr>' ;
                no++;
            }

            $('#' + IdDatatable).append(html);        
            datatable(IdDatatable);
            $('#' + IdDatatable).DataTable().draw();  
        }else{
            datatable(IdDatatable);
            $('#' + IdDatatable).DataTable().draw();  
        }
    }

    function datatable(IdDatatable){
        tbl_data_respon = $('#' + IdDatatable).DataTable({
            "searching": true,
            "paging":true,
            "info":false,
            "ordering": true,
            "lengthMenu": [10,100,1000],
            "pageLength": 10,
            "columnDefs": [{
                        "targets": [0],
                        "orderable": false
                        }]
        });
    }

</script>