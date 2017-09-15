<?php
include("head.php");
if(isset($_REQUEST['search']))
{
	include('config.php');
	$search=$_POST['search'];
	$query=mysql_query("select * from student where name like='$search'",$con);
	if($query)
	{
		whiles
		
	}
	else
	{
		echo mysql_error();	
	}
}
?>

<center>
<div class="panel panel-default"  style="height:auto; width:500px;">
 <div class="panel-heading"><h3>Search</h3></div> 

<form class="form-horizontal" role="form" method="post"><fieldset disabled><div class="form-group"></div> 
   </fieldset> 
   <div class="form-group has-success"> 
      <label class="col-sm-1 control-label" for="inputSuccess"> 
        
      </label> 
      <div class="col-sm-6"> 
         <input type="text" class="form-control" id="inputSuccess"  placeholder="enter name or email" name="search"required/> 
      </div> 
   </div> 
  
   <div class="form-group has-success"> 
     	
      <div class="col-sm-10"> 
         <input type="submit" class="form-control" id="inputSuccess" value="Search" name="search"> 
      </div> 
   </div> 
  </form>  
</div></center>
<?php
include("foot.php");
?>