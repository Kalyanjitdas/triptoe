<!DOCTYPE html>
<html lang="en">
<?php
include '../dbcon.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Hotel</title>
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
</body>
<?php
if(isset($_POST['submit']))
{
    $hotel_name = $_POST['Hotel_name'];
    $hotel_location = $_POST['hotel_location'];
    $hotel_state = $_POST['hotel_state'];
    $hotel_city = $_POST['hotel_city'];
    $rating = $_POST['rating'];
    $Hotel_desc = $_POST['Hotel_desc'];
    $images = $_FILES['image'];        
    $checkbox = $_POST['facility_caheck_box'];
    $check=implode(", ",$checkbox);
    
    $insert=INSERT INTO `hotel_table`( `Hotel_name`, `Hotel_location`, `Hotel_city`, 
    `Hotel_image`, `Hotel_rating`, `Hotel_description`, `Hotel_facilities`, `hotel_state`) 
    VALUES ('$hotel_name','$hotel_location','','','','','','');

$gallery_path='';

    if(!empty($_FILES['files']['name'][0])){
        $files = $_FILES['files'];
        
        $uploaded = array();
        $failed = array();
        
        $allowed = array('jpg','jpeg','png');
        
        foreach($files['name'] as $position => $file_name){
            
            $file_tmp = $files['tmp_name'][$position];
            $file_size = $files['size'][$position];
            $file_error = $files['error'][$position];
            
            $file_ext = explode('.',$file_name);
            $file_ext=strtolower(end($file_ext));
            
            if(in_array($file_ext, $allowed)){
                
                if($file_error ===0){
                    // File Size Limit
                    if($file_size <=12000000 ){
                    
                    $file_name_new = uniqid('',true).'.'.$file_ext;
                   //File Location
                    $file_destination = 'uploads/'.$file_name_new;
     
                    if(move_uploaded_file($file_tmp,$file_destination)){
                        $uploaded[$position] = $file_destination;
                        
                        $info = getimagesize($ImagePath);
                        $imageWidth=$info[0];$imageHeight=$info[1];
                 
                        $gallery_path .=$file_destination.';;';
                 
                        // Code to store image path in DB
                 //       image_insert_DB($MIS,$file_destination,$ImagePath,$ImagePath_web,$imageWidth,$imageHeight,'inspt');                    
                   
                   
                    }else{
                      $failed[$position] = "[$file_name] is failed to upload";					
                    }
                    
                    
                    
                }
                else{
                    $failed[$position] = "[$file_name] is too large";
                }
                }else{
                    $failed[$position] = "[$file_name] error with code {$file_error}";
                }
                
                
                
            } else{
                $failed[$position] = "[$file_name] file extension '{file_ext}' is not allowed";
            }
            
        }
        
        if(!empty($uploaded)){
            print_r($uploaded);
        }
        if(!empty($failed)){
            print_r($failed);
        }
        
        
    }    

// Insert cover and gallery info

}




function image_insert_DB($ID,$ImagePath,$type){
	$query_insert_image="INSERT INTO `school_inspection_photos`(`user_ID`, `image_path`, `type`) 
    VALUES ('$ID','$ImagePath','$type')";
	$libb = new library();
	$libb->executeQuery($query_insert_image);
}





?>
</html>