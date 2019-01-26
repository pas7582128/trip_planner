<?php

if(mysqli_num_rows($result) > 0)
{
 $output .= '
    <div class="col-sm-4">
      <div class="panel panel-primary">
	  <div class="panel-body text">
    
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <img src="'.$row2[0].'" class="img-responsive" style="width:100%;height:250px" alt="Image">
		 <div class="top-left">'echo $row[0].'</div>
		 <div class="top-left2">'echo $city.'</div>
		</div>
		
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}


?>