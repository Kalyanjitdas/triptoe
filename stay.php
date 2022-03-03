<?php include'dbcon.php';
session_start();
error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'css_links.php';?>
    <title>Discover</title>
    <style>
        .top-hr {
            width: 80%;
            height: 20px;
            margin-top: 0;
            padding: 0;
        }

        .card {
            height: 150px;
            width: 96%;
            margin: 0 0 10% 5%;
        }

        .card:hover {
            cursor: pointer;
        }

        .state-name {
            text-align: center;
            font-family: verdana;
            font-size: 20px;
            font-weight: 900;
            margin-top: auto;
            margin-bottom: auto;
            color: #fff;
            text-transform: none;
            opacity: 1;
        }

        .card:before {
            content: '';
            display: block;
            position: absolute;
            height: 0%;
            width: 100%;
            bottom: 0;
            transition: height 0.5s ease-out;
            background: rgba(0, 0, 0, 0.5);
        }

        .card:hover:before {
            height: 100%;
        }

        .card:nth-child(1) {
            background-image: url('images/akshay-syal-5vDTocCCutE-unsplash.jpg');
            background-size: cover;
        }

        .card:nth-child(2) {
            background-image: url('images/udypr7.jpg');
            background-size: cover;
        }

        .card:nth-child(3) {
            background-image: url('images/meghalaya_1.jpg');
            background-size: cover;
        }

        .card:nth-child(4) {
            background-image: url('images/neermahal1.jpg');
            background-size: cover;
        }

        .clickable {
            height: 85vh;
            overflow: auto;
            margin-top: 2%;
        }

        .items {
            height: 89vh;
            overflow: auto;
            margin: 0;
            padding: 0;
        }

        .row {
            margin-bottom: 0;
        }

        /* css for changing cards */
        .title {
            color: #1a1a1a;
            text-align: center;
            margin-bottom: 10px;
        }

        .heading-img {
            width: 30%;
            margin: -2.5% 0 0 30%;

        }

        .item-heading {
            word-spacing: -0.15em;
            font-weight: 300;
            margin: 0 0 0 2%;
            padding: 0;

        }

        .item-heading span {
            font-weight: 800;

        }

        .placename-box {
            max-width: 70%;
        }

        .hotel-view {
            margin: 0 0 2% 0;
            border-radius: 10px;
            box-shadow: 2px 2px 20px #ebebeb;
        }

        .hotel-container {
            float: left;
        }

        .hotel_img {
            width: 100%;
            height: 300px;
            background-image: cover;
        }

        .hotel-description {
            margin-top: 3%;
        }

        .hotel-button {
            background-color: rgb(68 84 164);
            color: #fff;
            margin: 3% 0 0 76%;
            padding: 6px 35px 6px 35px;
            border: 3px solid #fff;
            -webkit-box-shadow: 0 0 1px 3px rgb(68 84 164);
            box-shadow: 0 0 1px 3px rgb(68 84 164);

        }

        .hotel-name {
            font-size: 25px;
            font-weight: 700;
            text-transform: uppercase;
            color: rgb(68 84 164);
        }

        .hotel-rating
            {
            display:flex !important;
            margin: 0;
            padding: 0;
            }

        .hotel-review {
            font-size: 15px;
            font-weight: 700;
            color: rgb(68 84 164);
            display: contents;
        }
        .hotel-description
        {
            height: 245px;
            overflow: scroll;
            overflow-x: hidden;
        }
        .hotel-button:hover
        {
            background-color: rgb(39 56 144);
        }
        a:hover
        {
            text-decoration:none;
            color:#fff;
        }
        /* ==============css for the scroll bar================ */

        .hotel-description::-webkit-scrollbar {
            width: 8px;
        }

        /* Track */
        .hotel-description::-webkit-scrollbar-track {
            box-shadow: inset rgb(39 56 144);
            border-radius: 20px;
        }

        /* Handle */
        .hotel-description::-webkit-scrollbar-thumb {
            background: grey;
            border-radius: 10px;
        }

        /* Handle on hover */
        .hotel-description::-webkit-scrollbar-thumb:hover {
            background: #8585e0;
        }
    </style>
