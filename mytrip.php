<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "trip";
session_start();
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$database);
if(isset($_SESSION["USERNAME"])){
$user_name= $_SESSION["USERNAME"];
$test=mysqli_query($conn,"select * from login where name='$user_name'");
$atry=mysqli_affected_rows($conn);
if($atry==1 && $test)
{
    while($rtry = mysqli_fetch_array($test))
  {
    $mail=$rtry['email'];
  }
}
}
else
{
  echo "session err";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
.mp1{
  float: left;
  width: 200px;
  font-size: 20px;
  font-weight: bold;
  /*padding-bottom: 5px;*/
}
.mp2{
  font-size: 20px;
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
  .modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

.modal1-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from t
    border: 1px solid #888;
    width: 50px; /* Could be more or less, depending on screen size */
}
.modal2 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

.modal2-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from t
    border: 1px solid #888;
    width: 50px; /* Could be more or less, depending on screen size */
}
   .text{
	   
	   position: relative;
    text-align: center;
    color: white;
   }
   
   .top-left {
    position: absolute;
    top: 20px;
    left: 22px;
}
    .inner {
  overflow: auto;
  display: block;
  height: 400px;
  border: 3px solid gray;
}
   .top-left2 {
    position: absolute;
    top: 40px;
    left: 22px;
}
  .bimg{
	  background-image: url("drop1.jpg");
	   background-repeat: no-repeat;
		background-position: center center;
    color:#ffffff;
     text-shadow: 5px 5px #000000;
  }
  .navbar{
	  
  }
  .containe {
    padding: 10px;
}
.container
{
  position: relative;
}
.bottom
{
   position: absolute;
   top: 100px;
   left: 380px;
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
.animate {
    animation: animatezoom 0.6s
}
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
/*
input[type=text]:focus {
    width: 100%;
}*/
  
  </style>
  
 
 <link rel="stylesheet" href="sign_login.css">
 
 
 
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
		
var reg2 = /^[0-9]{10}+$/;
	var ph=document.myform.mobile.value;
	
	if (reg2.test(ph.value) == false) 
        {
            window.alert('Invalid Mobile No');
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

function validateNumber(){
	var reg = /^[0-9]{10}+$/;
	var ph=document.myform.mobile.value;
	
	if (reg.test(ph.value) == false) 
        {
            window.alert('Invalid Mobile No');
            return false;
        }
		
		return true;


}


function validateEmail_l(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
            window.alert('Invalid Email Address');
            return false;
        }

        return true;

}

function validate_l(){
	
	
var mail = document.myform1.email.value;
  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(mail) == false) 
        {
            window.alert('Invalid Email Address');
            return false;
        }
	
}

 </script>
 
 
</head>
<body>

<div class="jumbotron bimg">
  <div class="container text-center">
    <h1>GO SomeWhere</h1>      
    <div class="bottom" style="font-size: 30px;color:#ffffff">Welcome <?php echo $mail?></div>
  </div>
</div>

  <div class="topnav">
  <a href="home1.php">Home</a>
  <a class="active" href="mytrip.php">My Trip</a>
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

