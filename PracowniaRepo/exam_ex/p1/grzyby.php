<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grzybobranie</title>
    <link rel="stylesheet" href="styl.css">
    <?php // db connect
     $dbcon = mysqli_connect('localhost', 'root', '', 'grzybobranie');
    ?>
</head>
<body>
    <header>
        <div id="tytul">Czas na grzyby!</div>
        <div id="miniatura"><img src="./image/borowik-miniatura.jpg" alt="Grzybobranie"></div>
    </header>
    <main>
         <div id="lewy">
            <h3>Grzyby jadalne</h3>
            <ol>
                <?php //fetch data
                    $sql = "SELECT * FROM `grzyby`;";
                    $sql_query = mysqli_query($dbcon ,$sql);
                    $fetch = mysqli_fetch_assoc($sql_query);
                
                    while ( $fetch = mysqli_fetch_assoc($sql_query)) {
                    echo '<li>'. $fetch['nazwa'].' ('.$fetch['potoczna'].')</li>';
                    }

                ?>
            </ol>
         <h3>Polecam do zup</h3>
         <ul>
            <?php //fetch data
                        $sql = "SELECT * FROM `grzyby` where jadalny = 1;";
                        $sql_query = mysqli_query($dbcon ,$sql);
                        $fetch = mysqli_fetch_assoc($sql_query);
                    
                        while ( $fetch = mysqli_fetch_assoc($sql_query)) {
                            $sql1 = "SELECT * FROM `rodzina` where id=".$fetch["rodzina_id"]." ;";
                            $sql_query1 = mysqli_query($dbcon ,$sql1);
                            $fetch1 = mysqli_fetch_assoc($sql_query1);
                            if(isset($fetch1)){
                            echo '<li>'.$fetch['potoczna'].', rodzina:'.$fetch1['nazwa'].'</li>';
                            }
                        }

            ?>
         </ul>
         
        </div>
         <div id="prawy">
         <?php //fetch data
                    $sql = "SELECT * FROM `grzyby`;";
                    $sql_query = mysqli_query($dbcon ,$sql);
                
                    while ( $fetch = mysqli_fetch_assoc($sql_query)) {
                        echo '
                        <div>
                            <img src="./image/'.$fetch["nazwa_pliku"].'" alt="'.$fetch["nazwa"].'" title="'.$fetch["nazwa"].'" 
                        </div>';
                    }

                ?> 
         </div>
         
         
    </main>
    <footer>
        Autor: XYZ
    </footer>
</body>
</html>