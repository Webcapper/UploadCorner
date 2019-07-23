<?php
$page='<html>
  <head>
     <link rel="stylesheet" href="audiostyle.css">
     <title>Upload Corner</title>
    <p id="head">AUDIO CENTRE</p>
  </head>
  <body id="body">
  <nav id="nav">
  <a href="index.html">Home</a>
  <a href="audio.php">Audio</a>
  <a href="video.php">Video</a>
  <a href="picture.php">Picture</a>
  <a href="file.php">File</a>
  </nav>
   <div>
  <form action="audioupload.php" method="post" enctype="multipart/form-data">
  <br><br>
    <div id="a1">AUDIO UPLOADER</div>
    <br><br>
    <div id="a2">
     <img src="images/icons/upload.png" alt="could not load image" height="20%" width="10%"/>
     <br><br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value=" UPLOAD " name="submit">
    <br><br>
    <h3>Supported files are WAV,MP3,ACC,OGG and WMA.</h3>
    </div>
    <br><br>
</form>
  </div>
  <div id="a1">AUDIOS</div>';
 $end=' </body>
</html>';

include('dbini.php');
$query="SELECT * FROM data";
$result=$mysqli->query($query);

$ele="";
while($row =$result->fetch_assoc()) 
{
$audio=$row['audio'];
if($audio!='NULL')
{
$ele=$ele.'<br><div id="tg"><p>'.substr($audio,7).'</p>'.'<audio controls preload="none"><source src="'.$audio.'"></audio><br><br></div>';
}
}
echo $page.$ele.$end;
?>