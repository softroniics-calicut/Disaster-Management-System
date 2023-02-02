<?php 
session_start();
include('../connection.php');
$details=$_GET['edit_id'];
$user=$_SESSION["user_id"];

$query=mysqli_query($conn,"SELECT * FROM comment_tb JOIN login_tb ON login_tb.login_id=comment_tb.login_id JOIN register_tb ON register_tb.login_id=login_tb.login_id WHERE comment_tb.notify_id='$details' ");


$notification_id=mysqli_query($conn,"SELECT * FROM notification_tb WHERE notify_id='$details'");

$user_details=mysqli_query($conn,"SELECT * FROM register_tb JOIN login_tb ON login_tb.login_id=register_tb.login_id WHERE login_tb.login_id='$user'");
$user_name=mysqli_fetch_assoc($user_details);


if(isset($_POST['sub']))
{
    $reply=$_POST['coments'];

    mysqli_query($conn,"INSERT INTO comment_tb (login_id,notify_id,comments) VALUES ('$user','$details','$reply')");

    echo "<script> alert('comment is added');</script>";
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
    <title>COMMENTS</title>
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
    #head{margin-left: 20%;}
    #b1{width: 17%; }
    #frm{float: right;}
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
                <div class="page-header float-center">
                    <div class="page-title">
                        <h1>COMMENTS</h1>
                    </div>
                </div>
            </div>
         
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                
                  
                   


                    <div class="col-lg-7">
                        <div class="card">
                            <div class="card-header" align="center">
                                <strong  class="card-title">Comments</strong> 
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>

                                        <tr class="table table-bordered">
                                            <th scope="col">name</th>
                                            <th scope="col">comments</th>
                                            
                                           
                                           
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                                      while($row1=mysqli_fetch_assoc($query)) 
                                      {
                                        ?> 
                                        <tr class="table table-bordered">
                                            <th><?php echo $row1['name'];?></th>
                                            <td><?php echo $row1['comments'];?></td>
                                        
                                          
                                         
                                           
                                           
                                           
                                        </tr>
                                     
                                  <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 

          <div class="col-lg-5" id="frm" align="center">
                                                <div class="card">
                                                    <div class="card-header" align="center">
                                                        <strong>Reply</strong>
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form method="post" action="">
                                                            
                                                          
                                                              <div class="row form-group">
                                                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Comment</label></div>
                                                                <div class="col-12 col-md-9"><textarea name="coments" onclick="clearerror('span_comment')" id="comments_id" rows="5" class="form-control"></textarea><span id="span_comment" style="color: red"></span></div>
                                                              </div>
                                                         

                                                             



                                                              
                                                             
                                                       <button type="submit" id="b1" name="sub" onclick="return validate()" class="btn btn-primary btn-sm">
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
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script type="text/javascript">
        function validate()
        {
            var ucmmnt=document.getElementById("comments_id").value.trim();

            if(ucmmnt=="")
            {
                document.getElementById("span_comment").innerHTML="*empty field";
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


</body>

</html>
