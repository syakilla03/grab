<html>
<link rel="stylesheet" href="CSS_AdminStyle.css">

<body>
 <img src="https://media.giphy.com/media/kcZlnhiaB1p76tKS6S/giphy.gif" style="height:150px; width:150px">
<b style="font-family:impact; font-size:30; margin-left:400; color:white;">Student Grab Service Booking Details<b>
<br></br>


 <table align="center"  cellspacing="5">
	  <tr style="color:white; font-family:impact; background-color:DarkBlue; text-align:center;" >
	  <td style="width:50; ">No.</td>
	  <td style="width:150; ">Booking Code</td>
	  <td style="width:250; ">Location Pick Up</td>
	  <td style="width:250;">Location Drop Off</td>
	  <td style="width:150; ">Driver ID</td>
	  <td style="width:150; ">Car Plate Number</td>
	  <td style="width:150; ">Customer ID </td>
	  <td style="width:120; " >Action</td>
	  </tr> 
  </table>
  
 
 <?php
 $db=mysqli_connect("localhost","root","","studentgrab");
  $num=0;
  $displayCustomer=" select booking_id,B.driver_id,B.cust_ID,driver_name,driver_phone_number,date,time,pickup_location_name,dropoff_location_name,location_price,B.plate_number,car_model,car_colour from booking B,driver D,location L,car C where D.driver_id= B.driver_id and L.location_code=B.location_code and C.plate_number=B.plate_number ";
  $D1= mysqli_query($db,$displayCustomer);
  while($row=mysqli_fetch_array($D1,MYSQLI_ASSOC))
  {
	    $B_ID= $row['booking_id'];
		$D_ID= $row['driver_id'];
		$C_ID= $row['cust_ID'];
		$D_name= $row['driver_name'];
		$D_phone= $row['driver_phone_number'];
		$B_date= $row['date'];
		$B_time= $row['time'];
		$L_pick= $row['pickup_location_name'];
		$L_drop= $row['dropoff_location_name'];
		$B_price= $row['location_price'];
		$C_plate= $row['plate_number'];
		$C_modelD= $row['car_model'];
		$C_colour= $row['car_colour'];
	    $num++;
	 ?>
	  <table align="center" cellspacing="5" >
	  <tr style="font-family:monospace;  text-align:center; font-size:15; ">
	   <td style="width:50; "> <?php echo $num; ?></td>
	  <td style="width:150; "> <?php echo $B_ID; ?></td>
	  <td style="width:250;"> <?php echo $L_pick; ?></td>
	  <td style="width:250;"> <?php echo $L_drop; ?></td>
	  <td style="width:150;"> <?php echo $D_ID; ?></td>
	  <td style="width:150;"> <?php echo $C_plate; ?></td>
	  <td style="width:150;"> <?php echo $C_ID; ?></td>
	
	  <td style="width:100;"><a href ="3.4viewBooking.php?BookingCode=<?php echo $row['booking_id']; ?>"> <input type ="submit"   value="view" style ="background-color:#00A36C;"></a></td>
	  
	  
	  
	  </table>
	
	<?php	
  }
?>

 




</body>

</html>
