<?php


 $db=mysqli_connect("localhost","root","","studentgrab");
 $id=$_GET['idCust'];
$determine="Select * from customer where cust_ID='$id'";
$query=mysqli_query($db,$determine);


	  
	  while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
	  {
		   $id= $row['cust_ID'];
			$pass= $row['password'];
			$phone=$row['cust_phone_number'];
			$name= $row['cust_name'];
			$email= $row['email'];
			$matric= $row['matricNO'];  
	  }
	  
	  if($query)
	  {
		 ?>
		 <html>
		 
		 <style>
		 .boxView
		 {
		 background-color:#B4CFEC;
		 width:500;
		 height:500;
		 border-radius:20;
		 border-radius: 50px;
         border-color:white;
         box-shadow: 10px 10px 64px 0px rgba(180, 180, 207, 0.75);
        -webkit-box-shadow: 10px 10px 64px 0px rgba(186, 186, 202, 0.75);
        -moz-box-shadow: 10px 10px 64px 0px rgba(208, 208, 231, 0.75);
         margin-left:470;
		 }
		 
	
		 
		 
		 
		 
		 </style>
		 <link rel="stylesheet" href="CSS_AdminStyle.css">
		 <body>
		<br></br>
		<b style="margin-left:600; font-family:algerian ; font-size:30; color:white;">Customer Details</b>
		<div class="boxView">
		
		<br></br>
        <table align="center" cellpadding="5" style="text-align:center; ">
	    <tr style="background-color:#F0F8FF; font-family:Castellar; box-shadow:0 0 8px ; "><td style=" width:200;">  Id</td></tr>
        <tr style="font-family:Courier; font-size:16;"><td><?php echo $id; ?> </td></tr>
	    <tr style="background-color:#F0F8FF; font-family:Castellar; "><td> Password</td></tr>
        <tr  style="font-family:Courier; font-size:16;"><td><?php echo $pass; ?> </td></tr> 
	    <tr style="background-color:#F0F8FF; font-family:Castellar;  "><td> Name</td></tr>
	    <tr  style="font-family:Courier; font-size:16;"><td><?php echo $name; ?> </td></tr>  
	    <tr style="background-color:#F0F8FF; font-family:Castellar;  "><td> Phone Number</td></tr>
	    <tr  style="font-family:Courier; font-size:16;"><td><?php echo $phone; ?> </td></tr> 
	    <tr style="background-color:#F0F8FF; font-family:Castellar;"><td> Email</td></tr>
	    <tr  style="font-family:Courier; font-size:16;"><td><?php echo $email; ?> </td></tr>
	    <tr style="background-color:#F0F8FF; font-family:Castellar;  "><td >Matric Number </td></tr>
	    <tr  style="font-family:Courier; font-size:16;"><td><?php echo $matric; ?> </td></tr>
		<tr><td> <a href="3.1AdminCust.php"><input type="submit" name="back" value="back"></a></td></tr>
		</table> 
		</div>
		
		
		
		</html>
		  
		  
		  
		  
		<?php  
		  
	  }
	  


	





?>