<?php
session_start();
include('../connection.php');
$query=mysqli_query($conn,"SELECT * FROM health_requirements");

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
    <title>MEDICAL requirements</title>
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
    #b1{width: 40%;}
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
                        <h1>MEDICAL</h1>
                    </div>
                </div>
            </div>
         
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                
                  
                   


                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header" align="center">
                                <strong  class="card-title">medical requirement</strong> 
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="table table-bordered">
                                            <th scope="col">sl.no</th>
                                            <th scope="col">Doctor Name</th>
                                            <th scope="col">Dept Name</th>
                                            <th scope="col">Required medicine</th>
                                            <th scope="col">Count</th>
                                            <th scope="col">Hospital Name</th>
                                            <th scope="col">Contact info</th>
                                           
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $count=0;
                                        while($row=mysqli_fetch_assoc($query))
                                        {
                                            $count++;
                                        
                                        ?>
                                        <tr class="table table-bordered">
                                            <th><?php echo $count;?></th>
                                            <td><?php echo $row['doctor_name'];?></td>
                                            <td><?php echo $row['dept_name'];?></td>
                                            <td><?php echo $row['required_medicine'];?></td>
                                            <th><?php echo $row['count'];?></th>
                                            <td><?php echo $row['hospital_name'];?></td>
                                            <td><?php echo $row['contact_info'];?></td>
                                            
                                           
                                          
                                        </tr>
                                       <?php
                                   } ?>
                                       
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
