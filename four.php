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
$from= $_GET['from'];
$to= $_GET['to'];
$distance= $_GET['distance'];
$hours= $_GET['hours'];
$min= $_GET['min'];
$date= $_POST['date'];
$city= $_GET['city'];
$cost= $_GET['cost'];
if($hours==0)
{
  $time=$min." min";
}
else if($min==0)
{
  $time=$hours." hrs";
}
else
{
  $time=$hours." hrs".$min." min";
}
$sql = "insert into addtrip (name,vehicle,from_,to_,distance,time,tripdate,currdate,cost) values('$user','taxi','$from','$to','$distance','$time','$date',current_timestamp,'$cost')";
  $rs = mysqli_query($conn, $sql);
  $affectedRows = mysqli_affected_rows($conn);
  if($affectedRows>0 && $rs)
  {
    ?><script type="text/javascript">
                       alert("Added to your trip");
                                                  window.location.href = "place.php?p1=<?php echo $to?>&s1=<?php echo $city?>";
                                                          </script>
 <?php  }
else{
  ?> <script type="text/javascript">
                       alert("Error adding to trip");
                                                  window.location.href = "place.php?p1=<?php echo $to?>&s1=<?php echo $city?>";
                                                          </script>
  
<?php }
}
else
{
   ?> <script type="text/javascript">
                       alert("Session Error");
                                                  window.location.href = "place.php?p1=<?php echo $to?>&s1=<?php echo $city?>";
                                                          </script>

<?php }
?>