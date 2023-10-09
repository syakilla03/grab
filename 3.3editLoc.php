<html>
 <link rel="stylesheet" href="CSS_AdminStyle.css">
<style>
	 .boxView
		 {
		 background-color:#B4CFEC;
		 width:500;
		 height:350;
		 border-radius:20;
		 border-radius: 50px;
         border-color:white;
        box-shadow: 10px 10px 64px 0px rgba(180, 180, 207, 0.75);
        -webkit-box-shadow: 10px 10px 64px 0px rgba(186, 186, 202, 0.75);
        -moz-box-shadow: 10px 10px 64px 0px rgba(208, 208, 231, 0.75);
         margin-left:470;
		 }
		 
		 input{
			 
		text:center;	 
			 
			 
			 
		 }
		 
		  
	  input[type=Submit],[type=Reset]{
  padding: 12.5px 30px;
  border: 0;
  border-radius: 100px;
  background-color: #191970;
  color: #ffffff;
  font-weight: Bold;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
}

 input[type=Submit]:hover,[type=Reset]:hover {
  background-color: #77BFC7
  box-shadow: 0 0 20px #6fc5ff50;
  transform: scale(1.1);}


 input[type=Submit] :active, [type=Reset]:active {
  background-color: #3d94cf;
  transition: all 0.25s;
  -webkit-transition: all 0.25s;
  box-shadow: none;
  transform: scale(0.98);
}
		 
		 
		 
		 </style>
		 
		 
		<?php
		$db=mysqli_connect("localhost","root","","studentgrab");
		$code=$_GET['idLoc'];
        $determine="Select * from location where location_code='$code'";
        $query1=mysqli_query($db,$determine);


	  
	  while($row=mysqli_fetch_array($query1,MYSQLI_ASSOC))
	  {
		$LocationCode=$row['location_code'];
		$pickCode=$row['pickUp_location_code'];
		$pickName=$row['pickup_location_name'];
		$dropCode=$row['dropOff_location_code'];
		$droppOffName=$row['dropoff_location_name'];
		$price=$row['location_price'];
		
	  ?>
	  
	  <br></br>
		<b style="margin-left:500; font-family:algerian ; font-size:30; color:white; ">Edit Location Information</b>
	   <br></br>
	  
		



<br></br>
<br></br>
<div class="boxView">
<form  method="post">
<table cellpadding="5" align="center"  cellspacing="10">
	  <tr style="font-family:algerian;">
	  <td colspan="2"  style="color:#E8F1D4; background-color:#C19A6B">Current information</td>
	  </tr>
	  <tr>
	  <td  style="font-family:impact; color:#C19A6B;">Pick up Location</td>
	  <td style="font-family:monospace; font-size:15;"><?php echo $pickName ?></td>
	  </tr>
	  <tr>
	  <td style="font-family:impact; color:#C19A6B;">Drop off Location </td>
	  <td style="font-family:monospace;  font-size:15;"><?php echo $droppOffName ?></td>
	  </tr>
	  
	  <tr>
	  <td style="font-family:impact; color:#C19A6B">Price </td>
	  <td style="font-family:monospace;  font-size:15;"><?php echo $price ?></td>
	  </tr>
	  
	  </table>
		<table align="center">
		<tr>
		<td style="text-align:center; font-family:impact; color:white; font-size:20; "> Details</td>
		</tr>
		<tr>
		<td style=" font-family:Papyrus;  font-size:18; font-weight:bold;">Price</td>
		<tr>

		<tr>
		<td><input type= "text" name="editPrice" placeholder= "Change Price">
		</tr>


		</table>
			</div>
		<br></br>
		<!--button-->
		<b style="margin-left:520px;"><input type ="Submit"  name="ChangeInfo" value="Submit"></b>
        <b style="margin-left:205px;"><input type ="Reset"  name="Reset" value="Reset"></b>
        
	</form>
	<a href="3.3AdminLocation.php"><input type="Submit"  name="back" value="Back"> </a>
	
<?php 
	  }

  if(isset($_POST['ChangeInfo']))
  {
	   
		$editedPrice=$_POST['editPrice'];
			
			if(!empty($editedPrice ))
				{
					$sql="update location set location_price='$editedPrice' where location_code='$code'";
					$query=mysqli_query($db,$sql);
					 if($query)
                      header('Location:3.3AdminLocation.php?update_message=Succesful update the location price');					
                      else
	                  header('Location:3.3AdminLocation.php?update_message=Unsuccesfull update the location price');	
				 }
             				
	  
  
	}
	  