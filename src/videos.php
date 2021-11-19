<?php

    require 'db-connection.php';

    $query = mysqli_query($db,"SELECT * FROM `videos`;");

    while($row = mysqli_fetch_assoc($query)){

        $id = $row['id'];
        $name = $row['name'];

        echo "<a href='watch.php?id=$id'>$name</a><br/>";
    }