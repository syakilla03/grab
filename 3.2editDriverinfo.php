<html>
 <link rel="stylesheet" href="CSS_AdminStyle.css">
<style>
	 .boxView
		 {
		 background-color:#B4CFEC;
		 width:500;
		 height:350;
		 border-radius:20;
		 border-radius: 50px;
         border-color:white;
        box-shadow: 10px 10px 64px 0px rgba(180, 180, 207, 0.75);
        -webkit-box-shadow: 10px 10px 64px 0px rgba(186, 186, 202, 0.75);
        -moz-box-shadow: 10px 10px 64px 0px rgba(208, 208, 231, 0.75);
         margin-left:470;
		 }
		 
		 input{
			 
		text:center;	  
		 }
		 
		  
	  input[type=Submit],[type=Reset]{
  padding: 12.5px 30px;
  border: 0;
  border-radius: 100px;
  background-color: #191970;
  color: #ffffff;
  font-weight: Bold;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
}

 input[type=Submit]:hover,[type=Reset]:hover {
  background-color: #77BFC7
  box-shadow: 0 0 20px #6fc5ff50;
  transform: scale(1.1);}


 input[type=Submit] :active, [type=Reset]:active {
  background-color: #3d94cf;
  transition: all 0.25s;
  -webkit-transition: all 0.25s;
  box-shadow: none;
  transform: scale(0.98);
}
		 
		 
		 
		 </style>
		 
		 
		<?php
		$db=mysqli_connect("localhost","root","","studentgrab");
		$id=$_GET['idDriver'];
        $determine="select * from driver where driver_id='$id'";
        $query1=mysqli_query($db,$determine);
		
	  while($row=mysqli_fetch_array($query1,MYSQLI_ASSOC))
	  {
			$D_name= $row['driver_name'];
			$D_phone=$row['driver_phone_number'];
			$email=$row['driver_email'];
			
	  ?>
	  



<br></br>
<br></br>
<form  method="POST">
		<table align="center" cellpadding="15">
		<tr>
		<td style="text-align:center; font-family:impact; color:white; font-size:20; ">Edit Driver Details</td>
		</tr>

		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Name</td>
		<tr>

		<tr>
		<td><input type= "text" name=" editDriverName" value="<?php echo $D_name   ?>">
		</tr>

		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Email</td>
		<tr>

		<tr>
		<td><input type= "text" name=" editDriverEmail" value="<?php echo $email   ?>">
		</tr>


		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Phone number</td>
		<tr>

		<tr>
		<td><input type= "text" name="editDriverPnum"value="<?php echo $D_phone   ?>">
		</tr>
        <tr>
		<td align="center"><input type ="Submit"  name="ChangeInfo" value="Submit"></td></td>
        <tr><td align="center" ><input type ="Reset"  name="Reset" value="Reset"></td>
		</tr>
        <tr><td align="center"><a href="3.2AdminDriver.php">Back To Driver Admin Page</a></td></tr>
		</table>
			
		<br></br>
		<!--button-->
		
        
	</form>

	
<?php 
	  }

  if(isset($_POST['ChangeInfo']))
  {    
	    $newName = $_POST["editDriverName"];
		$newEmail = $_POST["editDriverEmail"];
		$newPnum=$_POST["editDriverPnum"];
		$driver_id=$_GET['idDriver'];
		
			         if(!empty($newName))
					 {
					$sql="update driver set driver_name='$newName' where driver_id='$driver_id'";
					$query=mysqli_query($db,$sql);
					 }
					 
					 if(!empty($newEmail))
					 {
						 $sql="update driver set driver_email='$newEmail' where driver_id='$driver_id'";
						 $query=mysqli_query($db,$sql);
						 
						  
					 }
					 
						 if(!empty($newPnum))
						 {
							 $sql="update driver set driver_phone_number ='$newPnum' where driver_id='$driver_id'";
				             $query=mysqli_query($db,$sql);
						 }
						 
						 if( !empty($newName)  || !empty($newEmail)  ||!empty($newPnum) ||!empty($newPass))
				         {  
					      header('Location:3.2AdminDriver.php?message= Change driver Infomation Sucess!');
				         }
 
	}
	
	
	  
	  