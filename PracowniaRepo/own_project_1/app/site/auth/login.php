<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <?php
    require_once '/xampp_8.2.3/htdocs/Projects_Done_On_Lessons/PracowniaRepo/own_project_1/db/connect.php';
    ?>

    <?php

    if (isset($_SESSION)) {
        header('Location: ../../../../index.php');
        die();
    }
    ?>

</head>

<body>



    <input type="button" onclick="window.history.go(-1); return false;" value="<">
    <div class="container">

        <form method="POST" id="reg">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="pwd_input" required>
            <br>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="pwd_input" required>
            <br>
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" id="lastname" class="pwd_input" required>
            <br>
            <label for="pwd">Password:</label>


            <input type="password" name="pwd" id="pwd" onkeyup="check_strenght_output()" class="pwd_input" required>

            <label for="pwd_1">Type Password Again</label>
            <input type="password" name="pwd_1" id="pwd_1" class="pwd_input" required>
            <div id="pwd_prompt">
                <div>haslo ma zawierac:</div>
                <div id="pwd3" class="checkpwd">duza litere</div>
                <div id="pwd4" class="checkpwd">mala litera</div>
                <div id="pwd5" class="checkpwd">cyfra</div>
                <div id="pwd6" class="checkpwd">znak specjalny</div>
                <div id="pwd7" class="checkpwd">więcej niż 4 znaki</div>
                <div id="pwd8" class="checkpwd">Hasła muszą do siebie pasować</div>
            </div>
            <br>
            <button type="submit" name="sumbit" id="sumbit" onclick="regReset()">Sumbit</button>

        </form>
    </div>
    <?php

    if (isset($_POST["sumbit"])) {
        if (!isset($_POST["email"]) || !isset($_POST["name"]) || !isset($_POST["lastname"]) || !isset($_POST["pwd"]) || !isset($_POST["pwd_1"])) {
            echo '<span class="impo">You Forgote To Type Some Input. Try Again</span>';
        }
    }
    ?>
    <script>
    function check_strenght_output() {
        const pwd = document.getElementById('pwd').value;
        const strenght = document.getElementById('strenght_pwd');
        const num_array = pwd.match(/[0-9]/g)
        const alphabet = pwd.match(/[a-z]/g)
        const alphabet_upper = pwd.match(/[A-Z]/g)
        const special = pwd.match(/[,<>:;"'=`~!@#%&.*+?^${}()|[\]\\]/g)
        const gg = document.getElementById('gg')

        // const specialChars = "\`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~";

        if (pwd.length >= 4) {
            document.getElementById('pwd7').style.display = 'none'
        } else {
            document.getElementById('pwd7').style.display = 'inline'
        }

        if (num_array) {
            document.getElementById('pwd5').style.display = 'none'
        } else {
            document.getElementById('pwd5').style.display = 'inline'
        }

        if (alphabet) {
            document.getElementById('pwd4').style.display = 'none'
        } else {
            document.getElementById('pwd4').style.display = 'inline'
        }

        if (alphabet_upper) {
            document.getElementById('pwd3').style.display = 'none'
        } else {
            document.getElementById('pwd3').style.display = 'inline'
        }

        if (special) {
            document.getElementById('pwd6').style.display = 'none'
        } else {
            document.getElementById('pwd6').style.display = 'inline'
        }

        if (pwd == document.getElementById('pwd_1').value) {
            document.getElementById('pwd8').style.display = 'none'
        } else {
            document.getElementById('pwd8').style.display = 'inline'
        }

    }
    </script>

</body>

</html>