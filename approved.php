<?php
session_start();
include('../connection.php');
$details=$_GET['update_id'];



   mysqli_query($conn,"UPDATE guest_tb SET approve_status='1' WHERE guest_id='$details' ");
    
 

?>

