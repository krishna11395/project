<?php
include("head.php");

?>
<br/><table class="table  table-hover table-bordered" align="center"> 
      <thead> 
      <tr> 
         <th>Id</th> 
         <th>Name</th> 
         <th>Address</th> 
		 <th>City</th>
		 <th>Contact no</th>
		 <th>Email</th>
		 <th>Image</th>
		 <th>Edit</th>
		 <th>Delete</th>
      </tr> 
   </thead> 
   <tbody> 
   <?php
    include('config.php');
	$que1="select * from student";
	  $res1=mysql_query($que1);
	  while($row=mysql_fetch_array($res1)){
	
   ?>
      <tr> <td><?php echo $row['id']; ?></td> 
         
         <td><?php echo $row['name']; ?></td> 
         <td><?php echo $row['address']; ?></td> 
         <td><?php echo $row['city']; ?></td> 
         <td><?php echo $row['contactno']; ?></td> 
         <td><?php echo $row['email']; ?></td> 
         <td><?php echo $row['image']; ?></td> 
		 <td><a href="">Edit</a></td>
		 <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
         
		  </tr> 
     <?php
	 }
	 ?>
</table><br/> 
<?php
include("foot.php");
?>