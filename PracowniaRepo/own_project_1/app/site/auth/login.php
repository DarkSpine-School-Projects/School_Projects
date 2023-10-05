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

    if(isset($_SESSION)){
        header('Location: ../../../../index.php');
        die();

    }
?>

<style>
    .parent_strength{
        border: 1px solid red;
        height: 10px;
        width: 50%;
    }
    #strenght_pwd{
        background: transparent;
        height: 100%;
        width: 0%;
        transition: all 0.2s ease-in-out;

    }

</style>
</head>
<body>
    <div class="container">
            <form method="POST" id="reg" >
                <label for="email">Email:</label>
                <input type="emial" name="emial" id="emial" required>
                <br>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
                <br>
                <label for="lastname">Lastname:</label>
                <input type="text" name="lastname" id="lastname" required>
                <br>
                <label for="pwd">Password:</label>
                <input type="password" name="pwd" id="pwd" onkeyup="check_strenght_output()">
                Password Strenght:
                <div class="parent_strength">
                <div id="strenght_pwd"></div>
                </div>
                <br>
                <label for="pwd_1">Confirm Password:</label>
                <input type="password" name="pwd_1" id="pwd_1" required placeholder="Type Again Your Password">

                <button type="submit" name="sumbit" id="sumbit" onclick="regReset()">Sumbit</button>
               
            </form>     
    </div>
    <?php 

    if(isset($_POST["sumbit"])){
        if(!isset($_POST["email"]) || !isset($_POST["name"]) || !isset($_POST["lastname"]) || !isset($_POST["pwd"]) || !isset($_POST["pwd_1"])){
            echo 'You Forgote To Type Some Input. Try Again';
          
        }
    }
?>
<script>
    function check_strenght_output(){
        const pwd = document.getElementById('pwd').value;
        const strenght = document.getElementById('strenght_pwd');
        const num_array =  pwd.match(/[0-9]/g)
        const alphabet =  pwd.match(/[a-z]/g)
        const alphabet_upper =  pwd.match(/[A-Z]/g)

        // const specialChars = "\`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~";
        if (pwd == "" || pwd.length < 1 || !num_array){
            strenght.style.width = "0%"
                strenght.style.background ="transparent"
        }
        
            if( pwd.length >= 7 && pwd.length >= 1 && num_array && alphabet){
                strenght.style.width = "33.33%"
                strenght.style.background ="red"
               
            } if(pwd.length >= 8 && num_array && alphabet && alphabet_upper){  
                    strenght.style.width = "66.66%"
                    strenght.style.background ="yellow"
                   
                } if(pwd.length >= 122 ){
                    strenght.style.width = "100%"
                    strenght.style.background ="green"
                    }

           
         
    }
    


</script>
    
</body>
</html>