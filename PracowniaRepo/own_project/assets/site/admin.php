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
    }

    input,
    select,
    button {
        height: 30px;
        width: 80%;


    }

    .desc {
        min-height: 10vh;
        max-height: 20vh;
        max-width: 80%;
        min-width: 80%;
    }

    .log-container {}
    </style>
</head>

<body>
    <section class="header">
        <div id="vid-gradient" z-index="-2"></div>
        <video id="vid-main" autoplay muted loop>
            <source id="vid-main-source"
                src="/Projects_Done_On_Lessons/PracowniaRepo/own_project/assets/vid/loading.mp4" type="video/mp4" />
        </video>
    </section>
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
                        <a href="../../" target="" rel="noopener noreferrer">
                            <img src="../svg/iconmonstr-caret-left-filled.svg" class="back_arrow_login" alt="">
                        </a>
                        vid_link<input type="text" name="vid_link" class="vid_link" required>
                        desc<textarea type="text" name="desc" class="desc" required></textarea>
                        title<input type="text" name="title" class="title" required>
                        date<input type="date" name="date" class="date" required>
                        category<select type="text" name="category" class="category" required>
                            <option value="horror">horror</option>
                        
                        </select>
                        <button type="sumbit" name="sumbit_vid">SUMBIT</button>
                    </form>
                    ';

                    $conn=mysqli_connect('localhost','root','','netlib');
                    if(isset($_POST["sumbit_vid"])){
                        if( !isset($_POST['vid_link']) || !isset($_POST['desc']) || !isset($_POST['title'])|| !isset($_POST['date'])|| !isset($_POST['category'])){
                        echo"ERROR SOME INFO IS MISSING";
                        }else{
                        $conn=mysqli_connect('localhost','root','','netlib'); 
                            $vid_link=$_POST['vid_link'];
                            $desc=$_POST['desc'];
                            $movie_id=uniqid('Movie');
                            $title=$_POST['title'];
                            $date=$_POST['date'];
                            $category=$_POST['category'];
                            $add_date = date("Y-m-d");
                            $sql="INSERT INTO `movie`(`vid_link`, `decs`, `movie_id`, `title`, `date`, `category`, `add_date`) VALUES ('$vid_link','$desc','$movie_id','$title','$date','$category','$add_date');";



                            $myFile = "../movie/$movie_id.php"; // or .php   
                            $fh = fopen($myFile, 'w'); // or die("error");  
                            $stringData = "";   
                            fwrite($fh, $stringData);
                            fclose($fh);
                            $query=mysqli_query($conn, $sql);
                            header('Location: http://localhost/Projects_Done_On_Lessons/PracowniaRepo/own_project/assets/site/admin.php');
                        }
                    }
                }else{
                    echo
                    '
                    <form class="log-container reg-container  flex-admin-container" action="" method="POST" enctype="multipart/form-data">
                      <h1>NO PERMISSION</h1>
                    </form>
                    ';
                }
            }
     
        ?>
    </div>
</body>

</html>