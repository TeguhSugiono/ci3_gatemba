<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
        <meta name="author" content="ParkerThemes">
        <link rel="shortcut icon" href="<?php echo site_url('assets/image/'); ?>logo_PTMBA.png" />
        <title>PT. Multi Bintang Abadi</title>
        <link rel="stylesheet" href="<?php echo site_url('assets/' . $themaweb . '/'); ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo site_url('assets/' . $themaweb . '/'); ?>fonts/style.css">
        <link rel="stylesheet" href="<?php echo site_url('assets/' . $themaweb . '/'); ?>css/main.css">
        <link rel="stylesheet" href="<?php echo site_url('assets/' . $themaweb . '/'); ?>vendor/datatables/dataTables.bs4.css" />
        <link rel="stylesheet" href="<?php echo site_url('assets/' . $themaweb . '/'); ?>vendor/datatables/dataTables.bs4-custom.css" />    
        <link rel="stylesheet" href="<?php echo site_url('assets/' . $themaweb . '/'); ?>vendor/datepicker/css/classic.css" />
        <link rel="stylesheet" href="<?php echo site_url('assets/' . $themaweb . '/'); ?>vendor/datepicker/css/classic.date.css" />
        
        <style type="text/css">
            .boxshadow{
                box-shadow: 3px 3px 10px rgba(0,0,0,0.6) !important;
            }
        </style>
        
    </head>

    <body>
        <div id="loading-wrapper">
            <div class='spinner-wrapper'>
                <div class='spinner'>
                    <div class='inner'></div>
                </div>
                <div class='spinner'>
                    <div class='inner'></div>
                </div>
                <div class='spinner'>
                    <div class='inner'></div>
                </div>
                <div class='spinner'>
                    <div class='inner'></div>
                </div>
                <div class='spinner'>
                    <div class='inner'></div>
                </div>
                <div class='spinner'>
                    <div class='inner'></div>
                </div>
            </div>
        </div>

        <header class="header" style="margin-bottom: -0%">
            <div class="container-fluid">


                <div class="row gutters">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                        <a href="<?php echo site_url('dashboard'); ?>" class="logo">Gate<span> System</span></a>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">


                        <ul class="header-actions">

                            <li class="dropdown">
                                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">


                                    <span class="avatar">
                                        <img src="<?php echo site_url('assets/image/'); ?>user.jpg" />

                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                                    <div class="header-profile-actions">
                                        <div class="header-user-profile">
                                            <div class="header-user">
                                                <img src="<?php echo site_url('assets/image/'); ?>user.png" />
                                            </div>
                                            <h5><?php echo strtoupper($this->session->userdata('autogate_username')); ?></h5>

                                        </div>

                                        <a href="<?php echo site_url('logout') ?>"><i class="icon-log-out1"></i> Sign Out</a>
                                    </div>
                                </div>
                            </li>
                        </ul>


                    </div>
                </div>


            </div>
        </header>

        <?php 
            
            $dashboard = ''; 
        
        ?>

        <div class="container-fluid p-0">

            <nav class="navbar navbar-expand-lg custom-navbar">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#royalHospitalsNavbar" aria-controls="royalHospitalsNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i></i>
                        <i></i>
                        <i></i>
                    </span>
                </button>

                
                <?php 
                    
                    $dashboard = "" ; 
                    $transaction = "" ;
                    if ($menu_aktif == "dashboard") {
                        $dashboard = "active-page";
                    }else if($menu_aktif == "transaction"){
                        $transaction = "active-page" ;
                    }


                
                ?>

                <div class="collapse navbar-collapse" id="royalHospitalsNavbar">
                    <ul class="navbar-nav">
                        
                        <li class="nav-item">
                            <a class="nav-link <?=$dashboard;?>" href="<?=site_url('dashboard');?>">
                                <i class="icon-home1 nav-icon"></i>
                                Dashboard
                            </a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="master" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-border_all nav-icon"></i>
                                Master
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="master">
                                <li>
                                    <a class="dropdown-item" href="#">Company</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Refference</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Principal</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Unblock Location</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Shipping Lines</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Beacukai Code</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?=$transaction;?>" href="#" id="incontainer" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-truck nav-icon"></i>
                                Transaction
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="incontainer">
                                <li>
                                    <a class="dropdown-item" href="<?=site_url('gatein');?>">Entry Cont In</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?=site_url('gateout');?>">Entry Cont Out</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Entry D/O Cont Out</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Cont Shifting</a>
                                </li>
                                <li>
                                    <a class="dropdown-toggle sub-nav-link" href="#" id="customDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Data Inquiry
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                                        <li>
                                            <a class="dropdown-item" href="#">Cont Overview</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Shifting Overview</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Delivery Order Overview</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Stock By Principal</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Stock By Location</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">In Out Container</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                        
                    </ul>
                </div>
            </nav>

