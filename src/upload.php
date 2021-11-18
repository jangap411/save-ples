<?php

require 'db-connection.php';

if (isset($_POST['submit'])) {
    
    $name = $_FILES['file']['name'];
    $temp = $_FILES['file']['tmp_name'];

    move_uploaded_file($temp,"uploads/".$name);
    $url =  "http://localhost/startbootstrap-sb-admin-2/uploads/$name";

    $result = mysqli_query("INSERT INTO `videos` VALUES('','$name','$url');",$db);

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