<!DOCTYPE html>
<html lang="en">

<head>
    <?php $db = mysqli_connect('localhost', 'root', '', 'mp') ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFC STATS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <div class="animation-container">
        <img src="./ufc-3.jpg" alt="" class="ufc-img ufc-img-1">
        <img src="./ufc-4.png" alt="" class="ufc-img ufc-img-2">
    </div>
    <section class="show-section">
        <header>
            <h1><span>UFC</span></h1>
            <ul>
                <li>News</li>
                <li>Events</li>
                <li>Rankings</li>
                <li>Athleats</li>

            </ul>
        </header>
        <div class="container">
            <div class="weight-calss">
                <h2>Flyweight</h2>
                <?php

                $sql = "SELECT * FROM `fighters` WHERE `Weight_class`='Flyweight';";
                $query = mysqli_query($db, $sql);
                while ($assoc = mysqli_fetch_assoc($query)) {
                    echo '
                    
                        <div class="card">
                           
                            <div class="img-div">
                                <img
                                    src="' . $assoc['img_url'] . '">
                            </div>
                            <div class="stats">
                                <div class="info-nick">
                                     <h1 class="nick">"' . $assoc['nick'] . '"</h1>
                                </div>
                                <div class="info">
                                     Name: <h1>' . $assoc['name'] . ' ' . $assoc['surname'] . '</h1>
                                </div>
                                <div class="info">
                                     W/L/D: <h1>' . $assoc['win'] . '/' . $assoc['lose'] . '/' . $assoc['draw'] . '</h1>
                                </div>
                                 <div class="info">
                                     Knockout: <h1>' . $assoc['knockout'] . '</h1>
                                </div>
                                 <div class="info">
                                     Submision: <h1>' . $assoc['submision'] . '</h1>
                                </div>
                                 <div class="info">
                                     Strinking Accuracy: <h1>' . $assoc['strinking_accuracy'] . '%</h1>
                                </div>
                                <div class="info">
                                     Takedown Accuracy: <h1>' . $assoc['takedown_accuracy'] . '%</h1>
                                </div>
                                <h3>SIG. STR. BY TARGET:</h3>
                                <div class="info">
                                     Head: <h1>' . $assoc['head'] . '%</h1>
                                </div>
                                <div class="info">
                                     Body: <h1>' . $assoc['body'] . '%</h1>
                                </div>
                                <div class="info">
                                     Leg: <h1>' . $assoc['leg'] . '%</h1>
                                </div>
                            </div>
                        </div>
                    
                    ';
                }

                ?>
            </div>
            <div class="weight-calss">
                <h2>Lightweight</h2>
                <?php

                $sql = "SELECT * FROM `fighters` WHERE `Weight_class`='Lightweight';";
                $query = mysqli_query($db, $sql);
                while ($assoc = mysqli_fetch_assoc($query)) {
                    echo '
                    
                        <div class="card">
                           
                            <div class="img-div">
                                <img
                                    src="' . $assoc['img_url'] . '">
                            </div>
                            <div class="stats">';
                    if ($assoc['nick'] != '') {
                        echo '<div class="info-nick">
                                     <h1 class="nick">"' . $assoc['nick'] . '"</h1>
                                </div>';
                    } else {
                        echo '';
                    }

                    echo '<div class="info">
                                     Name: <h1>' . $assoc['name'] . ' ' . $assoc['surname'] . '</h1>
                                </div>
                                <div class="info">
                                     W/L/D: <h1>' . $assoc['win'] . '/' . $assoc['lose'] . '/' . $assoc['draw'] . '</h1>
                                </div>
                                 <div class="info">
                                     Knockout: <h1>' . $assoc['knockout'] . '</h1>
                                </div>
                                 <div class="info">
                                     Submision: <h1>' . $assoc['submision'] . '</h1>
                                </div>
                                 <div class="info">
                                     Strinking Accuracy: <h1>' . $assoc['strinking_accuracy'] . '%</h1>
                                </div>
                                <div class="info">
                                     Takedown Accuracy: <h1>' . $assoc['takedown_accuracy'] . '%</h1>
                                </div>
                                <h3>SIG. STR. BY TARGET:</h3>
                                <div class="info">
                                     Head: <h1>' . $assoc['head'] . '%</h1>
                                </div>
                                <div class="info">
                                     Body: <h1>' . $assoc['body'] . '%</h1>
                                </div>
                                <div class="info">
                                     Leg: <h1>' . $assoc['leg'] . '%</h1>
                                </div>
                            </div>
                        </div>
                    
                    ';
                }

                ?>
            </div>
            <div class="weight-calss">
                <h2>Middleweight</h2>
                <?php

                $sql = "SELECT * FROM `fighters` WHERE `Weight_class`='Middleweight';";
                $query = mysqli_query($db, $sql);
                while ($assoc = mysqli_fetch_assoc($query)) {
                    echo '
                    
                        <div class="card">
                           
                            <div class="img-div">
                                <img
                                    src="' . $assoc['img_url'] . '">
                            </div>
                            <div class="stats">
                                <div class="info-nick">
                                     <h1 class="nick">"' . $assoc['nick'] . '"</h1>
                                </div>
                                <div class="info">
                                     Name: <h1>' . $assoc['name'] . ' ' . $assoc['surname'] . '</h1>
                                </div>
                                <div class="info">
                                     W/L/D: <h1>' . $assoc['win'] . '/' . $assoc['lose'] . '/' . $assoc['draw'] . '</h1>
                                </div>
                                 <div class="info">
                                     Knockout: <h1>' . $assoc['knockout'] . '</h1>
                                </div>
                                 <div class="info">
                                     Submision: <h1>' . $assoc['submision'] . '</h1>
                                </div>
                                 <div class="info">
                                     Strinking Accuracy: <h1>' . $assoc['strinking_accuracy'] . '%</h1>
                                </div>
                                <div class="info">
                                     Takedown Accuracy: <h1>' . $assoc['takedown_accuracy'] . '%</h1>
                                </div>
                                <h3>SIG. STR. BY TARGET:</h3>
                                <div class="info">
                                     Head: <h1>' . $assoc['head'] . '%</h1>
                                </div>
                                <div class="info">
                                     Body: <h1>' . $assoc['body'] . '%</h1>
                                </div>
                                <div class="info">
                                     Leg: <h1>' . $assoc['leg'] . '%</h1>
                                </div>
                            </div>
                        </div>
                    
                    ';
                }

                ?>
            </div>

            <div class="weight-calss">
                <h2>Light Heavyweight</h2>
                <?php

                $sql = "SELECT * FROM `fighters` WHERE `Weight_class`='Light_Heavyweight';";
                $query = mysqli_query($db, $sql);
                while ($assoc = mysqli_fetch_assoc($query)) {
                    echo '
                    
                        <div class="card">
                           
                            <div class="img-div">
                                <img
                                    src="' . $assoc['img_url'] . '">
                            </div>
                            <div class="stats">
                                <div class="info-nick">
                                     <h1 class="nick">"' . $assoc['nick'] . '"</h1>
                                </div>
                                <div class="info">
                                     Name: <h1>' . $assoc['name'] . ' ' . $assoc['surname'] . '</h1>
                                </div>
                                <div class="info">
                                     W/L/D: <h1>' . $assoc['win'] . '/' . $assoc['lose'] . '/' . $assoc['draw'] . '</h1>
                                </div>
                                 <div class="info">
                                     Knockout: <h1>' . $assoc['knockout'] . '</h1>
                                </div>
                                 <div class="info">
                                     Submision: <h1>' . $assoc['submision'] . '</h1>
                                </div>
                                 <div class="info">
                                     Strinking Accuracy: <h1>' . $assoc['strinking_accuracy'] . '%</h1>
                                </div>
                                <div class="info">
                                     Takedown Accuracy: <h1>' . $assoc['takedown_accuracy'] . '%</h1>
                                </div>
                                <h3>SIG. STR. BY TARGET:</h3>
                                <div class="info">
                                     Head: <h1>' . $assoc['head'] . '%</h1>
                                </div>
                                <div class="info">
                                     Body: <h1>' . $assoc['body'] . '%</h1>
                                </div>
                                <div class="info">
                                     Leg: <h1>' . $assoc['leg'] . '%</h1>
                                </div>
                            </div>
                        </div>
                    
                    ';
                }

                ?>
            </div>
            <div class="weight-calss">
                <h2>Heavyweight</h2>
                <?php

                $sql = "SELECT * FROM `fighters` WHERE `Weight_class`='Heavyweight';";
                $query = mysqli_query($db, $sql);
                while ($assoc = mysqli_fetch_assoc($query)) {
                    echo '
                    
                        <div class="card">
                           
                            <div class="img-div">
                                <img
                                    src="' . $assoc['img_url'] . '">
                            </div>
                            <div class="stats">
                                <div class="info-nick">
                                     <h1 class="nick">"' . $assoc['nick'] . '"</h1>
                                </div>
                                <div class="info">
                                     Name: <h1>' . $assoc['name'] . ' ' . $assoc['surname'] . '</h1>
                                </div>
                                <div class="info">
                                     W/L/D: <h1>' . $assoc['win'] . '/' . $assoc['lose'] . '/' . $assoc['draw'] . '</h1>
                                </div>
                                 <div class="info">
                                     Knockout: <h1>' . $assoc['knockout'] . '</h1>
                                </div>
                                 <div class="info">
                                     Submision: <h1>' . $assoc['submision'] . '</h1>
                                </div>
                                 <div class="info">
                                     Strinking Accuracy: <h1>' . $assoc['strinking_accuracy'] . '%</h1>
                                </div>
                                <div class="info">
                                     Takedown Accuracy: <h1>' . $assoc['takedown_accuracy'] . '%</h1>
                                </div>
                                <h3>SIG. STR. BY TARGET:</h3>
                                <div class="info">
                                     Head: <h1>' . $assoc['head'] . '%</h1>
                                </div>
                                <div class="info">
                                     Body: <h1>' . $assoc['body'] . '%</h1>
                                </div>
                                <div class="info">
                                     Leg: <h1>' . $assoc['leg'] . '%</h1>
                                </div>
                            </div>
                        </div>
                    
                    ';
                }

                ?>
            </div>
        </div>
    </section>

</body>

</html>