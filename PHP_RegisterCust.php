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
	$key="C";
    $id= $key.date("is");
	$Name = $_POST['name'];
	$MatricNo = $_POST['matricNo'];
	$email = $_POST['email'];
	$phoneNo = $_POST['phoneNum'];
	$pass = $_POST['password'];
	$Cpass = $_POST['Cpassword'];
   
    $sql="select * from customer Where matricNO= '$MatricNo'";
	$data=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($data);

    if($count>0)
	{$_SESSION['email_alert']='1';
     echo "You already have an account";}

	elseif($pass==$Cpass)
	{
	// Database connection
        
		
		$stmt = "insert into customer(cust_ID,password, cust_phone_number, cust_name, email, matricNO) values('$id','$pass' , '$phoneNo','$Name', '$email', '$MatricNo')";
		$result=mysqli_query($conn,$stmt);
		
		if($result)
		{echo"Registration Succesfull";
	
	?>
	<br></br>
	<?php
		echo"Your Custumer id is:".$id;
		}
	
	}
	elseif($pass!=$Cpassword)
		header('Location:0RegistrationFromCustomer.php?CRegister_message=Your password not match.Try again');	
	}
?>

</br><br>

<a href="0UserPage_login.php"><b><input name="Login" type="Submit" value="Login Now"></b></a> 
</div>
</body>
</html>