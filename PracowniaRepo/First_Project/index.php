<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyswietla LICZBE Z KTORA JEST 1</title>
</head>
<body>
    <?php
    $tab1[] = 1;
    $tab1[] = 0;
    $tab1[] = 3;
    $tab1[] = 2;
    
    $tab2[] = "Pierwszy";
    $tab2[] = "Drugi";
    $tab2[] = "Trzeci";
    $tab2[] = "Czwarty";
    
    echo $tab2[$tab1[1]];
    ?>
</body>
</html>