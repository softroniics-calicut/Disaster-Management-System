<?php
session_start();
include('../connection.php');

if(!$_SESSION["user_id"])
{
    header("location:login.php");
}
// var_dump($_SESSION);exit();


?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FLOOD</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
 <style type="text/css">
    
 </style>
</head>

<body>


    <!-- Left Panel -->
 
<?php include 'leftpanel.php' ?>

    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include 'nav.php' ?>
       <!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">HELP!!</span> Help line numbers
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>


            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        
                       
                        <p class="text-light" align="center">Calicut</p>

                        

                    </div>

                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        
                        
                        <p class="text-light" align="center">Malappuram</p>

                        

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                       
                        
                        <p class="text-light" align="center">palakkad</p>


                    </div>

                   
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                       
                        
                        <p class="text-light" align="center">alappuzha</p>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 col-lg-6">
                <div class="card" id="teli">
                    <div class="card-body" style="padding-left: 14px;">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-phone"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Help line</div>
                                <div class="stat-digit">0495-273255</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-6">
                <div class="card" id="teli">
                    <div class="card-body" style="padding-left: 14px;">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-phone"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Help line</div>
                                <div class="stat-digit">0483-265554</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6">
                <div class="card" id="teli">
                    <div class="card-body" style="padding-left: 14px;">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-phone"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Help line</div>
                                <div class="stat-digit">0496-286654</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

              <div class="col-xl-3 col-lg-6">
                <div class="card" id="teli">
                    <div class="card-body" style="padding-left: 14px;">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-phone"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Help line</div>
                                <div class="stat-digit">0477-212234</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card" id="teli">
                    <div class="card-body" style="padding-left: 14px;">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-phone"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Police</div>
                                <div class="stat-digit">0495-276545</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-6">
                <div class="card" id="teli">
                    <div class="card-body" style="padding-left: 14px;">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-phone"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Police</div>
                                <div class="stat-digit">0483-264522</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6">
                <div class="card" id="teli">
                    <div class="card-body" style="padding-left: 14px;">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-phone"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Police</div>
                                <div class="stat-digit">0496-283334</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

              <div class="col-xl-3 col-lg-6">
                <div class="card" id="teli">
                    <div class="card-body" style="padding-left: 14px;">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-phone"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Police</div>
                                <div class="stat-digit">0477-213258</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card" id="teli">
                    <div class="card-body" style="padding-left: 14px;">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-phone"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Help line</div>
                                <div class="stat-digit">0495-273244</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-6">
                <div class="card" id="teli">
                    <div class="card-body" style="padding-left: 14px;">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-phone"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Help line</div>
                                <div class="stat-digit">0483-267781</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6">
                <div class="card" id="teli">
                    <div class="card-body" style="padding-left: 14px;">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-phone"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Help line</div>
                                <div class="stat-digit">0496-289971</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

              <div class="col-xl-3 col-lg-6">
                <div class="card" id="teli">
                    <div class="card-body" style="padding-left: 14px;">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-phone"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Help line</div>
                                <div class="stat-digit">0477-213698</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.col-->

           
            <!--/.col-->


           
            <!--/.col-->


           
            <!--/.col-->


          
                <!--/social-box-->
            </div>
            <!--/.col-->

       


          


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
