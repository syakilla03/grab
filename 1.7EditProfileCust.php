<html>

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
	

	if(isset($_POST['ChangeInfo']))
	{
		$newName = $_POST["editName"];
		$newEmail = $_POST["editEmail"];
		$newPnum=$_POST["editPhone"];
		$newPass=$_POST["editPassword"];
		$custid = $_SESSION['username'];
			if(!empty($newName ))
				{
					$sql="update customer set cust_name='$newName' where cust_id='$custid'";
					$query=mysqli_query($db,$sql);
				}
 
			if(!empty($newEmail ))
				{
					$sql="update customer set email='$newEmail' where cust_id='$custid'";
					$query=mysqli_query($db,$sql);
				}
 
 
			if(!empty($newPnum ))
				{
					$sql="update customer set cust_phone_number='$newPnum' where cust_id='$custid'";
					$query=mysqli_query($db,$sql);
				}
 
			if(!empty($newPass))
				{
					$sql="update customer set password='$newPass' where cust_id='$custid'";
					$query=mysqli_query($db,$sql);
				}
 
			if( !empty($newName)  || !empty($newEmail)  ||!empty($newPnum) ||!empty($newPass))
				{  
					$alert="<script>alert('Updated data Succes !! Check your profile now');</script>";
					echo $alert;
				}
 
  
	}
?>

<link rel="stylesheet" href="CSS_register.css">
<body bgcolor="#E6E6FA" >
<style>

.displayBox 
{
  border: 2px solid red;
  width:500;
  align:center;
  height:320;
  margin-left:500;
  background: #95B9C7;
  border-radius: 10px;
  border: 1px solid white;
  box-shadow: 10px 10px 64px 0px rgba(180, 180, 207, 0.75);
  -webkit-box-shadow: 10px 10px 64px 0px rgba(186, 186, 202, 0.75);
  -moz-box-shadow: 10px 10px 64px 0px rgba(208, 208, 231, 0.75);
}

.note
{
	border: 2px solid red;
	font-family:Papyrus; 
	font-size:20;
	width:700;
	margin-left:400;
	margin-right:400;
    background: #95B9C7;
    color:white;
    border-radius: 10px;
   border: 1px solid white;
   box-shadow: 10px 10px 64px 0px rgba(180, 180, 207, 0.75);
   -webkit-box-shadow: 10px 10px 64px 0px rgba(186, 186, 202, 0.75);
   -moz-box-shadow: 10px 10px 64px 0px rgba(208, 208, 231, 0.75);	
}

 input[type=text]
	 {
	  text-align:center;
	  font-family:verdana;
	  font-weight:bold;
	
	 }

body
 {
  background-image:linear-gradient(90deg,#b993d6, #8ca6db );
  
 } 

</style>

	<b style="margin-left:680"><img src="https://media.giphy.com/media/0DbpeTlVnwIkfGbV8o/giphy.gif" style="height:200; width:180;"></b>
	<div class="note">
		Hello user you can <b>change you account details</b> by enter any data that you want to edit. Fill in the form with updated data and click submit.<u> Just leave the form empty for the data that you dont want to change</u>. The system will display you latest information in your account..<i>That all and Thank You!</i>
	</div>
	<br></br>
	<div class="displayBox">
	<form  method="post">
		<table align="center">
		<tr>
		<td style="text-align:center; font-family:impact; color:white; font-size:20; ">Change My Information</td>
		</tr>

		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Name</td>
		<tr>

		<tr>
		<td><input type= "text" name=" editName" value="<?php  echo $name; ?>"></td>
		</tr>

		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Email</td>
		<tr>

		<tr>
		<td><input type= "text" name=" editEmail" value="<?php  echo $email; ?>">
		</tr>


		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Phone number</td>
		<tr>

		<tr>
		<td><input type= "text" name=" editPhone" value="<?php  echo $phone; ?>">
		</tr>

		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Password</td>
		<tr>

		<tr>
		<td><input type= "text" name="editPassword" value="<?php  echo $pass; ?>">
		</tr>



		</table>
		<br></br><br></br>
		<!--button-->
		<b style="margin-left:205px;"><input type ="Submit"  name="ChangeInfo" value="Submit"></b>




	</form>

	</div>
	<br></br>
	<br></br>
	<br></br>
	<!--button-->
	<a href="1.6AccountCust.php"><b  style="margin-left:700px;"><input type ="Submit"  name="ViewAccount" value="My Profile"></b></a>
</body>
</html>