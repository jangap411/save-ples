<?php
    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $query = mysqli_query("SELECT * FROM `videos` WHERE `id`='$id';");

        while($row = mysqli_fetch_assoc($query));{
            $name = $row['name'];
            $url = $row['url'];
        }

        echo "You are watching ".$name."<br/>";
        echo "<embed src='$url' width='560' height='315'></embed>";

    }else{
        echo "Error";
    }