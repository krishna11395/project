<?php
include('config.php');
 echo $id=$_GET['id'];
$quer="delete from student where id='$id'";
mysql_query($quer,$con);
if($quer)
{
	echo"sucess";
	echo"<br>";
}
header('location:view.php');

?>