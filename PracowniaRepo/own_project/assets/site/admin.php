<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    
        $conn=mysqli_connect('127.0.0.1','root','','netlib'); 
 $image=$_POST['image'];
            $vid_link=$_POST['vid_link'];
            $desc=$_POST['desc'];
            $title=$_POST['title'];
            $date=$_POST['date'];
            $category=$_POST['category'];
        if(!isset($image) || !isset($vid_link) || !isset($desc) || !isset($title)|| !isset($date)|| !isset($category)){
           echo"ERROR SOME INFO IS MISSING";
        }else{
 $conn=mysqli_connect('127.0.0.1','root','','netlib'); 
            $image=$_POST['image'];
            $vid_link=$_POST['vid_link'];
            $desc=$_POST['desc'];
            $movie_id=uniqid('Movie');
            $title=$_POST['title'];
            $date=$_POST['date'];
            $category=$_POST['category'];
            $sql="INSERT INTO `movie`(`image`, `vid_link`, `decs`, `movie_id`, `title`, `date`, `category`,`picture`) VALUES ('$image','$vid_link','$desc','$movie_id','$title','$date','$category');";
            $query=mysqli_query($conn, $sql);
        }
        echo'
        
         <form action="" method="POST" enctype="multipart/form-data">
            image<input type="file" name="image" class="image" required>
            vid_link<input type="text" name="vid_link" class="vid_link" required>
            desc<input type="text" name="desc" class="desc" required>
            title<input type="text" name="title" class="title" required>
            date<input type="date" name="date" class="date" required>
            category<input type="text" name="category" class="category" required>
           
            <button type="sumbit">SUMBIT</button>
        </form>
        ';
     
        
    ?>




</body>

</html>