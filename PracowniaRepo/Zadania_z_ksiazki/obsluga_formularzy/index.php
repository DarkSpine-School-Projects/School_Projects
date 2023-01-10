<?php 
echo '   <style>
body{
    background-image: url(https://avatars.githubusercontent.com/u/119659931?v=4);
    background-size:cover;
    
}
</style>';

$input1 = $_POST["input1"];
$input2 = $_POST["input2"];

$wynik = $input1*29 + $input2*50;
echo "ŁACZNY KOSZT BILETOW TO:<B> ". $wynik." ZŁ</B>" ;

echo '
<a href="http://localhost/Projects_Done_On_Lessons/PracowniaRepo/Zadania_z_ksiazki/obsluga_formularzy/index.html" > Nowe zamowienie </a>';
    
?>