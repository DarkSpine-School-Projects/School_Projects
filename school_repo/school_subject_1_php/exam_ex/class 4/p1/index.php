<?php 

// TASK 1
echo '<h2>TASK 1</h2>';
echo'
        <form action="">
        <input type="number" name="x" required>
        <input type="submit" value="Submit">
        </form>
    ';
    $x=$_GET["x"];
    if($x%2==0){
        echo "Parzysta";
    }else{
        echo "Nie parzysta";
    };

echo '<hr>';
 
// TASK 2
echo '<h2>TASK 2</h2>';
    for($i=0; $i<=15; $i++){
        $y2+=5;
        $x2+=$y2;
        echo $x2.",";
    };  
    
echo '<hr>';

// TASK 3
echo '<h2>TASK 3</h2>';
$x3=0;
    do{
        $x3++;
        if($x3*$x3>1000){
            break;
        }
        $wynik3=$x3*$x3; echo $wynik3 .", ";
    }
    while($wynik3<1000);

echo '<hr>';
    

// TASK 4
echo '<h2>TASK 4</h2>';

$x4=1 ;
$x4_1=1;
    do{
        $x4*=$x4_1;
        $x4_1++;
       
        echo $x4. ", ";
       
    }while( $x4_1<=7);

echo '<hr>';


// TASK 5
echo '<h2>TASK 5</h2>';
$x=2;
$y=15;
$z=4;

if($x>$y && $x>$z){
    echo "Najwieszka liczba to $x"; 
}
if($y>$x && $y>$z){
    echo "Najwieszka liczba to $y"; 
}
if($z>$y && $z>$x){
    echo "Najwieszka liczba to $z"; 
}
echo '<hr>';


// TASK 6
echo '<h2>TASK 6</h2>';
$a6=3;
$b6=4;
$c6=5;

if($a6!=0){
    $delta1 = ($b6**2)-4*$a6*$c6;
    echo "delata to ".$delta1." ";
}elseif($a6=0){
    echo "nie może być";
};

if($delta1<0){
  echo "<br> Brak pierwiastkow";
};
if($a6<$b+$c6 && $b6<$a6+$c6 && $c6<$b6+$a6){
    echo "<br> trojkat da sie zbudowac";
}else{
     echo "<br> nie da sie zbudowac trojkata";
}
echo '<hr>';

?>


<!-- Page layout -->
<style>
body {
    font-size: large;
    font-weight: bold;
    letter-spacing: 2px;
}
</style>
