<?php 
 
 $server = getenv("host");
 $user = getenv("user");
 $password =getenv("password");
 $db = getenv("dbname");

 $con = mysqli_connect($server,$user,$password,$db);
 if($con)
 {
	
 }
 else
 {
 	 	?>
 	<script>
 		alert("connection unsuccessful");
 	</script>
 	<?php
 }

 ?>