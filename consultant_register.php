<?php include 'dbcon.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultant form</title>
    <?php include 'css_links.php';?>
    <style>
        .card {
            padding: 2%;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <h3 style="font-weight: 600;color: #536162;">Register as a travel consultant</h3>
        <div class="card">
            <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data"
                role="form">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="place_name">First Name</label>
                            <input type="text" class="form-control" id="fname" placeholder="Enter First name"
                                name="fname">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="location">Last Name</label>
                            <input type="text" class="form-control" id="location" placeholder="Enter Last Name"
                                name="lname">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="location">Email</label>
                            <input type="email" class="form-control" id="location" placeholder="Enter email"
                                name="email">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="location">Phone</label>
                            <input type="text" class="form-control" id="location" placeholder="Enter phone number"
                                name="phone">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 small-box">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload photograph</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
                        </div>
                    </div>
                    <!-- <div class="col-lg-6 col-md-6 small-box">
                        <div class="">
                            <label class="mr-sm-2" for="discount_applied">Register as</label>
                            <select class="custom-select mr-sm-2" id="discount_applied" name="dest_catg">
                                <option selected>Choose a category</option>
                                <option value="Pilgrimage">Pilgrimage site</option>
                                <option value="Landscape">Landscape</option>
                                <option value="Historical">Historical monument</option>
                                <option value="Archaeological">Archaeological site</option>
                                <option value="Adventure">Adventure event</option>
                            </select>
                        </div>
                    </div> -->
                    <div class="col-lg-6 col-md-6 small-box">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload your certificates</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image[]" multiple>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="product_description">Describe your self</label>
                            <textarea class="form-control" id="product_description" rows="3" name="cdesc"
                                placeholder="Describe why you are the best consultant"></textarea>
                        </div>
                    </div>


                </div>
                <button type="submit" class="btn btn-success mr-auto ml-auto" name="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
<?php 

if (isset($_POST['submit'])) 
{
	$fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $file = $_FILES['photo'];
	$c_dsc = $_POST['cdesc'];		
	

	//print_r($file);
	$filename = $file['name'];
	$filepath = $file['tmp_name'];
	$fileerror = $file['error'];	
	$destfile = 'employees_images/'.$filename;    
	//echo "$destfile";	
	move_uploaded_file($filepath, $destfile);



    $file='';
    $file_temp='';
    $location="employees_images/";
    $data='';    
	 $file='';
	 $file_tmp='';
	 $location="employees_images/";
	 $data='';
	 foreach($_FILES['image']['name'] as $key=>$val)
	{
	 $file=$_FILES['image']['name'][$key];
	 $file_tmp=$_FILES['image']['tmp_name'][$key];
	 move_uploaded_file($file_tmp,$location.$file);
	 $data .=$file." ";
	}
 $insertquery = " INSERT INTO `consultant_table`(`c_fname`, `c_lname`, `c_email`,
  `c_phone`, `c_photo`, `C_certificates`, `description`) VALUES ('$fname','$lname','$email',
  '$phone','$destfile','$data','$c_dsc')";

		$query = mysqli_query($con, $insertquery);
		if ($query) {
			 ?>
                <script>
                 alert("Insertion Successful");
                </script>
            <?php
             echo "<script>location.href='consultant_list.php </script>";

		    }
		else{
			 ?>
            <script>
            alert("Insertion unSuccessful");
            </script>
            <?php
		    }
	


}

else
{
	
}

?>

</html>