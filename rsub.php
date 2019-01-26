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
$textareaValue = $_POST['rev'];
$title= $_POST['title'];
$place= $_GET['pl'];
$city= $_GET['c1'];
if($title!="")
{
                  if(($textareaValue)!="")
{
    $sql = "insert into revplace (user,place,rtitle,rev,rdate) values ('$user_name','$place','$title','".$textareaValue."',current_timestamp) ";
  $rs = mysqli_query($conn, $sql);
  $affectedRows = mysqli_affected_rows($conn);
  if($affectedRows == 1)
  {
    ?><script type="text/javascript">
                       alert("Thank you for writing a review");
                                                  window.location.href = "place.php?p1=<?php echo $place?>&s1=<?php echo $city?>";
                                                          </script>
 <?php  }
else{
  ?> <script type="text/javascript">
                       alert("Your review is not submitted");
                                                  window.location.href = "place.php?p1=<?php echo $place?>&s1=<?php echo $city?>";
                                                          </script>
  
<?php }


}
else
{
  ?> <script type="text/javascript">
                       alert("Please write a review");
                                                  window.location.href = "place.php?p1=<?php echo $place?>&s1=<?php echo $city?>";
                                                          </script>
<?php }


}
else
{
  ?> <script type="text/javascript">
                       alert("Please write the title of you review");
                                                  window.location.href = "place.php?p1=<?php echo $place?>&s1=<?php echo $city?>";
                                                          </script>
<?php }

}
else
{
   ?> <script type="text/javascript">
                       alert("Session Error");
                                                  window.location.href = "place.php?p1=<?php echo $place?>&s1=<?php echo $city?>";
                                                          </script>

<?php }
?>




