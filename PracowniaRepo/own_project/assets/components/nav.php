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
        if(!isset($_COOKIE['user_id'])){
           echo '';
        }
        else{
            $admin_check_ad = "SELECT `user_id` FROM `user` WHERE `role`= 'admin';";
            $query_admin_ad = mysqli_query($server_con, $admin_check_ad);
            $acces_admin_ad = mysqli_fetch_assoc($query_admin_ad);
            if($_COOKIE['user_id'] == $acces_admin_ad['user_id']){
                echo 
                '
                <a href="/Projects_Done_On_Lessons/PracowniaRepo/own_project/assets/site/admin.php">
                    <li>
                        Admin
                        <div class="underline"></div>
                    </li>
                </a>
                ';
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
            <form action="/Projects_Done_On_Lessons/PracowniaRepo/own_project/" method="GET">
                <input type="text" name="search" class="search" placeholder="SEARCH">
                <button type='sumbit' name='sumbit' class="search-btn">SUMBIT</button>
            </form>
            <?php 
            
            ?>
        </li>
    </ul>
</nav>