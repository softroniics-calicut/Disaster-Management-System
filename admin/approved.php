<?php
session_start();
include('../connection.php');
require ('PHPMailer/PHPMailerAutoload.php');

$details=$_GET['update_id'];

 $mail_id=mysqli_query($conn,"SELECT email_id FROM guest_tb WHERE login_id='$details' ");
   $row=mysqli_fetch_assoc($mail_id);
   $to_address=$row['email_id'];



   mysqli_query($conn,"UPDATE guest_tb SET approve_status='1' WHERE login_id='$details' ");
     header('location:approve.php');
 

 $mail = new PHPMailer;
 
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'mailertest28@gmail.com';                   // SMTP username
$mail->Password = 'floodRelief';               // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
$mail->Port = 465;       
$mail->SMTPDebug = 2;                            //Set the SMTP port number - 587 for authenticated TLS
$mail->setFrom('mailertest28@gmail.com', 'FloodRelief');     //Set who the message is to be sent from

$mail->addAddress($to_address); 

           
//$mail->addCC('example@xyz.com', 'name');
//$mail->addBCC('example@xyz.com', 'name');
$mail->WordWrap = 50;                                  
        
$mail->isHTML(true);                                   
 
$mail->Subject = "request approved";
$mail->Body    = "<html>
<head>
<meta charset='utf-8'>
<title>Safe Land</title>
</head>

<body>

<table width='200'>
  <tr>
    <th scope='row'>Mail From</th>
    <td>Flood Relief Camp</td>
  </tr>
  <tr>
    <th scope='row'>Status</th>
    <td>Guest Request Approved</td>
  </tr>
  <tr>
    <th scope='row'>Message</th>
    <td>You can login now</td>
  </tr>
</table>

</body>
</html>
";
  $mail->AltBody = "you can login now";
 
  //Read an HTML message body from an external file, convert referenced images to embedded,
  //convert HTML into a basic plain-text alternative body
  //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
 
  if(!$mail->send()) 
  {
     echo 'Message could not be sent.';
     echo 'Mailer Error: ' . $mail->ErrorInfo;
     exit;
  }

  else
  {
    echo "<script>alert('Message has been sent');</script>";

    
  }

?>

