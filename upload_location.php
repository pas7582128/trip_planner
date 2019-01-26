<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "trip";


$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$database);


$target_dir = "city/";
$target_file = $target_dir . basename($_FILES['file']["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_FILES['file']['name'])  && isset($_POST['country']) && isset($_POST['city']) && isset($_POST['info']))
{
	$country = $_POST['country'];
	$city = $_POST['city'];
	$city = strtolower($city);
	$data = $_POST['info'];
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
		$location = 'city/';
		
		
		$offset = 0;
		while($strpos = strpos($name, '.', $offset))
		{
			$offset = $strpos + 1;
			$extension = strtolower(substr($name, $offset));
		}
		echo $extension;
		echo $imageFileType;
		if(($imageFileType == 'jpg' || $imageFileType == 'png' || $imageFileType == 'jpeg'  )&&($imageFileType=='jpeg'|| $imageFileType=='jpg' || $imageFileType=='png' )&& ($size<=$max_size))
		{
			$yas = move_uploaded_file($tmp_name, 'city/'.$name);
			if($yas)
			{
				echo 'Uploaded.';
				$file_to_saved = "city/".$name;
				
                       				
				    
				    $insert_img = mysqli_query($conn,"INSERT INTO location (state,infos,city,pic,picname,latitude,longitude) VALUES('$country','$data','$city','".$file_to_saved."','$image_name','$lat','$long')");
                      if ($insert_img) {
						  
						  $check = "select 1 from $city LIMIT 1";
		                     $r_check = mysqli_query($conn,$check);
						    if($r_check!==FALSE){
			  
		                        }
		                   else{
		  
		                 $sql6 = "CREATE TABLE $city (
                                  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                                  place VARCHAR(50) NOT NULL,
                                  p_pic BLOB,
				                   pic_name VARCHAR(50) NOT NULL,
                                   p_text VARCHAR(50000) NOT NULL,
                                   latitude VARCHAR(50) NOT NULL,
                                   longitude VARCHAR(50) NOT NULL)";
				     if(mysqli_query($conn,$sql6)){
					   
					   
				        }else{
					   
					   echo "Error in Creating  table";
				       }
					   
						   }
						  
						  
						  
    
		                              echo '<script type="text/javascript">
                                             alert("Location Uploaded Sucessfully");
                                                  
                                                          </script>';
					  }
                       else{
                              echo mysqli_error($conn);
		                             echo '<script type="text/javascript">
                                             alert("There is something Wrong While updating.");
                                                  
                                                          </script>';  
					}

				
				
				
				
				
			}				
		 else{
			 
			 $insert_img = mysqli_query($conn,"INSERT INTO location (state,infos,city,pic,picname) values  ('$country','$data','$city','".$file_to_saved."','$image_name')");
                      if ($insert_img) {
						  
						  
						  
						  
						  
						  $check = "select 1 from $city LIMIT 1";
		                     $r_check = mysqli_query($conn,$check);
						    if($r_check!==FALSE){
			  
		                        }
		                   else{
		  
		                 $sql6 = "CREATE TABLE $city (
                                  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                                  place VARCHAR(50) NOT NULL,
                                  p_pic BLOB,
				                   pic_name VARCHAR(50) NOT NULL,
                                   p_text VARCHAR(50000) NOT NULL,
                                    latitude VARCHAR(50) NOT NULL,
                                   longitude VARCHAR(50) NOT NULL)";
				     if(mysqli_query($conn,$sql6)){
					   
					   
				        }else{
					   
					   echo "Error in Creating  table";
				       }
					   
						   }
						   
    
		                              echo '<script type="text/javascript">
                                             alert("Location Uploaded Sucessfully");
                                                  
                                                          </script>';
					  }
                                       
                       else{
                              
		                              echo '<script type="text/javascript">
                                             alert("There is something Wrong While updating.");
                                                  
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
		echo '<script type="text/javascript">
                                            alert("Please choose a Profile pic.");
                                                  
                                                          </script>';
		
	}

?>

