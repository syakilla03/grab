<html>
 <img src="https://media.giphy.com/media/kcZlnhiaB1p76tKS6S/giphy.gif" style="height:150px; width:150px">
<link rel="stylesheet" href="CSS_AdminStyle.css">

<body>
<b style="font-family:impact; font-size:30; margin-left:400; color:white;">Student Grab Service Location Option<b>
<br></br>
<form method="post">
<input type="Submit" style ="background-color:#00008B; color:white;" name="AddLocation" value="Add  Location">
</form>

<?php
if(isset($_POST['AddLocation']))
{
	header('Location:3.3AddLocation.php');	
	
	
}
?>



  
 
  <?php
$db = mysqli_connect("localhost", "root", "", "studentgrab");
$num = 0;
$displayCustomer = "SELECT * FROM location";
if ($D1 = mysqli_query($db, $displayCustomer)) {
    if (mysqli_num_rows($D1) > 0) {
        echo '<table align="center" cellspacing="5">';
        echo '<tr style="color:white; font-family:impact; background-color:DarkBlue; text-align:center;">';
        echo '<td style="width:50px;"> No.</td>';
        echo '<td style="width:150px;">Location Code</td>';
        echo '<td style="width:150px;">Pick Up Code</td>';
        echo '<td style="width:350px;">Pick Up Location Name</td>';
        echo '<td style="width:150px;">Drop Off Code</td>';
        echo '<td style="width:350px;">Drop Off Name</td>';
        echo '<td style="width:150px;">Price (RM) </td>';
        echo '<td style="width:300px;" colspan="2">Action</td>';
        echo '</tr>';

        while ($row1 = mysqli_fetch_array($D1, MYSQLI_ASSOC)) {
            $L_Code = $row1['location_code'];
            $L_PC = $row1['pickUp_location_code'];
            $L_PN = $row1['pickup_location_name'];
            $L_DC = $row1['dropOff_location_code'];
            $L_DN = $row1['dropoff_location_name'];
            $L_Price = $row1['location_price'];
            $num++;
?>
            <tr style="font-family:monospace;  text-align:center; font-size:15; ">
                <td style="width:50; "> <?php echo $num; ?></td>
                <td style="width:150;"> <?php echo $L_Code; ?></td>
                <td style="width:150;"> <?php echo $L_PC; ?></td>
                <td style="width:350;"> <?php echo $L_PN; ?></td>
                <td style="width:150;"> <?php echo $L_DC; ?></td>
                <td style="width:350;"> <?php echo $L_DN; ?></td>
                <td style="width:150;"> <?php echo $L_Price; ?></td>
                <td style="width:100;"><a href="3.3EditLoc.php?idLoc=<?php echo $row1['location_code']; ?>"> <input type="submit" value="edit" style="background-color:#00A36C;"></a></td>
                <td style="width:100;"><a href="3.3deleteLoc.php?idLoc=<?php echo $row1['location_code']; ?>" onclick="return confirm('Are you sure you want to delete this location?')"><input type="submit" value="delete" style="background-color:#E41B17;"></a></td>
            </tr>
<?php
        }
        echo '</table>';
    } else {
        echo '<div style="text-align:center; margin-top: 20px; font-size: 18px;">No records were found.</div>';
    }
}
?>

	<?php	
  
?>


<?php
  if(isset($_GET['AddLoc_message']))
  {
	  $message=$_GET['AddLoc_message'];
	  ?>
	  
	  <script>
	  var message='<?= $message ?>';
	  
	  alert(message);
	  
	  </script>
	<?php  
  }

?>


<?php
  if(isset($_GET['delete_message']))
  {
	  $message=$_GET['delete_message'];
	  ?>
	  
	  <script>
	  var message='<?= $message ?>';
	  
	  alert(message);
	  
	  </script>
	<?php  
  }

?>


<?php
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



</body>

</html>

