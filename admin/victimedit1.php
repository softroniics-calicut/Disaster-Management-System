<?php
session_start();
include('../connection.php');

$details=$_GET['edit_id'];
$edd=mysqli_query($conn,"SELECT * FROM victim_tb WHERE register_id='$details'");
$result=mysqli_fetch_assoc($edd);

$array=$result['members_details'];
$ar=explode(',',$array);
// var_dump($ar);exit();




$query=mysqli_query($conn,"SELECT * FROM area_tb");
$camp_details=mysqli_query($conn,"SELECT * FROM camp_tb");
$c_d=mysqli_fetch_assoc($camp_details);
$cquery=mysqli_query($conn,"SELECT * FROM camp_tb WHERE area_id='$result[area_id]'");

if(isset($_POST['sub1']))
{
    $a_id=$_POST['select1'];
 
    $c_id=$_POST['select2'];
    $nm1=$_POST['name'];
    $ads1=$_POST['address'];
    $hn1=$_POST['house'];
    $gen1=$_POST['gender'];
    $ph1=$_POST['fon'];
    $mail1=$_POST['email'];
    $mh1=$_POST['member'];
    if (isset($_POST['addmore']))
                  {
                    $members_name=$_POST['addmore'];

                    $member_name_details=implode(',',$members_name);
                   
                    
                  }
    
 // echo "UPDATE victim_tb SET area_id='$a_id',camp_id='$c_id',name='$nm1',address='$ads1',house_no='$hn1',gender='$gen1',phone_no='$ph1',email_id='$mail1',member_in_house='$mh1',members_details='$member_name_details' WHERE register_id=$details";
mysqli_query($conn,"UPDATE victim_tb SET area_id='$a_id',camp_id='$c_id',name='$nm1',address='$ads1',house_no='$hn1',gender='$gen1',phone_no='$ph1',email_id='$mail1',member_in_house='$mh1',members_details='$member_name_details' WHERE register_id=$details");
    
echo "<script>alert('details updated');</script>";
echo "<script>window.location.href='victimreg.php';</script>";



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
    <title>Victims</title>
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

   <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
    
    <style type="text/css">
        #b1{margin-left: 0%;} 
        #frm{margin-left: 20%;}
        #g1{margin-right: 90%;}
        #adds{width: 30%;};
        
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
                        <h1>ADD VICTIMS</h1>
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
                                                        <strong>VICTIMS</strong> details
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Area</label></div>
                                                                    <div class="col-12 col-md-9">
                                                                       
                                                                        <select name="select1" id="type1" class="form-control" onclick="clearerror('stype')" onchange="get_camp_name(this.value)">
                                                                            <option ></option>
                                                                           <?php 
                                                                            while ($row=mysqli_fetch_assoc($query)) 
                                                                            {
                                                                             ?>
                                                                            
                                                                            <option value="<?php echo $row['area_id'];?>" <?php if($row['area_id']==$result['area_id'])
                                                                            { ?> selected <?php } ?> ><?php echo $row['area'];?></option>
                                                                            
                                                                          <?php } ?>  
                                                                           
                                                                        </select><small class="form-text text-muted"></small><span id="stype" style="color: red"></span>

                                                                    </div>
                                                            </div>

                                                            <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Camp name</label></div>
                                                                    <div class="col-12 col-md-9">
                                                                        <span id="get_name">
                                                                        <select name="select2" id="type2" class="form-control">
                                                                         <?php   
                                                                         while($row1=mysqli_fetch_assoc($cquery))
                                                                         {  ?>
                                                                       <option value="<?php echo $row1['camp_id'];?>" 
                                                                        <?php if($row1['camp_id']==$c_d['camp_id'])
                                                                        {
                                                                            ?>
                                                                        selected 
                                                                        <?php }
                                                                         ?>
                                                                        > <?php echo $row1['camp_name'];?> </option>


                                                                       <?php } ?>     
                                                                        </select>
                                                                            
                                                                           
                                                            </span>
                                                                    </div>
                                                            </div>

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="name1" name="name" class="form-control" onclick="clearerror('sname')" value="<?php echo $result['name'];?>"><span id="sname" style="color: red"></span><small class="form-text text-muted">enter name</small></div>
                                                            </div>
                                                              <div class="row form-group">
                                                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Address</label></div>
                                                                <div class="col-12 col-md-9"><textarea name="address" id="add1" rows="9" class="form-control" onclick="clearerror('sadd')"><?php echo $result['address'];?></textarea><span id="sadd" style="color: red"></span><small class="form-text text-muted">enter address</small></div>
                                                              </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">House no</label></div>
                                                                <div class="col-12 col-md-9"><input value="<?php echo $result['house_no'];?>" type="text" id="hn" name="house" class="form-control" onclick="clearerror('shn')"><span id="shn" style="color: red"></span><small class="form-text text-muted">enter house no</small></div>
                                                            </div>

                                                            <div class="row form-group">
                                                                    <div class="col col-md-3"><label class=" form-control-label">Gender</label></div>
                                                                    <div class="col col-md-9" >

                                                                        <div class="form-check"id="g1">

                                                                            <div class="radio">
                                                                                <label for="radio1" class="form-check-label ">

                                                                                    <input type="radio" id="radio1" name="gender" value="Male" class="form-check-input" onclick="clearerror('sgen')"<?php
                                                                                     if($result["gender"]=='Male')
                                                                                         {
                                                                                             ?>
                                                                                                 checked
                                                                                                 <?php
                                                                                                     }
                                                                                                 ?> > Male
                                                                                </label>
                                                                          
                                                                                <label for="radio2" class="form-check-label ">
                                                                                    <input type="radio" id="radio2" name="gender" value="Female" onclick="clearerror('sgen')" class="form-check-input"
                                                                                    <?php
                                                                                     if($result["gender"]=='Female')
                                                                                         {
                                                                                             ?>
                                                                                                 checked
                                                                                                 <?php
                                                                                                     }
                                                                                                 ?> >Female
                                                                                </label>
                                                                            </div>
                                                                <!--           <span id="sgen" style="color: red"></span>   -->
                                                                        </div>
                                                                          
                                                                    </div>

                                                                </div>

                                                                 <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Phone no</label></div>
                                                                <div class="col-12 col-md-9"><input value="<?php echo $result['phone_no'];?>" type="text" id="phone" name="fon" class="form-control" onclick="clearerror('sphone')"><span id="sphone" style="color: red"></span><small class="form-text text-muted">enter Phone no</small></div>
                                                            </div>

                                                              <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Email</label></div>
                                                                <div class="col-12 col-md-9"><input value="<?php echo $result['email_id'];?>" type="email" id="emailid" name="email" class="form-control" onclick="clearerror('smail')"><span id="smail" style="color: red"></span><small class="form-text text-muted">Please enter your email</small></div>
                                                            </div>

                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label  class=" form-control-label">Member in house</label></div>
                                                                <div class="col-12 col-md-9"><input value="<?php echo $result['member_in_house'];?>" type="text" id="member" name="member" class="form-control" onclick="clearerror('smember')"><span id="smember" style="color: red"></span><small class="form-text text-muted">members in house</small></div>
                                                            </div>


 

      <div class="col col-md-3"><label  class=" form-control-label">Member details</label></div> <div class="input-group control-group after-add-more" style=" width: 72%; padding-bottom: 3%;padding-right: 114px;">
          <input type="text" onclick="clearerror('smn')"  value="<?php echo $ar[0];?>" id="membernm"  name="addmore[]" class="form-control" placeholder="Enter Name and age separated by ':'">
          

          <!--  <input type="text" name="addmore[]" class="form-control" placeholder="Enter Age Here"> -->
          <div class="input-group-btn"> 
            <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
          </div>
          <span id="smn" style="color: red"></span>
        </div>


 <?php
for($i=1;$i<count($ar)-1;$i++)
{
  ?>  

                                                           <div class="row form-group">
                                                                <div class="col col-md-3"><label  class=" form-control-label">Member details</label></div>
                                                                <div class="col-12 col-md-9"><input value="<?php echo $ar[$i];?>" type="text" id="membernm"  name="addmore[]" class="form-control" onclick="clearerror('smn')"><span id="smn" style="color: red"></span><small class="form-text text-muted">members details</small></div>
                                                            </div>
    <?php } ?>
        

       

                                                             
          <div class="copy hide" style="display: none; ">
          <div class="control-group input-group" style="width: 73%;padding-bottom: 3%;padding-right: 7px;padding-left: 13%;" >
            <input type="text" name="addmore[]"  class="form-control" placeholder="Enter Name and age separated by ':'">
            <!--  <input type="text" name="addmore[]" class="form-control" placeholder="Enter Age Here"> -->
            <div class="input-group-btn"> 
              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>


     
                                                          
                                                    <div style="width: 50% ;" align="center" >          
                                                             
                                                       <button type="submit" id="b1" onclick="return validate()" name="sub1" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Submit
                                                        </button>
                                                        <button type="reset" id="b2" name="sub2" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-ban"></i> Reset
                                                        </button>
                                                 
                                                       </div>        
                                                             
                                                               
                                                        </form>

       
                                                    </div>
                                                   
                                                </div>
                                              
                                            </div>

                                           


                            


                                            
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->


                           <!--  <script src="vendors/jquery/dist/jquery.min.js"></script> -->
                           <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
                        
                            
  
</body>
<script type="text/javascript">
    function validate()
    {
        var uname=document.getElementById("name1").value;
         var uadd=document.getElementById("add1").value;
          var uhouse=document.getElementById("hn").value;
           var ugen=document.getElementsByName("gender");
            var unum=document.getElementById("phone").value;
             var umail=document.getElementById("emailid").value;
              var umember=document.getElementById("member").value;
                var umemname=document.getElementById("membernm").value;
               
        if(uname=="")
        {
            document.getElementById('sname').innerHTML="* empty field";
            return false;
        }


         if(uadd=="")
        {
            document.getElementById('sadd').innerHTML="* empty field";
            return false;
        }


         if(uhouse=="")
        {
            document.getElementById('shn').innerHTML="* empty field";
            return false;
        }


         flag=0;
              for(i=0;i<ugen.length;i++)
               {
                if (ugen[i].checked==true)
                {
                    flag=1;
                    break;
                }
               }
                if (flag==0)
                {
             
                document.getElementById("sgen").innerHTML="*select a gender";
                return false;
              } 


         if(unum=="")
        {
            document.getElementById('sphone').innerHTML="* empty field";
            return false;
        }


        if(isNaN(unum))
        {
            document.getElementById("sphone").innerHTML="*numbers only";
            return false;
        }

        if(unum.length<10||unum.length>10)
        {
            document.getElementById("sphone").innerHTML="*enter 10 numbers";
            //alert("enter 10 digit numbers");
            return false;
        }
         if(umail=="")
        {
            document.getElementById('smail').innerHTML="* empty field";
            return false;
        }
         if(umail.indexOf("@")==-1||umail.indexOf(".")==-1)
        {
            document.getElementById('smail').innerHTML="* empty field";
            return false;
        }
        if(umember=="")
        {
            document.getElementById('smember').innerHTML="* empty field";
            return false;
        }
        if(umemname=="")
        {
            document.getElementById('smn').innerHTML="* empty field";
            return false;
        }
         if(umemname.indexOf(":")==-1)
        {
            document.getElementById('smn').innerHTML="*':' separation required";
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
    function get_camp_name(area_id)
    {
        
        jQuery.ajax({
        type:"POST",
        url:"camp_name-ajax.php",
        datatype:'html',
        data:{a_id: area_id},

        success:function(data)
        {
                 jQuery("#get_name").html(data);
        },
        error:function(data)
        {
            jQuery("#get_name").html("failed");
        }    
    });
    };
</script>
<script type="text/javascript">


    /*jQuery(document).ready(function() {


      jQuery(".add-more").click(function(){ 
          var html = jQuery(".copy").html();
          jQuery(".after-add-more").after(html);
      });


      jQuery("body").on("click",".remove",function(){ 
          jQuery(this).parents(".control-group").remove();
      });


    });*/

    jQuery(document).ready(function() {


      jQuery(".add-more").click(function(){ 
          var html = jQuery(".copy").html();
          jQuery(".after-add-more").after(html);
      });


      jQuery("body").on("click",".remove",function(){ 
          jQuery(this).parents(".control-group").remove();
      });


    });


</script>
</html>
