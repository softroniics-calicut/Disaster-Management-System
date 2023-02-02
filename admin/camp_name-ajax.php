<?php
//session_start();
include('../connection.php');
$camp_nm=$_POST['a_id'];
$query=mysqli_query($conn,"SELECT * from camp_tb WHERE area_id='$camp_nm'");
?>



       <select name="select2" id="type2" class="form-control" >
       <option value="">--select--</option>
<?php
       	if(mysqli_num_rows($query)>0)

{

    while($row_data=mysqli_fetch_assoc($query))
    {
    	?>

       
       <option value="<?php echo $row_data['camp_id'];?>"><?php echo $row_data['camp_name'];?></option>                                                                    
       <?php } ?>                                                                     
       </select>
	 
<?php                                                                          
}                                                                          
?>