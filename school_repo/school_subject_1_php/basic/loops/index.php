
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętle</title>
</head>
<body>

<?php
for($x = 1; $x <= 50; $x+=1) {
  if($x%2==0){
    echo "$x  \t";
  }
}
echo "<hr><br>";

$sum = 0;
for($x=1; $x<=20; $x++){
    $tab[$x] = rand(1,20);
    echo $tab[$x]."\t";
    $sum += $tab[$x];
}
echo "<br> suma wartosci tablicy wynosi $sum";
echo "<hr><br>";

echo'<table style="width:300px; height:300px;">';
for($x = 1; $x <= 10; $x++){
  echo "<tr>";
  for($y=1; $y<=10; $y++){
    echo "<td>". ($x*$y). "</td>";
  }
  echo"</tr>";

}
echo "</table><hr><br>";

?>
<?php
$x=1;
while($x<=50){
  if($x%2==0){
    echo $x ."\t";
  } 
  $x++;
}

echo "</table><hr><br>";
echo 
'<form>
<input name="x"type="number" value="1" required ></input>
<input name="y"type="number"value="5" required></input>
<button type="sumbit">sumbit</button>
</form>';
$x = $_GET["x"];
$y = $_GET["y"];
if($_GET["x"]===""){
  echo "Show once.";
}

while($x!=$y){
  if($x<$y){
    $help = $x;
    $x=$y;
    $y=$help;
  }
  

  if($_GET["x"]!=""){
    $x=$x-$y;
  }
 
}

echo"najwiekszy wspolny dzielnik wynosi $x <br><hr>";

?>
<?php 
echo "losowe liczby:";
for($x = 1 ; $x <= 10; $x++){
  $num[$x] = rand(0,20);echo" ";
  echo $num[$x];
  $sum += $num[$x] ;
  
 }
 echo"<br>";
 echo "wynik dodawania liczb: $sum";
 $sum2 = $sum/10;
 echo"<br>";
  echo"srednia arytmetyczna: $sum2<br><hr>";
?>
<?php
$liczba = 132;
echo "<br>";
while($liczba>0){
echo $liczba%10 ;
$liczba = floor($liczba/10);
}

echo "<hr> <br>";

echo "<h3>ZAD4</h3>";

$x=1;

while($x++ < 100){
  if($x%2!=0){
     if($x%6==3 && 6 && 9){
      echo $x. " ";
     }
     
      
  }
}
echo "<hr>";

?>
<?php
  echo "<h3>P1 FOR</h3>";
  for( $x=1; $x<=20; $x++){
    echo $x." ";
  }
  echo "<br> <hr>";
?>
<?php
 echo "<h3>P2 FOR</h3>";
 
  for( $x=100; $x>=50; $x--){
    echo $x." ";
  }
  echo "<br> <hr>";
?>

<?php
  echo "<h3>P3 FOR</h3>";
  for($x=0; $x<=100; $x+=5){
    echo $x." ";
  }
  echo "<br> <hr>";
?>

<?php
echo "<h3>P4 FOR</h3>";
  echo 
  '<form>
  <input name="y2"type="number" required></input>
  <button type="sumbit">sumbit</button>
  </form>';

  $y2= $_GET["y2"];
  for($x=0; $x<=$y2; $x++){
    echo $x." ";
  }
  echo "<br> <hr>";
?>
<?php
echo "<h3>P5 FOR</h3>";
  echo 
  '<form>
  <input name="x5"type="number" required></input>
  <input name="y5"type="number" required></input>
  <button type="sumbit">sumbit</button>
  </form>';
  
  $x5= $_GET["x5"];
  $y5= $_GET["y5"];
  if($x5<=$y5){

  for($x5= $_GET["x5"];$x5<=$y5;$x5++){
    echo $x5." ";
  }

  }elseif($x5>=$y5){
    for($x5= $_GET["x5"];$x5>=$y5;$x5--){
      echo $x5." ";
    }
  }
  echo "<br> <hr>";
?>
<?php
echo "<h3>P1 WHILE</h3>";
 
  
  $x1 = 0;
  while($x1++<20){
    echo $x1 . " ";
  }
  
  echo "<br> <hr>";
?>

<?php
echo '<h3>ZAD1 "ZDANIE Z INF"</h3>';
 

  echo 
  '<form>
  PODAJ LICZBĘ WIEKSZA OD 0 
  <input name="xx2"type="number" required></input>
  <button type="sumbit">sumbit</button>
  </form>';

  $xx2= $_GET["xx2"];
  if($xx2>0){
    echo "TWOJA LICZBA TO ". $xx2;
    echo "<BR> LICZBA JEST WIEKSZA OD 0 ";
  } 
  elseif($xx2<=0){
    echo "NIE PODAWAJ LICZBY MNIEJSZEJ 0";
    
  }
 
?>
<?php
echo '<h3>ZAD2   "ZDANIE Z INF"</h3>';
 

  echo 
  '<form>

  <input name="xx3"type="number" required></input>
  <input name="yy3"type="number" required></input>
  <button type="sumbit">sumbit</button>
  </form>';

  $xx3= $_GET["xx3"];
  $yy3= $_GET["yy3"];
  if($xx3<$yy3){
    while($xx3++<=$yy3){
      if($xx3%2!=0){
        echo "$xx3 ";
      }
    }
  }elseif($xx3>$yy3){
    while($xx3-->=$yy3){
      if($xx3%2!=0){
        echo "$xx3 ";
      }
    }
  }
 
?>
<?php
echo '<h3>ZAD3   "ZDANIE Z INF"</h3>';

  echo 
  '<form>
  
  <input name="xx3"type="number" required></input>
  <input name="yy3"type="number" required></input>
  <input name="p"type="number" required></input>
  <button type="sumbit">sumbit</button>
  </form>';
 
  $xx3= $_GET["xx3"];
  $yy3= $_GET["yy3"];
  $p =  $_GET["p"];
  if($xx3<$yy3){
    while($xx3++<=$yy3){
      if($xx3/$p){
        echo "$xx3 ";
      }
    }
  }elseif($xx3>$yy3){
    while($xx3-->=$yy3){
      if($xx3/$p){
        echo "$xx3 ";
      }
    }
  }
?>
<?php
echo '<h3>do while</h3>';
echo 
'<form>

<input name="x" type="number" required></input>
<input name="y" type="number" required></input>

<button type="sumbit">sumbit</button>
</form>';
$x= $_GET["x"];
$y= $_GET["y"] ;
  do{
    if($x<$y){
    echo $x++." ";
    }
  }while($x<$y);
  do{
    if($x>=$y)
    echo $x--." ";

  }while($x>$y -1);
?>

<?php
echo '<h3>Napisz program wyświetlający ciąg liczb całkowitych o wartościach 1,-1,2,-2,4,-4,8,-8… (wyświetl 10 pierwszych elementów)</h3>';
// $i=1;
// $liczba;
// do{
//   $liczba*=-1;
//   if($i%2==0){
//     $liczba*=2;
//     $i++;
//   }
// }while($i<=10);
?>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
?>
</body>
</html>