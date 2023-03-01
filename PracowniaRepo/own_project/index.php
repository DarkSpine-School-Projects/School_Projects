<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OwnProject</title>

    <link rel="stylesheet" href="./assets/style/index_style/index.css">
</head>

<body>
    <?php 
    $server_con=mysqli_connect('localhost','root','','netlib'); 
    ?>

    <!-- Loading Screen -->
    <?php include_once './assets/components/loading.php' ?>

    <!-- Menu Bar -->
    <?php include_once './assets/components/nav.php' 
    ?>

    <!-- Account BTN -->
    <?php include_once './assets/components/accaunt.php' ?>
    <div class="container">
        <section class="header">

        </section>
        <section class="movie-card-container">

            <?php 
            
            
            if(!isset($_GET['search'])){
                $sql = "SELECT * FROM `movie` ORDER BY 'date' LIMIT 10;";
                $query = mysqli_query($server_con,$sql);
                $assoc = mysqli_fetch_assoc($query);
                $query = mysqli_query($server_con,$sql);
                while($assoc = mysqli_fetch_assoc($query)){
                    echo 
                    ' 
                    <div name="movie-card" class="movie-card">
                        <a href="http://localhost/Projects_Done_On_Lessons/PracowniaRepo/own_project/movie/'.$assoc['movie_id'].'">
                        <div class="image">
                        <img src="'.$assoc['image'].'" alt="'.$assoc['title'].'">
                        </div>
                        <div class="title"><h3>
                        '.$assoc['title'].'</h3>
                        </div>
                        <div class="date">
                        '.$assoc['date'].'
                        </div>
                        </a>
                    </div>
                    
                    ';
                    echo $assoc['image'];
                };
            }elseif(isset($_GET['search'])){
                $search=$_GET['search'];
                $sql = "SELECT * FROM `movie` WHERE title LIKE '$search%' ORDER BY 'date' ";
                $query = mysqli_query($server_con,$sql);
                while($assoc = mysqli_fetch_assoc($query)){
                    echo 
                    ' 
                    <div name="movie-card" class="movie-card">
                        <a href="http://localhost/Projects_Done_On_Lessons/PracowniaRepo/own_project/movie/'.$assoc['movie_id'].'">
                        <div class="image">
                        <img src="'.$assoc['image'].'" alt="'.$assoc['title'].'">
                        </div>
                        <div class="title"><h3>
                        '.$assoc['title'].'</h3>
                        </div>
                        <div class="date">
                        '.$assoc['date'].'
                        </div>
                        </a>
                    </div>
                    ';
                };
            
            };

    
            ?>
        </section>
    </div>
    <?php 
    // $myFile = "filesdfe.html"; // or .php   
    // $fh = fopen($myFile, 'w'); // or die("error");  
    // $stringData = "your html code php code goes here";   
    // fwrite($fh, $stringData);
    // fclose($fh);
    
    ?>

</body>

</html>