<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "trip";
session_start();
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$database);
if(isset($_SESSION["USERNAME"])){
$user_name=$_SESSION["USERNAME"];
$place=$_GET['p1'];
$city=$_GET['s1'];
$test=mysqli_query($conn,"select * from login where name='$user_name'");
$atry=mysqli_affected_rows($conn);
if($atry==1 && $test)
{
    while($rtry = mysqli_fetch_array($test))
  {
    $curr=$rtry['c_location'];
  }
}
$currl=strtolower($curr);
$curru=strtoupper($curr);
$cityl=strtolower($city);
}
else
{?>
<script type="text/javascript">
                       alert("Session erroe");
                                                  window.location.href = "home1.php";
                                                          </script>
<?php }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="star.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link href='jquery-bar-rating-master/dist/themes/fontawesome-stars.css' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="jquery.js" type="text/javascript"></script>
<script src="jquery-bar-rating-master/dist/jquery.barrating.min.js" type="text/javascript"></script>

  <style>
  .autocomplete {
  /*the container must be positioned relative:*/
  position: relative;
  display: inline-block;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #e9e9e9; 
}

.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
  .topnav {
    overflow: hidden;
    background-color: #1f2e2e;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #527a7a;
    color: black;
}

/* Style the "active" element to highlight the current page */
.topnav a.active {
    background-color: #a3c2c2;
    color: white;
}

/* Style the search box inside the navigation bar */
.topnav input[type=text] {
    padding: 6px;
    border: none;
    margin-top: 8px;
    font-size: 17px;
    width: 130px;
}

/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
/*@media screen and (max-width: 600px) {
    .topnav a, .topnav input[type=text] {
        float: none;
        display: block;
        text-align: left;
        width: 100%;
        margin: 0;
        padding: 14px;
    }
    .topnav input[type=text] {
        border: 1px solid #ccc;
    }
}*/
.topnav .search-container button {
  float: none;
  padding: 6px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
  width: 50px;
}
.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 60%;
    margin: 0;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
  .modalm {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 730px; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

.modalm-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from t
    border: 1px solid #888;
    width: 50px; /* Could be more or less, depending on screen size */
}
.modalpp {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 730px; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

.modalpp-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from t
    border: 1px solid #888;
    width: 50px; /* Could be more or less, depending on screen size */
}
.modaltt {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 730px; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

.modaltt-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from t
    border: 1px solid #888;
    width: 50px; /* Could be more or less, depending on screen size */
}
.modalbb {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 730px; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

.modalbb-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from t
    border: 1px solid #888;
    width: 50px; /* Could be more or less, depending on screen size */
}
.modalff {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 730px; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

.modalff-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from t
    border: 1px solid #888;
    width: 50px; /* Could be more or less, depending on screen size */
}
.modal222 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 730px; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

.modal222-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from t
    border: 1px solid #888;
    width: 50px; /* Could be more or less, depending on screen size */
}
.animate {
    animation: animatezoom 0.6s
}
.containe {
    padding: 10px;
}
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
table#t1 {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;
}
input[type="radio"]{
  appearance: none;
  width: $radioBtn-size;
  height: $radioBtn-size;
  margin: 0 $radioBtn-size / 2;
  outline: $radioBtn-size / 2 solid $inactive-color;
  outline-offset: $radioBtn-size / -2;
  cursor: pointer;
  backface-visibility: hidden;
  border-radius: 50%;
  transform: rotate(45deg) scale(1);
  will-change: transform;
  
  &:checked {
    animation: active 1s ease forwards;
  }
}
body { 
  background: linear-gradient(90deg, #2bc0e4 10%, #eaecc6 90%);
  background-attachment: fixed;
}
th, th {
    text-align: left;
    padding: 8px;
}
  .text{
     
     position: relative;
    text-align: center;
    color: white;
   }
   span#s1{
float:left;
width:550px;
}
span#s2{
float:left;
width:500px;
}
   .top-left {
    position: absolute;
    top: 20px;
    left: 22px;
}
.mid{
  position: relative;
    text-align: center;
}
.mid1{
  position: relative;
}
  
   .top-left2 {
    position: absolute;
    top: 40px;
    left: 22px;
}
.post-action{
 margin-top: 20px;
 margin-bottom: 20px;
}
.checked {
    color: orange;
}

