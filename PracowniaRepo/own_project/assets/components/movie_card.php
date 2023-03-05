<div class="container">
    <section class="movie-card-container">

        <?php 
            
            
            if(!isset($_GET['search']) || $_GET['search']==''){
                echo' <h1 class="title-new-added"> Latest Added Videos </h1>';
                $sql = "SELECT * FROM `movie` ORDER BY 'add_date' DESC LIMIT 10 ;";
                $query = mysqli_query($server_con,$sql);
                $assoc = mysqli_fetch_assoc($query);
                $query = mysqli_query($server_con,$sql);
                while($assoc = mysqli_fetch_assoc($query)){
                    echo 
                    ' 
                    <a name="movie-card" class="movie-card" href="./assets/movie/'.$assoc['movie_id'].'.php">
                    <div >
                        <div class="image">
                        <img src="'.$assoc['img_link'].'" alt="'.$assoc['title'].'">
                        </div>
                        <div class="title"><h3>
                        '.$assoc['title'].'</h3>
                        </div>
                        <div class="date">
                        Relase: '.$assoc['date'].'
                        </div>

                    </div>
                    </a>
                    ';
                };
            }elseif(isset($_GET['search'])){
                $search=$_GET['search'];
                $sql = "SELECT * FROM `movie` WHERE title LIKE '$search%' ORDER BY 'date' DESC";
                $query = mysqli_query($server_con,$sql);
                while($assoc = mysqli_fetch_assoc($query)){
                    echo 
                    ' 
                    <div name="movie-card" class="movie-card">
                        <a href="./assets/movie/'.$assoc['movie_id'].'.php">
                        <div class="image">
                        <img src="'.$assoc['img_link'].'" alt="'.$assoc['title'].'">
                        </div>
                        <div class="title"><h3>
                        '.$assoc['title'].'</h3>
                        </div>
                        <div class="date">
                        Relase: '.$assoc['date'].'
                        </div>
                        </a>
                    </div>
                    ';
                };
                
            
            };
            if(isset($_GET['search'])){
            $search=$_GET['search'];
            $sql = "SELECT * FROM `movie` WHERE title LIKE '$search%' ORDER BY 'date' ";
            $query = mysqli_query($server_con,$sql);
            $assoc = mysqli_fetch_assoc($query);
            if(!isset($assoc)){
                        echo 
                        ' 
                        
                           <h1> NO MOVIES FOUNDED </h1>
                        
                        ';
                     
            }
        }
            ?>
    </section>
</div>