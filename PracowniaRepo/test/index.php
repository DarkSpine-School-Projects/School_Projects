 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>|</title>
 </head>
 <body>
    <?php 
    echo"<h1>ZAD 1</h1>"; 
    $x = 5;
    $y = 6;
    $wy = (2 * $x - 0.5 * $y)/4;
    echo'(2 * $x - 0.5 * $y)/4 ='; echo" $wy";
    
    
    ?>

    <?php 
    echo"<h1>ZAD 2</h1>"; 
    $x = 57;
    $y = 208;
    $sum = $x | $y;
    $il=  $x & $y;
    $r_b=  $x ^ $y;
    echo"SUMA X i Y = $sum <br>
    iloczyn bitowy X i Y = $il<br>
    roznica bitowa X i Y =$r_b<br>";
      
    ?>
 </body>
 </html>