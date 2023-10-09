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
		$id=$_GET['AdminID'];
        $determine="Select * from admin where Admin_id='$id'";
        $query1=mysqli_query($db,$determine);


	  
	  while($row=mysqli_fetch_array($query1,MYSQLI_ASSOC))
	  {
		   
			$phone=$row['Admin_id'];
			$name= $row['Admin_name'];
			$phone= $row['Admin_phoneNo'];
			$email= $row['Admin_email'];
		
	  ?>
	
		



<br></br>
<br></br>

<form  method="post">
		<table align="center" cellpadding="15">
		<tr>
		<td style="text-align:center; font-family:impact; color:white; font-size:20; "> Edit Administrator Information</td>
		</tr>

		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;" >Name</td>
		<tr>

		<tr>
		<td><input type= "text" name=" editName" value="<?php echo $name ?>">
		</tr>

		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Email</td>
		<tr>

		<tr>
		<td><input type= "text" name=" editEmail" value="<?php echo $email ?>">
		</tr>


		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Phone number</td>
		<tr>

		<tr>
		<td><input type= "text" name=" editPhone" value="<?php echo $phone ?>">
		</tr>


		
			
		<br></br>
		<!--button-->
		<tr><td><b style="margin-left:130px;"><input type ="Submit"  name="ChangeInfo" value="Submit"></b></td></tr>
        <tr><td><b style="margin-left:130px;"><input type ="Reset"  name="Reset" value="Reset"></b></td></tr>
		<tr><td ><b style="margin-left:80px;"><a href="3.0AdminMain.php">Back To Admin Main</a></b></td></tr>
       </table> 
	</form>

	
<?php 
	  }

  if(isset($_POST['ChangeInfo']))
  {
	    $newName = $_POST["editName"];
		$newEmail = $_POST["editEmail"];
		$newPnum=$_POST["editPhone"];
		$id=$_GET['AdminID'];
			if(!empty($newName ))
				{
					$sql="update Admin set admin_name='$newName' where Admin_id='$id'";
					$query=mysqli_query($db,$sql);
				}
 
			if(!empty($newEmail ))
				{
					$sql="update admin set Admin_email='$newEmail' where Admin_id='$id'";
					$query=mysqli_query($db,$sql);
				}
 
 
			if(!empty($newPnum ))
				{
					$sql="update admin set Admin_phoneNo='$newPnum' where Admin_id='$id'";
					$query=mysqli_query($db,$sql);
				}
 
 
			if( !empty($newName)  || !empty($newEmail)  ||!empty($newPnum) ||!empty($newPass))
				{  
			        header('Location:3.0AdminMain.php?update_message= Data Updated!!');	
				}
 
  
	}
	  
	  
	  
	  