<!--icon-local_shipping-->


            <div class="main-container">
                <?php $this->load->view($content); ?>
            </div>


            <footer class="main-footer">© PT. Multi Bintang Abadi</footer>

        </div>



        <script src="<?php echo site_url('assets/' . $themaweb . '/'); ?>js/jquery.min.js"></script>
        <script src="<?php echo site_url('assets/' . $themaweb . '/'); ?>js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo site_url('assets/' . $themaweb . '/'); ?>js/moment.js"></script>
        <script src="<?php echo site_url('assets/' . $themaweb . '/'); ?>vendor/apex/apexcharts.min.js"></script>
        <script src="<?php echo site_url('assets/' . $themaweb . '/'); ?>vendor/apex/examples/mixed/hospital-line-column-graph.js"></script>
        <script src="<?php echo site_url('assets/' . $themaweb . '/'); ?>vendor/apex/examples/mixed/hospital-line-area-graph.js"></script>
        <script src="<?php echo site_url('assets/' . $themaweb . '/'); ?>vendor/apex/examples/bar/hospital-patients-by-age.js"></script>
        <script src="<?php echo site_url('assets/' . $themaweb . '/'); ?>vendor/rating/raty.js"></script>
        <script src="<?php echo site_url('assets/' . $themaweb . '/'); ?>vendor/rating/raty-custom.js"></script>
        <script src="<?php echo site_url('assets/' . $themaweb . '/'); ?>vendor/datepicker/js/picker.js"></script>
        <script src="<?php echo site_url('assets/' . $themaweb . '/'); ?>vendor/datepicker/js/picker.date.js"></script>
        <script src="<?php echo site_url('assets/' . $themaweb . '/'); ?>js/main.js"></script>
        <script src="<?php echo site_url('assets/' . $themaweb . '/'); ?>vendor/datatables/dataTables.min.js"></script>
        <script src="<?php echo site_url('assets/' . $themaweb . '/'); ?>vendor/datatables/dataTables.bootstrap.min.js"></script>

        <script type="text/javascript">
            var url = '' ; var data = '' ; var pesan = '' ; var dataok = '' ;
            
//            var linkpage = "<?=$this->uri->segment(1);?>" ;
//            
//            $(document).ready(function() {
//                if(linkpage == "dashboard"){
//                    var element = document.getElementById("dashboard");
//                    console.log(element);
//                    element.classList.add("active-page");
//                }
//            });
            
            $('.datepicker').pickadate({
                format: 'dd-mm-yyyy',
            });

            function multi_ajax_proses(url, data, pesan) {
                var result = "";
                $.ajax({
                    url: url,
                    type: "POST",
                    data: data,
                    dataType: "JSON",
                    async: false,
                    success: function (data) {
                        result = data;
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        var dataError = {
                            pesan: pesan
                        };
                        result = dataError;
                    }
                });

                return result;
            }

        </script>

    </body>

</html>