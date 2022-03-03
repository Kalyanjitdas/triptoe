<?php include 'dbcon.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of consultants</title>
    <?php include 'css_links.php';?>
    <style>
        body {
            height: 100vh;
        }

        .item-heading {
            margin-top: 2%;
            margin-left: 2%;
            font-weight: 900;
            font-size: 36px;
        }

        span {
            color: grey;
        }

        .c-container {
            height: 300px;
        }

        .consultant-img {
            height: 100%;
            width: 100%;
        }

        .img-container {
            height: 300px;
        }

        .name {
            display: flex;
            font-family: monospace;
            font-weight: 800;
            font-size: 24px;
            
        }
        .fab
        {
            font-size: 30px;
            margin-right: 4%;
        }
        a
        {
            color: grey;
        }
        a:hover
        {
            color:rgb(68 84 164);
        }
        .description
        {
            font-family: monospace;
        }
        .contact
        {
            font-family: monospace;
        }
        .main-row
        {
            border-radius: 10px;
            box-shadow: 1px 1px 20px #cacdcf;
            margin-top: 3%;
        }
    </style>
</head>

<body>
    <?php include 'nav.php';?>

    <h3 class="item-heading">Consultants <span> Available </span></h3>
    <hr style="width: 80%; background-color: rgb(68 84 164);height: 1px;margin-right: 8%;">
    <br>
    <div class="container ">
        <?php
                $selectquery = "select * from  consultant_table";
                    $query = mysqli_query($con,$selectquery);
                            // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
        <div class="row main-row">
            <div class="col-lg-3" style="padding:0;">
                <div class="img-container">
                    <img class="consultant-img" src="<?php echo $result['c_photo'] ?>" alt="">
                </div>
            </div>
            <div class="col-lg-9">
                <div class="data-container">
                    <div class="name">
                        <p><span>Consultant name:</span>&nbsp;</p>
                        <?php echo $result['c_fname'] ?>&nbsp;<?php echo $result['c_lname'] ?>
                    </div>
                    <div class="description">
                        <p><span>About Me:</span>&nbsp;<?php echo $result['description'] ?></p>
                    </div>

                    <div class="contact">
                    <div class="row">
                    <div class="col-lg-6 col-md-6">
                    <p><i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;<?php echo $result['c_phone'] ?></p>
                    <p><i class="fas fa-envelope"></i>&nbsp;&nbsp;<?php echo $result['c_email'] ?></p> 
                    </div>
                    <div class="col-lg-6 col-md-6">
                    <div class="social-media">
                    <h6>Other contact Options</h6>
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                    </div>
                    </div>
                    </div>

                </div>
            </div>


        </div>
        <?php
            }
        ?>
    </div>




    <?php include 'footer.php';?>
</body>

</html>