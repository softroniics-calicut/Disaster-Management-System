<?php
include('../connection.php');
$name=$_POST['camporg_name'];

$query=mysqli_query($conn,"SELECT phone_no FROM register_tb JOIN login_tb ON register_tb.login_id=login_tb.login_id WHERE register_tb.name='$name' AND login_tb.type='camporganizer'");



?>



        <select name="phone" id="num" class="form-control" onclick="clearerror('sphn')" onchange="get_email(this.value)">
       <option value="">--select--</option>
<?php
       	if(mysqli_num_rows($query)>0)

{

    while($row_data=mysqli_fetch_assoc($query))
    {
    	?>

       
       <option value="<?php echo $row_data['phone_no'];?>"><?php echo $row_data['phone_no'];?></option>                                                                    
       <?php } ?>                                                                     
       </select>
	 
<?php                                                                          
}                                                                          
?>

 