.like,.unlike{
 border: 0;
 background: none;
 letter-spacing: 1px;
 color: lightseagreen;
}

.like,.unlike:hover{
 cursor: pointer;
}
  .bimg{
    <?php 
    $s="select * from $city where place='$place'";
    $res=mysqli_query($conn,$s);
    while($row = mysqli_fetch_assoc($res)){
       ?>
            background-image: url("place/<?php echo $row['pic_name']?>");
       <?php } ?>
     background-repeat: no-repeat;
    background-position: center center;
    color:#ffffff;
     text-shadow: 5px 5px #000000;
  }
  .navbar{
    
  }
  .column {
    float: left;
    width: 100%;
    padding: 10px;
    border:1px solid black;
    border-collapse: collapse;
    position: relative;
    
}
.para{
font-size: 20px;

  }
  .ser{
    width: 170px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
}

input[type=text]:focus {
    width: 100%;
}
  
  </style>
  
 <script>
 
function validate()
{

var x=document.myform.password.value;
var y=document.myform.repeatpwd.value;


if(x.length<8)
{
   window.alert("Enter a strong password");
   return false;
}
if(y!=x)
{
  window.alert("Password and confirm password not matched");
  return false;
  }


var mail = document.myform.email.value;
  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(mail) == false) 
        {
            window.alert('Invalid Email Address');
            return false;
        }

}

function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
            window.alert('Invalid Email Address');
            return false;
        }

        return true;

}
 </script>
 
 
</head>
<body>

<div class="jumbotron bimg">
  <div class="container text-center">
    <h1><?php $place1=strtoupper($place);
    echo $place1?></h1>
  </div>
</div>

<div class="topnav">
  <a href="home1.php">Home</a>
  <a href="mytrip.php">My Trip</a>
  <a href="wish.php">My Wishlist</a>
  <a href="myprofile.php">My Profile</a>
  <a href="home.php">Log Out&nbsp;&nbsp;<span class="glyphicon glyphicon-log-out"></span></a>
  <div class="search-container">
    <form autocomplete="off" action="citynew.php" method="post">
     <div class="autocomplete">
      <input id="myInput" type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button></div>
    </form>
  </div>
</div>
<div class="column">
  
  <i class="fa fa-star" style="font-size:24px"></i>
  <p class="para"><b>Ratings</b> of <?php echo $place1?></p>
   <form id="myForm" action="reviewe.php?p=<?php echo $place?>&c=<?php echo $cityl?>" method="post">
    <div class="stars">
        <input type="radio" name="star" class="star-1" id="star-1" value="1" onclick="document.getElementById('myForm').submit();" />
        <label class="star-1" for="star-1">1</label>
        <input type="radio" name="star" class="star-2" id="star-2" value="2" onclick="document.getElementById('myForm').submit();"/>
        <label class="star-2" for="star-2">2</label>
        <input type="radio" name="star" class="star-3" id="star-3" value="3" onclick="document.getElementById('myForm').submit();"/>
        <label class="star-3" for="star-3">3</label>
        <input type="radio" name="star" class="star-4" id="star-4" value="4" onclick="document.getElementById('myForm').submit();"/>
        <label class="star-4" for="star-4">4</label>
        <input type="radio" name="star" class="star-5" id="star-5" value="5" onclick="document.getElementById('myForm').submit();"/>
        <label class="star-5" for="star-5">5</label>
        <span></span>
    </div>
