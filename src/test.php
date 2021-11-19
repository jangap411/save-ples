<?php

    // if(isset($_POST['btn-register'])){
    //     echo "<h1>Connected</h1>";
    //     echo "<h1> fname".$_POST['FirstName']."</h1>";
    //     echo "<h1> lname".$_POST['LastName']."</h1>";
    //     echo "<h1> dob".$_POST['dob']."</h1>";
    //     echo "<h1> clan:".$_POST['clan']."</h1>";
    //     echo "<h1>village:".$_POST['village']."</h1>";
    //     echo "<h1>llg:".$_POST['llg']."</h1>";
    //     echo "<h1>ward:".$_POST['ward']."</h1>";
    //     echo "<h1>province".$_POST['province']."</h1>";
    //     echo "<h1>phone:".$_POST['phone']."</h1>";
    //     echo "<h1>Contact Address:".$_POST['contactAdress']."</h1>";
    //     echo "<h1> District: ".$_POST['district']."</h1>";
    //     echo "<h1> User Type: ".$_POST['user-type']."</h1>";


    // }else{

    //     echo "<h1> Not Connected</h1>";
    // }


    if(isset($_GET['id'])){

        $id = $_GET['id'];

        if($id == 1) {
         include '1.php';
        }else if($id == 2){
         include '2.php';
        }else{
         include '3.php';
        }
    }else{
        echo "<h1>No User ID found";
    }


?>


<php 
    ?>