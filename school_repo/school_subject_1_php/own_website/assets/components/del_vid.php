<?php 
$server_con=mysqli_connect('localhost','root','','netlib'); 
            if(isset($_COOKIE['user_id'])){
                $admin_check = "SELECT `user_id` FROM `user` WHERE `role`= 'admin';";
                $query_admin = mysqli_query($server_con, $admin_check);
                $acces_admin = mysqli_fetch_assoc($query_admin);
                if($_COOKIE['user_id'] == $acces_admin['user_id']){

                echo '<div class="del_vid_con">
                    <form class="del_vid_form" method="post">
                        <button type="sumbit" name="del_vid" class="logout-btn">delete</button>
                    </form>
                    
                </div>';
                }
            
                if(isset($_POST["del_vid"])){
                    unlink("./$movie_id.php");
                    unlink("../img/$movie_id.png");
                    $sql = "DELETE FROM `movie` WHERE `movie_id` = '$movie_id';";
                    mysqli_query($server_con,$sql);
                     echo "<script type=\"text/javascript\"> window.location.href = '/School_Projects/school_repo/school_subject_1_php/own_website/';</script>";
                };
            }
