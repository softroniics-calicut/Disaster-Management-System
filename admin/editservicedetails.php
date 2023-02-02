<?php
session_start();
include('../connection.php');
$details=$_GET['edit_id'];
 
 $service_details=mysqli_query($conn,"SELECT * FROM service_tb WHERE service_id='$details'");

 

if(isset($_POST['sub']))
{
    $head=$_POST['headings'];
    $ser=$_POST['services'];

    mysqli_query($conn,"UPDATE service_tb SET heading='$head',service='$ser' WHERE service_id='$details'");
    header('location: viewservice.php');
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
    <title>Service</title>
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
                        <h1>SERVICES</h1>
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
                                                        <strong>ADD</strong>services
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            <?php 
                                                            while($row=mysqli_fetch_assoc($service_details))
                                                            {

                                                            ?>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Heading</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="h1" name="headings" class="form-control" value="<?php echo $row['heading'];?>" onclick="clearerror('sh1')"><span id="sh1" style="color: red"></span></div>
                                                            </div>

                                                           <div class="row form-group">
                                                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Services</label></div>
                                                                <div class="col-12 col-md-9"><textarea name="services" id="s1" rows="9" class="form-control" onclick="clearerror('ss1')"><?php echo $row['service'];?></textarea><span id="ss1" style="color: red"></span></div>
                                                              </div>

                                                           <?php } ?>  

                                                           
                                                            

                                                            
                                                             

                                                          

                                                              
                                                             
                                                       <button type="submit" id="b1" name="sub" class="btn btn-primary btn-sm" onclick="return validate()">
                                                            <i class="fa fa-dot-circle-o"></i> Update
                                                        </button>
                                                        <button type="reset" id="b2" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-ban"></i> Cancel
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
                                    var uhead=document.getElementById("h1").value;
                                     var uservice=document.getElementById("s1").value;

                                     if(uhead=="")
                                     {
                                        document.getElementById("sh1").innerHTML="* empty field";
                                        return false;
                                     }
                                     if(uservice=="")
                                     {
                                        document.getElementById("ss1").innerHTML="* empty field";
                                        return false;
                                     }

                                }
                            </script>
                            <script type="text/javascript">
                                function clearerror(eee)
                                {
                                    document.getElementById(eee).innerHTML="";
                                }
                            </script>
  </form>
</body>

</html>
