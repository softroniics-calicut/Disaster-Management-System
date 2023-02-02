 <?php
 session_start();
include('../connection.php');
$query=mysqli_query($conn,"SELECT * FROM area_tb");

if(isset($_POST['sub']))
{
  $nm=$_POST['name1'];
  $are=$_POST['area1'];
  $ph=$_POST['fon'];
  $mail=$_POST['email'];
  $typ=$_POST['select2'];
  $unm=$_POST['name2'];
  $pwd=$_POST['pswrd'];


      mysqli_query($conn,"INSERT INTO login_tb (user_name,password,type) VALUES('$unm','$pwd','$typ') ");
      $last_login_id=mysqli_insert_id($conn);
          

            $check_mobile=mysqli_query($conn,"SELECT * FROM register_tb WHERE phone_no='$ph'");
            $check_email=mysqli_query($conn,"SELECT * FROM register_tb WHERE email_id='$mail'");
         
            if(mysqli_num_rows($check_mobile)>0)
           {

            echo "<script> alert('Mobile number already exists!');</script>";
            echo "<script>window.history.back();</script>";
           }


           elseif(mysqli_num_rows($check_email)>0)
           {
            echo "<script> alert('email id already exists!');</script>";
            echo "<script>window.history.back();</script>";

           }
          
           else
               {  
            
            mysqli_query($conn,"INSERT INTO register_tb(name,area_id,phone_no,email_id,login_id,approve_status) values ('$nm','$are','$ph','$mail','$last_login_id','1')");
           echo "<script> alert('Registration completed'); </script>";
           echo "<script> window.location.href='register.php';</script>";
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
    <title>Registration</title>
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
                        <h1>ADD USERS</h1>
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
  <strong>REGISTRATION</strong> Form </div>
   <div class="card-body card-block">
   <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
   <div class="row form-group">
    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
     <div class="col-12 col-md-9">
      <input type="text" id="name" name="name1" class="form-control" onclick="clearerror('sname')">
      <span id="sname" style="color: red"></span><small class="form-text text-muted">enter name</small></div></div>

<div class="row form-group">
 <div class="col col-md-3"><label for="select" class=" form-control-label">Area</label></div>
  <div class="col-12 col-md-9">
  <select name="area1" id="type1" class="form-control" onclick="clearerror('stype1')">
    <option value="">--select--</option>
      <?php 
        while ($row=mysqli_fetch_assoc($query)) 
           {
      ?>
    <option value="<?php echo $row['area_id'];?>"><?php echo $row['area'];?></option>
      <?php } ?>  
                                                                           
  </select><span id="stype1" style="color: red"></span><small class="form-text text-muted">select area</small>
    </div>
    </div>
  <div class="row form-group">
  <div class="col col-md-3"><label class=" form-control-label">Phone no</label></div>
  <div class="col-12 col-md-9"><input onclick="clearerror('smob')" type="number" id="num" name="fon" class="form-control">
  <span id="smob" style="color: red"></span><small class="form-text text-muted">enter phone no</small></div></div>
                                                              
  <div class="row form-group">
    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
      <div class="col-12 col-md-9">
        <input onclick="clearerror('smail')" type="email" id="emailid" name="email" class="form-control">
        <span id="smail" style="color: red"></span><small class="form-text text-muted">Please enter your email</small>
      </div>
    </div>

  <div class="row form-group">
    <div class="col col-md-3"><label for="select" class=" form-control-label">Type</label></div>
      <div class="col-12 col-md-9">
        <select name="select2" id="type2" class="form-control" onclick="clearerror('stype2')">
          <option value="">--Please select--</option>
          <option value="police">POLICE</option>
          <option value="collector">COLLECTOR</option>
          <option value="volunteer">VOLUNTEER</option>
          <option value="camporganizer">CAMP ORGANISER</option>
          <option value="healthcoordinator">HEALTH COORDINATOR</option>
        </select><span id="stype2" style="color: red"></span>
      </div>
    </div>
  <div class="row form-group">
    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
      <div class="col-12 col-md-9"><input onclick="clearerror('suser')" type="text" id="user" name="name2" class="form-control"><span id="suser" style="color: red"></span><small class="form-text text-muted">enter user name</small>
    </div>
  </div>  

  <div class="row form-group">
    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password</label></div>
      <div class="col-12 col-md-9">
        <input onclick="clearerror('spass')" type="password" id="password" name="pswrd" class="form-control">
        <span id="spass" style="color: red"></span><small class="form-text text-muted">Please enter a complex password</small>
      </div>
  </div>

                                                              
                                                             
  <button type="submit" id="b1"  class="btn btn-primary btn-sm"onclick="return validate()" name="sub">
  <i class="fa fa-dot-circle-o"></i> Submit
  </button>
  <button type="reset" id="b2" name="sub1" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Reset</button>
    </form>
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
    var uname=document.getElementById("name").value;
     var uadd=document.getElementById("type1").value;
      var umob=document.getElementById("num").value;
       var umail=document.getElementById("emailid").value;
        var utype=document.getElementById("type2").value;
         var uuser=document.getElementById("user").value;
          var upass=document.getElementById("password").value;




    if(uname=="")
    {
        document.getElementById("sname").innerHTML="* empty field";
        return false;
    }


      if(uadd=="")
    {
        document.getElementById("stype1").innerHTML="* empty field";
        return false;
    }


   if(umob=="")
    {
        document.getElementById("smob").innerHTML="* empty field";
        return false;
    }

    if(isNaN(umob))
    {
         document.getElementById("smob").innerHTML="* numbers only";
               
         return false;
    }

   if(umob.length<10||umob.length>10)
    {
         document.getElementById("smob").innerHTML="*enter 10 numbers";
             //alert("enter 10 digit numbers");
         return false;
    }
    if(umail=="")
    {
      document.getElementById("smail").innerHTML="* empty field";
      return false;
    }

     if(umail.indexOf("@")==-1||umail.indexOf(".")==-1)
              {
                document.getElementById("smail").innerHTML="* missing of @,. please enter a valid email";
                return false;
    }



    if(utype=="")
    {
                document.getElementById("stype2").innerHTML="* empty field";
                return false;
    }

    if(uuser=="")
              {
                document.getElementById("suser").innerHTML=" * empty field";
                 return false;
              }


               if(upass=="")
              {
                document.getElementById("spass").innerHTML=" *password required";
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


</body>
</html>
