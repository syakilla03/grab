<html>
<link rel="stylesheet" href="CSS_custDestination.css">
<body>
<style>

	body
	{
	background-image:linear-gradient(90deg,#b993d6, #8ca6db );
  
	}
	.center
	{
		align:center;
		margin-left:650;	 
	 }
	 
	 td
	{
		font-family:Comic sans;
		width:100px;
	}

</style>

	<marquee><Font color = "#967BB6"> <Font face ="impact"> <Font size ="5"> Choose Your own journey!</marquee>
	<div class="center"><img src="https://media.giphy.com/media/8p1WPEOeDWFCksfe18/giphy.gif" style="height:350 px; width:250px;"></div>
	<table border="3" align="center" cellpadding="15">

	<tr>
	<td align="center" class="color"> Code pick up </td>
	<td align="center" class="color" >Pick up /Drop off Location </td>
	<td align="center" class="color"> Code drop off </td>
	<td align="center" class="color" >Drop off/Pick up Location </td>
	<td align="center" class="color"  > Price </td>
	</tr>
	
	<?php
		$conn= $conn = mysqli_connect("localhost","root","","studentgrab");

		$sql ="select * from location" ;
		$data=mysqli_query($conn,$sql);
		while($rows=mysqli_fetch_array($data,MYSQLI_ASSOC))
		{
			$LocationCode=$rows['location_code'];
		$pickCode=$rows['pickUp_location_code'];
		$pickName=$rows['pickup_location_name'];
		$dropCode=$rows['dropOff_location_code'];
		$droppOffName=$rows['dropoff_location_name'];
		$price=$rows['location_price'];
	?>	
	
	
	<tr>
	<td align="center" class="format"> <?php echo $pickCode   ?> </td>
	<td align="center" class="format"> <?php echo   $pickName  ?></td>
	<td align="center" class="format"> <?php echo  $dropCode  ?></td>
	<td align="center" class="format"> <?php echo  $droppOffName  ?> </td>
	<td align="center" class="format"> <?php echo  $price  ?></td>
	</tr>
	
	
	<?php	
	
		}
	?>
	</table>

	<br></br>
	
	<!--button option-->
	<a href="2.1DriverHome.php "> <div  class="box"><input name="back" type="Submit"  value= "Back">  </div></a>
	<a href="2.4Availibility.php"> <div  class="box"><input name="next" type="Submit" value="next"></div></a>
	<a href="0.Main.php" target = "_parent"> <div  class="box2"><input name="logout" type="Submit" value="Logout"></div></a>

 
</body>
</html>