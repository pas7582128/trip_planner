<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "trip";


$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$database);


$target_dir = "place/";
$target_file = $target_dir . basename($_FILES['file']["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



if(isset($_FILES['file']['name']))
{
	$desc = $_POST['description'];
	$city = $_POST['city'];
	$city=strtolower($city);
	$place = $_POST['place'];
    $lat = $_POST['lati'];
    $long = $_POST['longi'];
  if(!empty($_FILES['file']['name']))
	{
		$name = $_FILES['file']['name'];
		$image_name = addslashes($_FILES['file']['name']);
		$size = $_FILES['file']['size'];
		$max_size = 2097152;
		
		$type = $_FILES['file']['type'];
		$tmp_name = $_FILES['file']['tmp_name'];
		$location = 'place/';
		
		
		$offset = 0;
		while($strpos = strpos($name, '.', $offset))
		{
			$offset = $strpos + 1;
			$extension = strtolower(substr($name, $offset));
		}
		if(($imageFileType == 'jpg' || $imageFileType == 'png' || $imageFileType == 'jpeg'  )&&($imageFileType=='jpeg'|| $imageFileType=='jpg' || $imageFileType=='png' )&& ($size<=$max_size))
		{
			$yas = move_uploaded_file($tmp_name, 'place/'.$name);
			if($yas)
			{
				$file_to_saved = "place/".$name;
				$insert_img = mysqli_query($conn,"INSERT INTO $city (place,p_pic,pic_name,p_text,latitude,longitude) VALUES('$place','".$file_to_saved."','$image_name','$desc','$lat','$long')");
                      if ($insert_img) {
						  $sql3=mysqli_query($conn,"SELECT place FROM ratings WHERE place='$place'");
$affectedRows3 = mysqli_affected_rows($conn);
if ($affectedRows3==1 && $sql3){
						   echo '<script type="text/javascript">
                                             alert("Error inserting into ratings");
                                                  
                                                          </script>';
					  }
					  else
					  {
					  	$sql3i=mysqli_query($conn,"INSERT INTO ratings (place) VALUES ('$place')");
$affectedRows3i = mysqli_affected_rows($conn);
             if ($affectedRows3i==1 && $sql3i){
                   echo '<script type="text/javascript">
                                             alert("Location Uploaded Sucessfully");
                                                  
                                                          </script>';
             } else
             {
                echo '<script type="text/javascript">
                                             alert("Location not Uploaded");
                                                  
                                                          </script>';
             }
					  }}
                       else{
                              
		                           echo '<script type="text/javascript">
                                             alert("There is something Wrong While updating.");
                                                  
                                                          </script>';
					}
	

               }
			   else{
				    $insert_img = mysqli_query($conn,"INSERT INTO $city (place,p_pic,pic_name,p_text,latitude,longitude) VALUES('$place','".$file_to_saved."','$image_name','$desc','$lat','$long')");
                      if ($insert_img) {
						  
						                 echo '<script type="text/javascript">
                                             alert("Location Uploaded Sucessfully");
                                                  
                                                          </script>';
					  }
                       else{
                              
		                        echo '<script type="text/javascript">
                                             alert("There is something Wrong While uploading.");
                                                 
                                                          </script>'; 
					}
				   
				   
			   }





		}
		
			else
			{
				echo '<script type="text/javascript">
                                            alert("There is was an Error");
                                                  
                                                          </script>';	
			}
		}
		else
		{
			echo '<script type="text/javascript">
                                            alert("File must be jpg/jpeg and must be 2MB or less.");
                                                  
                                                          </script>';	
		}
	}
	else
	{
		
		echo $desc;
		echo '<script type="text/javascript">
                                            alert("Please choose a Pic.");
                                                  
                                                          </script>';  
		
	}

?>

