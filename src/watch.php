<?php

    require 'db-connection.php';

    echo "ID:".$_GET['id'];

    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $query = mysqli_query($db,"SELECT * FROM `videos` WHERE `id`=$id;");

        if($query){
            echo "<script>alert('connected');</script>";
        }else{
            echo "<script>alert('Error');</script>";
        }

        while($row = mysqli_fetch_assoc($query));{
            $name = $row['name'];
            $url = $row['url'];
        }

        echo "You are watching ".$name."<br/>";
        // echo "<embed src='$url' width='560' height='315'></embed>";
        echo "<video width='320' height='240' controls>";
        echo "<source src='http://localhost/saveples/src/uploads/$name' type='video/mp4'>";
        echo "Your browser does not support the video tag.";
        echo "<video>";


    }else{
        echo "Error";
    }
?>

<video width="320" height="240" controls>
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>