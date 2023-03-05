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
        max-height: 80vh;
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
    <?php     
    require_once(__DIR__ . '../../../vendor/autoload.php'); 
    
      use Cloudinary\Cloudinary;
    use Cloudinary\Transformation\Resize;

                    $cloudinary = new Cloudinary(
                        [
                            'cloud' => [
                                'cloud_name' => 'djg4nn4ik',
                                'api_key'    => '248118483455672',
                                'api_secret' => 'P_4GNtxsO5bsk_HqX9HH1fJtnyg',
                            ],
                        ]
                    );
    ?>
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
                        image_name<input type="text" name="image_name" class="image_name" required>
                        image_url<input type="text" name="image_url" class="image_url" required>
                        <button type="sumbit" name="sumbit_vid">SUMBIT</button>
                        <script src="../script/Upload_image.js"></script>
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
                            $image_url = $_POST['image_url'];
                            $image_name = $_POST['image_name'];
                            $cloudinary->uploadApi()->upload("$image_url",['public_id' => "$image_name"]);
                            
                            //$cloudinary->image("$image_name")->resize(Resize::fill(100, 150))->toUrl();
                            $poster_link=$cloudinary->image("$image_name")->toUrl();
                            
                            $sql="INSERT INTO `movie`(`vid_link`, `decs`, `movie_id`, `title`, `date`, `category`, `add_date`, `img_link`) VALUES ('$vid_link','$desc','$movie_id','$title','$date','$category','$add_date', '$poster_link');";
                            $myFile = "../movie/$movie_id.php"; 
                            $fh = fopen($myFile, 'w'); // or die("error");  
                            $stringData = "";   
                            fwrite($fh, $stringData);
                            fclose($fh);
                            $query=mysqli_query($conn, $sql);
                            
                            //header('location: ./admin.php');
                             
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