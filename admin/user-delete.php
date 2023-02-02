<?php
session_start();
include('../connection.php');
$del=$_GET['id'];

mysqli_query($conn,"DELETE FROM user WHERE login_id='$del'");
mysqli_query($conn,"delete from login_tb where login_id = '$del'");
header('location:viewusers.php');

?>