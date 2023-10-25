<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyswietla Podane Wartosci Array</title>
    <style>
        ul{
            margin-top:-2%;
            margin-left:-4%;
            list-style: none;
        }
    </style>
</head>
<body>
    <?php
    echo '<h1>Świzosc owocow w sklepie</h1><br>';
        $owoce=array
        (
            array('<h2>BANANY</h2>',4,2),
            array('<h2>mandarynki</h2>',5,1),
            array('<h2>cytryny</h2>',4,3),
            array('<h2>kiwi</h2>',6,2),

        );
        echo $owoce [0] [0].' <ul><li>jadalne:'.$owoce [0] [1].'</li><li>zepsute:'.$owoce[0][2].'</li></ul>';
        
        echo $owoce [1] [0].' jadalne:'.$owoce [1] [1].' , zepsute:'.$owoce[1][2].'.<br> ';

        echo $owoce [2] [0].' jadalne:'.$owoce [2] [1].' , zepsute:'.$owoce[2][2].'.<br> ';

        echo $owoce [3] [0].' jadalne:'.$owoce [3] [1].' , zepsute:'.$owoce[3][2].'.<br> ';

    ?>  
</body>
</html>