</form>
<?php 
$sqrr=mysqli_query($conn,"select * from $city where place='$place'");
$affectedRowrr = mysqli_affected_rows($conn);
if($affectedRowrr==1 && $sqrr){
  while($rowrr = mysqli_fetch_array($sqrr))
  {
    $cnt=$rowrr['cust'];
    $avg=$rowrr['rating'];
  }
  ?>
  <div class="mid">
<?php echo $avg;?>&nbsp;<i class="fa fa-star"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
     echo $cnt ?>&nbsp;<i class="fa fa-user"></i>
</div><br>
<?php 
$sqc=mysqli_query($conn,"select * from $city where place='$place'");
$affectedRoc = mysqli_affected_rows($conn);
if($affectedRoc==1 && $sqc)
{
    while($roc = mysqli_fetch_array($sqc))
  {
    $cmax=$roc['cust'];
  }
}
$sqrra=mysqli_query($conn,"select * from ratings where place='$place'");
$affectedRowrra = mysqli_affected_rows($conn);
if($affectedRowrra==1 && $sqrra){
  while($rowrra = mysqli_fetch_array($sqrra))
  {
    $ca=$rowrra['c5'];
    $ra=$rowrra['r5'];
  }
  if($cmax==0)
  {
    $rac=0;
  }
  else
  {$rac=($ca/$cmax)*(135);}
  }
?>
<div class="mid1">
  <span id="s1" style="padding-left: 480px;"><div><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div></span>
  <div style="background-color: #006600;height:20px;width:<?php echo $rac?>px;display: inline-block;">
  </div>&nbsp;&nbsp;<?php echo $ca?>&nbsp;<i class="fa fa-user"></i></div>
<?php 
$sqc=mysqli_query($conn,"select * from $city where place='$place'");
$affectedRoc = mysqli_affected_rows($conn);
if($affectedRoc==1 && $sqc)
{
    while($roc = mysqli_fetch_array($sqc))
  {
    $cmax=$roc['cust'];
  }
}
$sqrra=mysqli_query($conn,"select * from ratings where place='$place'");
$affectedRowrra = mysqli_affected_rows($conn);
if($affectedRowrra==1 && $sqrra){
  while($rowrra = mysqli_fetch_array($sqrra))
  {
    $ca=$rowrra['c4'];
    $ra=$rowrra['r4'];
  }
  if($cmax==0)
  {
    $rac=0;
  }
  else
  {$rac=($ca/$cmax)*(135);}
  }
?>
<div class="mid1">
  <span id="s1" style="padding-left: 492px;"><div><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div></span>
  <div style="background-color: #1aff1a;height:20px;width:<?php echo $rac?>px;display: inline-block;">
  </div>&nbsp;&nbsp;<?php echo $ca?>&nbsp;<i class="fa fa-user"></i></div>
<?php 
$sqc=mysqli_query($conn,"select * from $city where place='$place'");
$affectedRoc = mysqli_affected_rows($conn);
if($affectedRoc==1 && $sqc)
{
    while($roc = mysqli_fetch_array($sqc))
  {
    $cmax=$roc['cust'];
  }
}
$sqrra=mysqli_query($conn,"select * from ratings where place='$place'");
$affectedRowrra = mysqli_affected_rows($conn);
if($affectedRowrra==1 && $sqrra){
  while($rowrra = mysqli_fetch_array($sqrra))
  {
    $ca=$rowrra['c3'];
    $ra=$rowrra['r3'];
  }
 if($cmax==0)
  {
    $rac=0;
  }
  else
  {$rac=($ca/$cmax)*(135);}
  }
?>
<div class="mid1">
  <span id="s1" style="padding-left: 504px;"><div><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div></span>
  <div style="background-color: #ffff00;height:20px;width:<?php echo $rac?>px;display: inline-block;">
  </div>&nbsp;&nbsp;<?php echo $ca?>&nbsp;<i class="fa fa-user"></i></div>
<?php 
$sqc=mysqli_query($conn,"select * from $city where place='$place'");
$affectedRoc = mysqli_affected_rows($conn);
if($affectedRoc==1 && $sqc)
{
    while($roc = mysqli_fetch_array($sqc))
  {
    $cmax=$roc['cust'];
  }
}
$sqrra=mysqli_query($conn,"select * from ratings where place='$place'");
$affectedRowrra = mysqli_affected_rows($conn);
if($affectedRowrra==1 && $sqrra){
  while($rowrra = mysqli_fetch_array($sqrra))
  {
    $ca=$rowrra['c2'];
    $ra=$rowrra['r2'];
  }
  if($cmax==0)
  {
    $rac=0;
  }
  else
  {$rac=($ca/$cmax)*(135);}
  }
?>
<div class="mid1">
  <span id="s1" style="padding-left: 516px;"><div><i class="fa fa-star"></i><i class="fa fa-star"></i></div></span>
  <div style="background-color: #ff9933;height:20px;width:<?php echo $rac?>px;display: inline-block;">
  </div>&nbsp;&nbsp;<?php echo $ca?>&nbsp;<i class="fa fa-user"></i></div>
<?php 
$sqc=mysqli_query($conn,"select * from $city where place='$place'");
$affectedRoc = mysqli_affected_rows($conn);
if($affectedRoc==1 && $sqc)
{
    while($roc = mysqli_fetch_array($sqc))
  {
    $cmax=$roc['cust'];
  }
}
$sqrra=mysqli_query($conn,"select * from ratings where place='$place'");
$affectedRowrra = mysqli_affected_rows($conn);
if($affectedRowrra==1 && $sqrra){
  while($rowrra = mysqli_fetch_array($sqrra))
  {
    $ca=$rowrra['c1'];
    $ra=$rowrra['r1'];
  }
  if($cmax==0)
  {
    $rac=0;
  }
  else
  {$rac=($ca/$cmax)*(135);}
  }
?>
<div class="mid1">
  <span id="s1" style="padding-left: 528px;"><div><i class="fa fa-star"></i></div></span>
  <div style="background-color: #ff5c33;height:20px;width:<?php echo $rac?>px;display: inline-block;">
  </div>&nbsp;&nbsp;<?php echo $ca?>&nbsp;<i class="fa fa-user"></i></div>
<?php }?>
</div>

  
  <div class="column">
    <i class="fa fa-info-circle" style="font-size:24px"></i><p class="para"><b>About</b> <?php echo $place1?></p>
     <?php $s1="select * from $city where place='$place'";
     echo $city;
     echo $place;
    $res1=mysqli_query($conn,$s1);
    //echo $res1;
    while($row1 = mysqli_fetch_assoc($res1)){
      echo $row1['p_text'];
      } ?>
  </div>
