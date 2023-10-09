
<link rel="stylesheet" href="CSS_Login.css">

<style>

	.message
	{
	font-size:25;
	text-align: center;
	width:460px;
	height:400px;
	margin-top:150;
	margin-left:500;
	border:5px solid #aaa;
	border-bottom-color:black;
	color:#E77471;
	font-family:impact;
	color:white;
	background: #7E587E;
    border-radius: 10px;
    border: 1px solid white;
    box-shadow: 10px 10px 64px 0px rgba(180, 180, 207, 0.75);
   -webkit-box-shadow: 10px 10px 64px 0px rgba(186, 186, 202, 0.75);
   -moz-box-shadow: 10px 10px 64px 0px rgba(208, 208, 231, 0.75);
	
	}

	body
	{
	
	  background-image:linear-gradient(90deg,#3e32a8,#e310c7);
	}


</style>

<!--login-->	
<?php
 $db=mysqli_connect("localhost","root","","studentgrab");

	if(isset($_POST['Register']))
	{	header('location:0RegistrationFromCustomer.php');	} 

	if(isset($_POST['Login']))
	{
		$count=4;
		$ID = $_POST["ID"];
		$password = $_POST["password"];
		$getStatus=$_POST["status"];
	if($getStatus =='2')
	{
		$data="SELECT cust_ID,password FROM customer where cust_ID='$ID' and password ='$password'";
		$result= mysqli_query($db,$data);
		$count=mysqli_num_rows($result);
			if($count==1)
			$count=2;
			else 
			$count=0;
	}
	else
	{
		$data="SELECT driver_id,password FROM driver where driver_id='$ID' and password ='$password'";
		$result= mysqli_query($db,$data);
		$count=mysqli_num_rows($result);
			if($count==1)
				$count=3;
			else 
				$count=0;
  
	}
?>
<html>
<body>


	<div class="message">
	<br></br>
	<?php

	if($count==2)
	{
		header('location:1.0MainStudentGrab.php');
		session_start();
		while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
				$id= $row['cust_ID'];
				$row['password'];
			}
		$_SESSION['username']= $id;
	} 
	elseif($count==3)
	{	header('location:2.0MainDriver.php');
	    session_start();
		while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
				$id= $row['driver_id'];
				$row['password'];
			}
		$_SESSION['username']= $id;
	
	}
	elseif((empty($password)) || (empty($ID)) )
	{	echo"Please enter data in login!!";	}
	else
	{echo "You data not in our System,<br></br>Please register first!!";}
    
	}

	if(isset($_POST['Register']))
	{
	 header('location:0RegistrationOption.php');
	}
	
?>


	<br></br>
	<img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExM2k2a2VvNXRpMWpoMHl3cGt6YzNyMm13cDl3M3B0d2FoeW9mZW5iNCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9cw/fYzRXhXrUVGqEpDhrd/giphy.gif" style="height:100px; width:150px;">
	<br></br>
	<!--Button-->
	<a href="0.Main.php" target = "_parent"> <input name="logout" type="Submit" value="Logout"></a>  &nbsp;
	<a href="0RegistrationOption.php" target="_parent"><b><input name="Register" type="Submit" value="Register Now"></b></a>

</div>
</body>
</html>