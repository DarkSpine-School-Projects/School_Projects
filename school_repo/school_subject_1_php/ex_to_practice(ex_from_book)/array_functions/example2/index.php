<?php 
echo "<h3>Przyklad 49.10</h3>";
$tab = array("Alicja","Jolanta","Katarzyna","Małgorzata","Agnieszka");
$d1 = count($tab); // lub sizeof($tab)
echo "W tablicy znajduje sie $d1 elementow i sa nimi <br>";
for($i=0;$i<$d1;$i++){

    echo "tab[$i]=$tab[$i].<br>";

};
echo "<br><hr>";
?>

<?php 
echo "<h3>Przyklad 49.11</h3>";
$tab = array("Alicja","Paulina","Katarzyna","Małgorzata","Agnieszka","Jolanta","Celina");
$d1 = count($tab); // lub sizeof($tab)

echo "<br><b>Tablica przed posortowaniem:</b><br>";
foreach($tab as $x){
    
    echo "$x ";

}
sort($tab);
echo"<br><b>Tablica po posortowaniu</b><br>";
foreach($tab as $x){

    echo "$x ";

}
echo "<br><hr>";
?>
<?php 
echo "<h3>Przyklad 49.12</h3>";
$tab = array("Alicja"=>"Kowalska","Paulina"=>"Nowak","Katarzyna"=>"Malinowska","Małgorzata"=>"Nowak","Agnieszka"=>"Czekalska","Jolanta"=>"Kowalska","Celina"=>"Brzeczyszczykiewicz");
echo "<br><b>Tablica przed posortowaniem:</b><br>";
foreach($tab as $klucz=>$x){
    echo "$x $klucz <br> ";
}

asort($tab);

echo "<br><b>Tablica po sortowaniu wedlug zawartosci:</b><br>";
foreach($tab as $klucz=>$x){
    echo "$x $klucz <br> ";
}



?>