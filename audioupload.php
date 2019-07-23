<?php
include('dbini.php');
$target_dir = "audios/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
    include('audio.php');
}

// Allow certain file formats
if($imageFileType != "wav" && $imageFileType != "mp3" && $imageFileType != "aac"
&& $imageFileType != "ogg" && $imageFileType != "wma") {
    echo "Sorry, only WAV,MP3,AAC,OGG and WMA files are allowed.";
    $uploadOk = 0;
    include('audio.php');
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    
       
    $query="INSERT INTO data(id, files,audio,video,image) VALUES ('NULL','NULL','".$target_file."','NULL','NULL')";
$result=$mysqli->query($query);
$mysqli->close();

        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        include('audio.php');
    } else {
        echo "Sorry, there was an error uploading your file.";
        include('audio.php');
    }
}
?>