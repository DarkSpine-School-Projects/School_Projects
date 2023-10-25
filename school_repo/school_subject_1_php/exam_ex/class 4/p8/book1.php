<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./book1.css">
</head>

<body>
    <div class="container">
        <section class="naglowek">
            <h1>Biblioteka internetowa</h1>
        </section>
        <section id="gorna">
            <form action="" method="POST">
                wybierz autora:
                <select name="biblioteka_autorzy" id="">

                    <?php 
                    
                    $server_conn = mysqli_connect('localhost','root','','biblioteka');

                    $sql = "SELECT DISTINCT autor FROM `autorzy`";

                    $biblioteka_autorzy =  $_POST['biblioteka_autorzy']; 

                    $sql_select = mysqli_query($server_conn, $sql);

                    while($DB_result = mysqli_fetch_assoc($sql_select)){
                    echo '<option value="'.$DB_result['autor'].'">'.$DB_result['autor'].'</option>';
                    }
                    
                    ?>
                    </option>

                </select>
                <button type="sumbit">Zatwierdź</button>
            </form>
        </section>
        <section id="dolna">
            <h3>Dostępne ksiazki wybranego autora:
                <?php 
                    $biblioteka_autorzy =  $_POST['biblioteka_autorzy']; 
                    echo $biblioteka_autorzy;
                ?>
            </h3>

            <?php 
               
                $sql = "SELECT * FROM `autorzy` WHERE `autor` = '$biblioteka_autorzy';";

                $biblioteka_autorzy =  $_POST['biblioteka_autorzy']; 

                $sql_select = mysqli_query($server_conn, $sql);

                while($DB_result = mysqli_fetch_assoc($sql_select)){
                    echo '<div id="dispaly_ksiazki"><h3>'.$DB_result["ksiazka"].'</h3>'.' - cena za wypozyczenie: '.$DB_result["cena"].' zł</div>' ;
                }
    
            ?>
        </section>
    </div>



</body>

</html>