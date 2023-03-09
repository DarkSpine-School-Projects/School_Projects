<section id="com-con" class="com-con">
    <h1 style="margin-left:20px;">Comments:</h1>
    <?php

use GuzzleHttp\Psr7\Query;

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
                    $add_date= date("Y-m-d H:i:s");
                    $comment_id= uniqid('comment');
                    $sql = "INSERT INTO `comments`(`movie_id`, `comment`, `user_id`, `add_date`, `comment_id`) VALUES ('$movie_id','$add_com','".$_COOKIE['user_id']."','$add_date','$comment_id');";
                    $query = mysqli_query($server_con, $sql);
                    
                    echo "<script type=\"text/javascript\"> window.location.href = '/Projects_Done_On_Lessons/PracowniaRepo/own_project/assets/movie/".$movie_id.".php#com-con';</script>";
                   
                }
                     echo ' <button class="sumbit_com" name="sumbit" type="sumbit"><svg fill="white" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m2.009 12.002c0-5.517 4.48-9.997 9.998-9.997s9.998 4.48 9.998 9.997c0 5.518-4.48 9.998-9.998 9.998s-9.998-4.48-9.998-9.998zm8.211-4.843c-.141-.108-.3-.157-.456-.157-.389 0-.755.306-.755.749v8.501c0 .445.367.75.755.75.157 0 .316-.05.457-.159 1.554-1.203 4.199-3.252 5.498-4.258.184-.142.29-.36.29-.592 0-.23-.107-.449-.291-.591z" fill-rule="nonzero"/></svg></button>     
                    </form>
                </div>';
                
                }else{
                    echo'<h1>Log In To Give Your Comment</h1> <br>';
                }
                
               
                $sql_user = "SELECT * FROM `comments` WHERE `movie_id` = '$movie_id' ORDER BY `add_date` DESC;";
                $query_user = mysqli_query($server_con, $sql_user);
                
                while($assoc_user = mysqli_fetch_assoc($query_user)){
                $sql_user_u = "SELECT * FROM `user` WHERE `user_id`= '".$assoc_user['user_id']."' ;";
                $query_user_u = mysqli_query($server_con, $sql_user_u);
                $assoc_user_u = mysqli_fetch_assoc($query_user_u);
                 $assoc_comment_id=$assoc_user['comment_id'];
                    echo '<div class="each-com each-com-bg">
                        <div class="add_com add_com_flex">';
                     if($assoc_user_u['picture']!=''){
                         echo '<img style="margin:0px;" class="user_image_com" src="'.$assoc_user_u['picture'].'" alt="'.$assoc_user_u['nick'].'">';
                     }else{
                     echo'<img style="margin:0px;" class="user_image_com" src="/Projects_Done_On_Lessons/PracowniaRepo/own_project/assets/img/Default_pfp.svg.png" alt="'.$assoc_user_u['nick'].'">';
                     }
                    echo' <h5 style="margin:0px; margin-left:5px; margin-right:5%;" class="user_nick">'.$assoc_user_u['nick'].':</h5><span style="overflow:hidden; word-wrap: break-word; width:60%;">'.$assoc_user['comment'].'</span>';
                              
                    if(isset($_COOKIE['user_id'])){
                    if($assoc_user_u['user_id']==$_COOKIE['user_id']){
                        
                        echo'<form method="post" style="margin-right:0;word-wrap:"><button name="'.$assoc_comment_id.'"><h5>delate</h5></button></form>';
                        if(isset($_POST[$assoc_comment_id])){
                                $assoc_comment_id;
                                $sql1 = "DELETE FROM `comments` WHERE `comment_id` = '$assoc_comment_id';";
                                mysqli_query($server_con, $sql1);
                            echo "<script type=\"text/javascript\"> window.location.href = '/Projects_Done_On_Lessons/PracowniaRepo/own_project/assets/movie/".$movie_id.".php#com-con';</script>";
                        };
                   
                     }else{
                        echo '';
                     }
                    }else{
                        echo '';
                     }
                       
              echo'  </div>
                    </div>';
                }  
         
                        
                
                    
                    
            
                
            ?>

</section>