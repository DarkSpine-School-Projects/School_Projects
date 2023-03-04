<nav>
    <ul>
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
                <a href="./assets/site/admin.php">
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
        <li>
            Movies
            <div class="underline"></div>

        </li>
        <li>
            Series
            <div class="underline"></div>
        </li>
        <li>
            <form method="GET">
                <input type="text" name="search" class="search">
                <button type='sumbit' name='sumbit' class="search-btn">SEARCH</button>
            </form>
            <?php 
            
            ?>
        </li>
    </ul>
</nav>