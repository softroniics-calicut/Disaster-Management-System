<?php
include('../connection.php');
session_start();
if(isset($_POST['sub']))
{
	$user=$_POST['username'];
   


	
		$query=mysqli_query($conn,"SELECT * FROM login_tb WHERE user_name='$user'");
		
		$row=mysqli_fetch_assoc($query);
		// if($new!=$retype)
		// {
		// 	echo "<script> alert('different passwords'); </script>";
		// 	echo "<script>window.history.back();</script>";
		// }
     
		  if(mysqli_num_rows($query)>0)
		 {
		 
		 	// mysqli_query($conn,"UPDATE login_tb SET password='$retype' WHERE user_name='$row[user_name]'");
		 	//  echo "<script> alert('password successfully changed');</script>";
		 	$_SESSION["id_user"]=$row['login_id'];
		 	

		 	header('location:newpassword.php');
			
		 }
		else
		{
			echo "<script> alert('invalid username'); </script>";
		}


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
						<span id="regi_user" style="color: red" ></span>
						<input class="input100" type="text" name="username" id="user"placeholder="Registered Username" onclick="clearerror('regi_user')">
						
					</div>

					<!-- <div class="wrap-input100 validate-input" >
						<span id="regi_pass" style="color: red"></span>
						<input class="input100" type="password" name="newpassword" id="new_password" placeholder="newpassword"onclick="clearerror('regi_pass')">
						
					</div>

					<div class="wrap-input100 validate-input" >
						<span id="regi_retype" style="color: red"></span>
						<input class="input100" type="password" name="retypepassword" id="retype_password" placeholder="retype password"onclick="clearerror('regi_retype')">
						
					</div> -->

					
          
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
					

							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="sub" class="login100-form-btn" onclick="return validate()">
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
			var vuser=document.getElementById("user").value.trim();
			  // var vpassword=document.getElementById("new_password").value.trim();
			  //   var vretypepassword=document.getElementById("retype_password").value.trim();

			 if(vuser=="")
			 {
			 	document.getElementById("regi_user").innerHTML="*empty";
			 	return false;
			 }
			 // if(vpassword=="")
			 // {
			 // 	document.getElementById("regi_pass").innerHTML="*empty";
			 // 	return false;
			 // }
			 //  if(vretypepassword=="")
			 // {
			 // 	document.getElementById("regi_retype").innerHTML="*empty";
			 // 	return false;
			 // }

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