<style>        
    .margin-input{margin-bottom: -2% !important;}
    .boldp{
        font-weight: 700;
    }
</style>

<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Download</li>
        <li class="breadcrumb-item active">..::: Data SPPB PIB (2.0) :::..</li>
    </ol>
</div>

<div class="content-wrapper">
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="card">
                <div class="card-body boxshadow">
                    <form id="submit" class="form-horizontal" method="post" action="#" enctype="multipart/form-data">
                        <div class="row gutters" style="padding-top:0.6%;margin-bottom: -0%;">        
                            


                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-12 col-12">
                                <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12 margin-input">
                                    <div class="form-group row gutters">
                                        <label for="inputName" class="col-sm-4 col-form-label text-left">Type</label>
                                        <div class="col-sm-8">
                                            <?=$nmservice;?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12 margin-input">
                                    <div class="form-group row gutters">
                                        <label for="inputName" class="col-sm-4 col-form-label text-left">Username</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-sm" id="Username"  name="Username" 
                                            autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group row gutters">
                                        <label for="inputName" class="col-sm-4 col-form-label text-left">Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control form-control-sm" id="Password"  name="Password"
                                            autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-12 col-12">
                                <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12 margin-input persppb">
                                    <div class="form-group row gutters">
                                        <label for="inputName" class="col-sm-4 col-form-label text-left">No SPPB</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-sm" id="No_Sppb"  name="No_Sppb"
                                            autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12 margin-input persppb">
                                    <div class="form-group row gutters">
                                        <label for="inputName" class="col-sm-4 col-form-label text-left">Tgl SPPB</label>
                                        <div class="col-sm-8">

                                            <input type="text" class="form-control form-control-sm datepicker-dropdowns" id="Tgl_Sppb"  name="Tgl_Sppb" value="<?php echo date('d-m-Y') ?>" >
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12 margin-input persppb">
                                    <div class="form-group row gutters">
                                        <label for="inputName" class="col-sm-4 col-form-label text-left">NPWP IMP</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-sm" id="NPWP_Imp"  name="NPWP_Imp"
                                            autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12 margin-input perkdgudang">
                                    <div class="form-group row gutters">
                                        <label for="inputName" class="col-sm-4 col-form-label text-left">Kode Gudang</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-sm" id="Kd_Gudang"  name="Kd_Gudang"
                                            autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12 margin-input perkdasp">
                                    <div class="form-group row gutters">
                                        <label for="inputName" class="col-sm-4 col-form-label text-left">Kode ASP</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-sm" id="Kd_ASP"  name="Kd_ASP"
                                            autocomplete="off">
                                        </div>
                                    </div>
                                </div>




                                <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12">
                                    <div style="float: right !important;">
                                        <button type="submit" style="width:100%;" class="btn btn-primary" id="btndownload" id="btndownload"><b><span class="icon-download1"></span> Download Data</b></button>
                                    </div>                                    
                                </div>
                            </div>

                        </div>
                    </form>

                    
                    <div class="row gutters" style="margin-top: 1%;">                        
                        <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12">
                            <div class="table-container" style="width:100%;"> 

                                <div class="form-group row gutters" style="margin-top:-0.5%;padding: 0 0 0 5px;text-align: center;font-size: 110%;">
                                    <label for="inputName" class="col-sm-12 col-form-label boldp">SPJM HEADER</label>
                                </div>

                                <div class="table-responsive" style="margin-top: -1%;">
                                    <table id="tbl_respon_spjm" class="table m-0 dataTable no-footer nowrap" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ID</th>
                                                <th>CAR</th>
                                                <th>KD_KANTOR</th>
                                                <th>NO_PIB</th>
                                                <th>TGL_PIB</th>
                                                <th>NPWP_IMP</th>
                                                <th>NAMA_IMP</th>
                                                <th>NPWP_PPJK</th>
                                                <th>NAMA_PPJK</th>
                                                <th>GUDANG</th>
                                                <th>JML_CONT</th>
                                                <th>NO_BC11</th>
                                                <th>TGL_BC11</th>
                                                <th>NO_POS_BC11</th>
                                                <th>FL_KARANTINA</th>     
                                                <th>NM_ANGKUT</th>
                                                <th>NO_VOY_FLIGHT</th>  
                                                <th>TGL_SPJM</th>                                     
                                            </tr>
                                        </thead>
                                        <tbody>                                     
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                        <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-12 col-12">
                            <div class="table-container" style="width:100%;"> 

                                <div class="form-group row gutters" style="margin-top:-1%;padding: 0 0 0 5px;text-align: center;font-size: 110%;">
                                    <label for="inputName" class="col-sm-12 col-form-label boldp">SPJM DOCUMENT</label>
                                </div>

                                <div class="table-responsive" style="margin-top: -3%;">
                                    <table id="tbl_respon_spjm_document" class="table m-0 dataTable no-footer nowrap" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ID</th>
                                                <th>ID_DET</th>
                                                <th>CAR</th>
                                                <th>JNS_DOK</th>
                                                <th>NO_DOK</th>       
                                                <th>TGL_DOK</th>               
                                            </tr>
                                        </thead>
                                        <tbody>                                     
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                        <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-12 col-12">
                            <div class="table-container" style="width:100%;"> 

                                <div class="form-group row gutters" style="margin-top:-1%;padding: 0 0 0 5px;text-align: center;font-size: 110%;">
                                    <label for="inputName" class="col-sm-12 col-form-label boldp">SPJM CONTAINER</label>
                                </div>

                                <div class="table-responsive" style="margin-top: -3%;">
                                    <table id="tbl_respon_spjm_container" class="table m-0 dataTable no-footer nowrap" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ID</th>
                                                <th>ID_DET</th>
                                                <th>CAR</th>
                                                <th>NO_CONT</th>
                                                <th>SIZE</th> 
                                                <th>FL_PERIKSA</th>                     
                                            </tr>
                                        </thead>
                                        <tbody>                                     
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>


                        <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-12 col-12">
                            <div class="table-container" style="width:100%;"> 

                                <div class="form-group row gutters" style="margin-top:-1%;padding: 0 0 0 5px;text-align: center;font-size: 110%;">
                                    <label for="inputName" class="col-sm-12 col-form-label boldp">SPJM KEMASAN</label>
                                </div>

                                <div class="table-responsive" style="margin-top: -3%;">
                                    <table id="tbl_respon_spjm_kms" class="table m-0 dataTable no-footer nowrap" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ID</th>
                                                <th>ID_DET</th>
                                                <th>CAR</th>
                                                <th>JNS_KMS</th>
                                                <th>MERK_KMS</th>   
                                                <th>JML_KMS</th>                      
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
    var param_alert = "" ;

    $(document).ready(function(){
        show_persppb();        
    });

    function show_persppb(){
        $('.persppb').css('display','block');
        $('.perkdgudang').css('display','none');
        $('.perkdasp').css('display','none');
        param_alert = "persppb" ;
    }

    function show_perkdgudang(){
        $('.persppb').css('display','none');
        $('.perkdgudang').css('display','block');
        $('.perkdasp').css('display','none');
        param_alert = "perkdgudang" ;
    }

    function show_perkdasp(){
        $('.persppb').css('display','none');
        $('.perkdgudang').css('display','none');
        $('.perkdasp').css('display','block');
        param_alert = "perkdasp" ;
    }

    $("#nmservice").change(function() {
        if(this.value == "GetImpor_SPPB"){
            show_persppb();
        }else if(this.value == "GetImporPermit" || this.value == "GetImporPermit200"){
            show_perkdgudang();
        }else{
            show_perkdasp();
        }
    });

</script>