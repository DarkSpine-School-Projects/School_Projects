<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baza danych o pracownikach firm</title>
    <link rel="stylesheet" href="./firma.css">
</head>
<body>
    <section>
        <main>
           <div class="baner">
                <h1>Baza danych o pracownikach</h1>
            </div> 

           <div class="panel_lewy">
                <div class="panel_lewy_baner">
                    <h2>informatycy ponizej roku 1975</h2>
                </div>
                <table>
                   
                    <tr>
                        <th>
                            imie
                        </th>
                        <th>
                            nazwisko    
                        </th>
                        <th>
                            pensja
                        </th>
                    </tr>
                    <?php 
                        $conn = mysqli_connect('localhost','root','','firma');
                     
                        $result = mysqli_query($conn, "SELECT `imie`, `nazwisko`, `pensia` FROM `informatycy_ponizej_roku_1975` ORDER BY pensia DESC");
                       
                        while( $dispaly_imie = mysqli_fetch_assoc( $result )){
                            echo '
                            <tr>
                            <td>'.$dispaly_imie["imie"].'</td>
                            <td>'.$dispaly_imie["nazwisko"].'</td>
                            <td>'.$dispaly_imie["pensia"].'</td>
                            </tr>
                            ';
                        }



                    ?>
                    
                </table>
           </div>

           <div class="panel_prawy">
                    <h2>sekretarki firmy omega</h2>

           </div>

           <div class="stopka">Autor: 000000000000</div>
        </main>
    </section>
</body>
</html>