<?php function distance($lat1, $lon1, $lat2, $lon2, $unit) {

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 69.05482;
  $unit = strtoupper($unit);

  if ($unit == "K") {
      $dist=$dist * 111.13384;
      return round($dist,2);
  } else if ($unit == "N") {
      $dist=$dist * 59.97662;
      return round($dist,2);
  } else {
      return round($miles,2);
  }
}
//echo distance(21.1702,72.8311,22.3072,73.1812, "K") . " Km<br>";
?>
<br>
<div class="column">
     <?php $s2="select * from $city where place='$place'";
    $res2=mysqli_query($conn,$s2);
    $s3="select * from location where city='$curr'";
    $res3=mysqli_query($conn,$s3);
    while(($row2 = mysqli_fetch_assoc($res2)) && ($row3 = mysqli_fetch_assoc($res3))){?>
        <i class="fa fa-plane" style="font-size:24px"></i><p class="para"><b>Distance</b> to <?php echo $place1?> from <?php echo $curru?></p>
      <?php  $dist=distance($row2['latitude'],$row2['longitude'],$row3['latitude'],$row3['longitude'],"K");
      echo $dist . " Km<br>";
     } ?>
  </div>
  <div class="column">
        <table>
          <tr>
            <th> </th>
            <th>From</th>
            <th>To</th>
            <th>Distance</th>
            <th>Time</th>
            <th>Cost</th>
            <th> </th>
          </tr>
          <tr>
            <td><i class="fa fa-plane" style="font-size:20px"></i></td>
            <td><?php echo $curru;?></td>
            <td><?php echo $place1;?></td>
            <td><?php echo $dist . " Km";?></td>
            <td><?php $plane=round(($dist/350),2);
                 $plane1=floor($plane);
                 $plane2=$plane-$plane1;
            if($plane1>0)
              {
                echo $plane1 . " hrs ";
              }
            if($plane2>0)
              {
                $plane2=round(($plane2*60),0);
                echo $plane2 . " min";
              }?></td>
              <td>
                <?php $pcost=round((5*$dist),0);
                echo "Rs.".$pcost;
                ?>
              </td>
            <td>
<input type="button" value="Select Trip"  class="btn btn-danger" id="myBtn1" onClick="document.getElementById('idpp').style.display='block'" />
</td>
          </tr>
          <tr>
            <td><i class="fa fa-train" style="font-size:20px"></i></td>
            <td><?php echo $curru;?></td>
            <td><?php echo $place1;?></td>
            <td><?php echo $dist . " Km";?></td>
            <td><?php $train=round(($dist/70),2);
            $train1=floor($train);
                 $train2=$train-$train1;
            if($train1>0)
              {
                echo $train1 . " hrs ";
              }
            if($train2>0)
              {
                $train2=round(($train2*60),0);
                echo $train2 . " min";
              }?></td>
              <td>
                <?php $tcost=round((0.5*$dist),0);
                echo "Rs.".$tcost;
                ?>
              </td>
            <td>
