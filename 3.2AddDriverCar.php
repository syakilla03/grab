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
<b style="font-family:impact; color:white; font-size:30; margin-left:480;"> Add Driver's Car<b>
<br></br>
<form  method="post" >
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


		</table>
		<br></br>
		<!--button-->
		</table>
		<tr>
		
		<td><b style="margin-left:430px;"><input type ="Submit"  name="Submit" value="Add now"></b></td>
        <td><b style="margin-left:30px;"><input type ="Reset"  name="Reset" value="Reset" style="background-color:dodger blue;"></b></td>
		</form>
		</tr>
       
	
	
	</body>
<?php
ob_start();
 $db=mysqli_connect("localhost","root","","studentgrab");
 $DriverID=$_GET['idDriver'];
  if(isset($_POST['Submit']))
{
	$plate=$_POST['Plate'];
	$model=$_POST['Model'];
	$colour=$_POST['colour'];
	$capacity=$_POST['capacity'];
	
	
	
	
	
	$sql="insert into car(plate_number,driver_id,car_colour, car_seater,car_model) values('$plate','$DriverID' , '$colour','$capacity', '$model')";
	$result=mysqli_query($db,$sql);
	
		if($result)
		{
		$alert="<script>alert('Successful! New Car Added.');</script>";
					echo $alert;
		}
	      else
		  {$alert="<script>alert('Unsuccessful! add Car.');</script>";
		  echo $alert;}   		 
	
}
?>