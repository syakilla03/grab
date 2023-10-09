<link rel="stylesheet" href="CSS_register.css">
<html >
<body >
<style>

body
 {
  background-image:linear-gradient(90deg,#3e32a8,#e310c7);
  
 }

	.message{
	font-size:25;
	text-align: center;
	width:460px;
	height:400px;
	border: 5px ;
	margin-top:100;
	margin-left:500;
	align:center;
	border:5px solid #aaa;
	border-bottom-color:black;
	color:#00008B;
	font-family:impact;
	background: #F4F6FB;
    border-radius: 10px;
    border: 1px solid white;
    box-shadow: 10px 10px 64px 0px rgba(180, 180, 207, 0.75);
   -webkit-box-shadow: 10px 10px 64px 0px rgba(186, 186, 202, 0.75);
   -moz-box-shadow: 10px 10px 64px 0px rgba(208, 208, 231, 0.75);
	
}
</style>




<div class="message">
 <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExMWowcDZ1ZmFwNG12aW96c2JoMHQwcXFzbWpqcjMyam8ydm85azYyZSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9cw/KcnlGHBpnKnjZIuCMv/giphy.gif" style="height:150px; width:150px">
 <br></br>
<?php
    	$conn = mysqli_connect("localhost","root","","studentgrab");
	
	
	
	if(isset($_POST['Register']))
	{
	
	$Name = $_POST['name'];
	$MatricNo = $_POST['matric'];
	$email = $_POST['email'];
	$phoneNo = $_POST['pnum'];
	$pass = $_POST['password'];
	$Cpass = $_POST['Cpassword'];
	$gender=$_POST['gender'];
	$plate=$_POST['plate'];
	$colour=$_POST['colour'];
	$seater=$_POST['capacity'];
	$model=$_POST['model'];
	if($gender==2)
	{
		$key="F";
		$id= $key.date("is");
	}
	else
	{
		$key="M";
		$id= $key.date("is");		
	}
   
    $sql="select * from driver Where matricNO= '$MatricNo'";
	$data=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($data);

    if($count>0)
	{$_SESSION['email_alert']='1';
     echo "You already have an account";}

	elseif($pass==$Cpass)
	{
	// Database connection
        
		
		$stmt = "insert into driver(driver_id,matricNO, driver_name, driver_phone_number,driver_email, password,gender) values('$id','$MatricNo' , '$Name ', '$phoneNo', '$email','$pass','$gender')";
		$result=mysqli_query($conn,$stmt);
		
		$stmtCar="insert into car(plate_number,driver_id,car_colour,car_seater,car_model) values('$plate','$id','$colour','$seater','$model')";
		$result1=mysqli_query($conn,$stmtCar);
		if($result and $result1)
		{echo"Registration Succesfull";
	
	?>
	<br></br>
	<?php
		echo"Your Driver id is:".$id;
		}
	
	}
	elseif($pass!=$Cpass)
	{header('Location:RegisterDriver.php?CRegister_message=Your password not match.Try again');	}
	
	}
?>

</br><br>

<a href="0UserPage_login.php"><b><input name="Login" type="Submit" value="Login Now"></b></a> 
</div>
</body>
</html>