<?php 

include 'dbcon.php';

if (isset($_POST['submit'])) {
	$pname = $_POST['pname'];
	$pprice = $_POST['pprice'];
	$pdesc = $_POST['pdesc'];
	$pdiscount = $_POST['pdiscount'];
	$file = $_FILES['photo'];
	$deldate = $_POST['deldate'];
	
	

	//print_r($file);
	$filename = $file['name'];
	$filepath = $file['tmp_name'];
	$fileerror = $file['error'];

	if ($fileerror == 0 ) {
		$destfile = 'upload/'.$filename;
		//echo "$destfile";	
		move_uploaded_file($filepath, $destfile);
        $insertquery = " insert into products(p_name,p_desc,price,discount,delivery,image) 
        values('$pname','$pdesc','$pprice','$pdiscount','$deldate','$destfile')";

		$query = mysqli_query($con, $insertquery);
		if ($query) {
			 ?>
            <script>
                alert("Insertion Successful");
            </script>
            <?php
             echo "<script>location.href='seller.php' </script>";

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