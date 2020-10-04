<?php
include('dbini.php');
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
    include('picture.php');
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    include('picture.php');
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    
    
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    
    $query="INSERT INTO data(id, files,audio,video,image) VALUES ('NULL','NULL','NULL','NULL','".$target_file."')";
$result=$mysqli->query($query);
$mysqli->close();

        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        include('picture.php');
    } else {
        echo "Sorry, there was an error uploading your file.";
        include('picture.php');
    }
}
?>