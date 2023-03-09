<section id="com-con" class="com-con">
    <h1 id="com-con-del" style="margin-left:20px;">Comments:</h1>
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
                    
                    echo "<script type=\"text/javascript\"> window.location.href = '/Projects_Done_On_Lessons/PracowniaRepo/own_project/assets/movie/".$movie_id.".php';</script>";
                   
                }
                     echo ' <button class="sumbit_com" name="sumbit" type="sumbit"><svg fill="white" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 12l11 3.1 7-8.1-8.156 5.672-4.312-1.202 15.362-7.68-3.974 14.57-3.75-3.339-2.17 2.925v-.769l-2-.56v7.383l4.473-6.031 4.527 4.031 6-22z"/></svg></button>     
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
                        
                       echo'<form method="post" style="margin-right:0;word-wrap:"><button style="width:50px; background:transparent; border:none;" name="'.$assoc_comment_id.'"><h5><svg class="svg-del" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m21 3.998c0-.478-.379-1-1-1h-16c-.62 0-1 .519-1 1v16c0 .621.52 1 1 1h16c.478 0 1-.379 1-1zm-16.5.5h15v15h-15zm7.491 6.432 2.717-2.718c.146-.146.338-.219.53-.219.404 0 .751.325.751.75 0 .193-.073.384-.22.531l-2.717 2.717 2.728 2.728c.147.147.22.339.22.531 0 .427-.349.75-.75.75-.192 0-.385-.073-.531-.219l-2.728-2.728-2.728 2.728c-.147.146-.339.219-.531.219-.401 0-.75-.323-.75-.75 0-.192.073-.384.22-.531l2.728-2.728-2.722-2.722c-.146-.147-.219-.338-.219-.531 0-.425.346-.749.75-.749.192 0 .384.073.53.219z" fill-rule="nonzero"/></svg></h5></button></form>';
                        if(isset($_POST[$assoc_comment_id])){
                                $assoc_comment_id;
                                $sql1 = "DELETE FROM `comments` WHERE `comment_id` = '$assoc_comment_id';";
                                mysqli_query($server_con, $sql1);
                                echo "<script type=\"text/javascript\"> window.location.href = './".$movie_id.".php';</script>";
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