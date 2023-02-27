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
        <div class="load-animation">
            <span class="word-load word-load-1">asd</span>
            <span class="word-load word-load-1">asd</span>
            <span class="word-load word-load-1">asd</span>
            <span class="word-load word-load-1">asd</span>
        </div>
    </div>
    <?php
        mysqli_connect('127.0.0.1','root_DB','','test_db');
    ?>
    <!-- Menu Bar -->
    <?php include './assets/components/nav.php' ?>
</body>
</html>