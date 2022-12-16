<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>405-408</title>
</head>
<body>
    <h3>Funkcje Formatowania Ciągów Znaków</h3>
    W języku PHP istenieje wiele funkcji dzialajach na ciagach znakow. 
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;Funkcja <b>n12br()</b> dla wybranego bloku tekstu przed kazdym znakiem konca linii 
    <br>
    automatycznie wstawi znak <b><span><</span><span>BR</span><span>></span></b> i zwroci przetworzony tekst. 
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;Funkcja <b>wordwrap()</b> sluzy do formatowania tekstu w postaci kolumny o podanej szerokosci.
    <br>
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;Funkcje sluzace do zmiany wielkosci liter:
    <br>
    -<b>strtoupper ()</b> - zamiana wszystkich lier na wielkie litery w podanym tekscie.
    <br>
    <br>
    <h1> EXAMPLE 49.16|PAGE 405 PHP </h1>
    <!-- EXAMPLE 49.16|PAGE 405 HTML -->
    <h2>INPUT:</h2>
    <code>
        <pre>
            &lt;?php

            $tekst="Alicja w krainie czarow i Alicja po drugiej stronie lustra.";
            echo "&lt;u&gt; Oryginalny tekst: &lt;/u&gt;"
            
            ?&gt;
        </pre>
    </code>

    <!-- EXAMPLE 49.16|PAGE 405 PHP -->
    <h2>OUTPUT:</h2>
  
    <?php 

    $tekst="Alicja w krainie czarow i Alicja po drugiej stronie lustra.";
    echo "<u>Oryginalny tekst:</u><br>".$tekst."<br>";
    echo "<u>Tekst po zastosowaniu strtoupper: </u><br>".
    strtoupper($tekst)."<br>";

    echo "<u>Tekst po zastosowaniu strtolower: </u><br>".
    strtolower($tekst)."<br>";

    echo "<u>Tekst po zastosowaniu ucfirst: </u><br>".
    ucfirst($tekst)."<br>";

    echo "<u>Tekst po zastosowaniu ucwords: </u><br>".
    ucwords($tekst)."<br>";

    ?>
      <br>
      <h1> EXAMPLE 49.16|PAGE 406 PHP </h1>
      <!-- EXAMPLE 49.16|PAGE 406 HTML -->
    <h2>INPUT:</h2>
    <code>
        <pre>
             &lt;?php

            $tekst="Alicja w krainie czarow i Alicja po drugiej stronie lustra.";
            echo "Dlugosc tekstu wynosi: ".strlen($tekst);


            ?&gt;
        </pre>
    </code>

    <!-- EXAMPLE 49.16|PAGE 406 PHP -->
    <h2>OUTPUT:</h2>
    <?php 

    $tekst="Alicja w krainie czarow i Alicja po drugiej stronie lustra.";
    echo "Dlugosc tekstu wynosi: ".strlen($tekst);


    ?>
     <?php 
    ?>
</body>
</html>