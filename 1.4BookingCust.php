
<html>
<style>

body
 {
  background-image:linear-gradient(90deg,#b993d6, #8ca6db );
  
 }



</style>
<body>
<marquee><Font color ="white"><Font face="impact"><Font size="5">Let Booking now,insert all this details to find an available driver for you!</marquee>
<link rel="stylesheet" href="CSS_BookingCust.css">


<div class="box" >
<div class= "card" >

<form method="post" action="1.3AvailableDriver.php">
<table class="form" cellpadding="13" align="center">
<tr>
<td colspan="2"  class="form_heading"> <u>Please enter location code </u></td>
<td></td>
</tr>

<tr>
<td>Pick Up :</td>
<td><input name= "pickup" type="text" placeholder=" Code pick up" required=""  ></td>
</tr>


<tr>
<td class="label">Drop Off :</td>
<td><input name= "droppOff" type="text"   placeholder=" Code drop off"  required="" ></td>
</tr>
</table>

</div>



</div>


<div class="box2" >
<div class="card">
<table class="form" cellpadding="13" align="center"   >
<tr>
<td colspan="2"  class="form_heading"> <u>Please enter booking date and time </u></td>
<td></td>
</tr>

<tr>
<td>Date :</td>
<td><input name= "date1" type="date"   required="" ></td>
</tr>


<tr>
<td class="label">Time :</td>
<td><input name= "time1" type="time"   required="" ></td>
</tr>


</table>

<br></br>
<div align="right">
<input name="reset" type="Reset"  value= "Reset"> 

</div>

</div>
</div>
<input name="confirm" type="Submit" value="Confirm Details">

</form>


<div  align="left" >
<div style="margin-top:246"><a href="0.Main.php" target="_parent"><input name="Logout " type="Submit" value="Logout"></a></div>

<a href="1.2DestinationCust.php"> <div  class="box"><input name="back" type="Submit"  value= "Back"> </div></a>
 
 <a href="1.3AvailableDriver.php"> <div  class="box"><input name="next" type="Submit" value="next"></div></a>
</div>
</body>

</html>

<?php
  if(isset($_GET['message']))
  {
	  $message=$_GET['message'];
	  ?>
	  
	  <script>
	  var message='<?= $message ?>';
	  
	  alert(message);
	  
	  </script>
	<?php  
  }
  ?>