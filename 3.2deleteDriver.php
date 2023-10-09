  <?php
  
      $db=mysqli_connect("localhost","root","","studentgrab");
	  $deleteID=$_GET['idDriver'];
	  $determine="Select * from booking where driver_id='$deleteID'";
	  $indentifyQ=mysqli_query($db,$determine);
	  $count=mysqli_num_rows($indentifyQ);
	  
	  if($count==0)
	  {
	  $query1="delete  from driverfreetime where driver_id='$deleteID'";  
	   $query2="delete from car where driver_id='$deleteID'";
	  $query3="delete  from driver where driver_id='$deleteID'";
	 
	  $sql_de=mysqli_query($db,$query1);
	  $sql_de1=mysqli_query($db,$query2);
	  $sql_de2=mysqli_query($db,$query3);

       if($sql_de and  $sql_de2 and $sql_de1)
        header('Location:3.2AdminDriver.php?delete_message=Succesful delete the data');	
       	 else
	   {
		  
		 header('Location:3.2AdminDriver.php?delete_message=Unsuccesfull delete the data');					
	   }
	   
	  }
	  else
		 header('Location:3.2AdminDriver.php?delete_message=Unsuccesfull delete the data,driver alraedy being reserve by customer');  
	  
 
  
  ?>