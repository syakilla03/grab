<link rel="stylesheet" href="CSS_AdminStyle.css">
<br></br>
<style>
   input[type=Submit] ,input[type=Reset]{
  margin-top:20px;
  padding: 12.5px 30px;
  border: 0;
  border-radius: 100px;
  background-color: #0000A0;
  color: #ffffff;
  font-weight: Bold;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
}

 input[type=Submit]:hover ,input[type=Reset]:hover{
  background-color: #77BFC7
  box-shadow: 0 0 20px #6fc5ff50;
  transform: scale(1.1);}
 

 input[type=Submit] :active ,input[type=Reset]:active{
  background-color: #3d94cf;
  transition: all 0.25s;
  -webkit-transition: all 0.25s;
  box-shadow: none;
  transform: scale(0.98);
}

</style>
<body >
<b style="font-family:impact; color:white; font-size:30; margin-left:480;"> New Customer to System<b>
<br></br>
<form  method="post" >
		<table align="center" >

		
		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Name</td>
		<tr>

		<tr>
		<td><input type= "text" name="name1" placeholder= "Enter New Customer Name" required="" >
		</tr>
		
		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Matric Number</td>
		<tr>

		<tr>
		<td><input type= "text" name="matric1" placeholder= "Enter New Customer Matric Number" required="" >
		</tr>
		

		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Email</td>
		<tr>

		<tr>
		<td><input type= "text" name="email1" placeholder= "Enter New Customer Email" required="" >
		</tr>


		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Phone number</td>
		<tr>

		<tr>
		<td><input type= "text" name="phone1" placeholder= "Enter New Customer Phone Number" required="" >
		</tr>
		
		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Account Password</td>
		<tr>

		<tr>
		<td><input type= "password" name="password1" placeholder= "Create Account Password" required="" >
		</tr>
		
		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Confirm Password</td>
		<tr>

		<tr>
		<td><input type= "password" name="cpass1" placeholder= "Confirm Account Password" required="" >
		</tr>



		</table>
		<br></br>
		<!--button-->
		<b style="margin-left:460px;"><input type ="Submit"  name="Submit" value="Add now"></b>
        <b style="margin-left:235px;"><input type ="Reset"  name="Reset" value="Reset" style="background-color:dodger blue;"></b>
        
	</form>
	
	</body>
<?php
 $db=mysqli_connect("localhost","root","","studentgrab");

  if(isset($_POST['Submit']))
{
	
	$key="C";
    $idNum= $key.date("is");
	$phoneNum=$_POST['phone1'];
	$Matric=$_POST['matric1'];
	$Cemail=$_POST['email1'];
	$name=$_POST['name1'];
	$password=$_POST['password1'];
	$cpassword=$_POST['cpass1'];
	
	$query="select * from customer where matricNo='$Matric'";
	$checkR=mysqli_query($db,$query);
	$count=mysqli_num_rows($checkR);
	
	if($count>0)
	{
		$alert="<script>alert('Customer Already Register ');</script>";
					echo $alert;
	}
	else
	
	if($password==$cpassword)
	{
	
	$sql="insert into customer(cust_ID,password, cust_phone_number, cust_name, email, matricNO) values('$idNum','$password' , '$phoneNum','$name', '$Cemail', '$Matric')";
	$result=mysqli_query($db,$sql);
	
		if($result)
	        header('Location:3.1AdminCust.php?AddCust_message=Successful insert new customer!');	
		else
			 header('Location:3.1AdminCust.php?AddCust_message=Sorry,Add customer unsuccessful!');	
	}
	else
		header('Location:3.1AdminCust.php?AddCust_message=Unsuccesful! Password not match.');
	
	
	
}

?>