<div class="container">    
  <div class="row" id = "result" style=\"overflow: auto;\">
   <fieldset class=\"inner\">
      <?php 
            $query = "SELECT * FROM addtrip where name='$user_name' order by id desc";
            $result = mysqli_query($conn, $query);

            //number of rows
            $rowCount = mysqli_num_rows($result);

           // echo "<tr>";
           //      echo "<td>"."</td>";
           //      echo "<td>"."</td>";
           //      echo "<td>"."</td>";
           //      echo "<td>"."</td>";
           //      echo "<td>"."</td>";

           //    echo "</tr>";
            echo "<br><br><br>";
            if($rowCount > 0){
               echo '<table id="customers">';
              echo "<tr><th> </th><th>From</th><th>To</th><th>Tripdate</th><th>Cost</th></tr>";
               while($row = mysqli_fetch_array($result)) {
                  $vehicle = $row['vehicle'];
                  $from = $row['from_'];
                  $to = $row['to_'];
                  $tripdate = $row['tripdate'];
                  $cost = $row['cost'];
                  echo "<tr><td>";
                  if($vehicle=='plane'){
                    echo '<i class="fa fa-plane" style="font-size:20px">';
                  }
                  else if($vehicle=='train'){
                    echo '<i class="fa fa-train" style="font-size:20px"></i>';
                  }
                  else if($vehicle=='bus'){
                    echo '<i class="fa fa-bus" style="font-size:20px"></i>';
                  }
                  else if($vehicle=='taxi'){
                    echo '<i class="fa fa-taxi" style="font-size:20px"></i>';
                  }
                  else{
                    echo '<i class="fa fa-motorcycle" style="font-size:20px"></i>';
                  }
                  echo "</td><td>".$from."</td><td>".$to."</td><td>".$tripdate."</td><td>".$cost."</td></tr>";
                }
                echo '</table>';
            }
            
            
            
      ?>
   </fieldset>
  </div>
</div>

<br>

<br><br>















































<footer class="container-fluid text-center">
  <p>Plan Your Event Now!!!</p>  
  <form class="form-inline">Visit Us
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Subscibe</button>
  </form>
</footer>


































<!--SignUp model-->


<div id="id01" class="modal1">
  
  <form name = "myform" class="modal1-content animate" onsubmit="return validate()" action="signup.php" method = "post" style = "width:50%; height:700px;" >
   

    <div class="containe">
	   <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
	  <span id="s1"><label><b>User Name</b></label></span>
      <input type="text" placeholder="Enter Username" name="uname"  required><br>
	  
      <span id="s1"><label><b>Email</b></label></span>
      <input type="text" placeholder="Enter Email" name="email"  required><br>
	  
	  <span id="s1"><label><b>Mobile</b></label></span>
      <input type="number" placeholder="Enter Mobile" name="mobile"  required><br><br>
	  
	  <span id="s1"><label><b>Current Location</b></label></span>
      <input type="text" placeholder="Enter Location" name="location"  required><br>
	  
      <span id="s1"><label><b>Password</b></label></span>
      <input type="password" placeholder="Enter Password" name="password" required><br>

      <span id="s1"><label><b>Repeat-Password</b></label></span>
      <input type="password" placeholder="Repeat Password" name="repeatpwd" required><br>
      
      

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
        
		<div>
		<button type="submit" class="signupbtn" value= "submit">Sign Up</button>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        
      </div>
      
    </div> 
    
  </form>
</div>





<div id="id02" class="modal2">
  
  <form class="modal2-content animate" name ='myform1' onsubmit="return validate_l()" action="login.php" method="post" style = "width:55%; height:70%">
   

    <div class="containe">
	<h1>Login</h1>
      <p>Enter the Details.</p>
      <hr>
       <span id="s1"><label><b>Username</b></label></span>
      <input type="text" placeholder="Enter Username" name="uname"  required style = "width:40% ; margin: 10px 0px;"><br>

       <span id="s1"><label><b>Password</b></label></span>
      <input type="password" placeholder="Enter Password" name="psw" required  style = "width:40% ; margin: 10px 0px;"><br>
        
      
      
    </div>

    
	  <div>
	     <button type="submit" class="signupbtn" value="submit">Login</button>
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
		
      <span class="forget">Forgot <a href="#">password?</a></span>
      </div>
    
  </form>
</div>








<script>
var modal1 = document.getElementById('id01');
var modal2 = document.getElementById('id02');


window.onclick = function(event) {
    if (event.target == modal1 || event.target == modal2 ) {
        modal1.style.display = "none";
		modal2.style.display = "none";
    }
}





/*

$(document).ready(function(){

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
});

*/
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
</script>






</body>
</html>
