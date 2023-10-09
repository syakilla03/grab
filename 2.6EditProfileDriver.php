<html>
<link rel="stylesheet" href="CSS_FormalStyle.css">
<?php
	$db=mysqli_connect("localhost","root","","studentgrab");

	if(isset($_POST['Edit Profile']))
	{
		$newName = $_POST["editName"];
		$newPnum=$_POST["editPhone"];
		$newPass=$_POST["editPassword"];
		session_start();
		$driverid = $_SESSION['username'];
			if(!empty($newName ))
				{
					$sql="update driver set driver_name='$newName' where driver_id='$cdriverid'";
					$query=mysqli_query($db,$sql);
				}
 
			if(!empty($newPnum ))
				{
					$sql="update driver set driver_phone_number='$newPnum' where driver_id='$driverid'";
					$query=mysqli_query($db,$sql);
				}
 
			if(!empty($newPass))
				{
					$sql="update driver set password='$newPass' where driver_id='$driverid'";
					$query=mysqli_query($db,$sql);
					$count4=1;
				}
 
			if( !empty($newName)  ||!empty($newPnum) ||!empty($newPass))
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

body
 {
  background-image:linear-gradient(90deg,#b993d6, #8ca6db );
  
 } 
 
 	
     input[type=text],input[type=password]
	 {
	 border:2px solid #aaa;
	 height:30px;
	 width:350px;
	 border-radius:4px;
	 background-color: #94bbe9 ;
	 margin:8px
	 transition:3s;
	 
	 }
	 
	 input[type=text]:focus
	 {
	 border-color:dodgerBlue;
	 box-shadow:0 0 8px dodgerBlue;
	 }
	 
	 input[type=password]:focus
	 {
	 border-color:red;
	 box-shadow:0 0 8px red;
	 }
	 
	  input[type=text]
	 {
	  text-align:center;
	  font-family:verdana;
	  font-weight:bold;
	
	 }
	
	

</style>
 <?php
         $db=mysqli_connect("localhost","root","","studentgrab");
	      session_start();

		$data = $_SESSION['username'];
		$select="SELECT * FROM driver where driver_id='$data' ";
		$result= mysqli_query($db,$select);
	
		while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			
			$dname= $row['driver_name'];
			$dphone=$row['driver_phone_number'];
		    $email=$row['driver_email'];
			$pass=$row['password'];
	    }
	
	?>
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
		<td><input type= "text" name=" editName" value="<?php echo $dname; ?>">
		</tr>



		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Phone number</td>
		<tr>

		<tr>
		<td><input type= "text" name=" editPhone" value="<?php echo $dphone; ?>">
		</tr>
		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Email</td>
		<tr>

		<tr>
		<td><input type= "text" name=" editEmail" value="<?php echo $email; ?>">
		</tr>

		

		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Password</td>
		<tr>

		<tr>
		<td><input type= "text" name="editPassword" value="<?php echo $pass; ?>">
		</tr>

        
         
		</table>
		</div>
		
		<br></br><br></br><br></br><br></br>
		<div style="width:500; margin-left:500; background: #C9C0BB; text-align:center;border-radius: 10px; border: 1px solid white;">
		<div style=" font-family:impact; color:white; font-size:20; " >Modify Your car Information:</div>
		<!--button-->
		<?php
		
		 $id = $_SESSION['username'];
		 $sql="Select  plate_number from car where driver_id='$id'";
		 $result=mysqli_query($db,$sql);
		 while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
		 {
			 $plate=$row['plate_number']
		 ?>
		

           <input type ="submit" name="viewDriver"  value="<?php echo $row['plate_number'];?>">&nbsp;&nbsp;	&nbsp;
		    
          <?php			
	
		 }
		 
		

		 
		 ?>
	
		 	<table align="center">
		<tr>
		<td style="text-align:center; font-family:impact; color:white; font-size:20; ">Change Car Information</td>
		</tr>
		
		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Enter Plate Number</td>
		<tr>

		<tr>
		<td><input type= "text" name=" plate" placeholder="Enter the plate number of edited car">
		</tr>

		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Model</td>
		<tr>

		<tr>
		<td><input type= "text" name=" editmodel" placeholder="Update model">
		</tr>



		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Colour</td>
		<tr>

		<tr>
		<td><input type= "text" name=" editcolour" placeholder="Update car colour">
		</tr>

		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Capacity</td>
		<tr>

		<tr>
		<td><input type= "text" name="editCapacity" placeholder="Change capacity">
		</tr>
		
         <tr><td><b style="margin-left:205px;"><input type ="Submit"  name="ChangeInfo" value="Submit"></b></td></tr>
		 
	     </form>
	
		 </div>
		 
		 <?php
		 if(isset($_POST['ChangeInfo']))
	{
		$newName = $_POST["editName"];
		$newPnum=$_POST["editPhone"];
		$newEmail=$_POST["editEmail"];
		$newPass=$_POST["editPassword"];
		$newModel=$_POST["editmodel"];
		$newColour=$_POST["editcolour"];
		$newCapacity=$_POST["editCapacity"];
		$changePlate=$_POST["plate"];
			if(!empty($newName ))
				{
					$sql="update driver set driver_name='$newName' where driver_id='$id'";
					$query=mysqli_query($db,$sql);
				}
 
 
			if(!empty($newPnum ))
				{
					$sql="update driver set driver_phone_number='$newPnum' where driver_id='$id'";
					$query=mysqli_query($db,$sql);
				}
 
			if(!empty($newPass))
				{
					$sql="update driver set password='$newPass' where driver_id='$id'";
					$query=mysqli_query($db,$sql);
				}
				
				if(!empty($newEmail))
				{
					$sql="update driver set driver_email='$newEmail' where driver_id='$id'";
					$query=mysqli_query($db,$sql);
				}
				
				if(!empty($newModel))
				{
					$sql="update car set car_model='$newModel' where plate_number='$changePlate'";
					$query=mysqli_query($db,$sql);
				}
				
					if(!empty($newColour))
				{
					$sql="update car set car_colour='$newColour' where  plate_number='$changePlate'";
					$query=mysqli_query($db,$sql);
				}
				
					if(!empty($newCapacity))
				{
					$sql="update car set car_seater'$newCapacity' where  plate_number='$changePlate'";
					$query=mysqli_query($db,$sql);
				}
				
 
			if( !empty($newName)|| !empty($newPnum) ||!empty($newPass) || !empty($newModel) || !empty($newColour) || !empty($newCapacity))
				{  
					$alert="<script>alert('Updated data Succes !! Check your profile now');</script>";
					echo $alert;
				}
 
  
	}
		
		 
		 
		 ?>
	

	 

	
	
</body>
</html>