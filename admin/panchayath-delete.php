<?php
session_start();
include('../connection.php');
$del=$_GET['id'];

mysqli_query($conn,"DELETE FROM panchayath WHERE p_id='$del'");
header('location:view-panchayath.php');

?>