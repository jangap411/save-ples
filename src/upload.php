<?php

require 'db-connection.php';

// $con = mysqli_connect("localhost",'root','','igo');

if (isset($_POST['submit'])) {
    
//    $id = $_POST['id'];
    $file = $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"./uploads/".$_FILES['file']['name']);

    $query = "INSERT INTO `videos` (`id`, `name`, `url`) VALUES (NULL, '$file', '$file');";

    if(mysqli_query($db,$query)){
        echo "<script>alert('success!');</script>";
    }else{
        echo "<script>alert('Error!');</script>";

    }

}


?>

<a href="videos.php">videos</a>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="upload" name="submit">
</form>

<?php

if(isset($_POST['submit'])){
    echo "<br/>".$name."has been uploaded";
}

?>