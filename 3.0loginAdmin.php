<html>
<link rel="stylesheet" href="CSS_AdminStyle.css">
<body align="center">
<style>
img{
	margin-left:600;
	
}


 input[type=text],input[type=password]
	 {
	 border:2px solid #aaa;
	 height:30px;
	 width:350px;
	 border-radius:4px;
	 background-color: #87CEEB;
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


</style>


	<div class="message">
	<br></br>
<!--login-->	
<?php
 $db=mysqli_connect("localhost","root","","studentgrab");

	
	if(isset($_POST['Login']))
	{
		$ID = $_POST["ID"];
		$password = $_POST["password"];
	
		$data="SELECT Admin_id,password FROM admin where Admin_id='$ID' and password ='$password'";
		$result= mysqli_query($db,$data);
		$count=mysqli_num_rows($result);
		
	       
?>

	<?php

	if($count>0)
	{
		session_start();
		$_SESSION['adminId']= $ID;
		header('Location:3.0AdminFrame.php');
	} 
	else
	
		$alert="<script>alert('Data not in our System');</script>";
					echo $alert;
		
	}
    	
?>
</div>

<marquee>Hello Admin...To view the admin website you need to login first!!</marquee>
<br></br>
<img src="Picture_Grab.png" style="height:270; width:280; margin-right:490;">


<br></br>
<form  method="post"  >

<div class="box2"  >
<table cellspacing="3"     align="center"  cellpadding= "14"  >

<div class="text">
<tr>
<td> <Font size ="4"> <Font face= "bookman old style">User ID:  </td>
<td > <input name= "ID" type="text"   placeholder="Enter your ID"  > </td>
</tr>


<tr>
<td><Font size ="4"> <Font face= "bookman old style">Password:</td>
<td> <input name= "password" type="password"   placeholder="Enter your account password"  >  </td>
</tr>
</table>
</div>
</div>


			   
	
 <!--button option-->
<div style="margin-left:110;"><input style="background-color:#00008B; color:white;"name="Login" type="Submit"  value= "Login"></div>

</form>


</body>
</html>