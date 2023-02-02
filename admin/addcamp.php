<?php
session_start();
include('../connection.php');
$name_of_user=$_SESSION["user_id"];
$details_of_user=mysqli_query($conn,"SELECT * FROM register_tb JOIN login_tb ON register_tb.login_id=login_tb.login_id WHERE login_tb.login_id='$name_of_user' AND login_tb.type='camporganizer'");
$query=mysqli_query($conn,"SELECT * FROM area_tb");
if(isset($_POST['sub']))
{
    $camp_name=$_POST['cname'];
    $area=$_POST['select1'];
    $land_mark=$_POST['land'];
    $taluk=$_POST['tal'];
    $camp_o_n=$_POST['campon'];
    $fac=$_POST['facil'];
    $fon=$_POST['phone'];
    $mail=$_POST['email'];
             
    mysqli_query($conn,"INSERT INTO camp_tb(camp_name,area_id,land_mark,taluk,camp_org_name,facilities,phone_no,email) VALUES ('$camp_name','$area','$land_mark','$taluk','$camp_o_n','$fac','$fon','$mail')");
        
    echo "<script>alert('new camp is added');</script>";
  echo "<script> window.location.href='addcamp.php';</script>";
}



?>
<!DOCTYPE html>

<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>flood</title>
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
                        <h1>ADD CAMP</h1>
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
                                                                <div class="col-12 col-md-9"><input type="text" id="camp" name="cname" class="form-control" onclick="clearerror('scn')"><span id="scn" style="color: red"></span></div>
                                                            </div>

                                                            <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Area</label></div>
                                                                    <div class="col-12 col-md-9">
                                                                       
                                                                        <select name="select1" id="type1" class="form-control" onclick="clearerror('stype')">
                                                                            <option></option>
                                                                           <?php 
                                                                            while ($row=mysqli_fetch_assoc($query)) 
                                                                            {
                                                                             ?>
                                                                            
                                                                            <option value="<?php echo $row['area_id'];?>"><?php echo $row['area'];?></option>
                                                                            
                                                                          <?php } ?>  
                                                                           
                                                                        </select><span id="stype" style="color: red"></span>

                                                                    </div>
                                                            </div>

                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Land mark</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="mark" name="land" class="form-control" onclick="clearerror('slm')"><span id="slm" style="color: red"></span></div>
                                                            </div>

                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Taluk</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="tlk" name="tal" class="form-control" onclick="clearerror('staluk')"><span id="staluk" style="color: red"></span></div>
                                                            </div>



                                                             <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Camp Org Name</label></div>
                                                                    <div class="col-12 col-md-9">
                                                                       <span id="get_name">
                                                                        <select name="campon" id="coname" class="form-control" onclick="clearerror('stype1')" onchange="get_number(this.value)">
                                                                     <?php   
                                                                      while($row_data=mysqli_fetch_assoc($details_of_user))
                                                                                     {
                                                                                         ?>

                                                                     <option value="">--select--</option>
                                                             <option value="<?php echo $row_data['name'];?>"><?php echo $row_data['name'];?></option>                                                                    
                                                                         <?php } ?>    
                                                                           
                                                                        </select><span id="stype1" style="color: red"></span></span>

                                                                    </div>
                                                            </div>
                                                           

                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Facilities</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="facility" name="facil" class="form-control" onclick="clearerror('sfa')"><span id="sfa" style="color: red"></span></div>
                                                            </div>

                                                            

                                                            <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Phone no</label></div>
                                                                    <div class="col-12 col-md-9">
                                                                       <span id="get_num">
                                                                        <select name="phone" id="num" class="form-control" onclick="clearerror('sphn')">

                                                                           
                                                                        </select><span id="sphn" style="color: red"></span></span>

                                                                    </div>
                                                            </div>





                                                             <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                                                                    <div class="col-12 col-md-9">
                                                                       <span id="get_mail">
                                                                        <select name="email" id="emailid" class="form-control" onclick="clearerror('semail')" onchange="get_email(this.value)">
                                                                            
                                                                           
                                                                        </select><span id="semail" style="color: red"></span></span>

                                                                    </div>
                                                            </div>



                                                           <!-- 
                                                              <div class="row form-group">
                                                                <div class="col col-md-3"><label for="email-input" class=" form-control-label"></label></div>
                                                                <div class="col-12 col-md-9"><input type="email"   class="form-control" onclick=""><small class="form-text text-muted">Please enter your email</small></div>
                                                            </div> -->

                                                            
                                                             

                                                          

                                                              
                                                             
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
                                    var aname=document.getElementById("camp").value.trim();
                                     var aplace=document.getElementById("type1").value.trim();
                                      var aland=document.getElementById("mark").value.trim();
                                      var atal=document.getElementById("tlk").value.trim();
                                       var acon=document.getElementById("coname").value.trim();
                                        var afac=document.getElementById("facility").value.trim();
                                         var aphone=document.getElementById("num").value.trim();
                                          var aemail=document.getElementById("emailid").value.trim();

                                if(aname=="")
                                {
                                    document.getElementById("scn").innerHTML=" *name required";
                                    return false;
                                }
                                if(aplace=="")
                                {
                                    document.getElementById("stype").innerHTML=" *place required";
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
                                    document.getElementById("stype1").innerHTML="*name requierd";
                                    return false;
                                }
                                if(afac=="")
                                {
                                    document.getElementById("sfa").innerHTML=" *facilities required";
                                    return false;
                                }
                                if(aphone=="")
                                {
                                    document.getElementById("sphn").innerHTML=" *number required";
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

<script type="text/javascript">
    function get_number(name)
    {
        jQuery.ajax({
        type:"POST",
        url:"camp_org_num-ajax.php",
        datatype:'html',
        data:{camporg_name: name},
       success:function(data)
        {
                 jQuery("#get_num").html(data);
        },
        error:function(data)
        {
            jQuery("#get_num").html("failed");
        }    
    });    
    };
</script>

<script type="text/javascript">
    function get_email(phone_no)
    {
        jQuery.ajax({
        type:"POST",
        url:"camp_org_email-ajax.php",
        datatype:'html',
        data:{camp: phone_no},
       success:function(data)
        {
                 jQuery("#get_mail").html(data);
        },
        error:function(data)
        {
            jQuery("#get_mail").html("failed");
        }    
    });    
    };
</script>

                        
</html>
