<?php 
include 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'css_links.php'; ?>
    <style>
        body {
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .container-fluid {
            margin: 0;
            padding: 0;
        }

        .image-box {
            height: 28vh;
        }

        .cover-img {
            width: 100%;
            height: 60%;
            object-fit: cover;
        }

        .Hotel-name {
            margin-top: 24%;
            color: rgb(68 84 164);
        }

        .Hotel-loc {
            margin-top: 0;
            font-weight: 400;
            font-size: 1.3rem;
        }

        .side-border {
            margin-top: 70%;
            padding: 0;
            width: 100%;
        }

        .border-right {
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1);
        }

        .border-div {
            margin: 0;
            padding: 0;

        }

        .description {
            width: 90%;
            margin: 0 auto 0 auto;
        }

        .image-gallery {
            height: 85vh;
        }

        .fas {
            color: rgb(68 84 164) !important;
        }
    </style>
</head>

<body>
    <?php include 'nav.php'; ?>

    <?php
        $h_id = $_GET['hotel_id'];  
        $selectquery = "select * from hotel_table where Hotel_id = $h_id ";
        $query = mysqli_query($con,$selectquery);
        // $result = mysqli_fetch_array($query);
        while($result = mysqli_fetch_array($query))
        {
        ?>
    <div class="container-fluid">
        <div class="image-box">
            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-1 border-div">
                    <img class="side-border border-left" src="images/side border.svg" alt="side border">

                </div>
                <div class="col-lg-10 col-md-10 col-sm-10">
                    <img class="cover-img" src="admin/<?php echo $result['cover_image'] ?>" alt="cover image">
                </div>

                <div class="col-lg-1 col-md-1 col-sm-1 border-div">
                    <img class="side-border border-right" src="images/side border.svg" alt="side border">
                </div>

            </div>
        </div>
        <div class="hotelname">
            <h1 class=" Hotel-name">
                <?php echo $result['Hotel_name'] ?>
            </h1>
            <h4 class=" Hotel-loc">
                <?php echo $result['Hotel_location'] ?>
            </h4>

        </div>
        <hr style="width: 60%;color: #000;border: 2px dotted rgb(111 135 255 / 82%);">
        <div class="description">
            <h4>Know about Us</h4>
            <p><?php echo $result['Hotel_description'] ?></p>
        </div>
        <br><br>
        <h4>Our image gallery</h4>
        <div class="image-gallery">
            <?php        
            $res= $result['Hotel_image'];
            $res=explode(" ",$res);
            $count = count($res)-1;
            for($i=0;$i<$count;++$i)
            {
            ?>
            <img src="hotel images/<?= $res[$i]?>" alt="" height="32%;" width="25%;">

            <?php
            }        
            ?>
        </div>
        <div class="facilities text-center" style="margin-top:2%;">
            <h4>Facilities we provide</h4>
            <div class="facilities-content ml-auto mr-auto" style="display: flex; width: 49%; margin-top: 2%;">
                <?php        
            $res= $result['Hotel_facilities'];
            $res=explode(";;",$res);
            $count = count($res)-1;
            for($i=0;$i<$count;++$i)
            {
            ?>
                <p><?php echo"&nbsp; $res[$i]";?></p>
                <?php
            }        
            ?>
            </div>
        </div>
        <div class="rooms " style="margin: 2% 0 4% 0;">
        <h4>Rooms And Rates</h4>
            <div class="row" style="margin-top: 2%">

                <div class="col-lg-3 col-md-6 col-sm-12">

                    <div class="card ml-auto mr-auto" style="width: 18rem;">
                        <img class="card-img-top" src="images\deluxroom.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Deluxe Room &nbsp;<i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i></h5>                            
                            <p class="card-text">
                            <h6><p>Starting at: &#8377;2000</p></h6>
                            </p>
                            <a href="#" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card ml-auto mr-auto" style="width: 18rem;">
                        <img class="card-img-top" src="images\Luxury Room.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Luxury Room &nbsp;<i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i></h5>                            
                            <p class="card-text">
                            <h6><p>Starting at: &#8377;1000</p></h6>
                            </p>
                            <a href="#" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card ml-auto mr-auto" style="width: 18rem;">
                        <img class="card-img-top" src="images\Guest House.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Guest House&nbsp;<i class='fas fa-star'></i></i><i class='fas fa-star'></i><i class='fas fa-star'></i></h5>                            
                            <p class="card-text">
                            <h6><p>Starting at: &#8377;700</p></h6>
                            </p>
                            <a href="#" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card ml-auto mr-auto" style="width: 18rem;">
                        <img class="card-img-top" src="images\Single Room.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Single Room&nbsp;<i class='fas fa-star'></i></i><i class='fas fa-star'></i>
</h5>                            
                            <p class="card-text">
                            <h6><p>Starting at: &#8377;500</p></h6>
                            </p>
                            <a href="Hotel\admin\reservation.php" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>



    <?php
        }
?>
<?php include'footer.php';?>
</body>

</html>