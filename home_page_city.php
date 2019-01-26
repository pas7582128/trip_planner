<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "trip";
session_start();
//$place='Gateway of India';
//$city='mumbai';
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$database);
if(isset($_GET['var'])){

$search=$_GET['var'];

$atry=mysqli_affected_rows($conn);

?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link href='jquery-bar-rating-master/dist/themes/fontawesome-stars.css' rel='stylesheet' type='text/css'>
 <link href='https://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="jquery.js" type="text/javascript"></script>
<script src="jquery-bar-rating-master/dist/jquery.barrating.min.js" type="text/javascript"></script>
<style>
* {
    box-sizing: border-box;
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
.b1{
    background-image: url("hb.png");
    background-repeat: no-repeat;
    background-size: 100% 100%;
    border-radius: 15px;
    cursor: pointer;
}
.log1 {background-color: #ffffff;} 
.log1:hover {background-color: #ff0066;}
.b2{
    background-image: url("h2.jpg");
    background-repeat: no-repeat;
    background-size: 100% 100%;
    border-radius: 15px;
    cursor: pointer;

}
.log2 {background-color: #ff0066;} 
.log2:hover {background-color: #ffffff;}
.myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
    
}
.bimg{
    <?php 
    $s="select * from location where city='$search'";
    $res=mysqli_query($conn,$s);
    while($row = mysqli_fetch_assoc($res)){
       ?>
            background-image: url("city/<?php echo $row['picname']?>");
       <?php } ?>
     background-repeat: no-repeat;
    background-position: center center;
  }
.para{
font-size: 20px;

  }
.mid{
  position: relative;
   left: 417px;
}
    .bimg{
    <?php 
    $s="select * from $search where place='$place'";
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

.trigger {
  overflow: hidden;
  input[type='checkbox'] {
    display: none;
    + .like {
      &:before,
      &:after {
        background: red;
        border-radius: 12px 12px 0 0;
        content: '';
        height: 40px;
        position: absolute;
        left: 24px;
        top: 20px;
        transform: rotate(-45deg);
        transform-origin: left bottom;
        transition: all 0.25s ease;
        width: 24px;
      }
      &:after {
        left: 0;
        transform: rotate(45deg);
        transform-origin: right bottom;
      }
    }
    &:checked {
      + .like {
        &:before,
        &:after {
          background: #06723e;
          border-radius: 6px 6px 0 0;
          width: 12px;
        }
        &:before {
          height: 20px;
          left: 32px;
          top: 40px;
        }
        &:after {
          left: 20px;
          top: 20px;
        }
      }
    }
  }
}

input[type='checkbox'] ~ .text {
  color: #fff;
  font-family: 'Gloria Hallelujah';
  font-size: 24px;
  position: absolute;
  left: 58px;
  top: 14px;
  opacity: 1;
}

input[type='checkbox']:checked ~ .text {
  opacity: 0;
}

.column {
    float: left;
    width: 100%;
    padding: 10px;
    border:1px solid black;
    border-collapse: collapse;
    position: relative;
    
}
.distance {
    float: right;
    width: 100%;
    padding: 10px;
    border:1px solid black;
    border-collapse: collapse;
    position: relative;
    
}
/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
.top-left {
    position: absolute;
    top: 28px;
    left: 417px;
    font-size: 28px;
}
.top-left2 {
    position: absolute;
    top: 68px;
    left: 417px;
    font-size: 22px;
}
.top-left3 {
    position: absolute;
    top: 120px;
    left: 417px;
}
<?php
    $s="select place,p_pic from $search";
        $res=$conn->query($s);

    //echo $res->num_rows;
    $i=1;

    if($res->num_rows>0)
    {
      while($row = $res->fetch_assoc()){


      //echo $i;
      //$i++;
      }
    }
?>


button{
color:#08233e;
font:2.4em Futura, ‘Century Gothic’, AppleGothic, sans-serif;
padding:14px;
background:url(overlay.png) repeat-x center #ffcc00;background-color:rgba(255,204,0,1);
border:1px solid #ffcc00;
-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;
border-bottom:1px solid #9f9f9f;
-moz-box-shadow:inset 0 1px 0 rgba(255,255,255,0.5);-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.5);box-shadow:inset 0 1px 0 rgba(255,255,255,0.5);
cursor:pointer;
}

/*button:hover{background-color:rgba(255,204,0,0.8);}

button:active{position:relative;top:2px;}*/
</style>
</head>
<body>

  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <div class="jumbotron bimg">
  <div class="container text-center">
    <h1><?php $search1=strtoupper($search);
    echo $search1?></h1>
  </div>
</div>

<div class="topnav">
  <a class="active"><?php echo $search1?></a>
  <a href="home.php">Back&nbsp;&nbsp;<span class="fa fa-arrow-circle-left"></span></a>
 
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
?>
  <?php

    $sql="select infos from location where city='$search'";
    
    $res=$conn->query($sql);

   // $city=ucwords($city);
    //$place=ucwords($place);
   // $curr=ucwords($curr);
    $search=ucwords($search);

    if($res->num_rows > 0){
      while($row = $res->fetch_assoc()){
        echo '<div class="distance">
    <i class="fa fa-info-circle" style="font-size:24px"></i>';
        echo "<div class=\"item\">".$row['infos']."</div>"."</span>";        
      echo '</div>';

        $s11=mysqli_query($conn,"select count(place) as total from $search");
        $affected11 = mysqli_affected_rows($conn);
if($affected11 && $s11)
{
    while($r11 = mysqli_fetch_array($s11))
  {
    $tot=$r11['total'];
  }
}
        $s="select place,p_pic from $search";
		
		$try ="select p_pic from $search";
		$test = mysqli_query($conn,$try);
		
        $res=mysqli_query($conn,$s);
        $af = mysqli_affected_rows($conn);
        $i=1;
        if($af>0 && $res){
        while(($row = mysqli_fetch_array($res)) && ($row0 = mysqli_fetch_array($test))){
         ?><div class="column">
        <?php
        //  echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['p_pic'] ).'" width="300px" height="200px" />';
          ?>
		  <img src="<?=$row0[0]?>" width="300px" height="200px" alt="Image">	
         <?php
		 echo '<div class="top-left">'.$row['place'].'</div>';
          echo '<div class="top-left2">'.$search.'</div>';?>
          <?php 
          $pp=$row['place'];
            // $quew=mysqli_query($conn,"select * from wishlist where user='$user_name' and city='$search' and place='$pp'");
             $affectedw = mysqli_affected_rows($conn);
             if(1){
          ?>
          <div class="top-left3"><input type="button" class="b1 log1" id="myBtn" value="   " onClick="alert('Make An Account')" />&nbsp;&nbsp;<div style="font-size: 22px;display: inline-block;">Add to Wishlist</div></div>
        <?php } 
        else
          { ?>
               <div class="top-left3"><input type="button" class="b2 log2" id="myBtn" value="   " onClick="Javascript:window.location.href = 'remo.php?place=<?php echo $row['place']?>&city=<?php echo $search?>';" />&nbsp;&nbsp;<div style="font-size: 22px;display: inline-block;">Remove from Wishlist</div></div>
       <?php   }?>
          <div class="mid" "><button type="submit" class="btn btn-danger" value= "submit" onClick="alert('Make An Account')">View Trip</button></div>
          </div>
         <?php  //$i++;
      }  
    }
    else{
      echo '<h1>There is no place in this city.</h1>';
    }
      }  
    }
    else{
      echo '<h1>There is no such city available.</h1>';
    }


    
  ?>
<script type="text/javascript">
    $(function(){ /* to make sure the script runs after page load */

  $('.item').each(function(event){ /* select all divs with the item class */
  
    var max_length = 0; /* set the max content length before a read more link will be added */
    
    if($(this).html().length > max_length){ /* check for content length */
      
      var short_content   = $(this).html().substr(0,max_length); /* split the content in two parts */
      var long_content  = $(this).html().substr(max_length);
      
      $(this).html(short_content+
             '<a href="#" class="read_more">INFORMATION ABOUT CITY<br/></a>'+
             '<span class="more_text" style="display:none;">'+long_content+'</span>'); /* Alter the html to allow the read more functionality */
             
      $(this).find('a.read_more').click(function(event){ /* find the a.read_more element within the new html and bind the following code to it */
 
        event.preventDefault(); /* prevent the a from changing the url */
        $(this).hide(); /* hide the read more button */
        $(this).parents('.item').find('.more_text').show(); /* show the .more_text span */
     
      });
      
    }
    
  });
 
 
});


  </script>
  <!-- <div class="column">
    <img src="<?php echo 'place/kalam13' ?>" width="300px" height="200px">
  </div> -->


<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

</script>
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


window.onclick = function(event) {
    if (event.target == modal1 || event.target == modal2 ) {
        modal1.style.display = "none";
    modal2.style.display = "none";
    }
}







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

<?php
}
?>