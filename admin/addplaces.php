<?php include'../dbcon.php'?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add places</title>
    <?php include'../css_links.php'?>
    <style>
        body {
            font-family: Courier;

        }

        .btn {
            width: 95%;
            margin: 10px;
            font-size: 20px;
            font-weight: 700;
            box-shadow: 1px 1px 10px grey;
            background-color: #f5f0f0;
            color: #536162;
            cursor: pointer;
            transition: 0.3s;
            display: block;
            padding: 15px 16px;

        }

        h1 {
            text-align: center;
            font-family: Cursive;
            font-weight: 700;
        }

        .row {
            margin-top: 3%;
        }

        .card {
            font-family: monospace;
            font-size: 18px;
            padding: 2%;
        }
    </style>
</head>

<body>
    <?php include'admin_nav.php'?>
    <div class="container-fluid">


        <h1 style="text-align: center; margin-bottom: 5%;">Add New Tourist Destinations</h1>
        <div class="row">

            <div class="col-lg-2 col-md-2">
                <div class="tab">
                    <button id="defaultOpen" class="tablinks btn btn-success"
                        onclick=" sellerOpt(event, 'Uttarakhand');audio.play();">Uttarakhand</button>
                    <button class="tablinks btn btn-success"
                        onclick=" sellerOpt(event, 'Rajasthan');audio.play();">Rajasthan</button>
                    <button class="tablinks btn btn-success"
                        onclick=" sellerOpt(event, 'Meghalaya');audio.play();">Meghalaya</button>
                    <button class="tablinks btn btn-success"
                        onclick=" sellerOpt(event, 'Tripura');audio.play();">Tripura</button>
                </div>

            </div>

            <div class="col-lg-10 col-md-10">


                <!-- =================CONTENT FOR STATE UTTARAKHAND================== -->



                <div id="Uttarakhand" class="tabcontent">
                    <h3 style="font-weight: 600;color: #536162;">Add places in uttarakhand</h3>
                    <div class="card">
                        <form method="POST" action="uk_upload.php" enctype="multipart/form-data"
                            role="form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="place_name">Place Name</label>
                                        <input type="text" class="form-control" id="place_name"
                                            aria-describedby="emailHelp" placeholder="Enter place name"
                                            name="place_name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <input type="text" class="form-control" id="location"
                                            aria-describedby="emailHelp" placeholder="Enter place location"
                                            name="place_location">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 small-box">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Upload photograph</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1"
                                            name="photo">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 small-box">
                                    <div class="">
                                        <label class="mr-sm-2" for="discount_applied">Destination Category</label>
                                        <select class="custom-select mr-sm-2" id="discount_applied" name="dest_catg">
                                            <option selected>Choose a category</option>
                                            <option value="Pilgrimage">Pilgrimage site</option>
                                            <option value="Landscape">Landscape</option>
                                            <option value="Historical">Historical monument</option>
                                            <option value="Archaeological">Archaeological site</option>
                                            <option value="Adventure">Adventure event</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="product_description">Place description</label>
                                        <textarea class="form-control" id="product_description" rows="3" name="pdesc"
                                            placeholder="Describe the place"></textarea>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-success mr-auto ml-auto" name="submit">Submit</button>
                        </form>
                    </div>
                </div>



                <!-- =================CONTENT FOR STATE RAJASTHAN================== -->




                <div id="Rajasthan" class="tabcontent">
                    <h3 style="font-weight: 600;color: #536162;">Add places in Rajasthan </h3>
                    <div class="card">
                        <form method="POST" action="rajasthan_upload.php" enctype="multipart/form-data"
                            role="form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="place_name">Place Name</label>
                                        <input type="text" class="form-control" id="place_name"
                                            aria-describedby="emailHelp" placeholder="Enter place name"
                                            name="place_name_r">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <input type="text" class="form-control" id="location"
                                            aria-describedby="emailHelp" placeholder="Enter place location"
                                            name="place_location_r">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 small-box">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Upload photograph</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1"
                                            name="photo_r">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 small-box">
                                    <div class="">
                                        <label class="mr-sm-2" for="discount_applied">Destination Category</label>
                                        <select class="custom-select mr-sm-2" id="discount_applied" name="dest_catg_r">
                                            <option selected>Choose a category</option>
                                            <option value="Pilgrimage">Pilgrimage site</option>
                                            <option value="Landscape">Landscape</option>
                                            <option value="Historical">Historical monument</option>
                                            <option value="Archaeological">Archaeological site</option>
                                            <option value="Adventure">Adventure event</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="product_description">Place description</label>
                                        <textarea class="form-control" id="product_description" rows="3" name="pdesc_r"
                                            placeholder="Describe the place"></textarea>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-success mr-auto ml-auto" name="submit">Submit</button>
                        </form>
                    </div>
                </div>



                <!-- =================CONTENT FOR STATE MEGHALAYA================== -->



                <div id="Meghalaya" class="tabcontent">
                    <h3 style="font-weight: 600;color: #536162;">Add places in Meghalaya</h3>
                    <div class="card">
                        <form method="POST" action="mghlya_upload.php" enctype="multipart/form-data"
                            role="form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="place_name">Place Name</label>
                                        <input type="text" class="form-control" id="place_name"
                                            aria-describedby="emailHelp" placeholder="Enter place name"
                                            name="place_name_ml">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <input type="text" class="form-control" id="location"
                                            aria-describedby="emailHelp" placeholder="Enter place location"
                                            name="place_location_ml">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 small-box">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Upload photograph</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1"
                                            name="photo_ml">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 small-box">
                                    <div class="">
                                        <label class="mr-sm-2" for="discount_applied">Destination Category</label>
                                        <select class="custom-select mr-sm-2" id="discount_applied" name="dest_catg_ml">
                                            <option selected>Choose a category</option>
                                            <option value="Pilgrimage">Pilgrimage site</option>
                                            <option value="Landscape">Landscape</option>
                                            <option value="Historical">Historical monument</option>
                                            <option value="Archaeological">Archaeological site</option>
                                            <option value="Adventure">Adventure event</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="product_description">Place description</label>
                                        <textarea class="form-control" id="product_description" rows="3" name="pdesc_ml"
                                            placeholder="Describe the place"></textarea>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-success mr-auto ml-auto" name="submit">Submit</button>
                        </form>
                    </div>
                </div>


                <!-- =================CONTENT FOR STATE TRIPURA================== -->


                <div id="Tripura" class="tabcontent">
                    <h3 style="font-weight: 600;color: #536162;">Add places in Tripura</h3>
                    <div class="card">
                    <form method="POST" action="trpra_upload.php" enctype="multipart/form-data"
                            role="form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="place_name">Place Name</label>
                                        <input type="text" class="form-control" id="place_name"
                                            aria-describedby="emailHelp" placeholder="Enter place name"
                                            name="place_name_tp">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <input type="text" class="form-control" id="location"
                                            aria-describedby="emailHelp" placeholder="Enter place location"
                                            name="place_location_tp">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 small-box">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Upload photograph</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1"
                                            name="photo_tp">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 small-box">
                                    <div class="">
                                        <label class="mr-sm-2" for="discount_applied">Destination Category</label>
                                        <select class="custom-select mr-sm-2" id="discount_applied" name="dest_catg_tp">
                                            <option selected>Choose a category</option>
                                            <option value="Pilgrimage">Pilgrimage site</option>
                                            <option value="Landscape">Landscape</option>
                                            <option value="Historical">Historical monument</option>
                                            <option value="Archaeological">Archaeological site</option>
                                            <option value="Adventure">Adventure event</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="product_description">Place description</label>
                                        <textarea class="form-control" id="product_description" rows="3" name="pdesc_tp"
                                            placeholder="Describe the place"></textarea>
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
</body>

</html>