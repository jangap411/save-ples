<?php
    	date_default_timezone_set('Asia/Manila');
    	require_once 'db-connection.php';

        $query = "";

    	if(ISSET($_POST['file-upload-btn'])){
    		$file_name = $_FILES['file']['name'];
    		$file_temp = $_FILES['file']['tmp_name'];
    		$file_size = $_FILES['file']['size'];
            $courseId = $_POST['courseID'];
            $fileType = $_POST['courseFileType'];
     
    		if($file_size < 50000000){
    			$file = explode('.', $file_name);
    			$end = end($file);
    			$allowed_ext = array('txt', 'doc', 'docx', 'pdf','ppt');
    			if(in_array($end, $allowed_ext)){
    				$name = date("Ymd").time();
    				$location = '../uploads/'.$name.".".$end;

                    $query = "INSERT INTO `course_files` (`fileID`, `fileName`, `location`, `courseID`, `fileType`) VALUES (NULL, '$file_name', '$location', '$courseId','$fileType');";

    				if(move_uploaded_file($file_temp, $location)){
    					mysqli_query($db, $query) or die(mysqli_error());
    					echo "<script>alert('File Uploaded')</script>";
    					echo "<script>window.location = '../add-course-resource.php';</script>";

    				}
    			}else{
    				echo "<script>alert('Wrong File format')</script>";
    				echo "<script>window.location = '../add-course-resource.php';</script>";

    			}
    		}else{
    			echo "<script>alert('File too large to upload')</script>";
    			echo "<script>window.location = '../add-course-resource.php';</script>";

    		}
    	}
    ?>