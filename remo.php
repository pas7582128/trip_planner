<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "trip";
session_start();

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$database);

if(isset($_SESSION["USERNAME"])){
$user_name = $_SESSION["USERNAME"];
$place= $_GET['place'];
$city= $_GET['city']; 
$res = mysqli_query($conn,"select * from wishlist where user='$user_name' and city='$city' and place='$place'");
$affected = mysqli_affected_rows($conn);
if($affected == 1 && $res)
{
$sql = "delete from wishlist where user='$user_name' and city='$city' and place='$place'";
  $rs = mysqli_query($conn, $sql);
  $affectedRows = mysqli_affected_rows($conn);
  if($affectedRows == 1 && $rs)
  {
    ?><script type="text/javascript">
                       alert("Removed <?php echo $place?> from your wishlist");
                                                  window.location.href = "citynew1.php?search=<?php echo $city?>";
                                                          </script>
 <?php  }
else{
  ?> <script type="text/javascript">
                       alert("Error removing from wishlist");
                                                  window.location.href = "citynew1.php?search=<?php echo $city?>";
                                                          </script>
  
<?php }
}
else
{?> <script type="text/javascript">
                       alert("Not in your wishlist");
                                                  window.location.href = "citynew1.php?search=<?php echo $city?>";
                                                          </script>

<?php }
}
else
{
   ?> <script type="text/javascript">
                       alert("Session Error");
                                                  window.location.href = "citynew1.php?search=<?php echo $city?>";
                                                          </script>

<?php }
?>