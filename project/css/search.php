<?php
include("head.php");
if(isset($_REQUEST['submit']))
{
	include('config.php');
	$name=$_POST['name'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$cno=$_POST['cno'];
	$email=$_POST['email'];
	$photo=$_POST['photo'];	
	$query=mysql_query("insert into student (name,address,city,contactno,email) values('$name','$address','$city','$cno','$email')",$con);
	if($query)
	{
		echo"<h3 style='color:purple'>"."Inserted Successfully"."</h3>";
	}
	else
	{
		echo mysql_error();	
	}
}
?>

<center>
<div class="panel panel-default"  style="height:auto; width:500px;">
 <div class="panel-heading"><h3>Register</h3></div> 

<form class="form-horizontal" role="form" method="post"><fieldset disabled><div class="form-group"></div> 
   </fieldset> 
   <div class="form-group has-success"> 
      <label class="col-sm-1 control-label" for="inputSuccess"> 
        Name 
      </label> 
      <div class="col-sm-6"> 
         <input type="text" class="form-control" id="inputSuccess" name="name" required/> 
      </div> 
   </div> 
  
   <div class="form-group has-success"> 
     	
      <div class="col-sm-6"> 
         <input type="submit" class="form-control" id="inputSuccess" value="Add" name="submit"> 
      </div> 
   </div> 
  </form>  
</div></center>
<?php
include("foot.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
