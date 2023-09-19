<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekretariat</title>
    <link rel="stylesheet" href="styl.css">
    <?php $conn = mysqli_connect('localhost', 'root', '', 'firma'); ?>
    <?php require './zapytania.php' ?>
</head>

<body>
    <div id="lewy">
        <h1>Akta Pracownicze</h1>
        <?php
        //script 1

        echo '<h3>Dane</h3>';

        $query = mysqli_query($conn, $zapytania[0]);
        while ($fetch = mysqli_fetch_array($query)) {
            echo '<p>' . $fetch[0] . ' ' . $fetch[1] . '</p>';
        };

        echo '<hr>';
        echo '<h3>adres</h3>';

        $query = mysqli_query($conn, $zapytania[0]);
        while ($fetch = mysqli_fetch_array($query)) {
            echo '<p>' . $fetch[2] . '</p>';
            echo '<p>' . $fetch[3] . '</p>';
        };
        echo '<hr>';
        $query = mysqli_query($conn, $zapytania[0]);
        echo '<p>Rodo:';
        while ($fetch = mysqli_fetch_array($query)) {
            if ($fetch[4] = 1) {
                echo ' Podpisano';
            } else {
                echo ' Nie pdopisano';
            }
        };
        echo '</p>';
        $query = mysqli_query($conn, $zapytania[0]);
        echo '<p>Badania:';
        while ($fetch = mysqli_fetch_array($query)) {
            if ($fetch[5] = 1) {
                echo ' Podpisano';
            } else {
                echo ' Nie pdopisano';
            }
        };
        echo '</p>';
        ?>
        <hr>
        <h3>Dokmenty pracownika</h3>
        <a href="./cv.txt" download>pobierz</a>
        <h1>Liczba zatrudionych pracownikow</h1>
        <?php
        //script 2

        $query = mysqli_query($conn, $zapytania[1]);
        $fetch = mysqli_fetch_array($query);
        echo '<p>' . $fetch[0] . '</p>';
        ?>
    </div>
    <div id="prawy">

        <?php
        //script 3

        $query = mysqli_query($conn, $zapytania[2]);
        $fetch = mysqli_fetch_array($query);
        echo '<img src="' . $fetch[0] . '.jpg" alt="pracownik"/>';

        $query = mysqli_query($conn, $zapytania[2]);
        while ($fetch = mysqli_fetch_array($query)) {
            echo '<h2>' . $fetch[1] . ' ' . $fetch[2] . '</h2>';
        };


        $query = mysqli_query($conn, $zapytania[3]);
        while ($fetch = mysqli_fetch_array($query)) {
            echo '<h4>' . $fetch[1] . '</h4>';
            echo '<h5>' . $fetch[2] . '</h5>';
        };
        ?>

    </div>
    <div id="stopka">
        Autorem aplikacji jest: XYZ
        <ul>
            <li>skontaktuj sie</li>
            <li>poznaj nasza firme</li>
        </ul>
    </div>
</body>

</html>