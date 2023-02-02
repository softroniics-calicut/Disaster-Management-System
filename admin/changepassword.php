 <?php
 session_start();
include('../connection.php');
$details=$_GET['edit_id'];
if(isset($_POST['sub']))
{
    $user=$_POST['username'];
    $current_password=$_POST['currentpswrd'];
    $new_password=$_POST['newpswrd'];
    $retype=$_POST['retypepswrd'];

    $query=mysqli_query($conn,"SELECT * FROM login_tb WHERE user_name='$user' AND password='$current_password'");
    $value=mysqli_fetch_assoc($query);
    if(mysqli_num_rows($query)>0)
    {
        mysqli_query($conn,"UPDATE login_tb SET password='$retype' WHERE login_id='$value[login_id]'");

        echo "<script> alert('password successfully changed');</script>";
        echo "<script>window.history.back();</script>";

        
    }
    else
    {
         echo "<script> alert('wrong username or password  ');</script>";
        echo "<script>window.history.back();</script>";
    }
    

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
    <title>Change password</title>
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
                    
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                
                   
                    <!--/.col-->

                   

                                            <div class="col-lg-7" id="frm" align="center">
                                                <div class="card">
                                                    <div class="card-header" align="center">
                                                        <strong>CHANGE</strong> Password
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">User Name</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="user" name="username" class="form-control" onclick="clearerror('suser')"><span id="suser" style="color: red"></span></div>
                                                            </div>
                                                            
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Current password</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="current" name="currentpswrd" class="form-control" onclick="clearerror('scpswrd')"><span id="scpswrd" style="color: red"></span></div>
                                                            </div>


                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">New password</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="new" name="newpswrd" class="form-control" onclick="clearerror('snpswrd')"><span id="snpswrd" style="color: red"></span></div>
                                                            </div>
                                                            
                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Retype password</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="retype" name="retypepswrd" class="form-control" onclick="clearerror('sretype')"><span id="sretype" style="color: red"></span></div>
                                                            </div>

                                                       <button type="submit" id="b1" name="sub" class="btn btn-primary btn-sm" onclick="return validate()">
                                                            <i class="fa fa-dot-circle-o"></i> Submit
                                                        </button>
                                                        <button type="reset" id="b2" name="sub1" class="btn btn-danger btn-sm">
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
   var crnt_user=document.getElementById("user").value.trim(); 
    var crnt=document.getElementById("current").value.trim();
      var npassword=document.getElementById("new").value.trim();
         var type=document.getElementById("retype").value.trim();
    if(crnt_user=="")
    {
        document.getElementById("suser").innerHTML="* empty field";
        return false;
    }
    if(crnt=="")
    {
        document.getElementById("scpswrd").innerHTML="* empty field";
        return false;
    }
    if(npassword=="")
    {
        document.getElementById("snpswrd").innerHTML="* empty field";
        return false;
    }
     if(type=="")
    {
        document.getElementById("sretype").innerHTML="* empty field";
        return false;
    }



}
</script>
<script>
    function clearerror(eee)
    {
        document.getElementById(eee).innerHTML="";

    }
</script>

  </form>
</body>
</html>
