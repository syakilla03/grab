<html  >
<head > <title> Log in Interface </title> </head>
<body  >
<link rel="stylesheet" href="CSS_Login.css">

<style>

input{
text-align: center;;
font-size:10;
font-family:verdana;
}	
	

body
 {
  height:100vh;
  width:100%;
  background-image:linear-gradient(90deg,#3e32a8,#e310c7);
 }
 
 Font{
	 color:white;
 }
 
 .margin{
	 margin-top:55;
 }
</style>
<div class="bg-gradiant">

<div  align="center" >

<marquee > <Font size ="6"  > <Font color ="white"> <Font face= "impact">Fast and Easy Booking </marquee>

<form   method="post" action="PHP_loginPhp.php" >

<div class="box2"  >
<div class ="margin">
<img src= "Picture_Grab.png"  style="height:270; width:280;"></div>
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
<tr>
<td><Font size ="4"> <Font face= "bookman old style">Status:</td>
<td> <select  name= "status"  > 
                   <option value= "1" >Driver</option>
				   <option value="2" >Customer</option>
				   </select>
	 </td>
</tr>

</div>
</table>

			   
	
 <!--button option-->
<div align="center"><input name="Login" type="Submit"  value= "Login"></div>
<br></br>
<b><input name="Register" type="Submit" value="Create Account"></b>
</form>
<br></br>
<a href="3.0loginAdmin.php" style ="color: white">Login as Admin?</a>


</div>
</div>
</div>
</div>
</body>

</html>