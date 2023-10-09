<html>
<link rel="stylesheet" href="CSS_AdminStyle.css">
 <img src="https://media.giphy.com/media/kcZlnhiaB1p76tKS6S/giphy.gif" style="height:150px; width:150px">
<b  Style="font-size:30; font-family:impact; color:white; margin-left:400;">Student Grab Service Driver Details</b>
<form method="post">
<br></br><input type="Submit" name="AddDriver" value="Add Driver" style ="background-color:#00008B; color:white;">
</form>
<?php
if(isset($_POST['AddDriver']))
{
	header('Location:3.2AddDriver.php');
	
	
}

?>
<br></br>
 
  
<?php
$db = mysqli_connect("localhost", "root", "", "studentgrab");
$num = 0;
$displayDriver = "SELECT * FROM driver";
if ($D1 = mysqli_query($db, $displayDriver)) {
    if (mysqli_num_rows($D1) > 0) {
        echo '<table align="center" cellspacing="5">';
        echo '<tr style="color:white; font-family:impact; background-color:DarkBlue; text-align:center;">';
        echo '<td style="width:50px;"> Number</td>';
        echo '<td style="width:150px;">Driver ID</td>';
        echo '<td style="width:300px;">Name</td>';
        echo '<td style="width:150px;">Phone Number</td>';
        echo '<td style="width:150px;">Account password</td>';
        echo '<td style="width:600px;" colspan="5">Action</td>';
        echo '</tr>';

        while ($row1 = mysqli_fetch_array($D1, MYSQLI_ASSOC)) {
            $D_ID = $row1['driver_id'];
            $D_name = $row1['driver_name'];
            $D_pnum = $row1['driver_phone_number'];
            $D_password = $row1['password'];
            $num++;

            echo '<tr style="font-family:monospace;  text-align:center; font-size:15;">';
            echo '<td style="width:50px;">' . $num . '</td>';
            echo '<td style="width:150px;">' . $D_ID . '</td>';
            echo '<td style="width:300px;">' . $D_name . '</td>';
            echo '<td style="width:150px;">' . $D_pnum . '</td>';
            echo '<td style="width:150px;">' . $D_password . '</td>';

            echo '<td style="width:100px;"><a href="3.2viewDriver.php?idDriver=' . $row1['driver_id'] . '"> <input type="submit" value="view" style="background-color:#488AC7;"></a></td>';
            echo '<td style="width:100px;"><a href="3.2editDriverinfo.php?idDriver=' . $row1['driver_id'] . '"> <input type="submit" value="edit" style="background-color:#00A36C;"></a></td>';
			echo '<td style="width:100px;"><a href="3.2deleteDriver.php?idDriver=' . $row1['driver_id'] . '" onclick="return confirm(\'Are you sure you want to delete this driver?\')"><input type="submit" value="delete" style="background-color:#E41B17;"></a></td>';
            echo '<td style="width:100px;"><a href="3.2AddDriverCar.php?idDriver=' . $row1['driver_id'] . '"> <input type="submit" value="add car" style="background-color:#488AC7;"></a></td>';
            echo '<td style="width:100px;"><a href="3.2AddWorkHour.php?idDriver=' . $row1['driver_id'] . '"> <input type="submit" value="add work" style="background-color:#488AC7;"></a></td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
    }
} else {
    echo '<div class="alert alert-danger"><em>Error executing the query.</em></div>';
}
?>

	<?php	
  
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
  if(isset($_GET['AddDriver_message']))
  {
	  $message=$_GET['AddDriver_message'];
	  ?>
	  
	  <script>
	  var message='<?= $message ?>';
	  
	  alert(message);
	  
	  </script>
	<?php  
  }
?>

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
 <?php 
  if(isset($_GET['editCar']))
  {
	  $message=$_GET['editCar'];
	  ?>
	  
	  <script>
	  var message='<?= $message ?>';
	  
	  alert(message);
	  
	  </script>
	<?php  
  }
?>



</html>


