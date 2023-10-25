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
        <div id="tytul">
            <h1> Czas na grzyby!</h1>
        </div>
        <div id="miniatura"><img src="./image/podgrzybek.jpg" alt="Grzybobranie"></div>
    </header>
    <main>
        <div id="lewy">
            <h1>Grzyby jadalne</h1>

            <?php //fetch data
            $sql = "SELECT * FROM `grzyby` where jadalny = 1;";
            $sql_query = mysqli_query($dbcon, $sql);


            while ($fetch = mysqli_fetch_assoc($sql_query)) {
                echo '<div>' . $fetch['id'] . '. ' . $fetch['nazwa'] . ' (' . $fetch['potoczna'] . ')</div>';
            }

            ?>

            <h3>Polecam do zup</h3>
            <ul>
                <?php //fetch data
                $sql = "SELECT * FROM `grzyby` where jadalny = 1 and potrawy_id=4;";
                $sql_query = mysqli_query($dbcon, $sql);

                while ($fetch = mysqli_fetch_assoc($sql_query)) {

                    $sql1 = "SELECT * FROM `rodzina` where id=" . $fetch["rodzina_id"] . "  ;";
                    $sql_query1 = mysqli_query($dbcon, $sql1);
                    $fetch1 = mysqli_fetch_assoc($sql_query1);
                    if (isset($fetch1)) {
                        echo '<li>' . $fetch['potoczna'] . ', rodzina:' . $fetch1['nazwa'] . '</li>';
                    }
                }

                ?>
            </ul>

        </div>
        <div id="prawy">
            <?php //fetch data
            $sql = "SELECT * FROM `grzyby`;";
            $sql_query = mysqli_query($dbcon, $sql);

            while ($fetch = mysqli_fetch_assoc($sql_query)) {
                echo '
                        <div>
                            <img src="./image/' . $fetch["nazwa_pliku"] . '" alt="' . $fetch["nazwa"] . '" title="' . $fetch["nazwa"] . '"/>
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