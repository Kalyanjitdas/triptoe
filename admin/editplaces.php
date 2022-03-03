<?php include'../dbcon.php'?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View places</title>
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

        .card-img-top {
            height: 200px;
        }

        .card-body {
            padding-right: 0px;
        }

        .body-heading {
            height: 60px;
        }

        .body-desc {
            height: 250px;
            overflow: scroll;
            overflow-x: hidden;
        }
/* ==============css for the scroll bar================ */

        .body-desc::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        .body-desc::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 20px;
        }

        /* Handle */
        .body-desc::-webkit-scrollbar-thumb {
            background: #adadeb;
            border-radius: 10px;
        }

        /* Handle on hover */
        .body-desc::-webkit-scrollbar-thumb:hover {
            background: #8585e0;
        }

        .modify-btn {
            height: 10%;
            width: 40%;
            margin: 0;
            padding: 5px;
            display: inline;
            background-color: red;
            color: #fff;
        }

        .update-btn {
            margin-left: 42% !important;
            background-color: #007bff;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            text-decoration-line: none;
        }

        .button-class {
            margin-top: 2%;
        }
    </style>
</head>

<body>
    <?php include'admin_nav.php'?>
    <div class="container-fluid">


        <h1 style="text-align: center; margin-bottom: 5%;">Edit Tourist Destinations</h1>
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

                <!-- =================================================CONTENT FOR STATE UTTARAKHAND================== -->



                <div id="Uttarakhand" class="tabcontent">
                    <h3 style="font-weight: 600;color: #536162;">Places in uttarakhand</h3>
                    <div class="card">
                        <h5 style="font-weight: 600;color: #536162;">List of places added in Landscape Category</h5>
                        <div class="row">
                        <?php
                         $selectquery = "select * from  uttarakhand where category = 'landscape'";
                         $query = mysqli_query($con,$selectquery);
                        // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
                            <div class="col-lg-4 col-md-4">

                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="<?php echo $result['image'] ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="body-heading">
                                            <h4 class="card-title"><b><?php echo $result['place_name'] ?></b></h4>
                                        </div>
                                        <div class="body-desc">
                                            <p class="card-text"><?php echo $result['place_desc'] ?></p>
                                        </div>
                                        <div class="button-class">
                                            <a href="ukdelete.php?id=<?php echo $result['place_id']; ?>">
                                                <div class="btn btn-danger modify-btn">Delete</div>
                                            </a>
                                            <div class="btn btn-primary modify-btn update-btn">Update</div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                            <?php
                         }
                        ?>
                        </div>
                    </div>

                    <!--========================historical category====================== -->


                    <div class="card">
                        <h5 style="font-weight: 600;color: #536162;">List of places added in Historical Category</h5>
                        <div class="row">
                            <?php
                         $selectquery = "select * from  uttarakhand where category = 'historical'";
                         $query = mysqli_query($con,$selectquery);
                        // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
                            <div class="col-lg-4 col-md-4">

                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="<?php echo $result['image'] ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="body-heading">
                                            <h4 class="card-title"><b><?php echo $result['place_name'] ?></b></h4>
                                        </div>
                                        <div class="body-desc">
                                            <p class="card-text"><?php echo $result['place_desc'] ?></p>
                                        </div>
                                        <div class="button-class">
                                            <a href="ukdelete.php?id=<?php echo $result['place_id']; ?>">
                                                <div class="btn btn-danger modify-btn">Delete</div>
                                            </a>
                                            <div class="btn btn-primary modify-btn update-btn">Update</div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                            <?php
                         }
                        ?>
                        </div>
                    </div>


                    <!--=====================================Pilgrimage category====================== -->


                    <div class="card">
                        <h5 style="font-weight: 600;color: #536162;">List of places added in Pilgrimage Category</h5>
                        <div class="row">
                            <?php
                         $selectquery = "select * from  uttarakhand where category = 'pilgrimage'";
                         $query = mysqli_query($con,$selectquery);
                        // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
                            <div class="col-lg-4 col-md-4">

                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="<?php echo $result['image'] ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="body-heading">
                                            <h4 class="card-title"><b><?php echo $result['place_name'] ?></b></h4>
                                        </div>
                                        <div class="body-desc">
                                            <p class="card-text"><?php echo $result['place_desc'] ?></p>
                                        </div>
                                        <div class="button-class">
                                            <a href="ukdelete.php?id=<?php echo $result['place_id']; ?>">
                                                <div class="btn btn-danger modify-btn">Delete</div>
                                            </a>
                                            <div class="btn btn-primary modify-btn update-btn">Update</div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                            <?php
                         }
                        ?>
                        </div>
                    </div>


                    <!-- =====================================Archaeological category====================== -->


                    <div class="card">
                        <h5 style="font-weight: 600;color: #536162;">List of places added in Archaeological Category
                        </h5>
                        <div class="row">
                            <?php
                         $selectquery = "select * from  uttarakhand where category = 'Archaeological'";
                         $query = mysqli_query($con,$selectquery);
                        // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
                            <div class="col-lg-4 col-md-4">

                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="<?php echo $result['image'] ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="body-heading">
                                            <h4 class="card-title"><b><?php echo $result['place_name'] ?></b></h4>
                                        </div>
                                        <div class="body-desc">
                                            <p class="card-text"><?php echo $result['place_desc'] ?></p>
                                        </div>
                                        <div class="button-class">
                                            <a href="ukdelete.php?id=<?php echo $result['place_id']; ?>">
                                                <div class="btn btn-danger modify-btn">Delete</div>
                                            </a>
                                            <div class="btn btn-primary modify-btn update-btn">Update</div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                            <?php
                         }
                        ?>
                        </div>
                    </div>

                    <!-- =====================================Archaeological category====================== -->


                    <div class="card">
                        <h5 style="font-weight: 600;color: #536162;">List of places added in Adventure Category</h5>
                        <div class="row">
                            <?php
                         $selectquery = "select * from  uttarakhand where category = 'Adventure'";
                         $query = mysqli_query($con,$selectquery);
                        // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
                            <div class="col-lg-4 col-md-4">

                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="<?php echo $result['image'] ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="body-heading">
                                            <h4 class="card-title"><b><?php echo $result['place_name'] ?></b></h4>
                                        </div>
                                        <div class="body-desc">
                                            <p class="card-text"><?php echo $result['place_desc'] ?></p>
                                        </div>
                                        <div class="button-class">
                                            <a href="ukdelete.php?id=<?php echo $result['place_id']; ?>">
                                                <div class="btn btn-danger modify-btn">Delete</div>
                                            </a>
                                            <div class="btn btn-primary modify-btn update-btn">Update</div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                            <?php
                         }
                        ?>
                        </div>
                    </div>
                </div>
                <!-- ==============================uttarakhand ends here================================================ -->


                <!-- =========================================CONTENT FOR STATE RAJASTHAN================================-->




                <div id="Rajasthan" class="tabcontent">
                    <h3 style="font-weight: 600;color: #536162;">Places in Rajasthan </h3>
                    <!-- =====================================Archaeological category====================== -->
                    <div class="card">
                        <h5 style="font-weight: 600;color: #536162;">List of places added in Landscape Category</h5>
                        <div class="row">
                            <?php
                         $selectquery = "select * from  Rajasthan where category = 'Landscape'";
                         $query = mysqli_query($con,$selectquery);
                        // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
                            <div class="col-lg-4 col-md-4">

                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="<?php echo $result['image'] ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="body-heading">
                                            <h4 class="card-title"><b><?php echo $result['place_name'] ?></b></h4>
                                        </div>
                                        <div class="body-desc">
                                            <p class="card-text"><?php echo $result['description'] ?></p>
                                        </div>
                                        <div class="button-class">
                                            <a href="rjsthn_delete.php?id=<?php echo $result['place_id']; ?>">
                                                <div class="btn btn-danger modify-btn">Delete</div>
                                            </a>
                                            <div class="btn btn-primary modify-btn update-btn">Update</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <?php
                         }
                        ?>
                        </div>
                    </div>

                    <!-- =====================================Archaeological category====================== -->


                    <div class="card">
                        <h5 style="font-weight: 600;color: #536162;">List of places added in Archaeological Category
                        </h5>
                        <div class="row">
                            <?php
                         $selectquery = "select * from  rajasthan where category = 'Archaeological'";
                         $query = mysqli_query($con,$selectquery);
                        // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
                            <div class="col-lg-4 col-md-4">

                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="<?php echo $result['image'] ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="body-heading">
                                            <h4 class="card-title"><b><?php echo $result['place_name'] ?></b></h4>
                                        </div>
                                        <div class="body-desc">
                                            <p class="card-text"><?php echo $result['description'] ?></p>
                                        </div>
                                        <div class="button-class">
                                            <a href="rjsthn_delete.php?id=<?php echo $result['place_id']; ?>">
                                                <div class="btn btn-danger modify-btn">Delete</div>
                                            </a>
                                            <div class="btn btn-primary modify-btn update-btn">Update</div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                            <?php
                         }
                        ?>
                        </div>
                    </div>

                    <!-- =====================================Adventure category====================== -->


                    <div class="card">
                        <h5 style="font-weight: 600;color: #536162;">List of places added in Adventure Category</h5>
                        <div class="row">
                            <?php
                         $selectquery = "select * from  rajasthan where category = 'Adventure'";
                         $query = mysqli_query($con,$selectquery);
                        // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
                            <div class="col-lg-4 col-md-4">

                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="<?php echo $result['image'] ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="body-heading">
                                            <h4 class="card-title"><b><?php echo $result['place_name'] ?></b></h4>
                                        </div>
                                        <div class="body-desc">
                                            <p class="card-text"><?php echo $result['description'] ?></p>
                                        </div>
                                        <div class="button-class">
                                            <a href="rjsthn_delete.php?id=<?php echo $result['place_id']; ?>">
                                                <div class="btn btn-danger modify-btn">Delete</div>
                                            </a>
                                            <div class="btn btn-primary modify-btn update-btn">Update</div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                            <?php
                         }
                        ?>
                        </div>
                    </div>

                    <!-- =====================================Historical category====================== -->


                    <div class="card">
                        <h5 style="font-weight: 600;color: #536162;">List of places added in Historical Category</h5>
                        <div class="row">
                            <?php
                         $selectquery = "select * from  rajasthan where category = 'Historical'";
                         $query = mysqli_query($con,$selectquery);
                        // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
                            <div class="col-lg-4 col-md-4">

                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="<?php echo $result['image'] ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="body-heading">
                                            <h4 class="card-title"><b><?php echo $result['place_name'] ?></b></h4>
                                        </div>
                                        <div class="body-desc">
                                            <p class="card-text"><?php echo $result['description'] ?></p>
                                        </div>
                                        <div class="button-class">
                                            <a href="rjsthn_delete.php?id=<?php echo $result['place_id']; ?>">
                                                <div class="btn btn-danger modify-btn">Delete</div>
                                            </a>
                                            <div class="btn btn-primary modify-btn update-btn">Update</div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                            <?php
                         }
                        ?>
                        </div>
                    </div>

                    <!-- =====================================pilgrimage category====================== -->

                    <div class="card">
                        <h5 style="font-weight: 600;color: #536162;">List of places added in pilgrimage Category</h5>
                        <div class="row">
                        <?php
                         $selectquery = "select * from  rajasthan where category = 'pilgrimage'";
                         $query = mysqli_query($con,$selectquery);
                        // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
                            <div class="col-lg-4 col-md-4">

                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="<?php echo $result['image'] ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="body-heading">
                                            <h4 class="card-title"><b><?php echo $result['place_name'] ?></b></h4>
                                        </div>
                                        <div class="body-desc">
                                            <p class="card-text"><?php echo $result['description'] ?></p>
                                        </div>
                                        <div class="button-class">
                                            <a href="rjsthn_delete.php?id=<?php echo $result['place_id']; ?>">
                                                <div class="btn btn-danger modify-btn">Delete</div>
                                            </a>
                                            <div class="btn btn-primary modify-btn update-btn">Update</div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                            <?php
                         }
                        ?>
                        </div>
                    </div>

                </div>



                <!-- ======================================CONTENT FOR STATE MEGHALAYA================== -->



                <div id="Meghalaya" class="tabcontent">
                    <h3 style="font-weight: 600;color: #536162;">Places in Meghalaya</h3>
                    <div class="card">
                        <h5 style="font-weight: 600;color: #536162;">List of places added in Landscape Category</h5>
                        <div class="row">
                            <?php
                         $selectquery = "select * from  Meghalaya where category = 'Landscape'";
                         $query = mysqli_query($con,$selectquery);
                        // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
                            <div class="col-lg-4 col-md-4">

                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="<?php echo $result['image'] ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="body-heading">
                                            <h4 class="card-title"><b><?php echo $result['place_name'] ?></b></h4>
                                        </div>
                                        <div class="body-desc">
                                            <p class="card-text"><?php echo $result['description'] ?></p>
                                        </div>
                                        <div class="button-class">
                                            <div class="button-class">
                                                <a href="mldelete.php?id=<?php echo $result['place_id'];?>">
                                                    <div class="btn btn-danger modify-btn">Delete</div>
                                                </a>
                                                <div class="btn btn-primary modify-btn update-btn">Update</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <?php
                         }
                        ?>
                        </div>
                    </div>

                    <!-- =====================================Adventure category====================== -->

                    <div class="card">
                        <h5 style="font-weight: 600;color: #536162;">List of places added in Adventure Category</h5>
                        <div class="row">
                            <?php
                         $selectquery = "select * from  Meghalaya where category = 'Adventure'";
                         $query = mysqli_query($con,$selectquery);
                        // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
                            <div class="col-lg-4 col-md-4">

                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="<?php echo $result['image'] ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="body-heading">
                                            <h4 class="card-title"><b><?php echo $result['place_name'] ?></b></h4>
                                        </div>
                                        <div class="body-desc">
                                            <p class="card-text"><?php echo $result['description'] ?></p>
                                        </div>
                                        <div class="button-class">
                                            <a href="mldelete.php?id=<?php echo $result['place_id']; ?>">
                                                <div class="btn btn-danger modify-btn">Delete</div>
                                            </a>
                                            <div class="btn btn-primary modify-btn update-btn">Update</div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                            <?php
                         }
                        ?>
                        </div>
                    </div>

                    <!-- =====================================Historical category====================== -->

                    <div class="card">
                        <h5 style="font-weight: 600;color: #536162;">List of places added in Historical Category</h5>
                        <div class="row">
                            <?php
                         $selectquery = "select * from  Meghalaya where category = 'Historical'";
                         $query = mysqli_query($con,$selectquery);
                        // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
                            <div class="col-lg-4 col-md-4">

                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="<?php echo $result['image'] ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="body-heading">
                                            <h4 class="card-title"><b><?php echo $result['place_name'] ?></b></h4>
                                        </div>
                                        <div class="body-desc">
                                            <p class="card-text"><?php echo $result['description'] ?></p>
                                        </div>
                                        <div class="button-class">
                                            <a href="mldelete.php?id=<?php echo $result['place_id']; ?>">
                                                <div class="btn btn-danger modify-btn">Delete</div>
                                            </a>
                                            <div class="btn btn-primary modify-btn update-btn">Update</div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                            <?php
                         }
                        ?>
                        </div>
                    </div>

                    <!-- =====================================Archaeological category====================== -->

                    <div class="card">
                        <h5 style="font-weight: 600;color: #536162;">List of places added in Archaeological Category
                        </h5>
                        <div class="row">
                            <?php
                         $selectquery = "select * from  Meghalaya where category = 'Archaeological'";
                         $query = mysqli_query($con,$selectquery);
                        // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
                            <div class="col-lg-4 col-md-4">

                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="<?php echo $result['image'] ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="body-heading">
                                            <h4 class="card-title"><b><?php echo $result['place_name'] ?></b></h4>
                                        </div>
                                        <div class="body-desc">
                                            <p class="card-text"><?php echo $result['description'] ?></p>
                                        </div>
                                        <div class="button-class">
                                            <a href="mldelete.php?id=<?php echo $result['place_id']; ?>">
                                                <div class="btn btn-danger modify-btn">Delete</div>
                                            </a>
                                            <div class="btn btn-primary modify-btn update-btn">Update</div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                            <?php
                         }
                        ?>
                        </div>
                    </div>

                    <!-- ==============================================================pilgrimage category====================== -->

                    <div class="card">
                        <h5 style="font-weight: 600;color: #536162;">List of places added in pilgrimage Category</h5>
                        <div class="row">
                            <?php
                         $selectquery = "select * from  Meghalaya where category = 'pilgrimage'";
                         $query = mysqli_query($con,$selectquery);
                        // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
                            <div class="col-lg-4 col-md-4">

                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="<?php echo $result['image'] ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="body-heading">
                                            <h4 class="card-title"><b><?php echo $result['place_name'] ?></b></h4>
                                        </div>
                                        <div class="body-desc">
                                            <p class="card-text"><?php echo $result['description'] ?></p>
                                        </div>
                                        <div class="button-class">
                                            <a href="mldelete.php?id=<?php echo $result['place_id']; ?>">
                                                <div class="btn btn-danger modify-btn">Delete</div>
                                            </a>
                                            <div class="btn btn-primary modify-btn update-btn">Update</div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                            <?php
                         }
                        ?>
                        </div>
                    </div>

                </div>


