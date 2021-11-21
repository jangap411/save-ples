<?php



require 'db-connection.php';

session_start();

// $_SESSION['user'] = "";



// create login functionality 
if(isset($_POST['login-btn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userType = $_POST['user-type'];

    if($userType == 1){
        // student login
        $query = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password';";
        $result = mysqli_query($db, $query);
        // $row = mysqli_fetch_array($result);
        $row = mysqli_fetch_assoc($result);



        if(mysqli_num_rows($result) == 1){
            // set session & user information
            $_SESSION['UserID'] = $row['userID'];
            $_SESSION['user'] = $row['name']; //$username;
            
            header('location:../index-student.php');
        }else{
            $_SESSION['message'] = "Invalid Username or password";
            echo '<script>alert("Invalid Username or password");</script>';
            header('location:../login.php');

        }
    }else if($userType == 2){
        // teacher/trainer login
    }else{
        // admin login

        // $query = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
        $query = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password';";
        $result = mysqli_query($db, $query);
        // $row = mysqli_fetch_array($result);
        $row = mysqli_fetch_assoc($result);



        if(mysqli_num_rows($result) == 1){
            // set session & user information
            $_SESSION['UserID'] = $row['userID'];
            $_SESSION['user'] = $row['name']; //$username;
            
            header('location:../index.php');
        }else{
            $_SESSION['message'] = "Invalid Username or password";
            echo '<script>alert("Invalid Username or password");</script>';
            header('location:../login.php');

        }
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

    function registerUser(){

    }


    // get the user details
    function readUserDetails(){

        global $db;
        $query = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    }

    // register add couse

    if(isset($_POST['btn-register-course'])){
        
    }


    // logout 
     if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['userSession']);
        header("Location: ../login.php");
    }



?>