<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>typy zmiennych i rodzaje operatorow</title>
    
</head>
<body>
    <?php
    $x=12;
    $y=8;
    $suma=$x+$y;
    $roznica=$x-$y;
    $iloczyn=$x*$y;
    $iloraz=$x/$y;
    $reszta=$x%$y;
    echo "suma $x i $y wynosi $suma <br>";
    echo "roznica $x i $y wynosi $roznica <br>";
    echo "iloczyn $x i $y wynosi $iloczyn <br>";
    echo "iloraz $x i $y wynosi $iloraz <br>";
    echo "reszta z dzielenia $x przez $y wynosi $reszta <br>";
    ?>

    <hr>

    <?php
    $x=125;
    $y=41;
    $suma_bitowa=$x | $y;
    $roznica_sym=$x^$y;
    $iloczyn_bitowy=$x & $y;
    $negacja=~$x;
    echo "iloczyn_bitowy $x i $y wynosi $iloczyn_bitowy <br>";
    echo "suma_bitowa $x i $y wynosi $suma_bitowa <br>";
    echo "roznica_sym $x i $y wynosi $roznica_sym <br>";
    echo "negacja $x wynosi $negacja<br>";
    ?>
    

</body>
</html>