<html>
 <link rel="stylesheet" href="CSS_AdminStyle.css">
<style>
	th, td {
		text-align: center;
		padding: 10px;}
		
		.color {
		background-color: #29465B; 
		color:white;}



</style>
		 

			<br></br>
		<b style="margin-left:400; font-family:algerian ; font-size:30; color:white;">Student Grab Driver</b>
		<div class="boxView">
		  <table  class="text" align ="center" cellspacing="3">
		<tr style="background-color:#F0F8FF; font-family:Castellar;"><td colspan="3" > Car Information</td></tr>


<?php


 $db=mysqli_connect("localhost","root","","studentgrab");
  $id=$_GET['idDriver'];
  $determine="select * from driver D,car C where D.driver_id= C.driver_id and D.driver_id='$id'";
  
  $query=mysqli_query($db,$determine);
   
	  while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
	  {
		    $D_id= $row['driver_id'];
			$D_name= $row['driver_name'];
			$matric=$row['matricNO'];
			$D_phone=$row['driver_phone_number'];
			$email=$row['driver_email'];
			$D_password= $row['password'];
			$gender=$row['gender'];
			$D_platenum= $row['plate_number'];
			$CD_id= $row['driver_id']; 
			$C_model= $row['car_model']; 
		    $CD_colour= $row['car_colour']; 
			$CD_seater= $row['car_seater']; 
			
			?>
		  
	<tr>
		<td class="color" >About</td>
		<td class="color">Information</td>
		<td class="color">Details</td>
	</tr>
	<tr >
		<td rowspan="5" class="color">Driver's Car</td>
		<td width="300" style="background-color:#CECECE; font-family:monospace; font-size:15;">Plate Number</td>
		<td width="500" style="background-color:#737CA1; font-family:monospace; font-size:15; color:white;"><?php echo $D_platenum; ?> </td>
	</tr>
	<tr>
		<td style="background-color:#CECECE; font-family:monospace; font-size:15;">Model </td>
		<td style="background-color:#737CA1; font-family:monospace; font-size:15; color:white;"><?php echo $C_model; ?> </td>
	</tr>
	<tr>
		<td style="background-color:#CECECE; font-family:monospace; font-size:15;">Capacity</td>
		<td style="background-color:#737CA1; font-family:monospace; font-size:15; color:white;"><?php echo $CD_seater; ?></td>
	</tr>
	<tr>
		<td style="background-color:#CECECE; font-family:monospace; font-size:15;">Colour</td>
		<td style="background-color:#737CA1; font-family:monospace; font-size:15; color:white;"><?php echo $CD_colour; ?> </td>
	</tr>
	<tr>
		<td style="background-color:#737CA1; font-family:monospace; font-size:15; color:white; " colspan ="2"><a href="3.2DeleteCar.php?CarPlate=<?php echo $D_platenum;?>"><input type="submit" name="delete" value="delete"></a></td>
	</tr>

	
		
		<?php
			
	  }
	     $determine2="select * from driver where driver_id='$id'";
  
         $query1=mysqli_query($db,$determine2);
	 
	    while($row1=mysqli_fetch_array($query1,MYSQLI_ASSOC))
	   {
		    $D_id= $row1['driver_id'];
			$D_name= $row1['driver_name'];
			$matric=$row1['matricNO'];
			$D_phone=$row1['driver_phone_number'];
			$email=$row1['driver_email'];
			$D_password= $row1['password'];
			$gender=$row1['gender'];
		 ?>
		
		 <link rel="stylesheet" href="AdminStyle.css">
		 <body>
	
		<br></br>
        
		<tr style="background-color:#F0F8FF; font-family:Castellar; height:20;"><td colspan="3" > </td></tr>
	    <tr style="background-color:#F0F8FF; font-family:Castellar;  "><td style=" width:200;" colspan="3"> Driver Information</td></tr>
		
	<tr >
		<td rowspan="7" class="color">Driver</td>
		<td width="300" style="background-color:#CECECE; font-family:monospace; font-size:15;">Identity Number</td>
		<td style="background-color:#737CA1; font-family:monospace; font-size:15; color:white;"><?php echo $D_id; ?>  </td>
	</tr>
	<tr>
		<td style="background-color:#CECECE; font-family:monospace; font-size:15;">Name </td>
		<td style="background-color:#737CA1; font-family:monospace; font-size:15; color:white;"><?php echo $D_name; ?>  </td>
	</tr>
	<tr>
		<td style="background-color:#CECECE; font-family:monospace; font-size:15;">Matric Number</td>
		<td style="background-color:#737CA1; font-family:monospace; font-size:15; color:white;" ><?php echo $matric; ?> </td>
		</tr>
	<tr>
		<td style="background-color:#CECECE; font-family:monospace; font-size:15;">Phone number</td>
		<td style="background-color:#737CA1; font-family:monospace; font-size:15; color:white;"><?php echo $D_phone; ?></td>
	</tr>
	<tr>
		<td style="background-color:#CECECE; font-family:monospace; font-size:15;">Gender</td>
		<td style="background-color:#737CA1; font-family:monospace; font-size:15; color:white;"><?php 
		
		if($gender==2)
			echo"Female";
		else
			echo"Male";
		
		?> 
		
		
		
		</td>
		</tr>
	<tr>
		<td style="background-color:#CECECE; font-family:monospace; font-size:15;">Email</td>
		<td style="background-color:#737CA1; font-family:monospace; font-size:15; color:white;"><?php echo $email; ?></td>
	</tr>
	<tr>
		<td style="background-color:#CECECE; font-family:monospace; font-size:15;">Password</td>
		<td style="background-color:#737CA1; font-family:monospace; font-size:15; color:white;" ><?php echo $D_password; ?> </td>
		
	</tr>
        
		<tr style="background-color:#F0F8FF; font-family:Castellar;"><td colspan="3" > End Information</td></tr>
		</table>
	<?php  
		  
	 
	  }
	  






?>
	  
	
		</div>
		
		<a href="3.2AdminDriver.php"><input type="submit" name="back" value="back"></a>
		
		</html>
		  
		  
		  
		  
		