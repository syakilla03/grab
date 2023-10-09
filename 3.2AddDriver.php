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
		<td style=" font-family:impact;  font-size:18; font-weight:bold; text-align:center;">Driver Details</td>
		<tr>
		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Name</td>
		<tr>

		<tr>
		<td><input type= "text" name="name" placeholder= "Enter New Driver Name" required="" >
		</tr>
		
		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Matric Number</td>
		<tr>

		<tr>
		<td><input type= "text" name="matric" placeholder= "Enter New Driver Matric Number" required="" >
		</tr>
		

		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Email</td>
		<tr>

		<tr>
		<td><input type= "text" name="email" placeholder= "Enter New Driver Email" required="" >
		</tr>


		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Phone number</td>
		<tr>

		<tr>
		<td><input type= "text" name="phone" placeholder= "Enter New Email Phone Number" required="" >
		</tr>
		
		
		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Gender</td>
		<tr>

		<tr>
		<td><select name="gender" style ="background-color:#DADBDD; color:black;">
             <option value=2> Female</option>
			 <option value=1> Male</option>
			 </select>
		</table>
		
		
		<br></br>
		<table align="center"  >
		</tr>
		<tr >
		<td style=" font-family:impact;  font-size:18; font-weight:bold; text-align:center;">Car Details</td>
		<tr>
		
		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Plate number</td>
		<tr>

		<tr>
		<td><input type= "text" name="Plate" placeholder= "Enter New  Driver's Car Plate Number" required="" >
		</tr>
		
		
		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Car Model</td>
		<tr>

		<tr>
		<td><input type= "text" name="Model" placeholder= "Enter New  Driver's Car Model" required="" >
		</tr>
		
		
		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Car Colour</td>
		<tr>

		<tr>
		<td><input type= "text" name="colour" placeholder= "Enter New  Driver's Car Colour" required="" >
		</tr>
		
		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Capacity</td>
		<tr>

		<tr>
		<td><input type= "text" name="capacity" placeholder= "Enter New  Driver's Car Capacity" required="" >
		</tr>
		<tr >
		<td style=" font-family:impact;  font-size:18; font-weight:bold; text-align:center;">Account Security</td>
		<tr>
		
		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Account Password</td>
		<tr>

		<tr>
		<td><input type= "password" name="password" placeholder= "Create Account Password" required="" >
		</tr>
		
		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Confirm Password</td>
		<tr>

		<tr>
		<td><input type= "password" name="cpass" placeholder= "Confirm Account Password" required="" >
		</tr>



		</table>
		<br></br>
		<!--button-->
		</table>
		<tr>
		
		<td><b style="margin-left:430px;"><input type ="Submit"  name="Submit" value="Add now"></b></td>
        <td><b style="margin-left:30px;"><input type ="Reset"  name="Reset" value="Reset" style="background-color:dodger blue;"></b></td>
		</tr>
        </table>
	
	
	</body>
<?php
ob_start();
 $db=mysqli_connect("localhost","root","","studentgrab");

  if(isset($_POST['Submit']))
{
	$gender=$_POST['gender'];
	if($gender==1)
	$key="M";
    else
	$key="F";
    $idNum= $key.date("is");
	
	$phoneNum=$_POST['phone'];
	$Matric=$_POST['matric'];
	$Cemail=$_POST['email'];
	$name=$_POST['name'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpass'];
	$plate=$_POST['Plate'];
	$model=$_POST['Model'];
	$colour=$_POST['colour'];
	$capacity=$_POST['capacity'];
	
	$query="select * from driver where matricNo='$Matric'";
	$checkR=mysqli_query($db,$query);
	$count=mysqli_num_rows($checkR);
	if($count>0)
	{
		$alert="<script>alert('Driver Already Register! ');</script>";
					echo $alert;
	}
	else	
	if($password==$cpassword)
	{
	
	$sql="insert into driver(driver_id,matricNO, driver_name,driver_phone_number, driver_email,password,gender) values('$idNum','$Matric' , '$name','$phoneNum', '$Cemail', '$password','$gender')";
	$result=mysqli_query($db,$sql);
	$sql2="insert into car(plate_number,driver_id,car_colour, car_seater,car_model) values('$plate','$idNum' , '$colour','$capacity', '$model')";
	$result1=mysqli_query($db,$sql2);
	
		if($result)
		{
		$alert="<script>alert('Succesful! New driver added.');</script>";
					echo $alert;
		}
	      else
		  {$alert="<script>alert('Unsuccesfull add new driver');</script>";
		  echo $alert;}   		 
	}
	else
	{
		$alert="<script>alert('Pasword not Match!');</script>";
	echo $alert;  }   	
}
?>