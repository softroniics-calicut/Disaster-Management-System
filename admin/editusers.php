<?php 
session_start();
include('../connection.php');
$police=mysqli_query($conn,"SELECT * FROM register_tb join login_tb on login_tb.login_id=register_tb.login_id WHERE login_tb.type='police'");
$collector=mysqli_query($conn,"SELECT * FROM register_tb join login_tb on login_tb.login_id=register_tb.login_id WHERE login_tb.type='collector'");
$vol=mysqli_query($conn,"SELECT * FROM register_tb join login_tb on login_tb.login_id=register_tb.login_id WHERE login_tb.type='volunteer'");
$c_org=mysqli_query($conn,"SELECT * FROM register_tb join login_tb on login_tb.login_id=register_tb.login_id WHERE login_tb.type='camporganizer'");
$health=mysqli_query($conn,"SELECT * FROM register_tb join login_tb on login_tb.login_id=register_tb.login_id WHERE login_tb.type='healthcoordinator'");
$guest=mysqli_query($conn,"SELECT * FROM guest_tb join login_tb on login_tb.login_id=guest_tb.login_id WHERE login_tb.type='guest'");


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
    <title>EDIT users</title>
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
    #b1{width: 90%; }
    #overlap{float: unset;
    padding: 1px 138px;
    width: 134%;}
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
                        <h1>EDIT USERS</h1>
                    </div>
                </div>
            </div>
         
        </div>

        <div class="content mt-3" id="overlap">
            <div class="animated fadeIn">
                
                    

                     <div class="col-lg-8" >
                        <div class="card">
                            <div class="card-header" align="center">
                                <strong  class="card-title">Police</strong> Details
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="table table-bordered">
                                            <th scope="col">sl.no</th>
                                            <th scope="col">Name</th>
                                            
                                           
                                           
                                            <th scope="col">Phone no</th>
                                            <th scope="col">Email</th>
                                            
                                            <th scope="col">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $count=0;
                                        while($row1=mysqli_fetch_assoc($police))
                                        {
                                            $count++;
                                        
                                        ?>
                                        <tr class="table table-bordered">
                                            <th><?php echo $count;?></th>
                                            <td><?php echo $row1['name'];?></td>
                                        
                                          
                                         
                                            <td><?php echo $row1['phone_no'];?></td>
                                            <td><?php echo $row1['email_id'];?></td>
                                              
                                           
                                            <td align="center"> 
                                                <a href="edituserdetails.php?edit_id=<?php echo $row1['register_id'];?>"  type="submit" id="b1" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i>EDIT</a>
                                            </td>
                                        </tr>
                                       
                                     <?php } ?>  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                   

                      <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header" align="center">
                                <strong  class="card-title">Collector</strong> Details
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="table table-bordered">
                                            <th scope="col">sl.no</th>
                                            <th scope="col">Name</th>
                                            
                                           
                                           
                                            <th scope="col">Phone no</th>
                                            <th scope="col">Email</th>
                                            
                                            <th scope="col">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $count=0;
                                        while($row2=mysqli_fetch_assoc($collector))
                                        {
                                            $count++;
                                        
                                        ?>
                                        <tr class="table table-bordered">
                                            <th><?php echo $count;?></th>
                                            <td><?php echo $row2['name'];?></td>
                                        
                                          
                                         
                                            <td><?php echo $row2['phone_no'];?></td>
                                            <td><?php echo $row2['email_id'];?></td>
                                              
                                           
                                            <td> 
                                                <a href="edituserdetails.php?edit_id=<?php echo $row2['register_id'];?>"  type="submit" id="b1" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i>EDIT</a>
                                            </td>
                                        </tr>
                                       
                                     <?php } ?>  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                      <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header" align="center">
                                <strong  class="card-title">Volunteers</strong> Details
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="table table-bordered">
                                            <th scope="col">sl.no</th>
                                            <th scope="col">Name</th>
                                            
                                           
                                           
                                            <th scope="col">Phone no</th>
                                            <th scope="col">Email</th>
                                            
                                            <th scope="col">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $count=0;
                                        while($row3=mysqli_fetch_assoc($vol))
                                        {
                                            $count++;
                                        
                                        ?>
                                        <tr class="table table-bordered">
                                            <th><?php echo $count;?></th>
                                            <td><?php echo $row3['name'];?></td>
                                        
                                          
                                         
                                            <td><?php echo $row3['phone_no'];?></td>
                                            <td><?php echo $row3['email_id'];?></td>
                                              
                                           
                                            <td align="center"> 
                                                <a href="edituserdetails.php?edit_id=<?php echo $row3['register_id'];?>"  type="submit" id="b1" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i>EDIT</a>
                                            </td>
                                        </tr>
                                       
                                     <?php } ?>  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header" align="center">
                                <strong  class="card-title">Camp organizer</strong> Details
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="table table-bordered">
                                            <th scope="col">sl.no</th>
                                            <th scope="col">Name</th>
                                            
                                           
                                           
                                            <th scope="col">Phone no</th>
                                            <th scope="col">Email</th>
                                            
                                            <th scope="col">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $count=0;
                                        while($row4=mysqli_fetch_assoc($c_org))
                                        {
                                            $count++;
                                        
                                        ?>
                                        <tr class="table table-bordered">
                                            <th><?php echo $count;?></th>
                                            <td><?php echo $row4['name'];?></td>
                                        
                                          
                                         
                                            <td><?php echo $row4['phone_no'];?></td>
                                            <td><?php echo $row4['email_id'];?></td>
                                              
                                           
                                            <td align="center"> 
                                                <a href="edituserdetails.php?edit_id=<?php echo $row4['register_id'];?>"  type="submit" id="b1" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i>EDIT</a>
                                            </td>
                                        </tr>
                                       
                                     <?php } ?>  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                 
                      <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header" align="center">
                                <strong  class="card-title">Health Coordinator</strong> Details
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="table table-bordered">
                                            <th scope="col">sl.no</th>
                                            <th scope="col">Name</th>
                                            
                                           
                                           
                                            <th scope="col">Phone no</th>
                                            <th scope="col">Email</th>
                                            
                                            <th scope="col">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $count=0;
                                        while($row5=mysqli_fetch_assoc($health))
                                        {
                                            $count++;
                                        
                                        ?>
                                        <tr class="table table-bordered">
                                            <th><?php echo $count;?></th>
                                            <td><?php echo $row5['name'];?></td>
                                        
                                          
                                         
                                            <td><?php echo $row5['phone_no'];?></td>
                                            <td><?php echo $row5['email_id'];?></td>
                                              
                                           
                                            <td align="center"> 
                                                <a href="edituserdetails.php?edit_id=<?php echo $row5['register_id'];?>"  type="submit" id="b1" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i>EDIT</a>
                                            </td>
                                        </tr>
                                       
                                     <?php } ?>  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                      <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header" align="center">
                                <strong  class="card-title">Guest</strong> Details
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="table table-bordered">
                                            <th scope="col">sl.no</th>
                                            <th scope="col">Name</th>
                                            
                                           
                                           
                                            <th scope="col">Phone no</th>
                                        
                                            
                                            <th scope="col">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $count=0;
                                        while($row6=mysqli_fetch_assoc($guest))
                                        {
                                            $count++;
                                        
                                        ?>
                                        <tr class="table table-bordered">
                                            <th><?php echo $count;?></th>
                                            <td><?php echo $row6['name'];?></td>
                                        
                                          
                                         
                                            <td><?php echo $row6['mobile_no'];?></td>
                                            
                                              
                                           
                                            <td align="center"> 
                                                <a href="edituserdetails1.php?edit_id=<?php echo $row6['guest_id'];?>"  type="submit" id="b1" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i>EDIT</a>
                                            </td>
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
