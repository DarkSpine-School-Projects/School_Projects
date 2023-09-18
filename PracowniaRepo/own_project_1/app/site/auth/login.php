<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
require_once '/xampp_8.2.3/htdocs/Projects_Done_On_Lessons/PracowniaRepo/own_project_1/db/connect.php';
?>

<?php 

    if(isset($_SESSION)){
        header('Location: ../../../../index.php');
        die();

    }
    // $uri = parse_url($_SERVER['REQUEST_URI'])['query'];
    // $dd=array($uri);
    // $rr=print_r($dd[0]);
?>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <input type="email" name="email" id="eamil">
            <input type="password" name="pwd" id="pwd">
            <button type="submit" name="sumbit" id="sumbit">Sumbit</button>
        </form>
    </div>
    <?php 

  
    if(){
    $email=$_GET["email"];
    }
    ?>
</body>
</html>