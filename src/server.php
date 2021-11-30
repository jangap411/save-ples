<?php



require 'db-connection.php';

session_start();

// $_SESSION['user'] = "";



// create login functionality 
if(isset($_POST['login-btn'])){
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $userType = mysqli_real_escape_string($db,$_POST['user-type']);

    if($userType == 1){
        // student login
        // SELECT * FROM `users` WHERE `email`='jack@email.com' AND `password`='jack' AND `UserType`=1;
        $query = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password' AND `UserType`=$userType;";
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
            // header('location:../login.php');
            echo "<script>window.location='../login.php'</script>";

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
            // echo "<script>alert('Teacher functionality is still under development')</script>";
            header('location:../index.php');
        }else{
            $_SESSION['message'] = "Invalid Username or password";
            echo '<script>alert("Invalid Username or password");</script>';
            echo "<script> window.location ='../login.php';</script>";

        }
    }

    

}


// user registration
if(isset($_POST['btn-register'])){
    
    $firstName = mysqli_real_escape_string($db,$_POST['FirstName']);
    $lastName = mysqli_real_escape_string($db,$_POST['LastName']);
    $dob = mysqli_real_escape_string($db,$_POST['dob']);
    $clan = mysqli_real_escape_string($db,$_POST['clan']);
    $village = mysqli_real_escape_string($db,$_POST['village']);
    $llg = mysqli_real_escape_string($db,$_POST['llg']);
    $ward = mysqli_real_escape_string($db,$_POST['ward']);
    $province = mysqli_real_escape_string($db,$_POST['province']);
    $phone = mysqli_real_escape_string($db,$_POST['phone']);
    $contactAddress = mysqli_real_escape_string($db,$_POST['contactAdress']);
    $district = mysqli_real_escape_string($db,$_POST['district']);
    $userType = mysqli_real_escape_string($db,$_POST['user-type']);
    $gender = mysqli_real_escape_string($db,$_POST['gender']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $username = mysqli_real_escape_string($db,$_POST['username']);

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
        echo "<script>alert('Registered Successfully');</script>";
        header("Location:../login.php");

    }else{
        // echo "Error Registering User".mysqli_error($db);
        $_SESSION['message'] = "Error Registering User".mysqli_error($db);
        echo "<script>window.location.href = '../register.html';</script>";

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
        $course_name = mysqli_real_escape_string($db,$_POST['courseName']);
        $course_descrpt = mysqli_real_escape_string($db,$_POST['courseDescrpt']);
        $skillset = mysqli_real_escape_string($db,$_POST['skillset']);
        $trainerId = mysqli_real_escape_string($db,$_POST['trainerId']);
        $dateAdded = mysqli_real_escape_string($db,$_POST['addDate']);
        $passMark = mysqli_real_escape_string($db,$_POST['passMark']);
        $max_tries = mysqli_real_escape_string($db, $_POST['attempts']);
        $approve = mysqli_real_escape_string($db,$_POST['approve']);
        $tags = mysqli_real_escape_string($db,$_POST['tag']);

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
        echo "<script>alert('Success, records saved');window.location.href = '../addCourse.php';</script>";
        // header("Location:../addCourse.php");
    }else{
        $_SESSION['message'] = "Error, records not saved";
        echo "<script>alert('Error, records not saved');</script>";
        echo "<script>window.location.href = '../addCourse.php';</script>";

    }


        
    }

    // approve course material
    if(isset($_POST['approve-btn'])){
        $_course_id = mysqli_real_escape_string($db,$_GET['']);
        $_skillset_id = mysqli_real_escape_string($db,$_GET['']);
        
        $approve_aql = "UPDATE `Courses` SET `approved` = '1' WHERE `Courses`.`CourseID` = $_course_id AND `Courses`.`Skillsets_SkillID` = $_skillset_id;";


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
        $skillName = mysqli_real_escape_string($db,$_POST['skillset']);
        $skillsetDescription = mysqli_real_escape_string($db,$_POST['skillDescription']);
        $roles = mysqli_real_escape_string($db,$_POST['skillsetRoles']);

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
        $_SESSION['courseId'] = mysqli_real_escape_string($db,$_GET['course']);
        $_SESSION['courseName'] = $_GET['n'];
        // echo "<script>alert('{$_GET['course']}');</script>";
        echo "<script>window.location = '../add-course-resource.php';</script>";

    }

    // open student course resource
    if(isset($_GET['mycourse'])){
        $_SESSION['courseId'] = mysqli_real_escape_string($db,$_GET['mycourse']);
        $_SESSION['courseName'] = mysqli_real_escape_string($db,$_GET['name']);

        // echo "<script>alert('{$_GET['course']}');</script>";
        echo "<script>window.location = '../my-course-resources.php';</script>";

    }

    // open watch video page
    if(isset($_GET['fileid'])){
        $_SESSION['fileId'] = mysqli_real_escape_string($db,$_GET['fileid']);
        // echo "<script>alert('{$_GET['fileid']}');</script>";
        echo "<script>window.location = '../admin-watch-video.php';</script>";

    }

    // student watch
    if(isset($_GET['fid'])){
        $_SESSION['fileId'] = mysqli_real_escape_string($db,$_GET['fid']);
        // echo "<script>alert('{$_GET['fileid']}');</script>";
        echo "<script>window.location = '../watch-video.php';</script>";

    }

    // delete course resource
    if(isset($_GET['del_cfile'])){
        $course_file_id = mysqli_real_escape_string($db,$_GET['del_cfile']);

        $del_file_query = "DELETE FROM `course_files` WHERE `course_files`.`fileID` = $course_file_id";
         
        if(mysqli_query($db,   $del_file_query)){
            // echo "<script>alert('Course approved');</script>";
            echo "<script>window.location = '../add-course-resource.php'</script>";
        }else{
            echo "<script>alert('Error Removing File');</script>";
            echo "<script>window.location = '../add-course-resource.php'</script>";
        }
 
    }

    // remove course from db
    if(isset($_GET['r_course'])){
        $cid = mysqli_real_escape_string($db,$_GET['r_course']);
        $fid = mysqli_real_escape_string($db,$_GET['r_sid']);

        $query = "DELETE FROM `Courses` WHERE `Courses`.`CourseID` = 4 AND `Courses`.`Skillsets_SkillID` = 2";

        echo "<script>alert('$cid');</script>";
        echo "<script>alert('{$fid}');</script>";
        echo "<script>window.location='../see-courses.php';</script>";
        
    }

    // approve  a course
    if(isset($_GET['approve'])){
        $courseId = mysqli_real_escape_string($db,$_GET['approve']);
        $skillsetId = mysqli_real_escape_string($db,$_GET['skillID']);

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
        $courseID = mysqli_real_escape_string($db,$_GET['enroll']);
        $studentID = mysqli_real_escape_string($db,$_GET['std']);

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

/*
    select count for the 

*/

    function getTotalNumbers($sql,$fieldName){
        global $db;

        // $sql = "SELECT COUNT(`UserID`) FROM `users` WHERE `UserType`=1;";
        $query = mysqli_query($db, $sql);

        $data = mysqli_fetch_assoc($query);
        // return $data['COUNT(`UserID`)'];
        return $data[$fieldName];


    }

    // logout 
    if (isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['userSession']);
        header("Location: ../login.php");
    }



?>