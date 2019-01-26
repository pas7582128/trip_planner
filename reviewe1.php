<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "trip";
session_start();
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$database);
$place=$_GET['p'];
$city=$_GET['c'];
$star=$_POST['star'];
if(isset($_SESSION["USERNAME"]))
{
$user=$_SESSION["USERNAME"];
$sql33=mysqli_query($conn,"select * from $city where place='$place'");
$affectedRows33 = mysqli_affected_rows($conn);
if($affectedRows33==1 && $sql33)
{
	while($row = mysqli_fetch_array($sql33))
  {
    $cnt=$row['cust'];
    $avg=$row['rating'];
  }
  $total=$cnt*$avg;
  $total=$total+$star;
  $cnt=$cnt+1;
  $nrating=$total/$cnt;
  $nrating=round($nrating,2);
  $sql1=mysqli_query($conn,"update $city set rating='$nrating',cust='$cnt' where place='$place'");
$affectedRows1 = mysqli_affected_rows($conn);
if($affectedRows1==1 && $sql1)
{
  $sql2=mysqli_query($conn,"select * from ratings where place='$place'");
$affectedRows2 = mysqli_affected_rows($conn);
if($affectedRows2==1 && $sql2)
{
	while($ro = mysqli_fetch_array($sql2))
  {
  	if($star==1)
    {$r1=$ro['r1'];
    $c1=$ro['c1'];
  }
    else if($star==2)
    {$r1=$ro['r2'];
    $c1=$ro['c2'];
  }
    else if($star==3)
    {$r1=$ro['r3'];
    $c1=$ro['c3'];
  }
    else if($star==4)
    {$r1=$ro['r4'];
    $c1=$ro['c4'];
  }
    else if($star==5)
    {$r1=$ro['r5'];
    $c1=$ro['c5'];
  }
  }
  $r1=($r1*$c1)+$star;
  $c1=$c1+1;
  $r1=round(($r1/$c1),2);
   $sql3=mysqli_query($conn,"update ratings set r$star='$r1',c$star='$c1' where place='$place'");
$affectedRows3 = mysqli_affected_rows($conn);
if ($affectedRows3 && $sql3) {
	?> <script type="text/javascript">
           alert("Thank you for rating this place");
          window.location.href = "place1.php?p1=<?php echo $place?>&s1=<?php echo $city?>";
             </script>
<?php }
else
{
  ?> <script type="text/javascript">
           alert("Error rating this place");
          window.location.href = "place1.php?p1=<?php echo $place?>&s1=<?php echo $city?>";
             </script>
<?php }
}
else
{
  ?>
<script type="text/javascript">
           alert("TErrrrr");
          window.location.href = "place1.php?p1=<?php echo $place?>&s1=<?php echo $city?>";
             </script>
  <?php
}
}
else
{?>
	<script type="text/javascript">
           alert("Error updating");
          window.location.href = "place1.php?p1=<?php echo $place?>&s1=<?php echo $city?>";
             </script>
  <?php
}
}
else
{?>
<script type="text/javascript">
           alert("NO place");
          window.location.href = "place1.php?p1=<?php echo $place?>&s1=<?php echo $city?>";
             </script>
<?php }
}
else
{?>
	<script type="text/javascript">
           alert("Session Error");
          window.location.href = "place1.php?p1=<?php echo $place?>&s1=<?php echo $city?>";
             </script>
  <?php 
}

?>