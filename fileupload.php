<?php
include('dbini.php');
$target_dir = "files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
    include('file.php');
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    
       
    $query="INSERT INTO data(id, files,audio,video,image) VALUES ('NULL','".$target_file."','NULL','NULL','NULL')";
$result=$mysqli->query($query);
$mysqli->close();

        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        include('file.php');
    } else {
        echo "Sorry, there was an error uploading your file.";
         include('file.php');
    }
}
?>