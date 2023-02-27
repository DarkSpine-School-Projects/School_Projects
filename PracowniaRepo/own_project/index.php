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
    <!-- Loading Screen -->
    <?php include_once './assets/components/loading.php' ?>

    <!-- Menu Bar -->
    <?php include_once './assets/components/nav.php' ?>

    <!-- Account BTN -->
    <?php include_once './assets/components/accaunt.php' ?>
    <div class="container">
        <section class="header">

        </section>
    </div>
    <?php 
    $myFile = "filesdfe.html"; // or .php   
$fh = fopen($myFile, 'w'); // or die("error");  
$stringData = "your html code php code goes here";   
fwrite($fh, $stringData);
fclose($fh);
    
    ?>
</body>

</html>