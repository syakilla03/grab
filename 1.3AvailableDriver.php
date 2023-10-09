<html>
<link rel="stylesheet" href="CSS_AvaiableDriver.css">
<body align ="center" >
<style>
 
	.center{
		align:center;
		margin-left:650;
		
		 
	 }
	
	body
	{
	background-image:linear-gradient(90deg,#b993d6, #8ca6db );
  
	} 
	 
</style>

<marquee ><Font color = "white"> <Font face ="impact"> <Font size ="5">  Choose your driver now! </marquee>
<div class="center">
<img src ="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExYXRsaXNzMmc4YmFnNjQ5Zzg4Mzk3MTNpN2M2NzR2aW5kMzBhNXNmZCZlcD12MV9zdGlja2Vyc19zZWFyY2gmY3Q9cw/eYaHNLXTOo1hKJu9gu/giphy.gif" style="height:350 px; width:250px;">
</div>
<table align="center" cellpadding="15"  cellspacing="10" >
<tr><td colspan="4" style="background-color:#737CA1; font-family:impact; color:white;" >List of Avaiable Driver</td></tr>
<tr>
<td style="background-color:#BCC6CC;">Driver ID</td>
<td style="background-color:#BCC6CC;">Date that Avaliable</td>
<td style="background-color:#BCC6CC;">Service Start</td>
<td style="background-color:#BCC6CC;">Service End</td>

</tr>
<?php
$conn=mysqli_connect("localhost","root","","studentgrab");
		$checkD="select * from driverfreetime where status=0  order by date asc,start_time asc";
		$result3=mysqli_query($conn,$checkD);
		while($row3=mysqli_fetch_array($result3,MYSQLI_ASSOC))
		{
			?>
			
			
			<tr>
			<td><?php 
			
			$date=$row3['date'];
			$date_result=explode('-',$date);
			$day=$date_result[0];
			$month=$date_result[1];
			$year=$date_result[2];
			$Ndate=$year.'-'.$month.'-'.$day;
			echo $Ndate;
			?></td>
			<td><?php echo $row3['driver_id'];?>
		
			<td><?php echo $row3['start_time'];?>
			
			<td><?php echo $row3['finish_time'];?></td>
			
			</tr>
			
			
			
			<?php
		   
		}
		?>
		</table>
			<br></br>

	<?php

		$conn=mysqli_connect("localhost","root","","studentgrab");
		if(isset($_POST['confirm']))
		{
			session_start();	
			$pickUp = $_POST["pickup"];
			$dropOff = $_POST["droppOff"];
			$time = $_POST["time1"];
			$date = $_POST["date1"];
			$date_result=explode('-',$date);
			$day=$date_result[2];
			$month=$date_result[1];
			$year=$date_result[0];
			$Ndate=$year.'-'.$month.'-'.$day;
			$count=0;
			$check1=0;
			$check2=0;
			
			$LCheck ="select pickUp_location_code,dropOff_location_code from location" ;
			$data1=mysqli_query($conn,$LCheck);
			//check the drop/pick code in database and drop/pick code that entered by the customer
			while($row1=mysqli_fetch_array($data1,MYSQLI_ASSOC))
			{
				$PCOde=$row1['pickUp_location_code'];
				$DCOde=$row1['dropOff_location_code'];
				
				if($pickUp  ==$PCOde || $pickUp  ==$DCOde )
					$check1++;
			
					
				if($dropOff ==$PCOde || $dropOff ==$DCOde )
				    $check2++;
				
			}
			
			if($check1>0 and $check2>0)
			{
			$sql ="select * from driverfreetime" ;
			$data=mysqli_query($conn,$sql);
			while($rows=mysqli_fetch_array($data,MYSQLI_ASSOC))
				{
					$DriverId=$rows['driver_id'];
					$start_time=$rows['start_time'];
					$finish_time=$rows['finish_time'];
					$driverDate=$rows['date'];
					$status=$rows['status'];

					if($Ndate==$driverDate and $time>=$start_time) 
					{
						//to check available driver
						if($Ndate == $driverDate  and $time >=$start_time  and $status==0)
						{						
							$select="select * from driver D ,car C where D.driver_id= C.Driver_id and C.driver_id='$DriverId' ";
							$result= mysqli_query($conn,$select);
							$count++;
	
							
							$_SESSION['date']=$date;
							$_SESSION['time']=$time;
	
							$code="select location_code from location where pickUp_location_code='$pickUp' and dropOff_location_code='$dropOff'";
							$result1=mysqli_query($conn,$code);
								while($rows1=mysqli_fetch_array($result1,MYSQLI_ASSOC))
									{
										$Lcode=$rows1['location_code'];
										$_SESSION['locationCode']=$Lcode;
									}
									
	
								while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
									{
										
										$id= $row['driver_id'];
										$dname= $row['driver_name'];
										$dphone=$row['driver_phone_number'];
										$dpass= $row['password'];
										$plate=$row['plate_number'];
										$Did= $row['driver_id'];
										$Model= $row['car_model'];
										$color=$row['car_colour'];
										$seat= $row['car_seater'];
	?>
	
	
	<table class="text" align ="center" border="2" cellspacing="3">
	<tr >
	<td rowspan="4"> <img src ="Picture_driver.png" style ="height:150px; width:150px;" ></td>
	<td colspan="4" style="background-color:#C6DEFF"> </td>
	</tr>
	
	
	<tr>
	<td class="color">Driver Id
	<td> <?php echo $id; ?> </td> 
	<td class="color">Name</td>
	<td> <?php echo $dname; ?></td>
	</tr>
	<tr>
	<td class="color">Contact Num</td>
	<td> <?php echo $dphone; ?></td>
	
	<td class="color">Plate number
	<td> <?php echo $plate; ?> </td> 
	
	</tr>
	<tr>
	<td class="color">Car model</td>
	<td> <?php echo $Model; ?></td>
	<td class="color">Capacity</td>
	<td> <?php echo $seat; ?></td>
	</tr>
	</table>
	
	<br></br> 
	<?php
									}
						
		
						
				}
				
				
					}
					
			}
			if($count<=0)
					header('location:NoAvailable.php');	
		}
			else
	?>
			<!--invalid pick/drop code-->
	<?php
			
				if($check1<=0 and $check2>0)
				{
					 header('Location:1.4BookingCust.php?message=Invalid pick up code');					
	            }
	            else
				if($check2<=0 and $check1>0)
				{
					 header('Location:1.4BookingCust.php?message=Invalid drop Off code');					
	            }
				elseif($check2<=0 and $check1<=0)
					 header('Location:1.4BookingCust.php?message=Invalid drop Off and pick up  code');	
				

						
				
				
				
	?>
	<form method="post" action="1.5bookingSlip.php">

	<?php 
			if(!empty($result))
				{
	 ?>

	<table align="center">
	<tr>
	<td style="background-color:#C6DEFF"  >Enter Driver's Number plate</td>
	<td > <input type= text name= plate  value= plate></td>
	</table>
	<br></br>
	<b ><input name="Choose" type="Submit" value="Choose"></b>
	</form>
	<?php
			}
		   }
		
		
					?>

</body>

</html>