<?php

session_start();

require 'db-connection.php';

$_SESSION['user'] = "";



// create login functionality 
if(isset($_POST['login-btn'])){
    $username = $_POST[''];
    $password = $_POST['password'];

    $query = "SELECT * FROM SELECT * FROM `users` WHERE ``";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);

    if(mysqli_num_rows($result) == 1){
        // set session & user information
        $_SESSION['user'] = $firtName." ".$lastName;
    }

    }

    // registration
     if(isset($_POST['btn-register'])){
        
        $firtName = $_POST['FirstName'];
        $lastName = $_POST['LastName'];
        $dob = $_POST['dob'];
        $clan = $_POST['clan'];
        $village = $_POST['village'];
        $llg = $_POST['llg'];
        $ward = $_POST['ward'];
        $province = $_POST['province'];
        $phone = $_POST['phone'];
        $contactAdress = $_POST['contactAdress'];
        $district = $_POST['district'];
        $userType = $_POST['user-type'];
        $gender = $_POST['gender'];

        $sql_insert_query = "INSERT INTO `users` (`UserID`, `FirstName`, `LastName`, `DOB`, `Gender`, `Clan`, `Village`, `District`, `LLG`, `Ward`, `Province`, `Phone`, `Contact`, `UserType`) VALUES (NULL, '$firtName', '$lastName', '$dob', '$gender', '$clan', '$village', '$district', '$llg', '$ward', '$province', '$phone', '$contactAdress', '$userType');";

        if(mysqli_query($db,$sql_insert_query)){
            $_SESSION['message'] = "User Registered";
              header("Location:../login.html");

        }else{
            $_SESSION['message'] = "Error Registering User";
        }




    }




?>