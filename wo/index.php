<!DOCTYPE html>
<html lang="en">

<head>
    <?php $db=mysqli_connect('localhost','root','','wo'); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Cars</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Prompt:wght@100;200;300;600&display=swap"
        rel="stylesheet">
    <style>
    html,
    *,
    body {
        box-sizing: border-box;
        margin: 0 auto;
        width: 100%;
        border: none;
        padding: none;
        font-family: 'Anton', sans-serif;
        font-family: 'Prompt', sans-serif;
    }


    #bg {
        background-color: #21D4FD;
        background: radial-gradient(circle at 10% 20%, rgb(0, 0, 0) 0%, rgb(64, 64, 64) 90.2%);
        transition: all 0.2s ease-in-out;
        width: 100%;
        height: 100vh;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        pointer-events: none;
        position: fixed;
        top: 0;
        left: 0;
        z-index: -1;
    }

    header {
        padding: 100px;
        text-shadow: 0px 0px 15px white;
        color: white;
        letter-spacing: 20px;
        font-size: x-large;
        text-align: center;
        font-weight: 200;

    }

    header h1 {
        color: red;
        text-shadow: 0px 0px 50px red;
    }

    h1,
    h2,
    h3 {
        font-weight: 200;
        display: inline;
        text-shadow: 0px 0px 3px red;
        color: red;
    }

    .container {
        display: flex;
        justify-content: center;
        justify-items: center;
        align-items: center;
        align-content: center;
        width: 90%;
        flex-wrap: wrap;
        gap: 50px;
        margin-bottom: 5vh;

    }

    .card-car {
        overflow: hidden;
        transition: all 0.2s ease-in-out;
        display: flex;
        flex-direction: column;
        justify-content: center;
        justify-items: center;
        align-items: center;
        align-content: center;
        min-width: 30%;
        width: 30%;
        min-height: 20vh;
        background: rgb(16, 16, 16);

        box-shadow: 0px 0px 5px black;
        color: white;
        border-radius: 5px;


    }

    .card-car:hover {

        box-shadow: 0px 0px 15px black;
        transform: scale(101%);
        padding: 0;


    }



    .info-car {
        padding-left: 5%;
    }

    .img-car {
        overflow: hidden;
        object-fit: cover;
        width: 100%;
        max-height: 40%;
    }


    ::-webkit-scrollbar {
        width: 4px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }


    ::-webkit-scrollbar-thumb {
        background: #888;
    }


    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
    </style>
</head>

<body>
    <header>
        <h1>ELECTRIC CARS</h1>
    </header>
    <div id="container" class="container">
        <?php 
        
            $sql = "SELECT * FROM `cars` ORDER BY `acceleration`;";
            $query = mysqli_query($db, $sql);

            while($assoc= mysqli_fetch_assoc($query)){
                echo'
                
                    <div id="card-car" class="card-car">
                      
                        <img class="img-car" src="'.$assoc["img_url"].'">
                       
                        <div class="info-car">
                            <span>Nazwa: <h2>'.$assoc["name"].'</h2></span>
                            <br>
                            Model: <h3>'.$assoc["model"].'</h3>
                            <br>
                            Moc: <h3>'.$assoc["power"].'</h3>
                            <br>
                            Przyśpieszenie: <h3>'.$assoc["acceleration"].'</h3>
                            <br>
                            Pojemność Baterii: <h3>'.$assoc["battery_capacity"].'</h3>
                            <br>
                            Moc Ładowania: <h3>'.$assoc["charging_power"].'</h3>
                            
                        </div>
                    </div>
                
                ';
            }
        
        
        ?>
        <div id="bg"></div>
    </div>

</body>

</html>