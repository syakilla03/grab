<html>
<link rel="stylesheet" href="CSS_AdminStyle.css">
<body>
 <?php
 $db=mysqli_connect("localhost","root","","studentgrab");
 $id=$_GET['BookingCode'];
 $sql="select booking_id,B.driver_id,B.cust_ID,driver_name,driver_phone_number,date,time,pickup_location_name,dropoff_location_name,location_price,B.plate_number,car_model,car_colour from booking B,driver D,location L,car C where D.driver_id= B.driver_id and L.location_code=B.location_code and C.plate_number=B.plate_number and booking_id='$id' ";
 $result=mysqli_query($db,$sql);
  while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
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
  }
 
 ?>
<br></br>
		<b style="margin-left:300; font-family:algerian ; font-size:30; color:white;">Booking Details</b>
<table border="4" align="center" cellpadding="15" style="background-color:white;" >
	<tr>
	<td style ="font-family:monospace; font-size:15; font-weight:bold;" >Booking id </td>
	<td ><?php echo $B_ID; ?></td>
	<td colspan="2" align ="center"style ="font-family:impact; font-size:15; background-color:#7575CF; color:white" >Booking information</td>
	</tr>
	
	
	<tr>
	<td style ="font-family:monospace; font-size:15; font-weight:bold; "><b>Customer id</b></style></td>
	<td  ><?php echo $C_ID; ?></td>
	<td style ="font-family:monospace; font-size:15; font-weight:bold;">Date</td>
	<td><?php echo $B_date; ?></td>
	</tr>
	
	
	
	<tr>
	<td colspan="2" align ="center" style ="font-family:impact; font-size:15;  background-color:#7575CF; color:white"> Driver Information</td>
	<td style ="font-family:monospace; font-size:15; font-weight:bold;">Time</td>
	<td><?php echo $B_time; ?></td>
	</tr>

	<tr>
	<td style ="font-family:monospace; font-size:15; font-weight:bold;"  >Driver id</td>
	<td><?php echo $D_ID; ?></td>
	<td style ="font-family:monospace; font-size:15; font-weight:bold;">Pickup </td>
	<td><?php echo $L_pick; ?></td>
	</tr>
	
	<tr>
	<td style ="font-family:monospace; font-size:15; font-weight:bold;">Driver name</td>
	<td><?php echo $D_name; ?></td>
	<td style ="font-family:monospace; font-size:15; font-weight:bold; ">Dropoff </td>
	<td><?php echo $L_drop; ?></td>
	</tr>
	
	
	
	<tr>
	<td style ="font-family:monospace; font-size:15; font-weight:bold;">Driver Contact</td>
	<td><?php echo $D_phone; ?></td>
	<td style ="font-family:monospace; font-size:15; font-weight:bold; ">Price</td>
	<td><?php echo $B_price; ?></td>
	</tr>
	
	
	<tr>
	<td colspan="4" align ="center"style ="font-family:impact; font-size:15; background-color:#7575CF; color:white"  >Driver car information</td>
	</tr>
	
	
	<tr>
	<td colspan="2" style ="font-family:monospace; font-size:15;font-weight:bold; ">Plate number</td>
	<td  colspan="2"><?php echo $C_plate; ?></td>
	</tr>
	
	<tr>
	<td colspan="2" style ="font-family:monospace; font-size:15; font-weight:bold; ">Model</td>
	<td  colspan="2"><?php echo $C_modelD; ?></td>
	</tr>
	
	
	<tr>
	<td colspan="2" style ="font-family:monospace; font-size:15; font-weight:bold; ">  Colour</td>
	<td  colspan="2"><?php echo $C_colour; ?></td>
	</tr>
	
	</table>
	<a href="3.4AdminBooking.php"><input type="Submit" value="back" style="background-color:#7575CF"></a>
	</body>
	</html>