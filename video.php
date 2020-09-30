<?php
$page='<html>
  <head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145378502-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag("js", new Date());

  gtag("config", "UA-145378502-1");
</script>
   <link rel="stylesheet" href="videostyle.css">
     <title>Upload Centre</title>
    <p id="head">VIDEO CENTRE</p>
  </head>
  <body id="body">
  <nav id="nav">
  <a href="index.html">Home</a>
  <a href="audio.php">Audio</a>
  <a href="video.php">Video</a>
  <a href="picture.php">Picture</a>
  <a href="file.php">File</a>
  </nav>
  <br><br><br>
  <script type="text/javascript" language="javascript">
      var aax_size="728x90";
      var aax_pubname = "prskid1000-21";
      var aax_src="302";
    </script>
    <script type="text/javascript" language="javascript" src="http://c.amazon-adsystem.com/aax2/assoc.js"></script>
   <div>
  <form action="videoupload.php" method="post" enctype="multipart/form-data">
  <br><br>
    <div id="a1">VIDEO UPLOADER</div>
    <br><br>
    <div id="a2">
     <img src="images/icons/upload.png" alt="could not load image" height="20%" width="10%"/>
     <br><br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value=" UPLOAD " name="submit">
    <br><br>
    <h3>Supported files are MP4,3GP,MOV and AVI</h3>
    </div>
    <br><br>
</form>
  </div>
  <div id="a1">VIDEOS</div>';
 $end=' <br><br><br> <script type="text/javascript" language="javascript">
      var aax_size="728x90";
      var aax_pubname = "prskid1000-21";
      var aax_src="302";
    </script>
    <script type="text/javascript" language="javascript" src="http://c.amazon-adsystem.com/aax2/assoc.js"></script></body>
</html>';

include('dbini.php');
$query="SELECT * FROM data";
$result=$mysqli->query($query);

$ele="";
while($row =$result->fetch_assoc()) 
{
$audio=$row['video'];
if($audio!='NULL')
{
$ele=$ele.'<br><div id="tg"><p>'.substr($audio,7).'</p>'.'<video controls preload="none"><source src="'.$audio.'"></video><br><br></div>';
}
}
echo $page.$ele.$end;
?>