<!DOCTYPE html>
<html lang="en">

<head>
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
    <section class="header">
        <div id="vid-gradient" z-index="-2"></div>
        <video id="vid-main" autoplay muted loop>
            <source id="vid-main-source"
                src="/Projects_Done_On_Lessons/PracowniaRepo/own_project/assets/vid/loading.mp4" type="video/mp4" />
        </video>
    </section>
    <?php include_once '../components/loading.php' ?>
    <div class="log-container">

        <a href="../../" target="" rel="noopener noreferrer">
            <img src="../svg/iconmonstr-caret-left-filled.svg" class="back_arrow_login" alt="">
        </a>
        <h1>Log In</h1>

        <?php
        $server_con=mysqli_connect('localhost','root','','netlib'); 
        if(isset($_COOKIE['user_id'])){
            $loged_check = "SELECT `user_id` FROM `user` WHERE `user_id`= '".$_COOKIE['user_id']."';";
            $query_loged = mysqli_query($server_con, $loged_check);
            $acces_loged = mysqli_fetch_assoc($query_loged);
            if($_COOKIE['user_id'] == $acces_loged['user_id']){
                echo'
                <form class="log-container-flex" method="POST">
                        You are Already logged
                </form>
                '; 
            } 
        }elseif(!isset($_COOKIE['user_id'])){
                echo'<form class="log-container-flex" method="POST">
                        <div class="mail-container">
                        MAIL
                        <br>
                        <input type="mail" id="mail" class="mail" name="mail">
                    </div>

                    <div class="passowrd-container">
                        PASSWORD
                        <br>
                        <input type="password" id="password" class="password" name="password">
                    </div>
                    <button name="sumbit_log" type="submit">LOGIN</button>


                    <a href="./registration.php"><small>Registration</small></a>
                </form>';
                if(isset($_POST['sumbit_log'])){
                        if($_POST['mail']=='' && $_POST['password']==''){
                            echo 'Mail And Password Missing';
                        }else{
                            if($_POST['mail']=='' && isset($_POST['password'])){
                                echo 'Mail Missing';
                                }elseif($_POST['password']=='' && isset($_POST['mail']) ){
                                    echo 'Password Missing';
                            }
                        }
                    }
                    if(!isset($_POST['mail']) or !isset($_POST['password']) ){
                        
                    }else{
                    
                        if(isset($_POST['mail']) && isset($_POST['password']) && $_POST['mail'] !=null && $_POST['password'] != null ){
                        $server_con=mysqli_connect('localhost','root','','netlib');
                        $mail = $_POST['mail'];
                        $password = $_POST['password'];
                    
                        $sql = "SELECT * FROM `user` WHERE mail='$mail' AND password='$password';";
                        $query = mysqli_query($server_con,$sql);
                        $assoc = mysqli_fetch_assoc($query);
                           if(!isset($assoc['user_id'])){
                                echo 'Wrong Mail Or Password';
                            }else{
                                setcookie("user_id", $assoc['user_id'],time() + (86400 * 30), "/Projects_Done_On_Lessons/PracowniaRepo/own_project/");
                                 header('Location: /Projects_Done_On_Lessons/PracowniaRepo/own_project/');
                            }
                        }
                    }
            }  
     
            
        ?>

    </div>

</body>

</html>