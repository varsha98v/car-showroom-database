<?php
connecttodb();
function connecttodb(){
$db_server='localhost';
$db_username='mydb';
$db_password='root123';
$db_name='mydb';
$link=mysqli_connect($db_server,$db_username,$db_password,$db_name);
if($link===FALSE)
{
die("ERROR:Could not connect.".mysqli_connect_error());
}
return $link;
}
?>
