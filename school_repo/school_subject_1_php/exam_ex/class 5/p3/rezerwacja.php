<!DOCTYPE html>
<html lang="en">

<head>
    <?php $db = mysqli_connect('localhost', 'root', '', 'baza'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <?php
    if (isset($_POST["data"]) && isset($_POST["person"]) && isset($_POST["number"])) {
        $data = $_POST["data"];
        $person = $_POST["person"];
        $number = $_POST["number"];
        $qu = mysqli_query($db, "INSERT INTO `rezerwacje`(`nr_stolika`, `data_rez`, `liczba_osob`, `telefon`) VALUES (null,'$data','$person','$number');");
        if ($qu) {
            echo "<H1>Dodano rezerwacje do bazy</H1>";
        }
        mysqli_close($db);
    }
    ?>
    <script>
        setTimeout(() => {
            window.location.replace('http://localhost/Sch_P/PracowniaRepo/exam_ex/p3/restauracja.html')
        }, 2500)
    </script>
</body>

</html>