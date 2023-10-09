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

	
     input[type=date],input[type=time]
	 {
	 border:2px solid #aaa;
	 height:30px;
	 width:350px;
	 border-radius:4px;
	 background-color: #94bbe9 ;
	 margin:8px
	 transition:3s;
	 
	 }
	 
	 input[type=date]:focus
	 {
	 border-color:dodgerBlue;
	 box-shadow:0 0 8px dodgerBlue;
	 }
	 
	 input[type=time]:focus
	 {
	 border-color:red;
	 box-shadow:0 0 8px red;

</style>
<?php
 $db=mysqli_connect("localhost","root","","studentgrab");
 $DriverID=$_GET['idDriver'];
  if(isset($_POST['Submit']))
{
	$date=$_POST['date'];
	$Shour=$_POST['Shour'];
	$Ehour=$_POST['Ehour'];
	$status=0;
	
	
	
	
	
	$sql="insert into driverfreetime(driver_id,start_time,finish_time,date,status) values('$DriverID' , '$Shour','$Ehour', '$date','$status')";
	$result=mysqli_query($db,$sql);
	
		if($result)
		{
		$alert="<script>alert('Succesful! Add driver Work Time.');</script>";
					echo $alert;
		}
	      else
		  {$alert="<script>alert('Unsuccesfull! Add driver Work Time');</script>";
		  echo $alert;}   		 
	
}
?>

<body >
<br></br>
<form  method="post" >
		<br></br>
		<table align="center" cellpadding="10" >
		</tr>
		<tr >
		<td style=" font-family:impact;  font-size:38; font-weight:bold; text-align:center;">Availibility details</td>
		<tr>
		
		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Date</td>
		<tr>

		<tr>
		<td><input type= "date" name="date" placeholder= "Enter date" required="" >
		</tr>
		
		
		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Start Hour</td>
		<tr>

		<tr>
		<td><input type= "time" name="Shour" placeholder= "Hour driver start service" required="" >
		</tr>
		
		
		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Finish hour</td>
		<tr>

		<tr>
		<td><input type= "time" name="Ehour" placeholder= "EHour driver end service" required="" >
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
