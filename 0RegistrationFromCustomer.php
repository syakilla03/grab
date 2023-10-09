<html  >
<head > <title> Customer Registration From </title> </head>
<body  >
<link rel="stylesheet" href="CSS_register.css">

<style>

body
 {
  height:100vh;
  width:100%;
  background-image:linear-gradient(90deg,#3e32a8,#e310c7);
 }

input{
text-align: center;;
font-size:10;
font-family:verdana;
}

</style>

<div  align="center" >

<marquee > <Font size ="6"  > <Font color ="white"> <Font face= "impact">Welcome To Customer Registration Platform </marquee>

<form method="post" action="PHP_RegisterCust.php">


<div align="left">
<div align="center"><img src= "Picture_Grab.png"  style="height:220; width:230;"></div></div>
<table cellspacing="3"     align="center"  cellpadding= "7"  >


<tr>
<td colspan= "2" align ="center"> <Font size ="5"  > <Font face= "palatino"> <b> Register New Account</b> </td>
<td> </td>
</tr>


<div class="text">
<tr>
<td> <Font size ="4"> <Font face= "bookman old style"> <Font color ="white">Full name:  </td>
<td > <input name= "name" type="text"  placeholder="Enter Your Full Name" required=""  > </td>
</tr>
<tr>
<td><Font size ="4"> <Font face= "bookman old style"> <Font color ="white">Matric No:  </td>
<td> <input name= "matricNo" type="text"   placeholder="Enter Your Matric number" required=""  > </td>
</tr>
<tr>
<td> <Font size ="4"> <Font face= "bookman old style"> <Font color ="white">Email Address:  </td>
<td> <input name= "email" type="text" placeholder="Enter Your Email Address" required="" > </td>
</tr>

<tr>
<td><Font size ="4"> <Font face= "bookman old style"> <Font color ="white">Phone No:</td>
<td sytle="text-align:center"> <input name= "phoneNum" type="text"  placeholder="Enter Your Phone Number" required=""  > </td>
</tr>

<tr>
<td><Font size ="4"> <Font face= "bookman old style"><Font color ="white">Password:</td>
<td> <input name= "password" type="password"  placeholder="Create Password" required="" >  </td>
</tr>


<tr>
<td><Font size ="4"> <Font face= "bookman old style"><Font color ="white"> Confirm Password:</td>
<td> <input name= "Cpassword" type="password"  placeholder="Enter the password that you created" required="" >  </td>
</tr>
</div>
</div>


</table>

  <!--button option-->

<div style="margin-left:400;"><input name="Clear" type="Reset" value="Reset"></div>
<br></br>
<div style="margin-left:400;"><input name="Register" type="Submit"  value= "Register"> </div> &ensp;

</form>


 


</div>
<?php
 if(isset($_GET['CRegister_message']))
  {
	  $message=$_GET['CRegister_message'];
	  
	  ?>
	  <script>
	  var message='<?= $message ?>';
	  
	  alert(message);
	  
	  </script>
	<?php
  }
  ?>
	
</body >
</html>