<input type="button" value="Select Trip"  class="btn btn-danger" id="myBtn1" onClick="document.getElementById('idtt').style.display='block'" /></td>
          </tr>
          <tr>
            <td><i class="fa fa-bus" style="font-size:20px"></i></td>
            <td><?php echo $curru;?></td>
            <td><?php echo $place1;?></td>
            <td><?php echo $dist . " Km";?></td>
            <td><?php $bus=round(($dist/40),2);
            $bus1=floor($bus);
                 $bus2=$bus-$bus1;
            if($bus1>0)
              {
                echo $bus1 . " hrs ";
              }
            if($bus2>0)
              {
                $bus2=round(($bus2*60),0);
                echo $bus2 . " min";
              }?></td>
              <td>
                <?php $bcost=round((1.5*$dist),0);
                echo "Rs.".$bcost;
                ?>
              </td>
            <td>
<input type="button" value="Select Trip"  class="btn btn-danger" id="myBtn1" onClick="document.getElementById('idbb').style.display='block'" /></td>
          </tr>
          <tr>
            <td><i class="fa fa-taxi" style="font-size:20px"></i></td>
            <td><?php echo $curru;?></td>
            <td><?php echo $place1;?></td>
            <td><?php echo $dist . " Km";?></td>
            <td><?php $four=round(($dist/30),2);
            $four1=floor($four);
                 $four2=$four-$four1;
            if($four1>0)
              {
                echo $four1 . " hrs ";
              }
            if($four2>0)
              {
                $four2=round(($four2*60),0);
                echo $four2 . " min";
              }?></td>
              <td>
                <?php $fcost=round((2*$dist),0);
                echo "Rs.".$fcost;
                ?>
              </td>
            <td>
<input type="button" value="Select Trip"  class="btn btn-danger" id="myBtn1" onClick="document.getElementById('idff').style.display='block'" /></td>
          </tr>
          <tr>
            <td><i class="fa fa-motorcycle" style="font-size:20px"></i></td>
            <td><?php echo $curru;?></td>
            <td><?php echo $place1;?></td>
            <td><?php echo $dist . " Km";?></td>
            <td><?php $two=round(($dist/20),2);
            $two1=floor($two);
                 $two2=$two-$two1;
            if($two1>0)
              {
                echo $two1 . " hrs ";
              }
            if($two2>0)
              {
                $two2=round(($two2*60),0);
                echo $two2 . " min";
              }?></td>
              <td>
                <?php $t2cost=round((3*$dist),0);
                echo "Rs.".$t2cost;
                ?>
              </td>
            <td>
<input type="button" value="Select Trip"  class="btn btn-danger" id="myBtn1" onClick="document.getElementById('id222').style.display='block'" /></td>
          </tr>
        </table>
  </div>
  <div class="column">
    <i class="fa fa-comments-o" style="font-size:24px"></i>
    <p class="para"><?php echo $place1?> <b>traveller reviews</b></p>
    <table id="t1">
    <?php
$resu = mysqli_query($conn,"select * from revplace where place='$place' order by id desc");



 while($row = mysqli_fetch_assoc($resu)){
?>
<tr>
<td>
<div style="padding-left:45px;width:100%;"><i class="fa fa-user"></i>&nbsp;
 <?php echo $row['user'].'<br><b>'.$row['rtitle'].'</b><br>'.$row['rev'].'<br><br>';
 ?>
</div>
</td>
<td>
  <div style="padding-left: 20px;">
  <?php echo date('jS M Y', strtotime($row['rdate']));
 ?></div>
  </td>
</tr>
<?php } ?>
</table>
    <div class="mid"><input type="button" value="Write a review"  class="btn btn-danger" id="myBtn1" onclick="document.getElementById('idm').style.display='block'" /></div>
  </div>
