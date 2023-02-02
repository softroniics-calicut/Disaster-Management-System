<?php
session_start();
include('../connection.php');
$del=$_GET['delete_id'];
$del2=$_GET['deletes_id'];
$delete_victim=mysqli_query($conn,"DELETE FROM victim_tb WHERE register_id='$del'");
header('location:editvictim.php');
$delete_service=mysqli_query($conn,"DELETE FROM service_tb WHERE service_id='$del2'");
header('location:viewservice.php');



?>