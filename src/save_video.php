<?php

    date_default_timezone_set('Pacific/Port_Moresby');
    require_once 'db-connection.php';


    
    if (isset($_POST['video-upload-btn'])) {
        $file_name = $_FILES['video']['name'];
        $file_temp = $_FILES['video']['tmp_name'];
        $file_size = $_FILES['video']['size'];
        $courseId = $_POST['courseID'];
        $fileType = $_POST['courseFileType'];
        
        
        if($file_size < 50000000){
            $file = explode('.',$file_name);
            $end = end($file);
            $allowed_ext = array('avi','flv','wmv','mp4');
            
            if(in_array($end,$allowed_ext)){
                $name = date('Ymd').time();
                $location = '../uploads/'.$name.".".$end;
                
                $query = "INSERT INTO `course_files` (`fileID`, `fileName`, `location`, `courseID`, `fileType`) VALUES (NULL, '$file_name', '$location', '$courseId','$fileType');";

                
                if(move_uploaded_file($file_temp,$location)){
                    mysqli_query($db,$query);

                    echo "<script>alert('Video Uploaded');</script>";
                    echo "<script>window.location = '../add-course-resource.php';</script>";
                }else{
                    
                    echo "<script>alert('Wrong Video format');</script>";
                    echo "<script>window.location = '../add-course-resource.php';</script>";
                    
                }
            }else{
                echo "<script>alert('File format not allowed');</script>";
                echo "<script>window.location = '../add-course-resource.php';</script>";
            }
        }else{
            echo "<script>alert('File too large to upload');</script>";
            echo "<script>window.location = '../add-course-resource.php';</script>";
        }
    }
?>