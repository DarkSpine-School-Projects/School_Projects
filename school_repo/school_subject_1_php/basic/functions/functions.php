<?php
$x=1; //useless
$y=2; //useless
$z=4; //useless

function wyrazenie($x,$y,$z){
    
    $wynik = (2*$x-0.5*$y+$z/2);
    echo "wartos dla wyrazenia $x,$y,$z wynosi " .$wynik;
    return $wynik;

}

$a=wyrazenie(1,2,4);
echo "<br><br>";
echo "wyswietl ".$a;
echo "<hr><br><br>";


?>
<?php


function pole(){
    $x=7;
    $pole=$x*$x;
    echo "pole kwadratu o boku $x wynosi wynosi ".$pole;
}
pole();
echo "<br><br>";

?>

<?php


function pole1(){
    $x=7;
    $pole=$x*$x;
    echo "pole kwadratu o boku $x wynosi wynosi ".$pole;
}
pole1();
echo "<hr><br><br>";

?>

<?php


function zwieksz_liczbe($x){
    $x += 6;
    return $x;
}
$x=5;
echo "przed wywolaniem funkcji =".$x ." ";
$y = zwieksz_liczbe($x);
echo "<br><br>";
echo "po wywolaniu funkcji =".$y ." ";
echo "<hr><br><br>";
?>


<?php

function pole_trojkata($x=6,$y=4){
    return ($x*$y/2);
}
$pole1 = pole_trojkata();
echo "funkcja z argumentami domyslnymi daje wartosc : ".$pole1;
echo "<br><br>";
$pole2 = pole_trojkata(7,8);
echo "funkcja bez argumentow domyslnych daje wartosc : ".$pole2;
echo "<hr><br><br>";

?>


