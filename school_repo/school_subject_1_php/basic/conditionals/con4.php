<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
Wprowadz liczbe w systemie dwojkowym:<br>
<input type="text" name ="num1"><br>
<input type="submit" name="submit"><br>
</form>
<?php
      if(isset($_POST['submit'])){
        $oct=$_POST['num1'];

        echo "wartosc dziesietna dodatnia <br>";
        echo base_convert($oct,2,10);
        echo "<br> wartosc dwojkowa ujemna <br>";
        echo "-";
        echo base_convert($oct,2,10);

        ;}   
?>

<form method="post">
Wprowadz liczbe w systemie osemkowym:<br>
<input type="text" name ="num2"><br>
<input type="submit" name="submit2"><br>
</form>
<?php
      if(isset($_POST['submit2'])){
        $oct=$_POST['num2'];

        echo "liczba calkowita w formacie dziesietnym dodatnia <br>";
        echo base_convert($oct,8,10);
        echo "<br>liczba calkowita w formacie dziesietnym ujemna <br>";
        echo "-";
        echo base_convert($oct,8,10);

        ;}   
?>
<form method="post">
Wprowadz liczbe w systemie dziesietnym:<br>
<input type="text" name ="num3"><br>
<input type="submit" name="submit3"><br>
</form>
<?php
      if(isset($_POST['submit3'])){
        $oct=$_POST['num3'];

        echo "liczba calkowita w formacie dziesietnym dodatnia <br>";
        echo base_convert($oct,10,10);
        echo "<br> liczba calkowita w formacie dziesietnym ujemna <br>";
        echo "-";
        echo base_convert($oct,10,10);

        ;}   
?>
<form method="post">
Wprowadz liczbe w systemie szesnastkowym:<br>
<input type="text" name ="num4"><br>
<input type="submit" name="submit4"><br>
</form>
<?php
      if(isset($_POST['submit4'])){
        $oct=$_POST['num4'];

        echo "liczba calkowita w formacie dziesietnym <br>";
        echo base_convert($oct,16,10);
        echo "<br>liczba calkowita w formacie dziesietnymujemna <br>";
        echo "-";
        echo base_convert($oct,16,10);

        ;}   
?>
    
</body>
</html>