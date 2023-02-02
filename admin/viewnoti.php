<?php 
session_start();
include('../connection.php');
$query=mysqli_query($conn,"SELECT camp_name,notify_id,title,message FROM camp_tb JOIN notification_tb ON camp_tb.camp_id=notification_tb.camp_id ORDER BY notify_id DESC"); 


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
    <title>NOTIFICATION</title>
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
    #b1{width: 45%; }
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
                        <h1>NOTIFICATIONS</h1>
                    </div>
                </div>
            </div>
         
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                
                  
                   


                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header" align="center">
                                <strong  class="card-title">Notification</strong> And Comments
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="table table-bordered">
                                            
                                            <th scope="col">Camp Name</th>
                                            
                                           
                                           
                                            <th scope="col">Title</th>
                                            <th scope="col">Message</th>
                                             <th scope="col">Comments </th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                        while($row=mysqli_fetch_assoc($query))
                                        {
                                        
                                        
                                        ?>
                                        <tr class="table table-bordered">
                                            
                                            <td><?php echo $row['camp_name'];?></td>
                                        
                                          
                                         
                                            <td><?php echo $row['title'];?></td>
                                            <td><?php echo $row['message'];?></td>
                                              <th><a href="replycomment.php?edit_id=<?php echo $row['notify_id'];?>"type="submit">reply and view comments</a></th>
                                           
                                           
                                        </tr>
                                       
                                     <?php } ?>  
                                    </tbody>
                                </table>
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


</body>

</html>
