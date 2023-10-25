<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once '../components/database.php' ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="../style/index_style/index.css">
    <style>
    body {

        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;

    }
    </style>
</head>

<body>
    <!-- Account BackGround Video -->
    <?php include_once '../components/bg_vid.php' ?>
    <?php include_once '../components/loading.php' ?>
    <div class="log-container reg-container">

        <a href="../../" target="" rel="noopener noreferrer">
            <img src="../svg/iconmonstr-caret-left-filled.svg" class="back_arrow_login" alt="">
        </a>
        <?php

        if (isset($_COOKIE['user_id'])) {
            $loged_check = "SELECT `user_id` FROM `user` WHERE `user_id`= '" . $_COOKIE['user_id'] . "';";
            $query_loged = mysqli_query($server_con, $loged_check);
            $acces_loged = mysqli_fetch_assoc($query_loged);
            if ($_COOKIE['user_id'] == $acces_loged['user_id']) {
                echo '
                        <form class="log-container-flex" method="POST">
                            You are Already logged
                        </form>
                        ';
                echo "<script type=\"text/javascript\"> window.location.href = '/School_Projects/school_repo/school_subject_1_php/own_website/';</script>";
            }
        } elseif (!isset($_COOKIE['user_id'])) {
            echo
            '
                    <h1>Create Account</h1>
                    <form class="log-container-flex" method="POST">
                            <div class="mail-container">
                                Nick
                                <br>
                                <input type="text" id="nick" class="nick" name="nick" required>
                            </div>
                            <div class="mail-container">
                                EMAIL
                                <br>
                                <input type="email" id="mail" class="mail" name="mail" required>
                            </div>

                            <div class="passowrd-container">
                                PASSWORD
                                <br>
                                <input type="password" id="password" class="password" name="password" required>
                            </div>
                            <div class="passowrd-container">
                                Repeat PASSWORD
                                <br>
                                <input type="password" id="re_password" class="re_password" name="re_password" required>
                            </div>
                            <button name="sumbit_log" type="submit">REGISTRATION</button>


                            <a href="./login.php"><small>All Ready Have Account? LOGIN</small></a>
                    </form>

                    ';
            if (isset($_POST['sumbit_log'])) {
                if ($_POST["password"] != $_POST["re_password"]) {
                    echo 'password is not matching';
                } elseif ($_POST["nick"] == '' || $_POST["mail"] == '' || $_POST["password"] == '') {
                    echo 'Regestrarion Regret Some Information Are Missing ';
                }
            }
            if (isset($_POST['mail']) && isset($_POST['password']) && isset($_POST['nick']) && $_POST["password"] === $_POST["re_password"]) {


                $nick = $_POST['nick'];
                $mail = $_POST['mail'];
                $sql = "SELECT `nick`, `mail` FROM `user` WHERE `nick`='$nick' OR `mail`='$mail';";
                $query = mysqli_query($server_con, $sql);
                $assoc = mysqli_fetch_assoc($query);
                if ($assoc['nick'] != null && $assoc['mail'] != null) {
                    echo 'Mail Or Nick Aleready Used';
                }
                if ($assoc['nick'] == null || $assoc['mail'] == null) {
                    $nick = $_POST['nick'];
                    $mail = $_POST['mail'];
                    $password = $_POST['password'];
                    $user_id = uniqid('user');
                    $sql = "INSERT INTO `user`(`nick`, `mail`, `password`, `user_id`, `role`) VALUES ('$nick','$mail','$password','$user_id','user');";
                    mysqli_query($server_con, $sql);
                    header('Location: /School_Projects/school_repo/school_subject_1_php/own_website/assets/site/login.php');
                    die();
                }
            }
        }
        ?>
    </div>

</body>

</html>