<nav>
    <ul>
        <div class="option-container">

            <a href="/School_Projects/school_repo/school_subject_1_php/own_website/">
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
                <a href="/School_Projects/school_repo/school_subject_1_php/own_website/assets/site/admin.php">
                    <li>
                        Admin
                        <div class="underline"></div>
                    </li>
                </a>
                ';
            }
        }
        ?>
            <a href="/School_Projects/school_repo/school_subject_1_php/own_website/assets/site/movies.php">
                <li>
                    Movies
                    <div class="underline"></div>

                </li>
            </a>
            <!-- <a href="/School_Projects/school_repo/school_subject_1_php/own_website/assets/site/series.php">
                <li>
                    Series
                    <div class="underline"></div>
                </li>
            </a> -->
        </div>


        <li class="li-search">
            <form action="/School_Projects/school_repo/school_subject_1_php/own_website/" method="GET">
                <input type="text" name="search" class="search" placeholder="SEARCH">
                <button type='sumbit' name='sumbit' class="search-btn">SUMBIT</button>
            </form>
            <?php 
            
            ?>
        </li>
    </ul>
</nav>