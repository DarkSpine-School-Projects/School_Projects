<?php 
// TASK 1
echo '<h2>TASK 1</h2>';
$x=1;
for($i=1; $i<=5; $i++){
    echo $x.", -". $x.", ";
    $x*=2;  
}
echo "<hr>";

// TASK 2
echo '<h2>TASK 2</h2>';
$x2=0;
while($x2<=4){
    $x2++;
    echo $x2." ";
};
$x21=6;
while($x21>=2){
    $x21--;
    echo $x21." ";
};

// TASK 3
echo '<h2>TASK 3</h2>';
$x3=0;
    do{
        $x3++;
        if($x3*$x3>2000){
            break;
        }
        $wynik3=$x3*$x3; echo $wynik3 .", ";
    }
    while($wynik3<2000);

echo '<hr>';

// TASK 4
echo '<h2>TASK 4</h2>';
$x4=2;
$y4=10;
for($i=1; $i<=$y4; $i++){
  
   $wynik4=$x4**$y4;
  
   
}
echo$wynik4;

//TASK 5
echo '<h2>TASK 5</h2>';
$x5=10001554;
$y5=31;


if($x5%$y5==0){
    echo"jest";
}else{
    echo "nie jest";
}
echo "<hr>";
  

//TASK 6
echo '<h2>TASK 6</h2>';
$dzien=2;
$miesiac=1;
$rok=1901;

if($dzien>=1 && $dzien<=31 && $miesiac>=1 && $miesiac<=12 && $rok>=1900 && $rok<=2050 ){
    echo"$dzien.$miesiac.$rok";

}else{
    echo "zla data";
}

?>