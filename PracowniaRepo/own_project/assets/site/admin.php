<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php mysqli_connect('127.0.0.1','root_DB','','test_db'); ?>

    <?php

        setcookie("id_kay_admin", "",);

    ?>
    <?php
    setcookie("id_kay_admin", "",);
    ?>

    <form action="" method="post">
        <input type="text" name="admin_create_user">
        
    </form>

</body>
</html>