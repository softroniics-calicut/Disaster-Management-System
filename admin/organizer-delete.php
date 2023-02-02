<?php
session_start();
include('../connection.php');
$del=$_GET['id'];

mysqli_query($conn,"DELETE FROM organizer WHERE o_id='$del'");
header('location:view-organizer.php');

?>