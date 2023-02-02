<?php
include('../connection.php');
session_start();
$user_info=$_SESSION["id_user"];
if(isset($_POST['sub']))
{
	 $new=$_POST['newpassword'];
     $retype=$_POST['retypepassword'];

      // $query1=mysqli_query($conn,"SELECT * FROM login_tb WHERE login_id='$user_info'");
     	// $value1=mysqli_fetch_assoc($query1);

     if($new!=$retype)
     {
     	 echo "<script> alert('Password do not match'); </script>";
     	 echo "<script>window.history.back();</script>";
     }

    
     	  // if(mysqli_num_rows($query1)>0)
     else
     	   {
     	   	 mysqli_query($conn,"UPDATE login_tb SET  password='$retype' WHERE login_id='$user_info'");

     	   	 echo "<script> alert('Password changed'); </script>";
     	   	  echo" <script>  window.location.href='login.php'; </script>";
     	   	// header('location:login.php');
     	   }
    		// else
    		// {
    		// 	echo "<script> alert('something went wrong!') </script>";
    		// }

 
	
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>FORGOT PASSWORD</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="stylelog/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="stylelog/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="stylelog/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="stylelog/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="stylelog/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="stylelog/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="stylelog/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="stylelog/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="stylelog/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="stylelog/css/util.css">
	<link rel="stylesheet" type="text/css" href="stylelog/css/main.css">
<!--===============================================================================================-->
<style type="text/css">
		.wrap-login100 {
  width: 500px;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
  padding: 77px 55px 33px 55px;

  box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
}
</style>


</head>


<body >
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-26">
						Forgot Password
					</span>
					

					 <div class="wrap-input100 validate-input" >
						<span id="regi_pass" style="color: red"></span>
						<input class="input100" type="password" name="newpassword" id="new_password" placeholder="newpassword"onclick="clearerror('regi_pass')">
						
					</div>

					<div class="wrap-input100 validate-input" >
						<span id="regi_retype" style="color: red"></span>
						<input class="input100" type="password" name="retypepassword" id="retype_password" placeholder="retype password"onclick="clearerror('regi_retype')">
						
					</div> 

					

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="sub"class="login100-form-btn" onclick="return validate()">
								Confirm
							</button>
						</div>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="stylelog/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="stylelog/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="stylelog/vendor/bootstrap/js/popper.js"></script>
	<script src="stylelog/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="stylelog/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="stylelog/vendor/daterangepicker/moment.min.js"></script>
	<script src="stylelog/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="stylelog/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="stylelog/js/main.js"></script>
	<script type="text/javascript">
		function validate()
		{
			var vnewpassword=document.getElementById("new_password").value.trim();
			  var vretype=document.getElementById("retype_password").value.trim();

			 if(vnewpassword=="")
			 {
			 	document.getElementById("regi_pass").innerHTML="*empty";
			 	return false;
			 }
			  if(vretype=="")
			 {
			 	document.getElementById("regi_retype").innerHTML="*empty";
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