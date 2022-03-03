<?php
include '../dbcon.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add hotel</title>
    <?php include'../css_links.php';?>
    <style>
        .card {
            padding: 4%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 style="font-weight: 600;color: #536162;">Register your Hotel</h3>
        <div class="card">
            <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data" role="form">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="Hotel_name">Hotel Name</label>
                            <input type="text" class="form-control" id="Hotel_name" aria-describedby="emailHelp"
                                placeholder="Enter Hotel name" name="Hotel_name">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" class="form-control" id="location" aria-describedby="emailHelp"
                                placeholder="Enter hotel location" name="hotel_location">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 small-box">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload cover photograph</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1"
                             name="img" >
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 small-box">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload Gallery photograph</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" 
                            name="image[]" multiple>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 small-box">
                        <div class="">
                            <label class="mr-sm-2" for="discount_applied">State</label>
                            <select class="custom-select mr-sm-2" id="discount_applied" name="hotel_state">
                                <option selected>Choose a state</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Tripura">Tripura</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="location">City</label>
                            <input type="text" class="form-control" id="location" aria-describedby="emailHelp"
                                placeholder="Enter city" name="hotel_city">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 small-box">
                        <div class="">
                            <label class="mr-sm-2" for="rating">Rating</label>
                            <select class="custom-select mr-sm-2" id="rating" name="rating">
                                <option selected>Choose a category</option>
                                <option value="1">1 star</option>
                                <option value="2">2 star</option>
                                <option value="3">3 star</option>
                                <option value="4">4 star</option>
                                <option value="5">5 star</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="Hotel_description">Hotel description</label>
                            <textarea class="form-control" id="Hotel_description" rows="3" name="Hotel_desc"
                                placeholder="Describe the Hotel"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h6>Hotel Facilities</h6>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <input type="checkbox" id="wifi" name="facility_caheck_box[]" value="<i class='fas fa-wifi'></i>&nbsp;Free WiFi">
                                <label for="wifi"> Free WiFi</label><br>
                                <input type="checkbox" id="parkingr" name="facility_caheck_box[]" value="<i class='fas fa-parking'></i>&nbsp;Free parking">
                                <label for="parkingr"> Free parking</label><br>
                                <input type="checkbox" id="Spa" name="facility_caheck_box[]" value="<i class='fas fa-hot-tub'></i>&nbsp;Spa and wellness centre">
                                <label for="Spa"> Spa and wellness centre</label><br><br>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="checkbox" id="Restaurant" name="facility_caheck_box[]" value="<i class='fas fa-utensils'></i>&nbsp;Restaurant">
                                <label for="Restaurant"> Restaurant</label><br>
                                <input type="checkbox" id="Room service" name="facility_caheck_box[]" value="<i class='fas fa-concierge-bell'></i>&nbsp;Free Room service">
                                <label for="Room service"> Free Room service</label><br>
                                <input type="checkbox" id="Atm" name="facility_caheck_box[]" value="<i class='fas fa-money-check-alt'></i>&nbsp;Atm available">
                                <label for="Atm"> Atm available</label><br><br>
                            </div>
                        </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-success mr-auto ml-auto" name="submit">Submit</button>
            </form>
        </div>
    </div>
<?php
if(isset($_POST['submit']))
{
    $hotel_name = $_POST['Hotel_name'];
    $hotel_location = $_POST['hotel_location'];
    $hotel_state = $_POST['hotel_state'];
    $hotel_city = $_POST['hotel_city'];
    $rating = $_POST['rating'];
    $Hotel_desc = $_POST['Hotel_desc'];         
    $checkbox = $_POST['facility_caheck_box'];
    $check=implode(";;",$checkbox);
    $cover_img = $_FILES['img'];

    $filename = $cover_img['name'];
	$filepath = $cover_img['tmp_name'];
	$fileerror = $cover_img['error'];

    $destfile = 'hotel_images/'.$filename;		
	move_uploaded_file($filepath, $destfile);



    $file='';
    $file_temp='';
    $location="hotel_images/";
    $data='';    
	 $file='';
	 $file_tmp='';
	 $location="hotel_images/";
	 $data='';
	 foreach($_FILES['image']['name'] as $key=>$val)
	{
	 $file=$_FILES['image']['name'][$key];
	 $file_tmp=$_FILES['image']['tmp_name'][$key];
	 move_uploaded_file($file_tmp,$location.$file);
	 $data .=$file." ";
	}
   $check =  str_replace("'","''",$check);	
	$insertquery = " insert into hotel_table(Hotel_name,Hotel_location,Hotel_city,Hotel_image,Hotel_rating,Hotel_description,Hotel_facilities,hotel_state,cover_image) 
        values('$hotel_name','$hotel_location','$hotel_city','$data','$rating','$Hotel_desc','$check','$hotel_state','$destfile')";
 
$query =-1;
try{
		$query = mysqli_query($con, $insertquery);
        echo mysqli_error($con);
    
    }catch(Exception $e){
        echo $e;
    }
        
        if ($query==1) {
			 ?>
            <script>
                alert("Insertion Successful");
            </script>
            <?php           

		}
		else{
			 ?>
            <script>
               alert("Insertion unSuccessful");
            </script>
            <?php
		}

}
?>
</body>
</html>