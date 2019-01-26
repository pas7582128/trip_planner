<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "trip";
session_start();

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$database);

if(isset($_SESSION["USERNAME"])){
$user = $_SESSION["USERNAME"];
$place= $_GET['place'];
$city= $_GET['city']; 
$res = mysqli_query($conn,"select * from wishlist where user='$user' and city='$city' and place='$place'");
$affected = mysqli_affected_rows($conn);
if($affected == 0 && $res)
{
$sql = "insert into wishlist (user,city,place) values('$user','$city','$place')";
  $rs = mysqli_query($conn, $sql);
  $affectedRows = mysqli_affected_rows($conn);
  if($affectedRows == 1 && $rs)
  {
    ?><script type="text/javascript">
                       alert("Added <?php echo $place?> to your wishlist");
                                                  window.location.href = "wish.php";
                                                          </script>
 <?php  }
else{
  ?> <script type="text/javascript">
                       alert("Error adding to wishlist");
                                                  window.location.href = "wish.php";
                                                          </script>
  
<?php }
}
else
{?> <script type="text/javascript">
                       alert("Already in your wishlist");
                                                  window.location.href = "wish.php";
                                                          </script>

<?php }
}
else
{
   ?> <script type="text/javascript">
                       alert("Session Error");
                                                  window.location.href = "wish.php";
                                                          </script>

<?php }
?>