<br><br>
<div id="idm" class="modalm">
  
  <form class="modalm-content animate" action="rsub.php?pl=<?php echo $place?>&c1=<?php echo $city?>" method="post" style = "width:55%; height:61%">
   

    <div class="containe">
      <div class="mid">
  <h1>Your review of <?php echo $place1?></h1>
      <hr>
       <span id="s1"><label><b>Title of your review</b></label></span>
      <input type="text" name="title" required style = "width:40% ; margin: 10px 0px;"><br>

       <span id="s2"><label><b>Your review</b></label></span>
      
      <textarea  name="rev" maxlength="1000" cols="40" rows="5" required  style = "width:40% ; margin: 10px 0px;"></textarea>
      <br>
        
      
      </div>
    </div>

    
    <div>
      <div class="mid">
       <button type="submit" class="btn btn-danger" value="submit">Submit review</button>
        <button type="button" onclick="document.getElementById('idm').style.display='none'" class="btn btn-danger">Cancel</button>
</div>
      </div>
    
  </form>
</div>
<div id="idff" class="modalff">
  
  <form class="modalff-content animate" action="four.php?from=<?php echo $curru?>&to=<?php echo $place1?>&distance=<?php echo $dist?>&hours=<?php echo $four1?>&min=<?php echo $four2?>&city=<?php echo $city?>&cost=<?php echo $fcost?>" method="post" style = "width:55%; height:61%">
   

    <div class="containe">
      <div class="mid">
  <h1>Add this trip</h1>
      <hr>
       <span id="s1"><label><b>Select Date</b></label></span>
      <input type="date" name="date" required style = "width:40% ; margin: 10px 0px;"><br>
      <br>
        
      
      </div>
    </div>

    
    <div>
      <div class="mid">
       <button type="submit" class="btn btn-danger" value="submit">Submit</button>
        <button type="button" onclick="document.getElementById('idff').style.display='none'" class="btn btn-danger">Cancel</button>
</div>
      </div>
    
  </form>
</div>
<div id="idpp" class="modalpp">
  
  <form class="modalpp-content animate" action="plane.php?from=<?php echo $curru?>&to=<?php echo $place1?>&distance=<?php echo $dist?>&hours=<?php echo $plane1?>&min=<?php echo $plane2?>&city=<?php echo $city?>&cost=<?php echo $pcost?>" method="post" style = "width:55%; height:61%">
   

    <div class="containe">
      <div class="mid">
  <h1>Add this trip</h1>
      <hr>
       <span id="s1"><label><b>Select Date</b></label></span>
      <input type="date" name="date" required style = "width:40% ; margin: 10px 0px;"><br>
      <br>
        
      
      </div>
    </div>

    
    <div>
      <div class="mid">
       <button type="submit" class="btn btn-danger" value="submit">Submit</button>
        <button type="button" onclick="document.getElementById('idpp').style.display='none'" class="btn btn-danger">Cancel</button>
</div>
      </div>
    
  </form>
</div>
<div id="id222" class="modal222">
  
  <form class="modal222-content animate" action="two.php?from=<?php echo $curru?>&to=<?php echo $place1?>&distance=<?php echo $dist?>&hours=<?php echo $two1?>&min=<?php echo $two2?>&city=<?php echo $city?>&cost=<?php echo $t2cost?>" method="post" style = "width:55%; height:61%">
   

    <div class="containe">
      <div class="mid">
  <h1>Add this trip</h1>
      <hr>
       <span id="s1"><label><b>Select Date</b></label></span>
      <input type="date" name="date" required style = "width:40% ; margin: 10px 0px;"><br>
      <br>
        
      
      </div>
    </div>

    
    <div>
      <div class="mid">
       <button type="submit" class="btn btn-danger" value="submit">Submit</button>
        <button type="button" onclick="document.getElementById('id222').style.display='none'" class="btn btn-danger">Cancel</button>
</div>
      </div>
    
  </form>
</div>
<div id="idbb" class="modalbb">
  
  <form class="modalbb-content animate" action="bus.php?from=<?php echo $curru?>&to=<?php echo $place1?>&distance=<?php echo $dist?>&hours=<?php echo $bus1?>&min=<?php echo $bus2?>&city=<?php echo $city?>&cost=<?php echo $bcost?>" method="post" style = "width:55%; height:61%">
   

    <div class="containe">
      <div class="mid">
  <h1>Add this trip</h1>
      <hr>
       <span id="s1"><label><b>Select Date</b></label></span>
      <input type="date" name="date" required style = "width:40% ; margin: 10px 0px;"><br>
      <br>
        
      
      </div>
    </div>

    
    <div>
      <div class="mid">
       <button type="submit" class="btn btn-danger" value="submit">Submit</button>
        <button type="button" onclick="document.getElementById('idbb').style.display='none'" class="btn btn-danger">Cancel</button>
