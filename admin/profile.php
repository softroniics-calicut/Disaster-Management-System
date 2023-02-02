 <?php
 session_start();
include('../connection.php');
$user=$_SESSION["user_id"];
//var_dump($user);
if($_SESSION["type_id"]!='guest')
{
$query=mysqli_query($conn,"SELECT * FROM register_tb JOIN login_tb ON login_tb.login_id=register_tb.login_id WHERE register_tb.login_id='$user'");

}
if($_SESSION["type_id"]=='guest')
{
$query=mysqli_query($conn,"SELECT * FROM guest_tb JOIN login_tb ON login_tb.login_id=guest_tb.login_id WHERE guest_tb.login_id='$user'"); 
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
    <title>PROFILE</title>
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
        #carddiv{margin-left: 20%;}
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
                        <h1></h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                
                   
                    <!--/.col-->

                   

                <div class="col-md-6" id="carddiv">
                    <form id="cardfrm">
                        <div class="card">
                            <div class="card-header" align="center">
                                <strong class="card-title mb-3">Profile</strong>
                            </div>

                            <?php
                                    while($row=mysqli_fetch_assoc($query))
                                    {
                                        ?>

                            <div class="card-body">
                                
                                       
                                 <section class="card">
                                    
                                  <?php 
                                        if( $row['type']!='guest')
                                            { ?>   
                                <div class="card-header user-header alt bg-dark">
                                    <div class="media">
                                        <a href="#">
                                            <img class="align-self-center rounded-circle mr-3" style="width:75px; height:73px;" alt="" src="images/admin.png">
                                        </a>
                                        <div class="media-body">
                                            <h2 class="text-light display-6"><?php echo $row['name'];?></h2>
                                            
                                        </div>
                                    </div>
                                </div>


                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                    <label>Mobile:</label>    <label>  <?php echo $row['phone_no'];?></label>
                                    </li>
                                    <li class="list-group-item">
                                        <label>Email:</label><label>   <?php echo $row['email_id'];?></label>
                                    </li>
                                   
                                </ul>
                           

                         
       <?php } ?>        

                             <?php if($row['type']=='guest') 
                             {
                                ?>
                               
                                    
                                <div class="card-header user-header alt bg-dark">
                                    <div class="media">
                                        <a href="#">
                                            <img class="align-self-center rounded-circle mr-3" style="width:75px; height:73px;" alt="" src="images/admin.png">
                                        </a>
                                        <div class="media-body">
                                            <h2 class="text-light display-6"><?php echo $row['name'];?></h2>
                                            <p>Guest User</p>
                                        </div>
                                    </div>
                                </div>


                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                    <label>Mobile Number:  </label>   <label> <?php echo $row['mobile_no'];?></label>
                                    </li>
                                   
                                 
                                </ul>
                       <?php } ?>    

                            </section>


                                <hr>
                                <div class="card-text text-sm-center">
                                    <a href="changepassword.php?edit_id=<?php echo $row['login_id'];?>">Change password</a>
                                    
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </form>
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
    


    if(uname=="")
    {
        document.getElementById("sname").innerHTML="* empty field";
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
