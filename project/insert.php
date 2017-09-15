<?php
include("head.php");
//error_reporting(0);
if(isset($_REQUEST['submit']))
{
	include('config.php');
	$name=$_POST['name'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$cno=$_POST['cno'];
	$email=$_POST['email'];
	$img=$_POST['img'];	
	//move_uploaded_file($_FILES['img']["tmp_name"],"img/".$img);
	move_uploaded_file($_FILES["img"]["tmp_name"]);
		
		

	
	$query=mysql_query("insert into student (name,address,city,contactno,email,image) values('$name','$address','$city','$cno','$email','$img')",$con);
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
      <label class="col-sm-1 control-label" for="inputSuccess" > 
         Address 
      </label> 
      <div class="col-sm-6"> 
         <input type="text" class="form-control" id="inputSuccess" name="address" required/> 
      </div> 
   </div> 
   <div class="form-group has-success"> 
      <label class="col-sm-1 control-label" for="inputSuccess"> 
         City
      </label> 
      <div class="col-sm-6"> 
         <input type="text" class="form-control" id="inputSuccess" name="city" required/> 
      </div> 
   </div> 
   <div class="form-group has-success"> 
      <label class="col-sm-1 control-label" for="inputSuccess"> 
         Mobile no
      </label> 
      <div class="col-sm-6"> 
         <input type="number" class="form-control" id="inputSuccess" name="cno" required/> 
      </div> 
   </div> 
   <div class="form-group has-success"> 
      <label class="col-sm-1 control-label" for="inputSuccess"> 
         Email 
      </label> 
      <div class="col-sm-6"> 
         <input type="email" class="form-control" id="inputSuccess" name="email" required/> 
      </div> 
   </div> 
   <div class="form-group has-success"> 
      <label class="col-sm-1 control-label" for="inputSuccess"> 
         Photo
      </label> 
      <div class="col-sm-6"> 
         <input type="image"  name="img" /> 
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
