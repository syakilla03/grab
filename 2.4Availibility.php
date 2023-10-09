	
<html>
<link rel="stylesheet" href="CSS_FormalStyle.css">
<style>
body
 {
  background-image:linear-gradient(90deg,#b993d6, #8ca6db );
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
	 
	 input[type=time]:focus
	 {
	 border-color:dodgerBlue;
	 box-shadow:0 0 8px dodgerBlue;
	 }
	 
	 input[type=date]:focus
	 {
	 border-color:red;
	 box-shadow:0 0 8px red;
	 }
	
  
 
</style>
<body align="center" >
<form method="POST">
<table>
<i style="font-family:impact; color:white;  font-size:55;">Availibility Status </i>
<br></br>
<table align="center" style=" font-size:35; font-family:monospace; " >
<tr >
<td colspan="2" style="background-color:#F98B88; border: 5px solid ; border-color:#F75D59"> Choose Your Available Date </td>
</tr>
<tr>
<td style="text-align:center;background-color:#F8F8FF; border-color:#F75D59;"><input type="date" value="date"  name="date" placeholder="Enter Service Available date"></td>
</tr>
</table>

<br></br>
<br></br>


<table align="center" style=" font-size:35; font-family:monospace; " >
<tr style="font-style:monospace;">
<td colspan="2" style="background-color:#F98B88; border: 5px solid ; border-color:#F75D59; text-align:center; "> Availibility Hours </td>
</tr>

<tr>
<td style="text-align:center; border: 5px solid ;background-color:#F8F8FF;  border-color:#F75D59; width:300; height:90;" > Start: <input type="time" name="hourStart" ></td>
<td style="text-align:center; border: 5px solid ; background-color:#F8F8FF; border-color:#F75D59; width:300; " > Finish: <input type="time" name="hourEnd"></td>
</tr>
</table>

<input name="Reset" type="Reset" value="Reset">&nbsp; &nbsp; 
<input name="Send" type="Submit" value="Send">&nbsp; &nbsp; 

</form>	




	
	<?php	
		


    if(isset($_POST['Send']))
	{
		session_start();
		$id=$_SESSION['username'];
		$db=mysqli_connect("localhost","root","","studentgrab");
		$date=$_POST['date'];
		$Starttime=$_POST['hourStart'];
		$endTime=$_POST['hourEnd'];
		$status=0;
		if(!empty($date) and !empty($Starttime) and !empty($endTime))
		{
		$sql="Insert into driverfreetime(driver_id,start_time,finish_time, date,status) values('$id','$Starttime' , '$endTime','$date','$status')";
		$result=mysqli_query($db,$sql);
		
		if($result)
		{
			$alert="<script>alert('Your Working time being recorded...Thank You!!');</script>";
		echo $alert;
		}
		}
		else
		if(empty($date) and !empty($Starttime) and !empty($endTime))
		{
			$alert="<script>alert('Unsuccesful..Your not enter date!!');</script>";
		   echo $alert;
			
		}
		else
		if(!empty($date) and empty($Starttime) and !empty($endTime))
		{
			$alert="<script>alert('Unsuccesful..Your not enter start hour!!');</script>";
		   echo $alert;
			
		}
		else
		if(!empty($date) and !empty($Starttime) and empty($endTime))
		{
			$alert="<script>alert('Unsuccesful..Your not enter finish hour!!');</script>";
		   echo $alert;
			
		}
		else
		{$alert="<script>alert('Enter data in the from before Send it!!');</script>";
		echo $alert;}
			
		
	}
		
?>
	
	





</table>



</body>

</html>