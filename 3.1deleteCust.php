  <?php
   $db=mysqli_connect("localhost","root","","studentgrab");
	  $deleteID=$_GET['idCust'];
	  $determine="Select * from booking where cust_ID='$deleteID'";
	  $indentifyQ=mysqli_query($db,$determine);
	  $count=mysqli_num_rows($indentifyQ);
	  
	  if($count==0)
	  {
	  $query="delete  from customer where cust_ID='$deleteID'";
	  $sql_de=mysqli_query($db,$query);

       if($sql_de)
        header('Location:3.1AdminCust.php?delete_message=Succesful delete the data');					
	  }
	   else
	   {
		  
		 header('Location:3.1AdminCust.php?delete_message=Unsuccesfull delete the data');					
	   }
  ?>
  