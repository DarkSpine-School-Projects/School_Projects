<!-- tabela z figurami -->
<?php

// wzor trojkata
function trojkat($a,$h){
    echo "Pole trojkata o podstawie $a i wysokosci $h wynosi: ".(($a*$h)/2);
}

// wzor prostokata
function prostokat($a,$b){
    echo "Pole prostokata o bokach $a $b wynosi: ".(($a*$b)/2);
}

// wzor trapeza
function trapez($a,$b,$h){
    $p=(($a+$b)*$h)/2;
    echo "pole trapezu o podstawach $a oraz $b i wysokosci $h wynosi: ".$p;
}

// wzor kola
function kolo($r){
    $p=3.14*$r*$r;
    echo "Pole kola o promieniu $r wynosi: ".$p;
}

?>