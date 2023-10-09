<html>
<style>
body
 {
  background-image:linear-gradient(90deg,#b993d6, #8ca6db );
  
 }
</style>

 <?php
	$db=mysqli_connect("localhost","root","","studentgrab");
	session_start();
	if (isset($_SESSION['username'])) 
	{
		$data = $_SESSION['username'];
		$select="SELECT * FROM customer where cust_ID='$data' ";
		$result= mysqli_query($db,$select);
	
		while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			$id= $row['cust_ID'];
			$pass= $row['password'];
			$phone=$row['cust_phone_number'];
			$name= $row['cust_name'];
			$email= $row['email'];
			$matric= $row['matricNO'];
		}
	}
	?>

	<body >
	<link rel="stylesheet" href="CSS_style.css">

	<div class="box" >
		<br></br>
		<div  align="center"  margin="10">
			<img src="Picture_IconACC.png" style="width:150px;height:150px;">
		</div>
		<div class="text">
			Name: <?php echo $name ?>
			<br></br>
			ID:    <?php echo $id ?>
		</div>
	</div>


	<div class="box2" >


	<div class="text2" >
	<br ><Font color ="White" ><Font size="6"> 	&ensp; Additional Account Information</br></div>

	<table cellpadding="9" >
	<tr>
	<td>  </td>
	<td>  </td>
	</tr>

	<tr>
	<td>Number phone</td>
	<td> <?php  echo $phone?> </td>
	</tr>

	<tr>
	<td>Matric Number</td>
	<td> <?php echo $matric ?> </td>
	</tr>
	
	<tr>
	<td >Email</td>
	<td> <?php echo $email ?> </td>

	</tr>
	<tr>
	<td>Password</td>
	<td>  <?php echo $pass ?> </td>
	</tr>

	</table>

	</div>

<!--button--->
	<div align="left"  >
	<a href="1.5bookingSlip.php"><input name="Back " type="Submit" value="Back"></a>
	<a href="1.7EditProfileCust.php"><input name="Edit Profile" type="Submit" value="Edit Profile"></a>
	<a href="0.Main.php" target="_parent"><input name="Logout " type="Submit" value="Logout"></div></a>


</body>

</html>
