<nav>
    <ul>
        <a href="//index.php">
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
                <a href="/assets/site/admin.php">
                    <li>
                        admin
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
            option
            <div class="underline"></div>

        </li>
        <li>
            option
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