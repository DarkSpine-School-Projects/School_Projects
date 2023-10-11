<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    require_once '/xampp_8.2.3/htdocs/Projects_Done_On_Lessons/PracowniaRepo/own_project_1/db/connect.php';
    ?>

    <?php

    if (isset($_SESSION)) {
        header('Location: ../../../../index.php');
        die();
    }
    ?>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Pixelify+Sans&display=swap');

    * {
        font-family: 'Pixelify Sans', sans-serif;
    }

    body {
        background: rgb(0, 0, 0);
        background: linear-gradient(29deg,
                rgb(0, 0, 0) 11%,
                rgb(46, 46, 46) 50%,
                rgb(0, 0, 0) 90%);
    }

    #reg {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
        padding: 0px 40px;
        height: 70dvh;
        background: red;
        display: flex;
        flex-direction: column;
        justify-items: left;
        align-content: left;
        justify-content: center;
        align-items: center;
        background: rgb(0, 0, 0);
        background: linear-gradient(29deg,
                rgb(0, 0, 0) 11%,
                rgb(46, 46, 46) 50%,
                rgb(0, 0, 0) 90%);
        border-radius: 16px;
        box-shadow: 0px 0px 100px gray;
        border: 1px solid rgba(255, 255, 255, 0.11);
    }

    .parent_strength {
        border: 1px solid red;
        height: 10px;
        width: 70%;
    }

    #strenght_pwd {
        background: transparent;
        height: 100%;
        width: 0%;
        transition: all 0.2s ease-in-out;
    }

    #pwd2,
    #pwd3,
    #pwd4,
    #pwd5,
    #pwd6,
    #pwd7,
    #pwd8 {
        display: inline;
        font-weight: bold;
        color: burlywood;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .impo {
        font-size: 30px;
        text-transform: uppercase;
        font-weight: bold;
        animation: col 0.5s ease-in-out alternate infinite;
    }

    @keyframes col {
        0% {
            color: white;
        }

        100% {
            color: red;
        }
    }


    .pwd_input {
        border: none;
        width: 10rem;
        padding: 1px;
        font-size: 19px;
        transition: 0.2s ease-in-out;
    }

    .pwd_input:focus {
        width: 80%;
        padding: 3px;
        border: 1px solid gray;
        outline: none;

    }



    label {
        letter-spacing: 10px;
        color: gray;
        font-size: large;
    }

    #sumbit {
        background: black;
        border: 0px;
        padding: 5px 35px;
        color: white;
        transition: 0.2s ease-in-out;
        margin-top: 2vh;
    }

    #sumbit:hover {
        background: white;
        transform: scale(1.15);
        color: black;
        cursor: pointer;
    }

    /*# sourceMappingURL=style.css.map */
    </style>

</head>

<body>




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
            <span>haslo ma zawierac:</span>
            <span id="pwd3" class="checkpwd">duza litere</span>
            <span id="pwd4" class="checkpwd">mala litera</span>
            <span id="pwd5" class="checkpwd">cyfra</span>
            <span id="pwd6" class="checkpwd">znak specjalny</span>
            <span id="pwd7" class="checkpwd">więcej niż 4 znaki</span>
            <span id="pwd8" class="checkpwd">Hasła muszą do siebie pasować</span>
            <label for="pwd_1">Type Password Again</label>
            <input type="password" name="pwd_1" id="pwd_1" class="pwd_input" required>
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