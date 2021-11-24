<?php



require 'db-connection.php';

session_start();

// $_SESSION['user'] = "";



// create login functionality 
if(isset($_POST['login-btn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $userType = $_POST['user-type'];

    if($userType == 1){
        // student login
        
        $query = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password';";
        $result = mysqli_query($db, $query);
        // $row = mysqli_fetch_array($result);
        $row = mysqli_fetch_assoc($result);



        if(mysqli_num_rows($result) == 1){
            // set session & user information
            $_SESSION['UserID'] = $row['UserID'];
            $_SESSION['user'] = $row['username']; //$username;
            
            header('location:../index-student.php');
        }else{
            $_SESSION['message'] = "Invalid Username or password";
            echo '<script>alert("Invalid Username or password");</script>';
            header('location:../login.php');

        }
    }else if($userType == 2){
        // teacher/trainer login
        echo "<script>alert('Teacher functionality is still under development')</script>";
        echo "<script> window.location ='../login.php';</script>";
    }else{
        // admin login

        // $query = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
        $query = "SELECT * FROM `admin` WHERE `email`='$email' AND `password`='$password';";
        $result = mysqli_query($db, $query);
        // $row = mysqli_fetch_array($result);
        $row = mysqli_fetch_assoc($result);



        if(mysqli_num_rows($result) == 1){
            // set session & user information
            $_SESSION['UserID'] = $row['userID'];
            $_SESSION['user'] = $row['name']; //$username;
            echo "<script>alert('Teacher functionality is still under development')</script>";
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
    
    $firstName = $_POST['FirstName'];
    $lastName = $_POST['LastName'];
    $dob = $_POST['dob'];
    $clan = $_POST['clan'];
    $village = $_POST['village'];
    $llg = $_POST['llg'];
    $ward = $_POST['ward'];
    $province = $_POST['province'];
    $phone = $_POST['phone'];
    $contactAddress = $_POST['contactAdress'];
    $district = $_POST['district'];
    $userType = $_POST['user-type'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];

    // $sql_insert_query = "INSERT INTO `users` (`UserID`, `FirstName`, `LastName`, `email`, `username`, `password`, `DOB`, `Gender`, `Clan`, `Village`, `District`, `LLG`, `Ward`, `Province`, `Phone`, `Contact`, `UserType`) VALUES (NULL, '$firtName', '$lastName', '$email', '$username', '$password', '$dob', '$gender', '$clan', '$village', '$district', '$llg', '$ward', '$province', '$contactAdress', '$userType');";

    $sql_insert_query = "INSERT INTO `users`(
        `UserID`,
        `FirstName`,
        `LastName`,
        `email`,
        `username`,
        `password`,
        `DOB`,
        `Gender`,
        `Clan`,
        `Village`,
        `District`,
        `LLG`,
        `Ward`,
        `Province`,
        `Phone`,
        `Contact`,
        `UserType`
    )
    VALUES(
        NULL,
        '$firstName',
        '$lastName',
        '$email',
        '$username',
        '$password',
        '$dob',
        '$gender',
        '$clan',
        '$village',
        '$district',
        '$llg',
        '$ward',
        '$province',
        '$phone',
        '$contactAddress',
        '$userType'
);";

    if(mysqli_query($db,$sql_insert_query)){
        $_SESSION['message'] = "User Registered";
            header("Location:../login.php");

    }else{
        echo "Error Registering User";
        $_SESSION['message'] = "Error Registering User".mysqli_error($db);
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
        $course_name = $_POST['courseName'];
        $course_descrpt = $_POST['courseDescrpt'];
        $skillset = $_POST['skillset'];
        $trainerId = $_POST['trainerId'];
        $dateAdded = $_POST['addDate'];
        $passMark = $_POST['passMark'];
        $max_tries = $_POST['attempts'];
        $approve = $_POST['approve'];
        $tags = $_POST['tag'];

        $sql_insert_course_query = "INSERT INTO `Courses`(
            `CourseID`,
            `CourseName`,
            `Course_description`,
            `TrainerID`,
            `DateAAdded`,
            `PassMark`,
            `MaxAttempts`,
            `Tag`,
            `Approved`,
            `Skillsets_SkillID`
            )
    VALUES(
        NULL,
        '$course_name',
        '$course_descrpt',
        '$trainerId',
        '$dateAdded',
        '$passMark',
        '$max_tries',
        '$tags',
        '$approve',
        '$skillset'
    )";

    if(mysqli_query($db, $sql_insert_course_query)){
        $_SESSION['message'] = "Success, records saved";
        echo "<script>alert('Success, records saved');window.location.href = 'http://localhost/saveples/addCourse.php';</script>";
        // header("Location:../addCourse.php");
    }else{
        $_SESSION['message'] = "Error, records not saved";
        echo "<script>alert('Error, records not saved');</script>";
        // window.location.href = 'http://localhost/saveples/addCourse.php';

    }


        
    }

    // approve course material
    if(isset($_POST['approve-btn'])){
        
        $approve_aql = "UPDATE `Courses` SET `approved` = '1' WHERE `Courses`.`CourseID` = 1 AND `Courses`.`Skillsets_SkillID` = 1;";


    }


    // select all teachers
    function getAllTrainer(){
        global $db;

        $sql_selectTrainer_query = "SELECT * FROM `users` WHERE `UserType`=2;";
        $result = mysqli_query($db, $sql_select_query);
    }

    // get all students 
    function getAllStudents(){
        global $db;

        $sql_select_query = "SELECT * FROM `users` WHERE `UserType`=1;";

    }

    // add skill set function 
    if(isset($_POST['add-skillset'])){ 
        $skillName = $_POST['skillset'];
        $skillsetDescription = $_POST['skillDescription'];
        $roles = $_POST['skillsetRoles'];

        $sql_insert_skill_query = "INSERT INTO `Skillsets`(
            `SkillID`,
            `SkillName`,
            `SkillDescription`,
            `Roles`
        )
            VALUES(
                NULL, 
                '$skillName', 
                '$skillsetDescription', 
                '$roles'
            )";

            // 
            if($result = mysqli_query($db, $sql_insert_skill_query)){
                $_SESSION['message'] = 'skill added successfully';
                echo "<script>alert('skill added successfully');</script>";
                header("Location:../add-skill-sets.php");
            }else{
                $_SESSION['message'] = 'Error adding skill set';
                echo "<script>alert('Error adding skill set);</script>";
                header("Location:../add-skill-sets.php");
            }
    }

    // get course information to upload resources mycourse
    if(isset($_GET['course'])){
        $_SESSION['courseId'] = $_GET['course'];
        $_SESSION['courseName'] = $_GET['n'];
        // echo "<script>alert('{$_GET['course']}');</script>";
        echo "<script>window.location = '../add-course-resource.php';</script>";

    }

    // open student course resource
    if(isset($_GET['mycourse'])){
        $_SESSION['courseId'] = $_GET['mycourse'];
        $_SESSION['courseName'] = $_GET['name'];

        // echo "<script>alert('{$_GET['course']}');</script>";
        echo "<script>window.location = '../my-course-resources.php';</script>";

    }

    // open watch video page
    if(isset($_GET['fileid'])){
        $_SESSION['fileId'] = $_GET['fileid'];
        // echo "<script>alert('{$_GET['fileid']}');</script>";
        echo "<script>window.location = '../admin-watch-video.php';</script>";

    }

    // student watch
    if(isset($_GET['fid'])){
        $_SESSION['fileId'] = $_GET['fid'];
        // echo "<script>alert('{$_GET['fileid']}');</script>";
        echo "<script>window.location = '../watch-video.php';</script>";

    }

    // delete course resource
    if(isset($_GET['del_cfile'])){
        $course_file_id = $_GET['del_cfile'];

        $del_file_query = "DELETE FROM `course_files` WHERE `course_files`.`fileID` = $course_file_id";
         
        if(mysqli_query($db,   $del_file_query)){
            // echo "<script>alert('Course approved');</script>";
            echo "<script>window.location = '../add-course-resource.php'</script>";
        }else{
            echo "<script>alert('Error Removing File');</script>";
            echo "<script>window.location = '../add-course-resource.php'</script>";
        }
        

        
    }



    // approve  a course
    if(isset($_GET['approve'])){
        $courseId = $_GET['approve'];
        $skillsetId = $_GET['skillID'];

        $update_sql_query = "UPDATE `Courses` SET `approved` = 'true' WHERE `Courses`.`CourseID` =$courseId AND `Courses`.`Skillsets_SkillID` = $skillsetId;";

        if(mysqli_query($db,  $update_sql_query)){
            echo "<script>alert('Course approved');</script>";
            echo "<script>window.location = '../see-courses.php'</script>";
        }else{
            echo "<script>alert('Error Updating');</script>";
            echo "<script>window.location = '../see-courses.php'</script>";
        }
    }

    // enroll to a course
    if(isset($_GET['enroll'])){
        $courseID = $_GET['enroll'];
        $studentID = $_GET['std'];

        $query = "INSERT INTO `enrollment` (`studentId`, `courseID`) VALUES ('$studentID', '$courseID')";
        $result = mysqli_query($db, $query);

        if($result){
            echo "<script>alert('Enroll to course');</script>";
            echo "<script>window.location = '../see-approved-courses.php';</script>";
        }else{
            echo "<script>alert('Enroll to course');</script>";
            echo "<script>window.location = '../see-approved-courses.php';</script>";
        }

    }

    // logout 
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['userSession']);
        header("Location: ../login.php");
    }



?>