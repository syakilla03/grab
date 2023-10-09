<html>

<style>


body
 {
  background-image:linear-gradient(90deg,#b993d6, #8ca6db );
  
 }


.title
{
	
	font-size:35;
	text-align: center;
	color:white;
	font-family:impact;
}

.text{
	color:#77BFC7;
	background-color:#B0CFDE;
	width:400px;
	height:350px;
	border: 5px ;
	border-radius:20px;
	font-size:15;
	font-family:Monospace;
	margin-left:150px;
	margin-right:100px;
	float:right;
	border-style:dotted;
	border-color:#77BFC7;
}

.text2
{
	color:#77BFC7;
	width:460px;
	height:30px;
	border: 5px ;
	border-radius:20px;
	font-size:15;
	font-family:Monospace;
	float:left;
	margin-left:200;
	
}

.text3
{
	
	background-color:#82CAFF;
	width:400px;
	margin-top:50px;
	height:350px;
	border: 5px ;
	border-radius:20px;
	margin-left:450px;
	margin-right:100px;
	float:right;
	border-style:groove;
	border-color:black;	
}

.AnnounceText
{
	font-size:20;
	font-family:Monospace;
	margin-left:50px;
	margin-right:50px;
}

.box
{
	color:black;
	background-color:#FF6347;
	width:150px;
	height:30px;
	border: 5px ;
	border-radius:10px;
	text-align:center;
	font-size:15;
	font-family:Comic sans;
   margin-left:120;
  box-shadow: 0 0 20px #6fc5ff50;
  transform: scale(1.1);
   }
   
   
	  input[type=Submit]{
  padding: 12.5px 30px;
  border: 0;
  border-radius: 100px;
  background-color: #77BFC7;
  color: #ffffff;
  font-weight: Bold;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
}



 input[type=Submit]:hover {
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

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
}
	
</style>

<body >


<div class="title">
 Student Grab Service Application
</div>

<br></br>
<b><div class="text">
<img src="Picture_signMostPopular.png" style="height:100px; width:130px;">
<div class="box">
Melaka Central</div>
<br></br>
<div class="box">
Merlimau</div>
<br></br>
<div class="box">
Dataran Pahlawan</div>

<!--button option-->
<br></br>
&nbsp  &nbsp <a href ="1.2DestinationCust.php"><input name="next" type="Submit"  value= "next"></a> &nbsp
<b><a href="0.Main.php" target="_parent"><input name="Logout" type="Submit" value="Logout"></a></b>

</div>


<div class="text2"><mark>
Discover More ~</mark>

<img src="Picture_GrabPoster.png" style="height:700px; width:550px;">

</div>
<div class="text3">
<br align="center"><img src="https://media.giphy.com/media/St9BL3TBZK7Z4Ax1wi/giphy.gif" style="height:100; width:250;"></br>
<div class="AnnounceText">
<?php
   $conn=mysqli_connect("localhost","root","","studentgrab");
   $sql="select note from notification";
   $result=mysqli_query($conn,$sql);
   
   while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
   {
	  $note=$row['note'];	  
	   echo $note;
   }
   
   ?>
 <br></br>
 <marquee><img src="https://media.giphy.com/media/hwI2d77CEbkLow0bLT/giphy.gif"style="height:110; width:220;" ></marquee>
 </div>
</div>
</b>
</body>
</html>