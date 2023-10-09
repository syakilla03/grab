<html>

<style>
 
	  input[type=Submit]{
  padding: 12.5px 30px;
  border: 0;
  width:200;
  border-radius: 100px;
   background-image:linear-gradient(40deg,#fc00ff,#00dbde);
  font-weight: Bold;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
}

 input[type=Submit]:hover{
  background-color: #77BFC7
  box-shadow: 0 0 20px #6fc5ff50;
  transform: scale(1.1);}


 input[type=Submit] :active {
  background-color: #3d94cf;
  transition: all 0.25s;
  -webkit-transition: all 0.25s;
  box-shadow: none;
  transform: scale(0.98);
}

marquee
{
	color:white;
	font-size:30;
	font-family:impact;	
}

body
 {
  background-image:linear-gradient(90deg,#3e32a8,#e310c7);
  
 }



</style>
<body  >
<img src="Picture_Grab.png" style="height:200; width:200;">
<a href="3.0AdminMain.php" target="Admin Main"  ><input type="submit" value="Main"></a>
<br></br>
<a href="3.1AdminCust.php" target="Admin Main" ><input type="submit" value="Customer"></a>
<br></br>
<a href="3.2AdminDriver.php" target="Admin Main" ><input type="submit" value="Driver"></a>
<br></br>
<a href="3.3AdminLocation.php" target="Admin Main" ><input type="submit" value="Location"></a>
<br></br>
<a href="3.4AdminBooking.php" target="Admin Main" ><input type="submit" value="Booking"></a>
<br></br>
<a href="3.5Driver Working status.php" target="Admin Main" ><input type="submit" value="Driver Work"></a>
<br></br>
<br></br>
<a href="0.Main.php" target="_parent" ><input type="submit" value="Log out"></a>
</body>





</html>