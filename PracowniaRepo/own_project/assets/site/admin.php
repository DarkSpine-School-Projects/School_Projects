<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="../style/index_style/index.css">
    <style>
    body {

        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;

    }

    .flex-admin-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        row-gap: 20px;

        min-height: 100vh;
        overflow-y: scroll;
    }

    .flex-admin-container::-webkit-scrollbar-track-piece:start {
        margin-top: 0vh;

    }

    input,
    select,
    button {
        min-height: 30px;
        width: 80%;


    }

    button {
        cursor: pointer;
        background-color: rgb(16, 16, 16);
        color: white;
        box-shadow: 0px 0px 8px black;
        padding: 12px;
        border: none;
        transition: all .12s ease-in-out;
    }

    button:hover {
        cursor: pointer;
        background-color: white;
        color: rgb(16, 16, 16);
        box-shadow: 0px 0px 5px white;
        padding: 12px;
    }

    .desc {
        min-height: 10vh;
        max-height: 10vh;
        max-width: 80%;
        min-width: 80%;
    }
    </style>
</head>

<body>

    <?php include_once '../components/loading.php' ?>
    <!-- Account BackGround Video -->
    <?php include_once '../components/bg_vid.php'?>

    <?php include_once '../components/loading.php' ?>
    <div class="">
        <?php
            $server_con=mysqli_connect('localhost','root','','netlib'); 
            if(isset($_COOKIE['user_id'])){
                $admin_check = "SELECT `user_id` FROM `user` WHERE `role`= 'admin';";
                $query_admin = mysqli_query($server_con, $admin_check);
                $acces_admin = mysqli_fetch_assoc($query_admin);
                if($_COOKIE['user_id'] == $acces_admin['user_id']){
                    echo'
                    
                    <form class="log-container reg-container  flex-admin-container" action="" method="POST" enctype="multipart/form-data">
                    <h2>ADD MOVIE</h2>
                        <a href="../../" target="" rel="noopener noreferrer">
                            <img src="../svg/iconmonstr-caret-left-filled.svg" class="back_arrow_login" alt="">
                        </a>
                        vid_url<input type="text" name="vid_link" class="vid_link" required>
                        desc<textarea type="text" name="desc" class="desc" required></textarea>
                        title<input type="text" name="title" class="title" required>
                        date<input type="date" name="date" class="date" required>
                        category<select type="text" name="category" class="category" required>';
                        $category = "SELECT * FROM `category`;";
                        $query_category = mysqli_query($server_con, $category);
                        while($acces_category = mysqli_fetch_assoc($query_category)){
                            echo '<option value="'.$acces_category['category'].'">'.$acces_category['category'].'</option>';
                        }
                        echo '
                            </select>
                        Poster<input type="file" name="image_url" class="image_url" required>
                        <button type="sumbit" name="sumbit_vid">SUMBIT</button>
                        <script src="../script/Upload_image.js"></script>
                        </form>';
                    


                    
                
                    if(isset($_POST["sumbit_vid"])){
                        if( !isset($_POST['vid_link']) || !isset($_POST['desc']) || !isset($_POST['title'])|| !isset($_POST['date'])|| !isset($_POST['category'])){
                        echo"ERROR SOME INFO IS MISSING";
                        }else{
                            
                            $vid_link=$_POST['vid_link'];
                            $desc=$_POST['desc'];
                            $movie_id=uniqid('Movie');
                            $title=$_POST['title'];
                            $date=$_POST['date'];
                            $category=$_POST['category'];
                            $add_date = date('Y-m-d H:i:s');
                            $image_url = $_POST['image_url'];
   
                                        
                            $filename = $_FILES["image_url"]["name"];
                            $tempname = $_FILES["image_url"]["tmp_name"];
                            $folder = "../img/" . $filename.".png";
                            $folder1 = "../img/" . $movie_id.".png";
                            rename("$folder","$folder1");
                            move_uploaded_file($tempname,$folder1);
                            $sql_insert = "/Projects_Done_On_Lessons/PracowniaRepo/own_project/assets/img/" . $movie_id.".png";

                           

                        

                        
                         
                            $sql="INSERT INTO `movie`(`vid_link`, `decs`, `movie_id`, `title`, `date`, `category`, `add_date`, `img_link`)  VALUES ('$vid_link','$desc','$movie_id','$title','$date','$category','$add_date', '$sql_insert');";
                          
                            $myFile = "../movie/$movie_id.php"; 
                            $fh = fopen($myFile, 'w'); // or die("error");  
                            $stringData = "<?php \$movie_id = '$movie_id'; include_once '../site/movie_player_template.php'  ?>";
        fwrite($fh, $stringData);

        fclose($fh);
        $query=mysqli_query($server_con, $sql);

        header('location: ./admin.php');
        die();
        }
        }
        }else{
        echo
        '
        <form class="log-container reg-container  flex-admin-container" action="" method="POST"
            enctype="multipart/form-data">
            <h1>NO PERMISSION</h1>
        </form>

        ';
        echo "<script type=\"text/javascript\">
        window.location.href = '/Projects_Done_On_Lessons/PracowniaRepo/own_project/';
        </script>";
        }
        }



        ?>
    </div>

</body>

</html>