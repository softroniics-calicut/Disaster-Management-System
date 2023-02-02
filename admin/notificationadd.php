<?php
session_start();
include('../connection.php');
$query=mysqli_query($conn,"SELECT * FROM camp_tb");
if(isset($_POST['sub']))
{
    $c_id=$_POST['select1'];
    $tt=$_POST['name1'];
    $msg=$_POST['name2'];

       mysqli_query($conn,"INSERT INTO notification_tb(camp_id,title,message) VALUES('$c_id','$tt','$msg')");
       echo "<script> alert('New Message added');</script>";
       echo "<script> window.location.href='viewnoti.php'</script>";
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
    <title>Add notification</title>
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
                        <h1>NOTIFICATION</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                
                   
                    <!--/.col-->

                   

                                            <div class="col-lg-9" id="frm" align="center" style="margin-left: 100px;">
                                                <div class="card">
                                                    <div class="card-header" align="center">
                                                        <strong>NOTIFICATIONS</strong>
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                              <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">camp name</label></div>
                                                                    <div class="col-12 col-md-9">
                                                                       
                                                                        <select name="select1" id="camp" class="form-control" onclick="clearerror('scamp')">
                                                                            <option value="">--select--</option>
                                                                           <?php 
                                                                            while ($row=mysqli_fetch_assoc($query)) 
                                                                            {
                                                                             ?>
                                                                            
                                                                            <option value="<?php echo $row['camp_id'];?>"><?php echo $row['camp_name'];?></option>
                                                                            
                                                                          <?php } ?>  
                                                                           
                                                                        </select><small class="form-text text-muted"></small><span id="scamp" style="color: red"></span>

                                                                    </div>
                                                            </div>
                                                            
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="title" name="name1" class="form-control" onclick="clearerror('stitle')"><span id="stitle" style="color: red"></span></div>
                                                            </div>

                                                           <div class="row form-group">
                                                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Message</label></div>
                                                                <div class="col-12 col-md-9"><textarea name="name2" id="message" rows="9" class="form-control" onclick="clearerror('smessage')"></textarea><span id="smessage" style="color: red"></span></div>
                                                              </div>


                                                           
                                                            

                                                            
                                                             

                                                          

                                                              
                                                             
                                                       <button type="submit" name="sub" id="b1" onclick="return validate()" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Post
                                                        </button>
                                                        <button type="reset" id="b2" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-ban"></i> Cancel
                                                        </button>
                                                 
                                                               
                                                             
                                                               
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
                                    var vcamp=document.getElementById("camp").value;
                                     var vtitle=document.getElementById("title").value;
                                      var vmsg=document.getElementById("message").value;

                                      if(vcamp==0)
                                      {
                                        document.getElementById("scamp").innerHTML="*empty field";
                                        return false;
                                      }
                                      if(vtitle==0)
                                      {
                                        document.getElementById("stitle").innerHTML="* empty feild";
                                        return false;
                                      }
                                      if(vmsg==0)
                                      {
                                        document.getElementById("smessage").innerHTML="* empty field";
                                        return false;
                                      }
                                }
                            </script>
                            <script type="text/javascript">
                                function clearerror(ee)
                                {
                                    document.getElementById(ee).innerHTML="";
                                }
                            </script>
</body>
</html>
