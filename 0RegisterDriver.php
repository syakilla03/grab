<!DOCTYPE html>
<html lang="en">
<head>
<style>
	  input[type=Submit], input[type=Reset] {
  padding: 12.5px 30px;
  border: 0;
  border-radius: 100px;
  background-color: #8e83e6;
  color: #ffffff;
  width:50;
  font-weight: Bold;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
}

 input[type=Submit]:hover {
  background-color: #77BFC7
  box-shadow: 0 0 20px #6fc5ff50;
  transform: scale(1.1);}
  
 input[type=Reset]:hover {
  background-color: #77BFC7
  box-shadow: 0 0 20px #6fc5ff50;
  transform: scale(1.1);}

 input[type=Submit] :active, input[type=Reset]:active {
  background-color: #3d94cf;
  transition: all 0.25s;
  -webkit-transition: all 0.25s;
  box-shadow: none;
  transform: scale(0.98);
}




</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <link rel="stylesheet" href="CSS_styleRegister.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

   <title>  Regisration Form </title>
</head>
<body>
    <div class="container">
        <header>Registration</header>

        <form method="POST" action="0RegisterDriverGrab.php">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Register New Account</span>

                    <div class="fields">
					 <div class="input-field">
                            <label>Name</label>
                            <input type="text" placeholder="Enter name " required name="name">
                        </div>
                        <div class="input-field">
                            <label>Matrix No</label>
                            <input type="text" placeholder="Enter matrix number" required name="matric" >
                        </div>
                        <div class="input-field">
                            <label>Phone Number</label>
                            <input type="text" placeholder="Enter phone number" required name="pnum">
                        </div>
						
						 <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Enter email address" required name="email" >
                        </div>
						
						<div class="input-field">
                            <label>Password</label>
                            <input type="password" placeholder="Create your password"  required name="password">
                        </div>
						
						<div class="input-field">
                            <label>Confirm Password</label>
                            <input type="password" placeholder="Confirm your password"  required name="Cpassword">
                        </div>
						<div class="input-field">
                            <label>Gender</label>
                            <select required name="gender">
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            
                            </select>
							</div>
					
                        </div>
						</div>

                  
                    

                <div class="car details">
                    <span class="title">Vehicles Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Car Model</label>
                            <input type="text" placeholder="Enter your car model" required name="model">
                        </div>

                        <div class="input-field">
                            <label>Car Plate Number</label>
                            <input type="text" placeholder="Enter the plate number" required name="plate">
                        </div>

                        <div class="input-field">
                            <label>Car Colour</label>
                            <input type="text" placeholder="Enter your car colour" required name="colour" >
                        </div>
						<div class="input-field" >
                           <input name="Register" value="Register" type="submit">
                        </div>

                        <div class="input-field">
                            <label>Number Of Seater</label>
                            <input type="number" placeholder="Enter your car capacity" required name="capacity">
                        </div>
						
                        
						

						
                    </div>
                    
                    
                       
                           
                       
                        
                     
                </div> 
				
            </div>
			
			</form>
			</div>
 
    <script src="script.js"></script>
	
	<?php
 if(isset($_GET['CRegister_message']))
  {
	  $message=$_GET['CRegister_message'];
	  
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