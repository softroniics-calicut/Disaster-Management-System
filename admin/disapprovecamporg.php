<?php
session_start();
include('../connection.php');
$details=$_GET['delete_id'];



  $query1= mysqli_query($conn,"DELETE FROM register_tb WHERE login_id='$details' ");
  $query2= mysqli_query($conn,"DELETE FROM login_tb WHERE login_id='$details' ");
    echo "<script>alert('Request disapproved');</script>";
    echo "<script>window.location.href='approvecamporg.php';</script>";
 

?>