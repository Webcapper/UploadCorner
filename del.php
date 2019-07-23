<?php
$ff=$_POST["filed"];
if(file_exists($ff))
{
echo "Error during deletion of file ".$ff;
}
else
{
unlink($ff);
include('dbini.php');   
$query="DELETE FROM `data` WHERE ".$ff;
$result=$mysqli->query($query);
if($result)echo "File deleted Successfully ".$ff;
$mysqli->close();
}
?>