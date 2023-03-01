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
        background: url(https://wallpaperaccess.com/full/8406764.gif);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;

    }
    </style>
</head>

<body>
    <div class="log-container">


        <h1>Log In</h1>
        <form class="log-container-flex" method="POST">
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
            <button type="submit">LOGIN</button>


            <a href="./registration.php"><small>Registration</small></a>
        </form>

        <?php 
              

                    if(!isset($_POST['mail']) or !isset($_POST['password']) ){
                        echo '';
                    }else{
                    
                        if(isset($_POST['mail']) && isset($_POST['password']) && $_POST['mail'] !=null && $_POST['password'] != null ){
                        $server_con=mysqli_connect('localhost','root','','netlib');
                        $mail = $_POST['mail'];
                        $password = $_POST['password'];
                    
                        $sql = "SELECT * FROM `user` WHERE mail='$mail' AND password='$password';";
                        $query = mysqli_query($server_con,$sql);
                        $assoc = mysqli_fetch_assoc($query);
                           if(!isset($assoc['user_id'])){
                                echo 'user not found';
                            }else{
                                setcookie("user_id", $assoc['user_id'],time() + (86400 * 30), "/Projects_Done_On_Lessons/PracowniaRepo/own_project/");
                                 header('Location: ../../index.php');
                            }
                        }
                    }
                ?>
    </div>

</body>

</html>