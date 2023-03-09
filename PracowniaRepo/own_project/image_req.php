<?php 

if(isset($_POST['send_picture']) ){
    $user_id = $_COOKIE["user_id"];         
                   
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./assets/img/" . $filename;
 
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
                }else{
                    echo'';
                }
                header('Location: /Projects_Done_On_Lessons/PracowniaRepo/own_project/')

?>