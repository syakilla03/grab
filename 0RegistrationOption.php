<html  >

<head > <title>Registration Option </title> </head>
<body  >
<link rel="stylesheet" href="CSS_register.css">
<style>

body
 {
  background-image:linear-gradient(90deg,#3e32a8,#e310c7);
  
 }

.message{
	font-size:25;
	text-align: center;
	width:460px;
	height:400px;
	border: 5px ;
	margin-top:100;
	margin-left:500;
	align:center;
	border:5px solid #aaa;
	border-bottom-color:black;
	color:#00008B;
	font-family:impact;
	background: #F4F6FB;
    border-radius: 10px;
    border: 1px solid white;
    box-shadow: 10px 10px 64px 0px rgba(180, 180, 207, 0.75);
   -webkit-box-shadow: 10px 10px 64px 0px rgba(186, 186, 202, 0.75);
   -moz-box-shadow: 10px 10px 64px 0px rgba(208, 208, 231, 0.75);
	
}

</style>


<marquee > <Font size ="6"  > <Font color ="white"> <Font face= "impact">Let Register to Our System now </marquee>

<form method="post">

<div class="message"  >
<div align="left">
<img src= "Picture_Grab.png"  style="height:120; width:130;"></div>




 <Font size ="4"  > <Font face= "verdana"> <b> Register New Account as :</b> 
<br></br>
<img src= "https://media.giphy.com/media/B6pBwOFYXDRQcYTm8z/giphy.gif"  style="height:250; width:250;"></div>


<?php


if(isset($_POST['Driver']))
{
	{header('location:0RegisterDriver.php');}
}

if(isset($_POST['Customer']))
{
	{header('location:0RegistrationFromCustomer.php');}
}

	
?>


<!--button option-->
 <div align="center">
 <br></br>
<input name="Driver" type="Submit"  value= "Driver"> &ensp;
<input name="Customer" type="Submit" value="Customer">


  
</div>
</form>


 </div>



</body >
</html>
