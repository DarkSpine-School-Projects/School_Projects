<nav>
    <ul>
        <div class="option-container">

            <a href="/Projects_Done_On_Lessons/PracowniaRepo/own_project/">
                <li>
                    Home
                    <div class="underline"></div>
                </li>
            </a>
            <?php 
        if(isset($_COOKIE['user_id'])){
            $admin_check = "SELECT `user_id` FROM `user` WHERE `role`= 'admin';";
            $query_admin = mysqli_query($server_con, $admin_check);
            $acces_admin = mysqli_fetch_assoc($query_admin);
            if($_COOKIE['user_id'] == $acces_admin['user_id']){
                echo 
                '
                <a href="/Projects_Done_On_Lessons/PracowniaRepo/own_project/assets/site/admin.php">
                    <li>
                        Admin
                        <div class="underline"></div>
                    </li>
                </a>
                ';
            }else{
                echo'';
            }
        }
        ?>
            <a href="/Projects_Done_On_Lessons/PracowniaRepo/own_project/assets/site/movies.php">
                <li>
                    Movies
                    <div class="underline"></div>

                </li>
            </a>
            <a href="/Projects_Done_On_Lessons/PracowniaRepo/own_project/assets/site/series.php">
                <li>
                    Series
                    <div class="underline"></div>
                </li>
            </a>
        </div>


        <li class="li-search">
            <form method="GET">
                <input type="text" name="search" class="search" placeholder="SEARCH">
                <button type='sumbit' name='sumbit' class="search-btn">SUMBIT</button>
            </form>
            <?php 
            
            ?>
        </li>
    </ul>
</nav>