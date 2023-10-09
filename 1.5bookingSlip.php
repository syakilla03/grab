<html>
<body>
<marquee> <Font color = white> <Font face ="impact"> <Font size ="5">  Check your booking details to make sure you not miss it!!</marquee>
<link rel="stylesheet" href="CSS_custDestination.css">

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
 
</style>

<?php
session_start();
$conn=mysqli_connect("localhost","root","","studentgrab");
if(isset($_POST['Choose']))
	{
	$date=$_SESSION['date'];
	$time= $_SESSION['time'];
	$custID = $_SESSION['username'];
	$Lcode=$_SESSION['locationCode'];
	$key="B";
    $id= $key.date("is");	
	$ChosenDriver = $_POST['plate'];
	$_SESSION['plate']=$ChosenDriver ;
	$sql="select driver_id from car where plate_number='$ChosenDriver'";
	
	$result=mysqli_query($conn,$sql);
	while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			$driverID= $rows['driver_id'];
		}
	$stmt = "Insert into booking(booking_id,driver_id,plate_number, cust_ID, location_code, time, date) values('$id','$driverID' , '$ChosenDriver','$custID','$Lcode', '$time', '$date')";
	$result1=mysqli_query($conn,$stmt);
	if($result1)
		{
		 $update="update driverfreetime set status=1  where driver_id='$driverID' and date='$date'";
		 $result1=mysqli_query($conn,$update);
		 if($result1)
		 {
		 $alert="<script>alert('Your booking being recorded..Check your booking slip now');</script>";
		 echo $alert;
		 }
		}
		}
	$custID = $_SESSION['username'];

	  $display=" select booking_id,B.driver_id,B.cust_ID,driver_name,driver_phone_number,date,time,pickup_location_name,dropoff_location_name,location_price,B.plate_number,car_model,car_colour from booking B,driver D,location L,car C where D.driver_id= B.driver_id and L.location_code=B.location_code and C.plate_number=B.plate_number and B.cust_ID='$custID '";
	 
	  $custdata=mysqli_query($conn,$display); 
	  $num=mysqli_num_rows($custdata);
	  
	  if($num==0)
	  {
	  ?>
          <b style="margin-left:530px;"><img src="https://media.giphy.com/media/nHPYNn5DIehN9sSnLO/giphy.gif" style="height:300; width:300;"></b>
		  <br></br>
		  <b style="margin-left:400px; "><Font color="DarkBlue"><Font face="Impact"><Font size="12">You did not made any booking yet..<b>
		  
	<?php
	  }
		  
	  while($row=mysqli_fetch_array($custdata,MYSQLI_ASSOC))
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
		
	?>
	
	<table border="4" align="center" >
	<tr>
	<td style ="font-family:monospace; font-size:15; font-weight:bold;" >Booking id </td>
	<td ><?php echo $B_ID; ?></td>
	<td colspan="2" align ="center"style ="font-family:impact; font-size:15; background-color:#7575CF; color:white" >Booking information</td>
	</tr>
	
	
	<tr>
	<td style ="font-family:monospace; font-size:15; font-weight:bold; "><b>Your id</b></style></td>
	<td  ><?php echo $C_ID; ?></td>
	<td style ="font-family:monospace; font-size:15; font-weight:bold;">Date</td>
	<td><?php echo $B_date; ?></td>
	</tr>
	
	
	
	<tr>
	<td colspan="2" align ="center" style ="font-family:impact; font-size:15;  background-color:#7575CF; color:white"> Your Driver</td>
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
	<br></br>
	<?php
	}
    ?>
</body>

</html>