</head>

<body>
    <?php include'nav.php';?>
    <hr class="top-hr">
    <div class="container-fluidd">
        <div class="row">

            <div class="col-lg-2 col-md-10 col-sm-12 clickable">
                <div class="card" onclick="sellerOpt(event, 'Uttarakhand')" id="defaultOpen">
                    <p class="state-name">Uttarakhand</p>
                </div>

                <div class="card" onclick="sellerOpt(event, 'Rajasthan')">
                    <p class="state-name">Rajasthan</p>
                </div>

                <div class="card" onclick="sellerOpt(event, 'Meghalaya')">
                    <p class="state-name">Meghalaya</p>
                </div>

                <div class="card" onclick="sellerOpt(event, 'Tripura')">
                    <p class="state-name">Tripura</p>
                </div>
                <div class="card" onclick="sellerOpt(event, 'Comming')">
                    <p class="state-name" style="color: grey;">Comming soon!</p>
                </div>

            </div>

            <div class="col-lg-10 col-md-10 col-sm-12">
                <img class="heading-img" src="images\hotel heading text.PNG" alt="headig text">
                <div class="items">
                    <div id="Uttarakhand" class="tabcontent">
                        <h3 class="item-heading">Hotels in <span> Uttarakhand </span></h3><br>
                        <br>
                        <div class="container hotel-container">
                            <?php
                         $selectquery = "select * from  hotel_table";
                         $query = mysqli_query($con,$selectquery);
                            // $result = mysqli_fetch_array($query);
                            while($result = mysqli_fetch_array($query))
                            {
                            ?>

                            <div class="row hotel-view">

                                <div class="col-lg-4 col-md-4"><img class="hotel_img"
                                        src="admin/<?php echo $result['cover_image'] ?>" alt="hotel-image"></div>
                                <div class="col-lg-8 col-md-8">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8">
                                            <div class="hotel-name"><?php echo $result['Hotel_name'] ?></div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="hotel-rating text-center">
                                            <?php
                                            $rating= $result['Hotel_rating'];
                                            for ($x = 1; $x <= $rating; $x++) {
                                              echo "<i class='fas fa-star'></i>";
                                            }
                                            if($rating==5)
                                            {
                                            echo"<p class='hotel-review'>(Superb!)</p>";
                                            }                                            
                                            elseif($rating==4)
                                            {
                                            echo"<p class='hotel-review'>(Awesome!)</p>";
  
                                            }
                                            elseif($rating==3)
                                            {
                                            echo"<p class='hotel-review'>(Great!)</p>";
  
                                            }
                                            else
                                            {
                                            echo"<p class='hotel-review'>(Great!)</p>";
  
                                            }
                                            ?>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="hotel-description">
                                        <?php echo $result['Hotel_description'] ?>
                                    </div>
                                    <?php if(isset($_SESSION['username'])) {?>
                                    <a href="hotel_landing_page.php?hotel_id=<?php echo $result['Hotel_id'] ?>" class="btn btn-lg hotel-button">Book Now</a>
                                    <?php }else{ ?>                                     
                                    <a href="#" class="btn btn-lg hotel-button" style=" margin-left: 60%;">Sign-in to book hotel</a>                                     
                                    <?php 
                                    } 
                                    ?> 
                                </div>
                            </div>

                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <!-- ==========items for rajasthan================ -->
                    <div id="Rajasthan" class="tabcontent">
                        <h3 class="item-heading">Hotels in <span> Rajasthan </span></h3><br>
                        <div class="container hotel-container">
                            <?php
                         $selectquery = "select * from  rajasthan";
                         $query = mysqli_query($con,$selectquery);
                            // $result = mysqli_fetch_array($query);
                            while($result = mysqli_fetch_array($query))
                            {
                            ?>

                            <div class="row hotel-view">

                                <div class="col-lg-4 col-md-4"><img class="hotel_img"
                                        src="admin/<?php echo $result['image'] ?>" alt="hotel-image"></div>
                                <div class="col-lg-8 col-md-8">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8">
                                            <div class="hotel-name">Abc hotel</div>
                                        </div>
                                        <div class="col-lg-2 col-md-2">
                                            <div class="hotel-rating">
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-md-1">
                                            <div class="hotel-review">(Awesome)</div>
                                        </div>
                                    </div>
                                    <div class="hotel-description">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Ullam, sunt cum, id, quae quam laudantium explicabo ea tempore
                                        facilis perspiciatis quibusdam ducimus impedit eaque modi voluptatem
                                        earum excepturi provident. Laboriosam!
                                    </div>
                                    <input type="submit" value="Book Now" class="btn btn-lg hotel-button">
                                </div>
                            </div>

                            <?php
                            }
                            ?>
                        </div>
                    </div>


                    <!-- ==========items for Meghalaya================ -->
                    <div id="Meghalaya" class="tabcontent">
                        <h3 class="item-heading">Places to visit in <span> Meghalaya </span></h3><br>

                        <div class="container hotel-container">
                            <?php
                         $selectquery = "select * from  meghalaya";
                         $query = mysqli_query($con,$selectquery);
                            // $result = mysqli_fetch_array($query);
                            while($result = mysqli_fetch_array($query))
                            {
                            ?>

                            <div class="row hotel-view">

                                <div class="col-lg-4 col-md-4"><img class="hotel_img"
                                        src="admin/<?php echo $result['image'] ?>" alt="hotel-image"></div>
                                <div class="col-lg-8 col-md-8">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8">
                                            <div class="hotel-name">Abc hotel</div>
                                        </div>
                                        <div class="col-lg-2 col-md-2">
                                            <div class="hotel-rating">
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-md-1">
                                            <div class="hotel-review">(Awesome)</div>
                                        </div>
                                    </div>
                                    <div class="hotel-description">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Ullam, sunt cum, id, quae quam laudantium explicabo ea tempore
                                        facilis perspiciatis quibusdam ducimus impedit eaque modi voluptatem
                                        earum excepturi provident. Laboriosam!
                                    </div>
                                    <input type="submit" value="Book Now" class="btn btn-lg hotel-button">
                                </div>
                            </div>

                            <?php
                            }
                            ?>
                        </div>
                    </div>

                    <!-- ==========items for Tripura================ -->
                    <div id="Tripura" class="tabcontent">
                        <h3 class="item-heading">Places to visit in <span> Tripura </span></h3><br>
                        <div class="container hotel-container">
                            <?php
                         $selectquery = "select * from  tripura";
                         $query = mysqli_query($con,$selectquery);
                            // $result = mysqli_fetch_array($query);
                            while($result = mysqli_fetch_array($query))
                            {
                            ?>

                            <div class="row hotel-view">

                                <div class="col-lg-4 col-md-4"><img class="hotel_img"
                                        src="admin/<?php echo $result['image'] ?>" alt="hotel-image"></div>
                                <div class="col-lg-8 col-md-8">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8">
                                            <div class="hotel-name">Abc hotel</div>
                                        </div>
                                        <div class="col-lg-2 col-md-2">
                                            <div class="hotel-rating">
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-md-1">
                                            <div class="hotel-review">(Awesome)</div>
                                        </div>
                                    </div>
                                    <div class="hotel-description">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Ullam, sunt cum, id, quae quam laudantium explicabo ea tempore
                                        facilis perspiciatis quibusdam ducimus impedit eaque modi voluptatem
                                        earum excepturi provident. Laboriosam!
                                    </div>
                                    <input type="submit" value="Book Now" class="btn btn-lg hotel-button">
                                </div>
                            </div>

                            <?php
                            }
                            ?>
                        </div>
                        </div>

                        <div id="comming" class="tabcontent">
                            <div class="container" style="height: 100vh;">
                                <h1>Stay connected with "TripToe!" for more content!</h1>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <?php include 'footer.php';?>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>