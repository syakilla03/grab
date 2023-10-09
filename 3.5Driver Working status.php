<html>
<link rel="stylesheet" href="CSS_AdminStyle.css">
 <img src="https://media.giphy.com/media/kcZlnhiaB1p76tKS6S/giphy.gif" style="height:150px; width:150px">
<b  Style="font-size:30; font-family:impact; color:white; margin-left:400;">Student Grab Service  Details</b>

<?php
?>
<br></br>
 <table align="center"  cellspacing="20">
	  <tr style="color:white; font-family:impact; background-color:DarkBlue; text-align:center;" >
	  <td style="width:50; ">No.</td>
	  <td style="width:150; ">Driver ID</td>
	   <td style="width:150; ">Name</td>
	  <td style="width:150;">Contact no</td>
	  <td style="width:150;">Date</td>
	  <td style="width:150; ">Start Hour</td>
	   <td style="width:150; ">End Hour</td>
	  <td style="width:100; ">Status </td>
	  </tr> 
  </table>
  
 
 <?php
 $db=mysqli_connect("localhost","root","","studentgrab");
  $num=0;
  $displayDriver="SELECT * from driverfreetime D ,driver S where S.driver_id=D.driver_id;";
  $D1= mysqli_query($db,$displayDriver);
  while($row1=mysqli_fetch_array($D1,MYSQLI_ASSOC))
  {
	  $D_ID=$row1['driver_id'];
	  $D_name=$row1['driver_name'];
	  $D_num=$row1['driver_phone_number'];
	  $Tstart=$row1['start_time'];
	  $TFinish=$row1['finish_time'];
	  $date =$row1['date'];
	  $status=$row1['status'];
	  $num++;
	  
	  if($status==1)
		  $Nstatus="Booked";
		  else
		 $Nstatus="Available";  
	 ?>
	  <table align="center" cellspacing="20" >
	  <tr style="font-family:monospace;  text-align:center; font-size:15; ">
	  <td style="width:50; "> <?php echo $num ; ?></td>
	  <td style="width:150;"> <?php echo $D_ID; ?></td>
	   <td style="width:150;"> <?php echo   $D_name; ?></td>
	    <td style="width:150;"> <?php echo $D_num; ?></td>
	  <td style="width:150;"> <?php echo  $date; ?></td>
	  <td style="width:150;"> <?php echo  $Tstart; ?></td>
	  <td style="width:150;"> <?php echo  $TFinish; ?></td>
	  <td style="width:100;"> <?php echo  $Nstatus; ?></td>
	  </tr>
	  </table>
		
	<?php	
  }
?>


</html>