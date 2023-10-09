<html>
<link rel="stylesheet" href="CSS_AdminStyle.css">
<body >
 <img src="https://media.giphy.com/media/kcZlnhiaB1p76tKS6S/giphy.gif" style="height:250px; width:250px; margin-left:420;">
<?php
$db=mysqli_connect("localhost","root","","studentgrab");
session_start();
$ID=$_SESSION['adminId'] ;
$stamt="select * from admin where Admin_id='$ID'";
$result1=mysqli_query($db,$stamt);
while($row=mysqli_fetch_array($result1,MYSQLI_ASSOC))
{
	?>
	<table align="center" cellpadding="10"  style="font-size:20; background-color:white; border-radius:20px;">
	
	<tr><td  style="font-family:impact; color:#00008B;">Admin ID</td>
	<td><?php echo $row['Admin_id']   ?></td>
	</tr>
	<tr><td style="font-family:impact; color:#00008B;">Name</td>
	<td><?php echo  $row['Admin_name']   ?></td>
	</tr>
	<tr><td style="font-family:impact; color:#00008B;">Email</td>
	<td><?php echo  $row['Admin_email']   ?></td>
	</tr>
	<tr><td style="font-family:impact; color:#00008B;">Phone Number</td>
	<td><?php echo  $row['Admin_phoneNo']   ?></td>
	</tr>
	<tr><td style="font-family:impact; color:#00008B;" >Account Password</td>
	<td><?php echo  $row['password'] ?></td>
	</tr>
	<tr><td><a href="3.0EditAdminInfo.php?AdminID=<?php echo $ID; ?>"><input type="Submit" value="Edit"  style="background-color:#BCC6CC;" name="change info"></a></td></tr>
	</table>
	<?php
	
	
}
?>

<br></br>
<form method="post" style="margin-left:400;" >
<div style="font-family:impact; color:white; font-size:30;">Notice to System user:</div>
<br></br>
<input type="text" name="note">
<input type="Submit" name="Send"  value="Send">
</form>
<?php
 
if(isset($_POST['Send']))
{
	$note=$_POST['note'];
	if(!empty($note))
	{
		$sql="update notification set note='$note'";
		$result=mysqli_query($db,$sql);
		if($result)
		{
		$alert="<script>alert('You note already send to User')</script>";
					echo $alert;		
		}
		else
		{$alert="<script>alert('Unsuccesful')</script>";
					echo $alert;
		}
		
	}
	
}


  if(isset($_GET['update_message']))
  {
	  $message=$_GET['update_message'];
	  ?>
	  
	  <script>
	  var message='<?= $message ?>';
	  
	  alert(message);
	  
	  </script>
	<?php 
  }


?>
</body  >

</html>