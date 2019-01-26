<?php if(!empty($_POST['points'])){ 

    $post_id = $_POST['post_id']; 
    
    $place=$_GET['p'];
$city=$_GET['c'];
    $rating_default_number = 1; 

    $points = $_POST['points']; 

     

    //Check the rating row with same post ID 

    $prevRatingQuery = "SELECT * FROM $city WHERE place = '$place'"; 

    $prevRatingResult = $db->query($prevRatingQuery); 

    if($prevRatingResult->num_rows > 0): 

        $prevRatingRow = $prevRatingResult->fetch_assoc(); 
        $total=$prevRatingRow['rating']*$prevRatingRow['cust'];
        $rating_default_number = $prevRatingRow['cust'] + $rating_default_number;
        $points = $total + $points; 
        $total=$total/$rating_default_number;
        //Update rating data into the database 

        $query = "update $city set rating='$total',cust='$rating_default_number' where place='$place'"; 

        $update = $db->query($query); 

    else: 

        //Insert rating data into the database 

       // $query = "INSERT INTO view_rating (post_id,rating_number,total_points,created,modified) VALUES(".$post_id.",'".$rating_default_number."','".$points."','".date("Y-m-d H:i:s")."','".date("Y-m-d H:i:s")."')"; 

        //$insert = $db->query($query); 
echo "error";
    endif; 

     

    //Fetch rating deatails from database 

    $query2 = "SELECT * from $city where place='$place'"; 

     

    $result = $db->query($query2); 

    $ratingRow = $result->fetch_assoc(); 

     

    if($ratingRow){ 

        $ratingRow['status'] = 'ok'; 

    }else{ 

        $ratingRow['status'] = 'err'; 

    } 

     

    //Return json formatted rating data 

    echo json_encode($ratingRow); 

}
?>