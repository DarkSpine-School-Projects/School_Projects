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
    <div class="load-container">  
            <span class="word-load word-load-1">Największa</span>
            <span class="word-load word-load-1">Biblioteka</span>
            <span class="word-load word-load-1">Filmów</span>
            
    </div>
    <?php
        mysqli_connect('127.0.0.1','root_DB','','test_db');
    ?>
    <!-- Menu Bar -->
    <?php include './assets/components/nav.php' ?>
</body>
</html>