<?php 
 
 $server = "localhost";
 $user = "root";
 $password = "";
 $db = "triptoe";

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