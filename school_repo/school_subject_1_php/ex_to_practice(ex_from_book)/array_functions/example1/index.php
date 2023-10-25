<?php 
//dolaczenie pliku z definicji funkcji
include("funkcje.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petle</title>
    <style>
    /* Wyglad tabeli */
    table,td,th{
        
        margin: auto;
        border: 2px blue double;
        border-collapse: collapse;
    }
    /* wyglad figury */
    th, .figura{
        
        background: #003366;
        height: 50px;
        color:white;
    }

    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nazwa figury</th>
            <th>Rysunek</th>
            <th>Przykladowe pole</th>
        </tr>
        <tr>
            <td class="fiugra">trojkat</td>
            <td><img src="trojkat.png" alt=""></td>
            <td><?php trojkat(4,7); ?></td>
        </tr>
        <tr>
            <td class="fiugra">prostokat</td>
            <td><img src="prostokat.png" alt=""></td>
            <td><?php prostokat(6,9); ?></td>
        </tr>
        <tr>
            <td class="fiugra">trapez</td>
            <td><img src="trapez.png" alt=""></td>
            <td><?php trapez(6,9,4); ?></td>
        </tr>
        <tr>
            <td class="fiugra">kolo</td>
            <td><img src="kolo.png" alt=""></td>
            <td><?php kolo(2); ?></td>
        </tr>
        
    </table>
</body>
</html>