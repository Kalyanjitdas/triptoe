<?php 

include '../dbcon.php';

if (isset($_POST['submit'])) {
	$plc_name = $_POST['place_name'];
	$plc_loc = $_POST['place_location'];
	$plc_cat = $_POST['dest_catg'];
	$plc_dsc = $_POST['pdesc'];
	$file = $_FILES['photo'];	
	

	//print_r($file);
	$filename = $file['name'];
	$filepath = $file['tmp_name'];
	$fileerror = $file['error'];

	if ($fileerror == 0 ) {
		$destfile = 'admin_upload/'.$filename;
		//echo "$destfile";	
		move_uploaded_file($filepath, $destfile);
        $insertquery = " insert into uttarakhand(place_name,location,place_desc,image,category) 
        values('$plc_name','$plc_loc','$plc_dsc','$destfile','$plc_cat')";

		$query = mysqli_query($con, $insertquery);
		if ($query) {
			 ?>
            <script>
                alert("Insertion Successful");
            </script>
            <?php
             echo "<script>location.href='admin_index.php' </script>";

		}
		else{
			 ?>
            <script>
                alert("Insertion unSuccessful");
            </script>
            <?php
		}
	}


}

else
{
	echo "Press Submit button";
}

?>