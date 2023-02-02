<?php
session_start();
include('../connection.php');
if(isset($_POST['sub']))
{
    $dr=$_POST['doc_name'];
    $dept_nm=$_POST['dept'];
    $req_m=$_POST['med'];
    $cnt=$_POST['count'];
    $h_n=$_POST['Hospital'];
    $cntct_info=$_POST['contact_info'];


       mysqli_query($conn,"INSERT INTO health_requirements(doctor_name,dept_name,required_medicine,count,hospital_name,contact_info) VALUES ('$dr','$dept_nm','$req_m','$cnt','$h_n','$cntct_info')");
       header('location:index.php');


}




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
    <title>Medical requirements</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <style type="text/css">
        #b1{margin-left: 0%;} 
        #frm{margin-left: 20%;}
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
                        <h1>MEDICAL REQUIREMENTS</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                
                   
                    <!--/.col-->

                   

                                            <div class="col-lg-7" id="frm" align="center">
                                                <div class="card">
                                                    <div class="card-header" align="center">
                                                        <strong>MEDICAL</strong> Requirements
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Doctor Name</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="i1" onclick="clearerror('sdr')" name="doc_name" class="form-control"><span id="sdr" style="color: red"></span></div>
                                                            </div>

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Dept Name</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="i2" name="dept" onclick="clearerror('sdn')" class="form-control"><span id="sdn" style="color: red"></span></div>
                                                            </div>

                                                              <div class="row form-group">
                                                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Required medicine</label></div>
                                                                <div class="col-12 col-md-9"><textarea name="med" id="i3" onclick="clearerror('srm')" rows="9" class="form-control"></textarea><span id="srm" style="color: red"></span></div>
                                                              </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Count</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="i4" onclick="clearerror('scount')" name="count" class="form-control"><span id="scount" style="color: red"></span></div>
                                                            </div>

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Hospital Name</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="i5" onclick="clearerror('shn')" name="Hospital" class="form-control"><span id="shn" style="color: red"></span></div>
                                                            </div>

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Contact info</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="i6" onclick="clearerror('sci')" name="contact_info" class="form-control"><span id="sci" style="color: red"></span></div>
                                                            </div>

                                                            
                                                              
                                                             
                                                       <button type="submit" id="b1" name="sub" onclick="return validate()" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Submit
                                                        </button>
                                                        <button type="reset" id="b2" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-ban"></i> Reset
                                                        </button>
                                                 
                                                               
                                                             
                                                               
                                                      
                                                    </div>
                                                   
                                                </div>
                                              
                                            </div>

                                           


                            


                                            
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
                            <script type="text/javascript">
                                function validate()
                                {
                                    var udoctr_name=document.getElementById("i1").value;
                                     var udept_name=document.getElementById("i2").value;
                                      var ureq_med=document.getElementById("i3").value;
                                       var ucount=document.getElementById("i4").value;
                                        var uhospital=document.getElementById("i5").value;
                                         var ucontact=document.getElementById("i6").value;

                                         if(udoctr_name=="")
                                         {
                                            document.getElementById('sdr').innerHTML="*empty field";
                                            return false;
                                         }
                                         if(udept_name=="")
                                         {
                                            document.getElementById("sdn").innerHTML="*empty field";
                                            return false;
                                         }
                                         if(ureq_med=="")
                                         {
                                            document.getElementById("srm").innerHTML="*empty field";
                                            return false;
                                         }


                                         if(ucount=="")
                                         {
                                            document.getElementById("scount").innerHTML="*empty field";
                                            return false;
                                         }
                                          if(isNaN(ucount))
                                         {
                                            document.getElementById("scount").innerHTML="*numbers only";
                                            return false;
                                         }

                                         if(uhospital=="")
                                         {
                                            document.getElementById("shn").innerHTML="*empty field";
                                            return false;
                                         }
                                         if(ucontact=="")
                                         {
                                            document.getElementById("sci").innerHTML="*empty field";
                                            return false;
                                         }

                                }
                            </script>
                            <script type="text/javascript">
                                function clearerror(e)
                                {
                                    document.getElementById(e).innerHTML="";

                                }
                            </script>
                              </form>
</body>
</html>
