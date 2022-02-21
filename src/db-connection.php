<?php
    $db = mysqli_connect('localhost','root','','saveples');
    // $db = mysqli_connect('localhost','root','password1','test');

    if (!$db) {
        die("Unable to connect to database: ".mysqli_connect_error());
    }

?>