<!-- ============================================================CONTENT FOR STATE TRIPURA================== -->


                <div id="Tripura" class="tabcontent">
                    <h3 style="font-weight: 600;color: #536162;">Places in Tripura</h3>
                    <div class="card">
                    <h5 style="font-weight: 600;color: #536162;">List of places added in pilgrimage Category</h5>
                        <div class="row">
                            <?php
                         $selectquery = "select * from  Tripura where category = 'pilgrimage'";
                         $query = mysqli_query($con,$selectquery);
                        // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
                            <div class="col-lg-4 col-md-4">

                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="<?php echo $result['image'] ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="body-heading">
                                            <h4 class="card-title"><b><?php echo $result['place_name'] ?></b></h4>
                                        </div>
                                        <div class="body-desc">
                                            <p class="card-text"><?php echo $result['description'] ?></p>
                                        </div>
                                        <div class="button-class">
                                            <a href="tpdelete.php?id=<?php echo $result['place_id'];?>">
                                                <div class="btn btn-danger modify-btn">Delete</div>
                                            </a>
                                            <div class="btn btn-primary modify-btn update-btn">Update</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <?php
                         }
                        ?>
                        </div>
                    </div>

                    <!-- ==============================================================Landscape category====================== -->

                    <div class="card">
                        <h5 style="font-weight: 600;color: #536162;">List of places added in Landscape Category</h5>
                        <div class="row">
                            <?php
                         $selectquery = "select * from  Tripura where category = 'Landscape'";
                         $query = mysqli_query($con,$selectquery);
                        // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
                            <div class="col-lg-4 col-md-4">

                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="<?php echo $result['image'] ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="body-heading">
                                            <h4 class="card-title"><b><?php echo $result['place_name'] ?></b></h4>
                                        </div>
                                        <div class="body-desc">
                                            <p class="card-text"><?php echo $result['description'] ?></p>
                                        </div>
                                        <div class="button-class">
                                            <a href="tpdelete.php?id=<?php echo $result['place_id']; ?>">
                                                <div class="btn btn-danger modify-btn">Delete</div>
                                            </a>
                                            <div class="btn btn-primary modify-btn update-btn">Update</div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                            <?php
                         }
                        ?>
                        </div>
                    </div>

                    <!-- ==============================================================Historical category====================== -->

                    <div class="card">
                        <h5 style="font-weight: 600;color: #536162;">List of places added in Historical Category</h5>
                        <div class="row">
                            <?php
                         $selectquery = "select * from  Tripura where category = 'Historical'";
                         $query = mysqli_query($con,$selectquery);
                        // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
                            <div class="col-lg-4 col-md-4">

                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="<?php echo $result['image'] ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="body-heading">
                                            <h4 class="card-title"><b><?php echo $result['place_name'] ?></b></h4>
                                        </div>
                                        <div class="body-desc">
                                            <p class="card-text"><?php echo $result['description'] ?></p>
                                        </div>
                                        <div class="button-class">
                                            <a href="tpdelete.php?id=<?php echo $result['place_id']; ?>">
                                                <div class="btn btn-danger modify-btn">Delete</div>
                                            </a>
                                            <div class="btn btn-primary modify-btn update-btn">Update</div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                            <?php
                         }
                        ?>
                        </div>
                    </div>

                    <!-- ==============================================================Archaeological category====================== -->

                    <div class="card">
                        <h5 style="font-weight: 600;color: #536162;">List of places added in Archaeological Category</h5>
                        <div class="row">
                            <?php
                         $selectquery = "select * from  Tripura where category = 'Archaeological'";
                         $query = mysqli_query($con,$selectquery);
                        // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
                            <div class="col-lg-4 col-md-4">

                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="<?php echo $result['image'] ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="body-heading">
                                            <h4 class="card-title"><b><?php echo $result['place_name'] ?></b></h4>
                                        </div>
                                        <div class="body-desc">
                                            <p class="card-text"><?php echo $result['description'] ?></p>
                                        </div>
                                        <div class="button-class">
                                            <a href="tpdelete.php?id=<?php echo $result['place_id']; ?>">
                                                <div class="btn btn-danger modify-btn">Delete</div>
                                            </a>
                                            <div class="btn btn-primary modify-btn update-btn">Update</div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                            <?php
                         }
                        ?>
                        </div>
                    </div>

                    <!-- ==============================================================Adventure category====================== -->

                    <div class="card">
                        <h5 style="font-weight: 600;color: #536162;">List of places added in Adventure Category</h5>
                        <div class="row">
                            <?php
                         $selectquery = "select * from  Tripura where category = 'Adventure'";
                         $query = mysqli_query($con,$selectquery);
                        // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
                            <div class="col-lg-4 col-md-4">

                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="<?php echo $result['image'] ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="body-heading">
                                            <h4 class="card-title"><b><?php echo $result['place_name'] ?></b></h4>
                                        </div>
                                        <div class="body-desc">
                                            <p class="card-text"><?php echo $result['description'] ?></p>
                                        </div>
                                        <div class="button-class">
                                            <a href="tpdelete.php?id=<?php echo $result['place_id']; ?>">
                                                <div class="btn btn-danger modify-btn">Delete</div>
                                            </a>
                                            <div class="btn btn-primary modify-btn update-btn">Update</div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                            <?php
                         }
                        ?>
                        </div>
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