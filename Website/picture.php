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
   <link rel="stylesheet" href="picturestyle.css">
  <title>Upload Corner</title>
    <p id="head">IMAGE CENTRE</p>
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
  <form action="imageupload.php" method="post" enctype="multipart/form-data">
  <br><br>
    <div id="a1">IMAGE UPLOADER</div>
    <br><br>
    <div id="a2">
     <img src="images/icons/upload.png" alt="could not load image" height="20%" width="10%"/>
     <br><br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value=" UPLOAD " name="submit">
    <br><br>
    <h3>Supported files are JPG,JPEG,PNG and GIF.</h3>
    </div>
    <br><br>
</form>
  </div>
  <div id="a1">IMAGES</div>';
$end=' <br><br><br>
    <script type="text/javascript" language="javascript">
      var aax_size="728x90";
      var aax_pubname = "prskid1000-21";
      var aax_src="302";
    </script>
    <script type="text/javascript" language="javascript" src="http://c.amazon-adsystem.com/aax2/assoc.js"></script> </body>
</html>';

include('dbini.php');
$query="SELECT * FROM data";
$result=$mysqli->query($query);

$ele="";
while($row =$result->fetch_assoc()) 
{
$audio=$row['image'];
if($audio!='NULL')
{
$ele=$ele.'<br><div id="tg"><p>'.substr($audio,7).'</p>'.'<img src="'.$audio.'" height="20%" width="20%"><br><br></div>';
}
}
echo $page.$ele.$end;
?>