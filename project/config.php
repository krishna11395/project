<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
	echo mysql_error();
}
/*else
{
 echo"conneted";
}*/
$db=mysql_select_db('college');
?>	
