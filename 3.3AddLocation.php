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
<b style="font-family:impact; color:white; font-size:30; margin-left:480;"> New Location to System<b>
<br></br><br></br>
<form  method="post" >
		<table align="center" >

		
		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Pick Up Location Name</td>
		<tr>

		<tr>
		<td><input type= "text" name="pickName" placeholder= "Enter pick up location" required="" >
		</tr>
		
		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Drop off Location Name</td>
		<tr>

		<tr>
		<td><input type= "text" name="dropName" placeholder= "Enter drop off Location" required="" >
		</tr>
		

		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Price</td>
		<tr>

		<tr>
		<td><input type= "text" name="price" placeholder= "Enter Price" required="" >
		</tr>


		</table>
		<br></br>
		<!--button-->
		<b style="margin-left:460px;"><input type ="Submit"  name="AddNow" value="Add now"></b>
        <b style="margin-left:235px;"><input type ="Reset"  name="Reset" value="Reset" style="background-color:dodger blue;"></b>
        
	</form>
	
	
<?php
 $db=mysqli_connect("localhost","root","","studentgrab");

  if(isset($_POST['AddNow']))
{
	
	$key1="L";
    $Lcode= $key1.date("is");
	$key2="P";
    $PCode= $key2.date("is");
	$key3="D";
    $Dcode= $key3.date("is");
	$pickName=$_POST['pickName'];
	$dropName=$_POST['dropName'];
	$price=$_POST['price'];
	
	$query="select * from location where pickup_location_name='$pickName' and  dropoff_location_name='$dropName'";
	$checkR=mysqli_query($db,$query);
	$count=mysqli_num_rows($checkR);
	if($count>0)
	{
		$alert="<script>alert('Location Option Already Exist!');</script>";
					echo $alert;
	}
	else
	{		
	
	$sqlCheck="select pickUp_location_code from location where pickup_location_name='$pickName'";
	$result2=mysqli_query($db,$sqlCheck);
	
	while($row=mysqli_fetch_array($result2,MYSQLI_ASSOC))
	{
		
		$pickCode=$row[	'pickUp_location_code'];
		
	}
	
	$sqlCheck="select dropOff_location_code from location where dropoff_location_name='$dropName'";
	$result2=mysqli_query($db,$sqlCheck);
	
	while($row=mysqli_fetch_array($result2,MYSQLI_ASSOC))
	{
		
		$dropCode=$row[	'dropOff_location_code'];
		
	}
	
	
    

   
	 if( !empty($pickCode)  and !empty($dropCode))
	 {
       header('Location:3.3AdminLocation.php?AddLoc_message=Location Option already exist!');
	
	 }
	 else
	 {
		  if( empty($pickCode)  and !empty($dropCode))
	 {
       $ThepickCode=$Pcode;
	   $ThedropCode=$dropCode;
	
	 }
	 else
		 
	  if(!empty($pickCode ) and empty($dropCode))
	 {
       $ThepickCode=$pickCode;
	   $ThedropCode=$Dcode;
	
	
	 }
	 else
		 if(!empty($pickCode ) and !empty($dropCode))
	 {
       $ThepickCode=$pickCode;
	   $ThedropCode=$dropCode;
	
	
	 }
	 else
	 {
       $ThepickCode=$Pcode;
	   $ThedropCode=$Dcode;
	
	 } 
	 	
	 $sql="insert into location(location_code,pickUp_location_code, pickup_location_name, dropOff_location_code, dropoff_location_name, location_price) values('$Lcode','$ThepickCode' , '$pickName','$ThedropCode', '$dropName', '$price')";
	$result=mysqli_query($db,$sql);
	
		if($result)
	        header('Location:3.3AdminLocation.php?AddLoc_message=Succesful! insert new Location option.');	
		else
			 header('Location:3.3AdminLocation.php?AddLoc_message=Add Location unsuccessful!');	
		 
	 }
	
}
}

?>

</body>

</html>

