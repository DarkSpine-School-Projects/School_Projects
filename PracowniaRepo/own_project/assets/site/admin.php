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
     echo'
        
         <form action="" method="POST" enctype="multipart/form-data">
            vid_link<input type="text" name="vid_link" class="vid_link" required>
            desc<input type="text" name="desc" class="desc" required>
            title<input type="text" name="title" class="title" required>
            date<input type="date" name="date" class="date" required>
            category<input type="text" name="category" class="category" required>
            <button type="sumbit">SUMBIT</button>
        </form>
        ';
     
        $conn=mysqli_connect('localhost','root','','netlib');
        if( !isset($_POST['vid_link']) || !isset($_POST['desc']) || !isset($_POST['title'])|| !isset($_POST['date'])|| !isset($_POST['category'])){
           echo"ERROR SOME INFO IS MISSING";
        }else{
        $conn=mysqli_connect('localhost','root','','netlib'); 
            $vid_link=$_POST['vid_link'];
            $desc=$_POST['desc'];
            $movie_id=uniqid('Movie');
            $title=$_POST['title'];
            $date=$_POST['date'];
            $category=$_POST['category'];
            $add_date = date("Y-m-d");
            $sql="INSERT INTO `movie`(`vid_link`, `decs`, `movie_id`, `title`, `date`, `category`, `add_date`) VALUES ('$vid_link','$desc','$movie_id','$title','$date','$category','$add_date');";



            $myFile = "../movie/$movie_id.php"; // or .php   
            $fh = fopen($myFile, 'w'); // or die("error");  
            $stringData = "";   
            fwrite($fh, $stringData);
            fclose($fh);
            $query=mysqli_query($conn, $sql);
            header('Location: http://localhost/Projects_Done_On_Lessons/PracowniaRepo/own_project/assets/site/admin.php');
        }
        
    ?>




</body>

</html>