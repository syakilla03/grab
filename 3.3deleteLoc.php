  <?php
  
      $db=mysqli_connect("localhost","root","","studentgrab");
	  $deleteID=$_GET['idLoc'];
	  $determine="Select * from booking where location_code='$deleteID'";
	  $indentifyQ=mysqli_query($db,$determine);
	  $count=mysqli_num_rows($indentifyQ);
	  
	  if($count==0)
	  {
	  $query="delete  from location where location_code='$deleteID'";
	  $sql_de=mysqli_query($db,$query);

       if($sql_de)
        header('Location:3.3AdminLocation.php?delete_message=Successful! Location deleted ');					
	  }
	   else
	   {
		  
		 header('Location:3.3AdminLocation.php?delete_message=Unsuccessful! cannot delete the location');					
	   }
	   
 
  
  ?>