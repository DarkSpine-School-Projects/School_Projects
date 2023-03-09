<!DOCTYPE html>
<html id="body" lang="en">

<head>
    <?php include_once '../components/database.php'?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
    
    $sql_title="SELECT `title` FROM `movie` WHERE movie_id = '$movie_id';";
    $query_title=mysqli_query($server_con, $sql_title);
    $assoc_title = mysqli_fetch_assoc($query_title);
    echo $assoc_title['title'] ?>
    </title>
    <link rel="stylesheet" href="../style/index_style/index.css">
    <style>
    .h_syntax {
        margin-left: 60px;
        padding: 0;
        display: inline;
        transition: all .1s ease-in-out;
        cursor: pointer;
    }

    .h_syntax:hover {
        color: red;
    }

    .info-movie {
        color: red !important;
    }



    .com-con {
        width: 50%;
        min-height: 20vh;
        background-color: rgb(16, 16, 16);
        box-shadow: 0px 0px 20px black;
        padding: 20px 0px;
        gap: 20px;
        display: flex;
        flex-direction: column;
    }


    .user_image_com {
        width: 30px;
        height: 30px;
        border-radius: 100%;
        object-fit: cover;
    }



    .each-com {

        width: 90%;
        min-height: 10vh;
        display: flex;
        justify-content: center;
        align-content: center;
        justify-items: center;
        align-items: center;

    }

    .form_com {
        width: 100%;
        min-height: 100%;
        display: flex;
        justify-content: center;
        align-content: center;
        justify-items: center;
        align-items: center;

        gap: 20px;
    }

    .add_com {
        outline: none;
        border: none;
        height: 100%;
        width: 90%;
        padding: 15px;
        border-radius: 4px;

    }

    .sumbit_com {
        height: 100%;
        width: 4%;
        background-color: transparent;
        outline: none;
        border: none;
        text-align: center;
        cursor: pointer;
    }

    span {
        margin: 0;
    }


    .each-com-bg {
        box-shadow: 0px 0px 20px black;

    }

    .user_nick {
        display: inline;
        color: red;
    }

    .add_com_flex {
        display: flex;
        justify-content: left;
        justify-items: center;
        align-items: center;
        align-content: center;
        margin: 0;
    }

    .svg-del {
        fill: aliceblue;
        cursor: pointer;
    }

    .svg-del:hover {
        fill: red;
    }
    </style>
</head>

<body>

    <?php include_once '../components/loading.php'?>
    <?php include_once '../components/accaunt.php' ?>
    <?php include_once '../components/nav.php'?>
    <?php include_once '../components/bg_vid.php'?>

    <div class="container">
        <?php include_once '../components/movie/movie_con.php'?>
        <?php include_once '../components/movie/commet.php'?>
    </div>
</body>

</html>