<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "trip";

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$database);
$output = '';

if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($conn, $_POST["query"]);
	$query = "
  SELECT DISTINCT * FROM location 
  WHERE city LIKE '%".$search."%'
 ";
	
}
else{
	
	$query = "
  SELECT DISTINCT * FROM location
 ";	
}

//echo $_POST["query"];

$res = mysqli_query($conn, $query);
if(mysqli_num_rows($res) > 0)
{
		
while($yas = mysqli_fetch_assoc($res))
{
    $IDstore[] = $yas['city'];
	
	
foreach($IDstore as $city){
	
	
	

$sql = "select place from $city";
$sql2="select p_pic from $city";



$result = mysqli_query($conn,$sql);
$result2=mysqli_query($conn,$sql2);



if (!$result || !$result2) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
}
	
	
while(($row = mysqli_fetch_array($result) )&& ($pic = mysqli_fetch_array($result2))){

	
 $output .= '
    <div class="col-sm-4">
      <div class="panel panel-primary">
	  <div class="panel-body text">
    
 ';
   
  $output .= '
   <img src="'.$pic[0].'" class="img-responsive" style="width:100%;height:250px" alt="Image"></div>
		 <div class="top-left">'.$row[0].'</div>
		 <div class="top-left2">'.$city.'</div>
		</div>
		</div>
		</div>
		
  ';
	
	
}
   
   
	 }
	 
   echo $output;
	 }
   
else{
	echo "not";
}


	 

	
	
?>


	



