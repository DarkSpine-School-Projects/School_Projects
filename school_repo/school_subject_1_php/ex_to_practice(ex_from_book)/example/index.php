<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>405-408</title>
    <style>
    *,
    html,
    body {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        padding: 20px;
    }

    #output,
    #input {
        color: red;
        background-color: black;
        padding: 20px;
        border: 5px solid gainsboro;

    }

    #input {
        color: green;
    }

    h1 {
        color: grey;
        padding: 10px;
        background-color: blanchedalmond;
        letter-spacing: 4px;
    }

    main {
        color: grey;
        font-size: 19px;
        background-color: black;
        padding: 30px;
        letter-spacing: 2px;
        border: 2px solid gainsboro;
    }
    </style>
</head>

<body>

    <main>
        <h3>Funkcje Formatowania Ciągów Znaków</h3>
        W języku PHP istenieje wiele funkcji dzialajach na ciagach znakow.
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;Funkcja <b>n12br()</b> dla wybranego bloku tekstu przed kazdym znakiem konca linii
        <br>
        automatycznie wstawi znak <b><span></span><span>BR</span><span>></span></b> i zwroci przetworzony tekst.
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;Funkcja <b>wordwrap()</b> sluzy do formatowania tekstu w postaci kolumny o podanej
        szerokosci.
        <br>
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;Funkcje sluzace do zmiany wielkosci liter:
        <br>
        -<b>strtoupper()</b> - zamiana wszystkich lier na wielkie litery w podanym tekscie.
        <br>
        -<b>strtolower()</b> - zamiana wszystkich lier na małe litery w podanym tekscie.
        <br>
        -<b>ucfirst()</b> - pierwsza litera w podanym tekscie zostaje zamieniona na wielka litere.
        <br>
        -<b>ucwords()</b> - wszystkie pierwsze litery wyrazow zostana zamienione na duze.
        <br>
    </main>
    <br><br>
    <!-- EXAMPLE 49.16|PAGE 405 HTML -->
    <h1> EXAMPLE 49.16|PAGE 405</h1>
    <div id="input">
        <h2>INPUT:</h2>
        <code>
            <pre>
                &lt;?php
            
                    $tekst="Alicja w krainie czarow i Alicja po drugiej stronie lustra.";
                    
                    echo "&lt;u&gt;Oryginalny tekst:&lt;/u&gt;&lt;br&gt;".$tekst."&lt;br&gt;";
                    
                    echo "&lt;u&gt;Tekst po zastosowaniu strtoupper: &lt;/u&gt;&lt;br&gt;".
                    strtoupper($tekst)."&lt;br&gt;";

                    echo "&lt;u&gt;Tekst po zastosowaniu strtolower:&lt;/u&gt;&lt;br&gt;
                    ".
                    strtolower($tekst).
                    "&lt;br&gt;";

                    echo "&lt;u&gt;Tekst po zastosowaniu ucfirst:&lt;/u&gt;&lt;br&gt;".
                    ucfirst($tekst)."&lt;br&gt;";

                    echo "&lt;u&gt; Tekst po zastosowaniu ucwords:&lt;/u&gt;&lt;br&gt;".
                    ucwords($tekst)."&lt;br&gt;";
                    
                ?&gt;
            </pre>
        </code>
    </div>
    <div id="output">
        <!-- EXAMPLE 49.16|PAGE 405 PHP -->
        <h2>OUTPUT:</h2>
        <?php 

        $tekst="Alicja w krainie czarow i Alicja po drugiej stronie lustra.";
        
        echo "<u>Oryginalny tekst:</u><br>".$tekst."<br>";
        
        echo "<u>Tekst po zastosowaniu strtoupper: </u><br>".
        strtoupper($tekst)."<br>";

        echo "<u>Tekst po zastosowaniu strtolower:</u><br>".
        strtolower($tekst)."<br>";

        echo "<u>Tekst po zastosowaniu ucfirst:</u><br>".
        ucfirst($tekst)."<br>";

        echo "<u>Tekst po zastosowaniu ucwords:</u><br>".
        ucwords($tekst)."<br>";
        
    ?>
    </div>
    <br>
    <br>
    <!-- EXAMPLE 49.16|PAGE 406 HTML -->
    <h1> EXAMPLE 49.16|PAGE 406</h1>
    <div id="input">
        <h2>INPUT:</h2>
        <code>
            <pre>
                &lt;?php

                    $tekst="Alicja w krainie czarow i Alicja po drugiej stronie lustra.";
                    echo "Dlugosc tekstu wynosi: ".strlen($tekst);

                ?&gt;
            </pre>
        </code>
    </div>
    <!-- EXAMPLE 49.17|PAGE 406 PHP -->
    <div id="output">
        <h2>OUTPUT:</h2>
        <?php 

        $tekst="Alicja w krainie czarow i Alicja po drugiej stronie lustra.";
        echo"Dlugosc tekstu wynosi: ".strlen($tekst);

    ?>
    </div>
    <br>
    <br>
    <!-- EXAMPLE 49.17|PAGE 407 HTML -->
    <h1> EXAMPLE 49.17|PAGE 407</h1>
    <div id="input">
        <h2>INPUT:</h2>
        <code>
            <pre>
                &lt;?php

                    $tekst="Alicja w krainie czarow i Alicja po drugiej stronie lustra.";
                    echo "Dlugosc tekstu wynosi: ".strlen($tekst);

                ?&gt;
            </pre>
        </code>
    </div>
    <!-- EXAMPLE 49.17|PAGE 407 PHP -->
    <div id="output">
        <h2>OUTPUT:</h2>
        <?php 

        $tekst="Anna Nowak, ul. Jana Kochanowskiego 50, 92-510 lod, tel. 654-654-654";
        echo "<u>Adresy:</u> ".strstr($tekst, "ul.")."<br>";
        echo "<u>Telefon:</u> ".substr($tekst,57)."<br>";
        echo "<b>PODZIELONY TEKST:</b><br>";
        $z=",";
        $podciag=strtok($tekst, $z);
            while(is_string($podciag)){
                if($podciag){
                    echo $podciag. "<br>";
                }
                $podciag=strtok($z);
            }

    ?>
    </div>

</body>

</html>