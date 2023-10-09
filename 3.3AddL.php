	
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
	 {
       $ThepickCode=$Pcode;
	   $ThedropCode=$Dcode;
	
	 }
	 	
	 $sql="insert into location(location_code,pickUp_location_code, pickup_location_name, dropOff_location_code, dropoff_location_name, location_price) values('$Lcode','$ThepickCode' , '$pickName','$ThedropCode', '$dropName', '$price')";
	$result=mysqli_query($db,$sql);
	
		if($result)
	        header('Location:3.3AdminLocation.php?AddLoc_message=Succesful insert new Location option');	
		else
			 header('Location:3.3AdminLocation.php?AddLoc_message=Add customer unsuccessful');	
	
}

?>