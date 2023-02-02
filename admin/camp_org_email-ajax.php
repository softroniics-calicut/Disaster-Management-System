<?php
include('../connection.php');
$num=$_POST['camp'];

$query1=mysqli_query($conn,"SELECT email_id FROM register_tb join login_tb ON login_tb.login_id=register_tb.login_id where login_tb.type='camporganizer' and register_tb.phone_no='$num'");
?>
<select name="email" id="emailid" class="form-control" onclick="clearerror('semail')">
        
<?php
        if(mysqli_num_rows($query1)>0)

{

    while($row_data1=mysqli_fetch_assoc($query1))
    {
      ?>

       
       <option value="<?php echo $row_data1['email_id'];?>"><?php echo $row_data1['email_id'];?></option>                                                                    
       <?php } ?>                                                                     
       </select><span id="semail" style="color: red"></span>
   
<?php                                                                          
}                                                                          
?>