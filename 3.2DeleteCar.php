  <?php
  
     
         $db=mysqli_connect("localhost","root","","studentgrab");
         $plate=$_GET['CarPlate'];
       
		 $determine1="select * from booking where plate_number='$plate'";
		 $query1=mysqli_query($db,$determine1);
		 $num=mysqli_num_rows($query1);
        
   
		  
       if($num==0)
	   { $determine="delete from car where plate_number='$plate'";
		     $query=mysqli_query($db,$determine);
       if($query)
        header('Location:3.2AdminDriver.php?delete_message=Succesful delete the data');	
	    else
		 header('Location:3.2AdminDriver.php?delete_message=Cannot delete the data');	
	   }
       	 else
	   {
		  
		 header('Location:3.2AdminDriver.php?delete_message=Unsuccesfull delete the data since this car already being book');					
	   }
	 
  
  ?>