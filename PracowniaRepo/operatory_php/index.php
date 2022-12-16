<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./index.php">
    <label for="fname">1 liczba</label><br>
    <input type="text" id="fname" name="sd"><br>
    <label for="lname">2 liczba</label><br>
    <input type="text" id="lname" name="podaj" ><br><br>
    <input type="submit" value="Submit">
    </form> 
    <?php
   
    $x = $_GET['sd'];
    if($x%35==0){
        echo "liczba $x jest podzielne przez 35";
    }
    elseif($x%5==0){
        echo "liczba $x jest podzielna przez 5 ale nie jest podzielna przez 7";
    }
    elseif($x%7==0){
        echo "liczba $x jest podzielna przez 7 ale nie jest podzielna przez 5";
    }
    else{
        echo "liczba $x jest nie jest podzielna przez 5 i 7";
    }
    $y= $_GET['podaj'];
    ?>
</body>
</html>