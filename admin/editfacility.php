<?php
session_start();
include('../connection.php');
$details=$_GET['edit_id'];
$edit=mysqli_query($conn,"SELECT * FROM camp_tb WHERE camp_id='$details'");
$row=mysqli_fetch_assoc($edit);


if(isset($_POST['sub']))
{
       $fac=$_POST['facil'];
          
        mysqli_query($conn,"UPDATE camp_tb SET facilities='$fac' WHERE camp_id='$details'");

        echo "<script> alert('Facility updated successfully');</script>";

        echo "<script> window.location.href='editcamp.php'</script>";
      

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
    <title>Facilities</title>
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
                        <h1>EDIT FACILITY</h1>
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
                                                        <strong>CAMP</strong> Form
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Camp Name</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="camp" name="cname" class="form-control" value="<?php echo $row['camp_name'];?>" disabled>
                                                        
                                                                </div>
                                                            </div>

                                                            <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Area</label></div>
                                                                    <div class="col-12 col-md-9">
                                                                       
                                                                        <select name="select1" id="type1" class="form-control" disabled>
                                                                            <option><?php echo $row['area_id'];?></option>
                                                                          
                                                                            
                                                                          
                                                                            
                                                                           
                                                                           
                                                                        </select>

                                                                    </div>
                                                            </div>

                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Land mark</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="mark" name="land" class="form-control"  value="<?php echo $row['land_mark'];?>" disabled></div>
                                                            </div>

                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Taluk</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="tlk" name="tal" class="form-control" value="<?php echo $row['taluk'];?>" disabled></div>
                                                            </div>



                                                             <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Camp Org Name</label></div>
                                                                    <div class="col-12 col-md-9">
                                                                       
                                                                        <select name="campon" id="coname" class="form-control" onclick="clearerror('stype')" disabled>
                                                                            <option><?php echo $row['camp_org_name'];?></option>
                                                                           
                                                                            
                                                                            
                                                                            
                                                                         
                                                                           
                                                                        </select>

                                                                    </div>
                                                            </div>
                                                           

                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Facility</label></div>
                                                                <div class="col-12 col-md-9"><textarea name="facil" id="facility" rows="5" class="form-control"><?php echo $row['facilities'];?></textarea><span id="sfa" style="color: red"></span></div>
                                                              </div>

                                                          







                                                            

                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Phone no</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="num" name="phone" class="form-control"  value="<?php echo $row['phone_no'];?>"disabled></div>
                                                            </div>

                                                           
                                                              <div class="row form-group">
                                                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                                                                <div class="col-12 col-md-9"><input type="email" id="emailid" name="email" class="form-control"  value="<?php echo $row['email'];?>" disabled> </div>
                                                            </div>

                                                            
                                                             

                                                          

                                                              
                                                             
                                                       <button type="submit" id="b1" name="sub" onclick="return validate()" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Submit
                                                        </button>
                                                        <button type="reset" id="b2" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-ban"></i> Reset
                                                        </button>
                                                 
                                                               
                                                             
                                                               
                                                        </form>
                                                    </div>
                                                   
                                                </div>
                                              
                                            </div>

                                           


                            


                                            
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->


 
</body>

<script src="vendors/jquery/dist/jquery.min.js"></script>
  <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

 <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>
 <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
 <script type="text/javascript">
 function validate()
       {
                                    var aname=document.getElementById("camp").value;
                                     var aplace=document.getElementById("type1").value;
                                      var aland=document.getElementById("mark").value;
                                      var atal=document.getElementById("tlk").value;
                                       var acon=document.getElementById("coname").value;
                                        var afac=document.getElementById("facility").value;
                                         var aphone=document.getElementById("num").value;
                                          var aemail=document.getElementById("emailid").value;

                                if(aname=="")
                                {
                                    document.getElementById("scn").innerHTML=" *name required";
                                    return false;
                                }
                                if(aplace=="")
                                {
                                    document.getElementById("splace").innerHTML=" *place required";
                                    return false;
                                }
                                if(aland=="")
                                {
                                    document.getElementById("slm").innerHTML=" *land mark required";
                                    return false;
                                }
                                if(atal=="")
                                {
                                    document.getElementById("staluk").innerHTML=" *taluk required";
                                    return false;
                                }
                                if(acon=="")
                                {
                                    document.getElementById("scon").innerHTML="*name requierd";
                                    return false;
                                }
                                if(afac=="")
                                {
                                    document.getElementById("sfa").innerHTML=" *facilities required";
                                    return false;
                                }
                                if(aphone=="")
                                {
                                    document.getElementById("sphn").innerHTML="*number required";
                                    return false;
                                }
                 
                                if(isNaN(aphone))
                                {
                                    document.getElementById("sphn").innerHTML="*numbers only";
                                    return false;
                                }

                                if(aphone.length<10||aphone.length>10)
                                {
                                    document.getElementById("sphn").innerHTML="*enter 10 numbers";
                                    //alert("enter 10 digit numbers");
                                    return false;
                                }

                                if(aemail==""||aemail.indexOf("@")==-1||aemail.indexOf(".")==-1)
                                {
                                    document.getElementById("semail").innerHTML="* missing of @,. please enter a valid email";
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
                        
</html>
