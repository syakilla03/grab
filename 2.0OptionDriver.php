<html>
<style>

.box {
  float:right;
  width: 240;
  height:30;
  
  margin: center;
  color: black;
  font-family:impact;
  border:fixed;
 
}

  h3 {
  padding: 12.5px 30px;
  border:fixed;
  color: #ffffff;
  font-weight: Bold;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
}

 h3:hover {
  background-color: #77BFC7
  box-shadow: 0 0 10px #6fc5ff50;
  transform: scale(1.1);}
  
 

 h3:active {
  background-color:#B7CEEC;
  transition: all 0.25s;
  -webkit-transition: all 0.25s;
  box-shadow: none;
  transform: scale(0.98);
}


</style>

<body bgcolor= "#87AFC7" >
<?php
session_start();
$id=$_SESSION['username'];

?>

<a href = "2.5AccountDriver.php?driver_id=<?php  echo $id;     ?>" target = "Home page"><h3  class="box"  align ="center" ><img src= "Picture_IconAcc.png" style= "height:40; width:50;"</h3></a>
<h3 class="box"  align ="center"><a href = "2.3Schedule.php?driver_id=<?php  echo $id;     ?>" target = "Home page"><Font face ="comic sans">Schedule</a></h3>
<h3 class="box" align ="center"> <a href = "2.4Availibility.php?driver_id=<?php  echo $id;     ?>" target = "Home page"><Font face= "comic sans">Availablity</a></h3>
<h3 class="box" align ="center"> <a href = "2.2DestinationInformation.php?driver_id=<?php  echo $id;     ?>" target = "Home page"><Font face= "comic sans">Destination</a></h3>
<a href = "2.1DriverHome.php?driver_id=<?php  echo $id;     ?>" target = "Home page"><h3 class="box"  align ="center"><img src= "Picture_Home Icon.png" style= "height:40; width:50;"</h3></a>


</body>

</html>