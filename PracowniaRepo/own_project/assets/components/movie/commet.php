<section class="com-con">
    <h1 style="margin-left:20px;">Comments:</h1>
    <?php 
                $sql = "SELECT * FROM `movie` WHERE `movie_id`='$movie_id';";
                $query = mysqli_query($server_con, $sql);
                $assoc = mysqli_fetch_assoc($query);
                
                
                if(isset($_COOKIE['user_id'])){
                    $sql_user = "SELECT * FROM `user` WHERE `user_id`='".$_COOKIE['user_id']."';";
                $query_user = mysqli_query($server_con, $sql_user);
                $assoc_user = mysqli_fetch_assoc($query_user);
                echo'  
                <br>
                <br>
                <div class="each-com">
                    <form class="form_com" method="post">';
                if($assoc_user['picture']!=''){
                    echo '<img class="user_image_com" src="'.$assoc_user['picture'].'" alt="'.$assoc_user['nick'].'">';
                }else{
                    echo'<img class="user_image_com" src="/Projects_Done_On_Lessons/PracowniaRepo/own_project/assets/img/Default_pfp.svg.png" alt="'.$assoc_user['nick'].'">';
                }
                echo'<h5>'.$assoc_user['nick'].'</h5>
                <input class="add_com" name="add_com" type="text">'; 
                if(isset($_POST['sumbit']) && $_POST['add_com']=='' && $_POST['add_com']==null){
                    echo 'You have to type comment';
                }elseif(isset($_POST['sumbit']) && $_POST['add_com']!='' && $_POST['add_com']!=null){
                    $add_com=$_POST['add_com'];
                    $sql = "INSERT INTO `comments`(`movie_id`, `comment`, `user_id`) VALUES ('$movie_id','$add_com','".$_COOKIE['user_id']."');";
                    $query = mysqli_query($server_con, $sql);
                    
                    echo "<script type=\"text/javascript\"> window.location.href = '/Projects_Done_On_Lessons/PracowniaRepo/own_project/assets/movie/".$movie_id.".php';</script>";
                   
                }
                     echo ' <button class="sumbit_com" name="sumbit" type="sumbit">Sumbit</button>     
                    </form>
                </div>';
                
                }else{
                    echo'<br>';
                }
                
               
                $sql_user = "SELECT * FROM `comments` WHERE `movie_id` = '$movie_id';";
                $query_user = mysqli_query($server_con, $sql_user);
                
                while($assoc_user = mysqli_fetch_assoc($query_user)  ){
                $sql_user_u = "SELECT * FROM `user` WHERE `user_id`= '".$assoc_user['user_id']."';";
                $query_user_u = mysqli_query($server_con, $sql_user_u);
                $assoc_user_u = mysqli_fetch_assoc($query_user_u);
                    
                    echo '<div class="each-com each-com-bg">
                        <div class="add_com add_com_flex">';
                     if($assoc_user_u['picture']!=''){
                         echo '<img style="margin:0px;" class="user_image_com" src="'.$assoc_user_u['picture'].'" alt="'.$assoc_user_u['nick'].'">';
                     }else{
                     echo'<img style="margin:0px;" class="user_image_com" src="/Projects_Done_On_Lessons/PracowniaRepo/own_project/assets/img/Default_pfp.svg.png" alt="'.$assoc_user_u['nick'].'">';
                     }
                    echo'
                             <h5 style="margin:0px; margin-left:5px; margin-right:5%;" class="user_nick">'.$assoc_user_u['nick'].':</h5>'.$assoc_user['comment'].'
                        </div>
                    </div>';
                }
              
                
            ?>

</section>