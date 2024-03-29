<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once '../components/database.php'?>
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
    <?php include_once '../components/loading.php' ?>
    <!-- Account BackGround Video -->
    <?php include_once '../components/bg_vid.php'?>
    <div class="log-container">

        <a href="../../" target="" rel="noopener noreferrer">
            <img src="../svg/iconmonstr-caret-left-filled.svg" class="back_arrow_login" alt="">
        </a>
        <h1>Log In</h1>

        <?php
     
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
                echo "<script type=\"text/javascript\"> window.location.href = '/School_Projects/school_repo/school_subject_1_php/own_website/';</script>";
            } 
        }elseif(!isset($_COOKIE['user_id'])){
                echo'<form class="log-container-flex" method="POST">
                        <div class="mail-container">
                        EMAIL
                        <br>
                        <input type="eamil" id="mail" class="mail" name="mail">
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
                    
                        $mail = $_POST['mail'];
                        $password = $_POST['password'];
                    
                        $sql = "SELECT * FROM `user` WHERE mail='$mail' AND password='$password';";
                        $query = mysqli_query($server_con,$sql);
                        $assoc = mysqli_fetch_assoc($query);
                           if(!isset($assoc['user_id'])){
                                echo 'Wrong Mail Or Password';
                            }else{
                                setcookie("user_id", $assoc['user_id'],time() + (86400 * 30), "/School_Projects/school_repo/school_subject_1_php/own_website/");
                                 header('Location: /School_Projects/school_repo/school_subject_1_php/own_website/');
                                  die();
                            }
                        }
                    }
            }  
     
            
        ?>

    </div>

</body>

</html>