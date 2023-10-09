<html>
<body align="center">
<marquee> <Font color = white> <Font face ="impact"> <Font size ="5">  Check your Schedule details to make sure you not miss it!!</marquee>
<img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExdDUycms0YWJud2w0bThlenZ3cXd5enUwaHUya2kwem5iYXNqaTJlcCZlcD12MV9zdGlja2Vyc19zZWFyY2gmY3Q9cw/M4VVhrbRI5vGsu4CGT/giphy.gif" style="height:200; width:400;"><br></br>
<link rel="stylesheet" href="CSS_custDestination.css">
<link rel="stylesheet" href="CSS_FormalStyle.css">

<style>

td,th
 {
	font-family:Comic sans;
	width:180px;
	height:40px;
	text-align:center;
 }

 
 table
 {
	 border-radius: 10px;
	 background-color:#F8F6F0;	 
 }

.center
 {
	
		align:center;
		margin-left:650;
		
		 
	 }

body
 {
		background-image:linear-gradient(90deg,#b993d6, #8ca6db );
 }
 
 img
 {
	align:center;  
 }
 
</style>

<?php

	   session_start();
       $conn=mysqli_connect("localhost","root","","studentgrab");

	 $driverID = $_SESSION['username'];

	  $display=" select booking_id,B.driver_id,B.cust_ID,date,time,pickup_location_name,dropoff_location_name,location_price,B.plate_number,cust_name,cust_phone_number from booking B,driver D,customer T,location L,car C where D.driver_id= B.driver_id and T.cust_ID=B.cust_ID and L.location_code=B.location_code and C.plate_number=B.plate_number and B.driver_id='$driverID'";
	 
	  $data=mysqli_query($conn,$display); 
	  $num=mysqli_num_rows($data);
	  
	  if($num==0)
	  {
	  ?>
          <b ><img src="https://media.giphy.com/media/nHPYNn5DIehN9sSnLO/giphy.gif" style="height:300; width:300;"></b>
		  <br></br>
		  <b style="align:center;"><Font color="DarkBlue"><Font face="Impact"><Font size="12"> Empty Schedule!<b>
		  
	<?php
	  }
		  
	  while($row=mysqli_fetch_array($data,MYSQLI_ASSOC))
	{
		$B_ID= $row['booking_id'];
		$D_ID= $row['driver_id'];
		$C_ID= $row['cust_ID'];
		$B_date= $row['date'];
		$B_time= $row['time'];
		$L_pick= $row['pickup_location_name'];
		$L_drop= $row['dropoff_location_name'];
		$B_price= $row['location_price'];
		$C_plate= $row['plate_number'];
		$C_name=$row['cust_name'];
		$C_pnum=$row['cust_phone_number'];
		
		
	?>
	
	<table border="4" align="center" >
	<tr>
	<td style ="font-family:monospace; font-size:15; font-weight:bold;" >Booking id </td>
	<td ><?php echo $B_ID; ?></td>
	<td colspan="2" align ="center"style ="font-family:impact; font-size:15; background-color:#7575CF; color:white" >Booking information</td>
	</tr>
	
	
	<tr>
	<td style ="font-family:monospace; font-size:15; font-weight:bold; "><b>Your id</b></style></td>
	<td  ><?php echo $D_ID; ?></td>
	<td style ="font-family:monospace; font-size:15; font-weight:bold;">Date</td>
	<td><?php echo $B_date; ?></td>
	</tr>
	
	
	
	<tr>
	<td colspan="2" align ="center" style ="font-family:impact; font-size:15;  background-color:#7575CF; color:white"> Your Customer</td>
	<td style ="font-family:monospace; font-size:15; font-weight:bold;">Time</td>
	<td><?php echo $B_time; ?></td>
	</tr>

	<tr>
	<td style ="font-family:monospace; font-size:15; font-weight:bold;"  >Customer id</td>
	<td><?php echo $C_ID; ?></td>
	<td style ="font-family:monospace; font-size:15; font-weight:bold;">Pickup </td>
	<td><?php echo $L_pick; ?></td>
	</tr>
	
	<tr>
	<td style ="font-family:monospace; font-size:15; font-weight:bold;">Customer name</td>
	<td><?php echo $C_name; ?></td>
	<td style ="font-family:monospace; font-size:15; font-weight:bold; ">Dropoff </td>
	<td><?php echo $L_drop; ?></td>
	</tr>
	
	
	
	<tr>
	<td style ="font-family:monospace; font-size:15; font-weight:bold;">Contact Number</td>
	<td><?php echo $C_pnum; ?></td>
	<td style ="font-family:monospace; font-size:15; font-weight:bold; ">Price</td>
	<td><?php echo $B_price; ?></td>
	</tr>
	
	
	<tr>
	<td colspan="4" align ="center"style ="font-family:impact; font-size:15; background-color:#7575CF; color:white"  >Car information</td>
	</tr>
	
	
	<tr>
	<td colspan="2" style ="font-family:monospace; font-size:15;font-weight:bold; ">Plate number</td>
	<td  colspan="2"><?php echo $C_plate; ?></td>
	</tr>
	
	</table>
	<br></br>
	<?php
	}
    ?>
	<br></br>
	<a href="2.4Availibility.php"><b style="margin-left:70;"><input type="Submit" value="Back" name="back"></b></a>
	<a href="2.5AccountDriver.php"><input type="Submit" value="Next" name="next"></a>
	<a href="0.Main.php" target="_parent"><input type="Submit" value="Logout" name="logout"></a>
</body>

</html>