<!DOCTYPE html>
<html id="body" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
        $server_con=mysqli_connect('localhost','root','','netlib'); 
                $sql_title="SELECT `title` FROM `movie` WHERE movie_id = '$movie_id';";
                $query_title=mysqli_query($server_con, $sql_title);
                $assoc_title = mysqli_fetch_assoc($query_title);
        echo $assoc_title['title'];
        ?>
    </title>
    <link rel="stylesheet" href="../style/index_style/index.css">
</head>

<body>
    <!-- Loading Screen -->
    <?php include_once '../components/loading.php'?><?php include_once '../components/nav.php' 
                        ?><?php include_once '../components/accaunt.php' ?>
    <?php include_once '../components/bg_vid.php'?><?php include_once '../components/movie_card.php'?>

</body>

</html>