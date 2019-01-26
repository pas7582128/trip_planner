<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "trip";
$place='Gateway of India';
$city='surat';
$curr='delhi';

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$database);

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
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="jquery.js" type="text/javascript"></script>
<script src="jquery-bar-rating-master/dist/jquery.barrating.min.js" type="text/javascript"></script>
<style>
* {
    box-sizing: border-box;
}
.para{
font-size: 20px;

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

input[type=text]:focus {
    width: 100%;
}
/* Create two equal columns that floats next to each other */
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
    left: 316px;
    font-size: 28px;
}
.top-left2 {
    position: absolute;
    top: 68px;
    left: 317px;
    font-size: 22px;
}

<?php 
  $search="mumbai";

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

[id='toggle-heart1'] {
  position: absolute;

  left: -100vw;
}

[for='toggle-heart1'] {

  color: #aab8c2;
}

[id='toggle-heart1']:checked + label {
  color: #e2264d;
}

[for='toggle-heart1'] {
  font-size: 2em;
  cursor: pointer;
}

[for='toggle-heart1'] { 
  align-self: center; 
}

.plan_button{
  position: absolute;
    top: 48px;
    left: 616px;
}
.heart{
  position: absolute;
    top: 180px;
    left: 316px;
}
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

button:hover{background-color:rgba(255,204,0,0.8);}

button:active{position:relative;top:2px;}
</style>
</head>
<body>

  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <div class="jumbotron bimg">
  <div class="container text-center">
    <h1><?php $place1=strtoupper($place);
    echo $place1?></h1>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Plan</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
      <li><input type="text" class = "ser" name="search_city" id = "search_city" placeholder="Search City.."></li>
      </ul>
   
    </div>
  </div>
</nav>
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

<!-- <div class="distance">
    <i class="fa fa-info-circle" style="font-size:24px"></i><p class="para">About <?php echo $place1?></p>
     <?php $s1="select infos from location";
    $res1=mysqli_query($conn,$s1);
    while($row1 = mysqli_fetch_assoc($res1)){
        echo "<div class=\"item\">".$row['infos']."</div>"."</span>";    
      } ?>
  </div> -->

  <?php
    $search="surat";

    $sql="select infos from location";
    
    $res=$conn->query($sql);

    $city=ucwords($city);
    $place=ucwords($place);
    $curr=ucwords($curr);
    $search=ucwords($search);

    if($res->num_rows > 0){
      while($row = $res->fetch_assoc()){
        echo '<div class="distance">
    <i class="fa fa-info-circle" style="font-size:24px"></i>';
        echo "<div class=\"item\">".$row['infos']."</div>"."</span>";        
      echo '</div>';

        echo '<div class="distance">';
     $s2="select * from $city where place='$place'";
    $res2=mysqli_query($conn,$s2);
    $s3="select * from location where city='$curr'";
    $res3=mysqli_query($conn,$s3);
    //echo $res2->num_rows;echo $res3->num_rows;
    while(($row2 = mysqli_fetch_assoc($res2)) && ($row3 = mysqli_fetch_assoc($res3))){?>
        <i class="fa fa-plane" style="font-size:24px"></i><p class="para">Distance to <?php echo $place?></p>
      <?php  echo distance($row2['latitude'],$row2['longitude'],$row3['latitude'],$row3['longitude'],"K") . " Km<br>";
     } 
          echo '</div>';
        $s="select place,p_pic from $search";
        $res=$conn->query($s);
        $i=1;
        if($res->num_rows > 0){
        while($row = $res->fetch_assoc()){
          echo '<div class="column">';
          echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['p_pic'] ).'" width="300px" height="200px" />';
          echo '<div class="heart"><input id="toggle-heart'.$i.'" type="checkbox" name="heartinput[]" /><label for="toggle-heart'.$i.'">❤</label></div>';
          echo '<div class="top-left">'.$row['place'].'</div>';
          echo '<div class="top-left2">'.$search.'</div>';
          echo '<div class="plan_button"><button type="button" class="button1" name="button[]">BOOK</button></div>';
          
          echo '</div>';
          $i++;
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
