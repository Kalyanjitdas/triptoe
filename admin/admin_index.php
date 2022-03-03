<?php
include '../dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index.admin-panel</title>
    <?php include '../css_links.php';?>
    <style>
        .btn {
            width: 95%;
            height: 50px;
            text-align: center;
            margin: 10px;
            font-size: 20px;
           
            border-radius: 5px;
            box-shadow: 1px 1px 10px grey;
        }
        .btn:hover
        {
           
        }
        .row {
            margin-top: 2%;
        }
        h2
        {
            text-align: center;
        }
        .card
        {
            padding: 2%;
        }
    </style>
</head>

<body>
<?php include'admin_nav.php'?>
    <div class="container-fluid">
        
        <br>
        <h2>Welcome Admin</h2>
        <div class="row">

            <div class="com-lg-2 col-md-2">
                <a href="editplaces.php"><div class="btn btn-success" onclick="audio.play()">Edit Places</div></a>
                <a href="addplaces.php"><div class="btn btn-success" onclick="audio.play()">Add places</div></a>                
                <a href=""><div class="btn btn-success"onclick=" sellerOpt(event, 'Uttarakhand')"; onclick="audio.play()">Add event</div></a>                
                <a href=""><div class="btn btn-success" onclick="audio.play()">btn demo</div></a>                
                <div class="btn btn-success" onclick="audio.play()">btn demo</div>
            </div>
            <div class="com-lg-10 col-md-10">
            <div id="Uttarakhand" class="tabcontent">
                    <h3 style="font-weight: 600;color: #536162;">Add a new event</h3>
                    <div class="card">
                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data"
                            role="form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="Event_name">Event Name</label>
                                        <input type="text" class="form-control" id="Event_name"
                                            aria-describedby="emailHelp" Placeholder="Enter Event name"
                                            name="event_name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <input type="text" class="form-control" id="location"
                                            aria-describedby="emailHelp" placeholder="Enter event location"
                                            name="event_location">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 small-box">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Upload photograph</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1"
                                            name="photo">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="product_description">Event description</label>
                                        <textarea class="form-control" id="product_description" rows="3" name="edesc"
                                            placeholder="Describe the event"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="product_description">Start Date</label>
                                        <input type="date" class="form-control" id="location" name="event_start">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="product_description">End Date</label>
                                        <input type="date" class="form-control" id="location" name="event_end">
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-success mr-auto ml-auto" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function sellerOpt(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
    <script>
        var audio = new Audio("audio_btn_click.mp3");

        audio.oncanplaythrough = function () {
            audio.play();
         }        
    </script>

<?php 

include '../dbcon.php';

if (isset($_POST['submit'])) {
	$evnt_name = $_POST['event_name'];
    $file = $_FILES['photo'];
    $evnt_dsc = $_POST['edesc'];
	$evnt_strt = $_POST['event_start'];
    $evnt_end = $_POST['event_end'];
	$evnt_loc= $_POST['event_location'];
	
		
	

	//print_r($file);
	$filename = $file['name'];
	$filepath = $file['tmp_name'];
	$fileerror = $file['error'];

	if ($fileerror == 0 ) {
		$destfile = '../event_images/'.$filename;
		//echo "$destfile";	
		move_uploaded_file($filepath, $destfile);

        
        $insertquery = " insert into event(event_name,event_image,event_description,event_start,event_end,location) 
        values('$evnt_name','$destfile','$evnt_dsc','$evnt_strt','$evnt_end','$evnt_loc')";
        
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
	
}

?>
</body>

</html>