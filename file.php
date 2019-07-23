<?php
$page='<html>
  <head>
   <link rel="stylesheet" href="filestyle.css">
     <title>Upload Corner</title>
    <p id="head">FILE CENTRE</p>
  </head>
  <body id="body">
  <nav id="nav">
  <a href="index.html">Home</a>
  <a href="audio.php">Audio</a>
  <a href="video.php">Video</a>
  <a href="picture.php">Picture</a>
  <a href="file.html">File</a>
  </nav>
   <div>
  <form action="fileupload.php" method="post" enctype="multipart/form-data">
  <br><br>
    <div id="a1">FILE UPLOADER</div>
    <br><br>
    <div id="a2">
     <img src="images/icons/upload.png" alt="could not load image" height="20%" width="10%"/>
     <br><br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value=" UPLOAD " name="submit">
    <br><br>
    <h3>All file types are supported<h3>
    </div>
    <br><br>
</form>
  </div>
  <div id="a1">FILES</div>';
$end=' </body>
</html>';

include('dbini.php');
$query="SELECT * FROM data";
$result=$mysqli->query($query);

$ele="";
while($row =$result->fetch_assoc()) 
{
$audio=$row['files'];
if($audio!='NULL')
{
$ele=$ele.'<br><div id="tg"><p>'.substr($audio,7).'</p>'.'<a href="'.$audio.'">Click Here</a><br><br></div>';
}
}
echo $page.$ele.$end;
?>