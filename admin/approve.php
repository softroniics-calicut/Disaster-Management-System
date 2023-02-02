<?php
session_start();
include('../connection.php');
$view=mysqli_query($conn,"SELECT * FROM login_tb JOIN guest_tb ON login_tb.login_id=guest_tb.login_id");

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
    <title>Guest approve</title>
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
                        <h1>GUEST</h1>
                    </div>
                </div>
            </div>
         
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                
                  
                   


                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header" align="center">
                                <strong  class="card-title">Guest</strong> Approval Requests
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <form method="post">
                                    <thead>
                                        <tr class="table table-bordered">
                                            <th scope="col">sl.no</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">mobile</th>
                                            <th scope="col">username</th>
                                            <th scope="col">password</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $count=0; 
                                        while($row=mysqli_fetch_assoc($view))
                                        {
                                            $count++;
                                            ?>
                                        <tr class="table table-bordered">
                                            <th><?php echo $count;?></th>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['mobile_no'];?></td>
                                            <td><?php echo $row['user_name'];?></td>
                                            <th><?php echo $row['password'];?></th>
                                        
                                            <td>
                                                <?php
                                                if($row['approve_status']==0)
                                                   { ?>
                                                <a class="btn btn-primary btn-sm" href="approved.php?update_id=<?php echo $row['login_id'];?>" type="submit">Approve</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a class="btn btn-primary btn-sm" href="disapprove.php?delete_id=<?php echo $row['login_id'];?>" >Dissapprove</a>
                                            <?php } ?>
                                            <?php 
                                            if($row['approve_status']==1)
                                            {
                                                ?>
                                                <span style="color: green">Approved</span>
                                          <?php  }  ?>

                                            </td>
                                        </tr>
                                       
                                      <?php } ?> 
                                    </tbody>
                                </form>
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
