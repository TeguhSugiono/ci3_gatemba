<style>        
    .dataout {background-color: yellow !important;}
    .margin-input{margin-bottom: -2.5% !important;}
</style>

<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Transaction</li>
        <li class="breadcrumb-item active">..::: Delivery Order Overview :::..</li>
    </ol>
</div>

<div class="content-wrapper">
    <div class="row gutters">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" >

            <div class="card">
                <div class="card-body boxshadow">

                    <div class="row gutters border" style="padding-top:0.6%;margin-bottom: -0%;">


                        <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-12 col-12">
                            
                            <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12 margin-input">
                                <div class="form-group row gutters">
                                    <label for="inputName" class="col-sm-4 col-form-label text-left">DO Number</label>
                                    <div class="col-sm-8">
                                        <input type="text" onkeypress="KeyPressEnter(event,this.id)" class="form-control form-control-sm hrufbesar" id="do_number" name="do_number">
                                    </div>
                                </div>
                            </div> 
                            <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12 margin-input">
                                <div class="form-group row gutters">
                                    <label for="inputName" class="col-sm-4 col-form-label text-left">Principal Code</label>
                                    <div class="col-sm-8">
                                        <input type="text" onkeypress="KeyPressEnter(event,this.id)" class="form-control form-control-sm hrufbesar" id="code_principal" name="code_principal">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12 margin-input">
                                <div class="form-group row gutters">
                                    <label for="inputName" class="col-sm-4 col-form-label text-left">Total Container</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm hrufbesar" id="total_container" name="total_container" value="0" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>



                        

                    </div>

                    <!-- <div style="border-top: 5px double black; margin-top: 1em; padding-top: 1em;"> </div> -->
                    <!--
                        dotted : Putus-putus kecil /burik dengan tebal garis 2px
                        solid : Garis padat dengan tebal garis 2px
                        double : Garis ganda dengan tebal garis 6px
                        groove : Alur dengan tebal garis 6px
                        ridge : punggungan dengan tebal garis 6px
                    -->
                    
                        <div class="row gutters">
                            <div class="table-container"> 
                                <div class="table-responsive" style="margin-top: 1%">

                                    <table id="tbl_do_order_overview" class="table m-0 dataTable no-footer nowrap" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Container Number</th>
                                                <th>Size/Type</th>
                                                <th>Status</th>
                                                <th>Condition</th>
                                                <th>Date Out</th>
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



<script src="<?= site_url(); ?>assets/js/jquery.min.js"></script>


<script type="text/javascript">
    var tbl_do_order_overview;

    $(document).ready(function(){
        refresh_table();
    });

    function refresh_table(){
        var do_number = $('#do_number').val();
        var code_principal = $('#code_principal').val();

        
        $('#tbl_do_order_overview').DataTable().destroy();
        $("#tbl_do_order_overview tbody").empty();
        
        url = '<?php echo site_url('transaksi/do_order_overview/tbl_do_order_overview') ?>';
        data = {
            do_number:do_number,
            code_principal:code_principal
        };
        pesan = 'function tbl_do_order_overview gagal';
        dataok = multi_ajax_proses(url, data, pesan);
        console.log(dataok.table_data);
        
        $('#tbl_do_order_overview').append(dataok.table_data);
        
        datatable();
        $('#tbl_do_order_overview').DataTable().draw();        
    }

    function datatable(){
        tbl_do_order_overview = $('#tbl_do_order_overview').DataTable({
            "searching": false,
            "paging":false,
            "info":false,
            "ordering": false,
            "lengthMenu": [50,100,1000],
            "pageLength": 50,
            //"dom": '<"toolbardetail">frtip',
            "createdRow": function( row, data, dataIndex){
                // console.log(data);
                // if( data[0] == 'satu'){
                //     $(row).addClass('warnasatu');
                // }else{
                //     $(row).addClass('warnadua');
                // }
            }
            ,   
            "columnDefs": [
                // {
                //     "targets": [0],
                //     "visible": false
                // }
                // ,
                // {
                //     "targets": [4,5,6],
                //     "className": "text-center" //dt-body-right dt-body-center dt-body-left
                // }                
            ]
        });
        
        // var toolbardetail = '<div class="float-sm-left float-md-left float-lg-left float-xl-left">\n\
        //                     <button type="button" class="btn btn-sm btn-raised gradient-crystal-clear white shadow-big-navbar mr-1 buttonku btnexport" style="margin-bottom: -0.5% !important">\n\
        //                         <i class="fa fa-download"></i> Export</button>\n\
        //                     </div>';

        // $("div.toolbardetail").html(toolbardetail);
    }
    
    function KeyPressEnter(event, IdElement) {
        if (event.keyCode == 13) { 
            if (IdElement == "do_number") {
                $('#code_principal').val('');
                $('#total_container').val(0);

                url = '<?php echo site_url('transaksi/do_order_overview/search') ?>';
                data = {do_number:$('#do_number').val(),code_principal:$('#code_principal').val()};
                pesan = 'JavaScript Search Error...';
                dataok = multi_ajax_proses(url, data, pesan);

                //console.log(dataok);
                if(dataok.msg != "Ya"){
                    alert(dataok.pesan);
                    return false;
                }

                $('#code_principal').focus();
            }

            if (IdElement == "code_principal") {

                url = '<?php echo site_url('transaksi/do_order_overview/search') ?>';
                data = {do_number:$('#do_number').val(),code_principal:$('#code_principal').val()};
                pesan = 'JavaScript Search Error...';
                dataok = multi_ajax_proses(url, data, pesan);
                console.log(dataok);
                
                if(dataok.msg != "Ya"){
                    alert(dataok.pesan);
                    return false;
                }


                
                refresh_table();
                $('#total_container').val(tbl_do_order_overview.page.info().recordsTotal);
            }
        }
    }

    $(document).on('click', '.btndelete', function(e) {
        $('#do_number').val('');
        $('#code_principal').val('');
        refresh_table();
    });
    


</script>