<?php
    $db = mysqli_connect('localhost','root','','save_ples');

    if (!$db) {
        die("Unable to connect to database: ".mysqli_connect_error());
    }

?>