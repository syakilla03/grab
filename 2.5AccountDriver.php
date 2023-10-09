<html>
<link rel="stylesheet" href="CSS_FormalStyle.css">
<style>
body
 {
  background-image:linear-gradient(90deg,#b993d6, #8ca6db );
  
 }
 
 td,tr
 {
	padding: 8px; 
	font-family:impact;
 }
</style>

 <?php
	$db=mysqli_connect("localhost","root","","studentgrab");
	    session_start();

		$data = $_SESSION['username'];
		$select="SELECT * FROM driver where driver_id='$data' ";
		$result= mysqli_query($db,$select);
	
		while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			$id= $row['driver_id'];
			$dname= $row['driver_name'];
			$dphone=$row['driver_phone_number'];
		    $email=$row['driver_email'];
			$pass=$row['password'];
			$gen=$row['gender'];
			$matric=$row['matricNO'];
	    }
		
		if($gen==1)
			$gender="Male";
		else
			$gender="Female";
	
	?>

	<body >
	

	
	
		<table align="center" cellpadding="2">
		     <tr><td colspan="2" align="center"><img src="Picture_IconACC.png" style="width:150px;height:150px;"></td></tr>	
			<tr >
			<td style="font-size:28; color:white; background-color:#C19A6B;" >Name</td>
			<td style="font-size:25;  color:#C19A6B; text-align:center; background-color:#FFE6E8;"><?php echo $dname ?></td>
			</tr>
			<tr >
			<td style="font-size:28; color:white; background-color:#C19A6B;" >Matic no.</td>
			<td style="font-size:25;  color:#C19A6B; text-align:center; background-color:#FFE6E8;"><?php echo $matric ?></td>
			</tr>
			<tr >
			<td style="font-size:28;  color:white; background-color:#C19A6B;">Driver ID</td>
			<td style="font-size:25;  color:#C19A6B; text-align:center; background-color:#FFE6E8;"><?php echo $id ?></td>
			</tr>
			<tr >
			<td style="font-size:28; color:white; background-color:#C19A6B; " >Email</td>
			<td style="font-size:25;  color:#C19A6B; text-align:center; background-color:#FFE6E8;"><?php echo $email?></td>
			</tr>
			<tr >
			<td style="font-size:28; color:white;  background-color:#C19A6B;" >Gender</td>
			<td style="font-size:25; color:#C19A6B; text-align:center; background-color:#FFE6E8;"><?php echo $gender ?></td>
			</tr>
			<tr >
			<td style="font-size:28;  color:white; background-color:#C19A6B;">Phone</td>
			<td style="font-size:25;   color:#C19A6B; text-align:center; background-color:#FFE6E8;"><?php echo $dphone ?></td>
			<tr>
		    <td style="font-size:28;  color:white; background-color:#C19A6B;">Password</td>
			<td style="font-size:25;  color:#C19A6B; text-align:center; background-color:#FFE6E8;"><?php echo $pass ?></td>
			</tr>
			
			</table>
			
	
	


  <?php
    $DriverC="select plate_number,car_model,car_colour,car_seater from car where driver_id='$data'";
	$sql=mysqli_query($db,$DriverC);
	$count=0;
	?>
	
	<br></br>
	<div style="margin-left:640; font-family:impact; font-size:30;">Car Information</div>
	
	<?php
	while($row1=mysqli_fetch_array($sql,MYSQLI_ASSOC))
	{
	$plate=$row1['plate_number'];
	$model=$row1['car_model'];
	$colour=$row1['car_colour'];
	$seater=$row1['car_seater'];
	$count++;
	
    ?>


	<br></br>
	<div style="background-color:#15317E; margin-left:320; width:800; border-radius:30px;" >
	<table  align="center" style="text-align:center; border-spacing: 10px; ">
	<tr>
	<td colspan="2"><img src="https://media.giphy.com/media/ZDuc0RFSTgFkjO4CdM/giphy.gif" style="height:300; width:400;  ">  </td>
	</tr>
     
	<tr style="text-align:center; font-size:20; color:white; ">
	<td colspan="2"> <?php  echo "Car Information ".$count;?> </td>
	</tr>

	<tr >
	<td  style="text-align:center; font-size:20; color:white; background-color:#357EC7;">Plate Number</td>
	<td  style="text-align:center; font-size:20; color:white; border: 5px solid ; border-style:dotted; border-color:#357EC7;"> <?php  echo $plate?> </td>
	</tr>

	<tr>
	<td style="text-align:center; font-size:20; color:white;  background-color:#357EC7;" >Model</td>
	<td  style="text-align:center; font-size:20;color:white; border: 5px solid ; border-style:dotted; border-color:#357EC7;"> <?php echo $model ?> </td>
	</tr>
	
	<tr>
	<td  style="text-align:center; font-size:20; color:white; background-color:#357EC7; ">Colour</td>
	<td  style="text-align:center; font-size:20;color:white; border: 5px solid ; border-style:dotted; border-color:#357EC7;"> <?php echo $colour ?> </td>

	</tr>
	<tr>
	<td  style="text-align:center; font-size:20; color:white; background-color:#357EC7; ">Capacity</td>
	<td  style="text-align:center; font-size:20; color:white;border: 5px solid ; border-style:dotted; border-color:#357EC7; " >  <?php echo $seater ?> </td>
	</tr>

	</table>
	</div>


<?php	
		
		
		
		
	}
  
  

?>

<!--button--->
	<div align="left"  >
	<a href="2.3Schedule.php"><input name="Back " type="Submit" value="Back"></a>
	<a href="2.6EditProfileDriver.php"><input name="Edit Profile" type="Submit" value="Edit Profile"></a>
	<a href="0.Main.php" target="_parent"><input name="Logout " type="Submit" value="Logout"></div></a>


</body>

</html>
