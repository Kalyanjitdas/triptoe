
<?php 

include '../dbcon.php';

if (isset($_POST['submit'])) {
	$plc_name = $_POST['place_name_tp'];
	$plc_loc = $_POST['place_location_tp'];
	$plc_cat = $_POST['dest_catg_tp'];
	$plc_dsc = $_POST['pdesc_tp'];
	$file = $_FILES['photo_tp'];	
	

	//print_r($file);
	$filename = $file['name'];
	$filepath = $file['tmp_name'];
	$fileerror = $file['error'];

	if ($fileerror == 0 ) {
		$destfile = 'admin_upload/'.$filename;
		//echo "$destfile";	
		move_uploaded_file($filepath, $destfile);
        $insertquery = " insert into tripura(place_name,location,description,image,category) 
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