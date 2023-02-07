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
                     
                        $result = mysqli_query($conn, "SELECT `imie`, `nazwisko`, `pensja` FROM `informatycy_ponizej_roku_1975` ORDER BY `pensja`DESC");
                       
                        while( $dispaly_info = mysqli_fetch_assoc( $result )){
                            echo '
                            <tr>
                            <td>'.$dispaly_info["imie"].'</td>
                            <td>'.$dispaly_info["nazwisko"].'</td>
                            <td>'.$dispaly_info["pensja"].'</td>
                            </tr>
                            ';
                        }
                    ?>
                    
                </table>
           </div>

           <div class="panel_prawy">
                    <h2>sekretarki firmy omega</h2>
                    <div class="dane_sekretarek">
                        <?php 
                            $i=1;
                            $result = mysqli_query($conn, "SELECT `imie`, `nazwisko`, `pensja` FROM `sekretarki` ");
                            while( $dispaly_info_sekretarki = mysqli_fetch_assoc( $result )){
                                echo 
                                
                                $i++.'.'.$dispaly_info_sekretarki["imie"].' '.$dispaly_info_sekretarki["nazwisko"].'<br>';
                            
                            
                                
                            }
                        ?>
                    </div>
                    
                    <hr>

                    <div class="pensja_sekretarek">
                        <?php 
                            //diplay najwyzsza pensja
                            $result = mysqli_query($conn, "SELECT `pensja` FROM `sekretarki` ORDER BY pensja DESC");
                            $dispaly_info_sekretarki = mysqli_fetch_assoc($result);
                            echo 'Najwyzsza pensja wynosi: '.$dispaly_info_sekretarki["pensja"].'<br>';

                            //diplay Najniższa pensja   
                            $result = mysqli_query($conn, "SELECT `pensja` FROM `sekretarki` ORDER BY `pensja`");
                            $dispaly_info_sekretarki = mysqli_fetch_assoc($result);
                            echo 'Najniższa pensja wynosi: '.$dispaly_info_sekretarki["pensja"].'<br>';

                            //diplay Średnia Pensja
                            $result = mysqli_query($conn, "SELECT `pensja` FROM `sekretarki` ");


                            while( $dispaly_info_sekretarki = mysqli_fetch_assoc( $result )){
                                $dispaly_info_sekretarki["pensja"];
                                
                            
                            
                                
                            }
                       

                                
                            
                        ?>
                    </div> 
           </div>

           <div class="stopka">
                Autor: 000000000000
           </div>
        </main>
    </section>
</body>
</html>