<?php 



?>

<nav>
    <ul>
        <li>
            option
        </li>
        <li>
            option

        </li>
        <li>
            option
        </li>
        <li>
            <form action="POST">
                <input type="text" name="search" class="search">
                <button type='sumbit' name='search' class="search-btn">SEARCH</button>
            </form>
            <?php 
            if(isset($search)){
                $search=$_POST['search'];
                $sql = "SELECT * FROM `movie` WHERE name like '$search%';";
            };
            
            ?>
        </li>
    </ul>
</nav>