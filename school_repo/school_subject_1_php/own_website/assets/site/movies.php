<!DOCTYPE html>
<html id="body" lang="en">

<head>
    <?php include_once '../components/database.php'?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>

    <link rel="stylesheet" href="../style/index_style/index.css">
</head>

<body>

    <!-- Loading Screen -->
    <?php include_once '../components/loading.php' ?>
    <!-- Account BTN -->
    <?php include_once '../components/accaunt.php' ?>

    <!-- Menu Bar -->
    <?php include_once '../components/nav.php' ?>

    <!-- Account BackGround Video -->
    <?php include_once '../components/bg_vid.php'?>

    <!-- Account BackGround Video -->
    <div class="container">
    <section class="movie-card-container">

        <?php 
            
            
            if(!isset($_GET['search']) || $_GET['search']==''){
                echo' <h1 class="title-new-added">All Movies</h1>';
                $sql = "SELECT * FROM `movie` ORDER BY `add_date` ;";
                $query = mysqli_query($server_con,$sql);
                $assoc = mysqli_fetch_assoc($query);
                $query = mysqli_query($server_con,$sql);
                while($assoc = mysqli_fetch_assoc($query)){
                    echo 
                    ' 
                    <a name="movie-card" class="movie-card" href="/Projects_Done_On_Lessons/PracowniaRepo/own_project/assets/movie/'.$assoc['movie_id'].'.php">
                    <div style="margin:0px; width:100%;" >
                        <div class="image">
                        <img src="'.$assoc['img_link'].'" alt="'.$assoc['title'].'">
                        </div>
                        <div class="title"><h3>
                        '.$assoc['title'].'</h3>
                        </div>
                        <div class="date">
                        Relase: '.$assoc['date'].'
                        </div>
                        
                        <div class="desc">
                        '.$assoc['decs'].'
                        </div>
                    </div>
                    </a>
                    ';
                };
            }elseif(isset($_GET['search'])){
                $search=strtolower($_GET['search']);
                $sql = "SELECT * FROM `movie` WHERE LOWER(`title`) LIKE '$search%';";
                $query = mysqli_query($server_con,$sql);
                while($assoc = mysqli_fetch_assoc($query)){
                    echo 
                    ' 
                     <a name="movie-card" class="movie-card" href="/Projects_Done_On_Lessons/PracowniaRepo/own_project/assets/movie/'.$assoc['movie_id'].'.php">
                    <div style="margin:0px; width:100%;" >
                        <div class="image">
                        <img src="'.$assoc['img_link'].'" alt="'.$assoc['title'].'">
                        </div>
                        
                        <div class="title"><h3>
                        '.$assoc['title'].'</h3>
                        </div>
                        <div class="date">
                        Relase: '.$assoc['date'].'
                        </div>
                        
                        <div class="desc">
                        '.$assoc['decs'].'
                        </div>
                    </div>
                    </a>
                    ';
                };
                
            
            };
            if(isset($_GET['search'])){
                $search=strtolower($_GET['search']);
                $sql = "SELECT * FROM `movie` WHERE LOWER(`title`) LIKE '$search%' ORDER BY 'date' ";
                $query = mysqli_query($server_con,$sql);
                $assoc = mysqli_fetch_assoc($query);
                if(!isset($assoc)){
                            echo 
                            ' 
                            
                            <h1> NO MOVIES FOUNDED </h1>
                            
                            ';
                        
                }
            }
            ?>
    </section>
</div>


</body>

</html>