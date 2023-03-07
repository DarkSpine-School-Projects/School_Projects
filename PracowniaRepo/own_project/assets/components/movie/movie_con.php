<section class="movie-link-con">
    <?php 
       $server_con=mysqli_connect('localhost','root','','netlib');
        $sql = "SELECT * FROM `movie` WHERE `movie_id`='$movie_id';";
        $query = mysqli_query($server_con, $sql);
        $assoc = mysqli_fetch_assoc($query);
   
    echo 
    '
    <div class="movie-bg">
        <div>
            <h1 style="margin-left:0px;" class="h_syntax">'.$assoc["title"].'</h1> <h4 class="h_syntax">Relase: <span class="info-movie">'.$assoc["date"].'</span></h4><h4 class="h_syntax">Category: <span class="info-movie">'.$assoc["category"].'</span></h4 class="h_syntax"><h4 class="h_syntax">Description</h4>
        </div>
        <br>
        <iframe class="movie_link" src="'.$assoc["vid_link"] .'"allowfullscreen allowtransparency allow="autoplay" scrolling="no" frameborder="0"></iframe>
    </div>
    ';
    ?>
</section>