</div>
      </div>
    
  </form>
</div>
<div id="idtt" class="modaltt">
  
  <form class="modaltt-content animate" action="train.php?from=<?php echo $curru?>&to=<?php echo $place1?>&distance=<?php echo $dist?>&hours=<?php echo $train1?>&min=<?php echo $train2?>&city=<?php echo $city?>&cost=<?php echo $tcost?>" method="post" style = "width:55%; height:61%">
   

    <div class="containe">
      <div class="mid">
  <h1>Add this trip</h1>
      <hr>
       <span id="s1"><label><b>Select Date</b></label></span>
      <input type="date" name="date" required style = "width:40% ; margin: 10px 0px;"><br>
      <br>
        
      
      </div>
    </div>

    
    <div>
      <div class="mid">
       <button type="submit" class="btn btn-danger" value="submit">Submit</button>
        <button type="button" onclick="document.getElementById('idtt').style.display='none'" class="btn btn-danger">Cancel</button>
</div>
      </div>
    
  </form>
</div>
<footer class="container-fluid text-center">
  <p>Plan Your Event Now!!!</p>  
  <form class="form-inline">Visit Us
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Subscibe</button>
  </form>
</footer>
<script>
var modal1 = document.getElementById('id01');
var modal2 = document.getElementById('id02');
var modalm = document.getElementById('idm');
var modalpp = document.getElementById('idpp');
var modaltt = document.getElementById('idtt');
var modalbb = document.getElementById('idbb');
var modalff = document.getElementById('idff');
var modal222 = document.getElementById('id222');
window.onclick = function(event) {
    if (event.target == modal1 || event.target == modal2 || event.target==modalm || event.target == modalpp || event.target == modaltt || event.target == modalbb || event.target == modalff || event.target == modal222) {
        modal1.style.display = "none";
    modal2.style.display = "none";
    modalm.style.display = "none";
    modalpp.style.display = "none";
    modaltt.style.display = "none";
    modalbb.style.display = "none";
    modalff.style.display = "none";
    modal222.style.display = "none";
    }
}
<?php
$try = mysqli_query($conn,"select * from location");

//$r = mysqli_fetch_assoc($try);
$cities=array();
 while($r = mysqli_fetch_assoc($try)){

//array_push($bloggers,$r['name']);
$cities[]=$r['city'];
 }
 //$bloggers   = rtrim($bloggers,",");
?>
//var bloggers=[<?php  $bloggers; ?>];
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
              b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
      x[i].parentNode.removeChild(x[i]);
    }
  }
}
/*execute a function when someone clicks in the document:*/
document.addEventListener("click", function (e) {
    closeAllLists(e.target);
});
}
var cities = <?php echo json_encode($cities);?>;
autocomplete(document.getElementById("myInput"),cities);

document.getElementById("datepickericon").onclick = function(e){
    document.getElementById("calendar").focus();
    // You could write code to toggle this
}
function modelWindow(page) {
    var $dialog = $('<div id="dialog" style="text-align:center;"></div>')
        .html('<iframe src="' + page + '" />')
        .dialog({
        autoOpen: false,
        modal: true,
        height: 250,
        width: 400,
        title: "Modal Window",
        open: function () {
            jQuery('body').on('click', '.ui-widget-overlay', function () {
                $('#dialog').dialog('close');
            });
        }
    });
    $dialog.dialog('open');
}

/*

$(function() {
 $('.rating').barrating({
  theme: 'fontawesome-stars',
  onSelect: function(value, text, event) {

   // Get element id by data-id attribute
   var el = this;
   var el_id = el.$elem.data('id');

   // rating was selected by a user
   if (typeof(event) !== 'undefined') {
 
     var split_id = el_id.split("_");
     var postid = split_id[1]; // postid

     // AJAX Request
     $.ajax({
       url: 'rating_ajax.php',
       type: 'post',
       data: {postid:postid,rating:value},
       dataType: 'json',
       success: function(data){
         // Update average
         var average = data['averageRating'];
         $('#avgrating_'+postid).text(average);
       }
     });
   }
  }
 });
});*/






/*$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"search_city.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_city').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});*/
</script>






</body>
</html>
