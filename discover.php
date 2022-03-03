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
        .container-fluidd {
            margin-top: 1%;
        }

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
            background-image: url('images/neermahal.jpg');
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

        .grid {
            position: relative;
            margin: 0 auto;
            padding: 1em 0 4em;
            max-width: 100%;
            list-style: none;
            text-align: center;
        }

        /* Common style */
        .grid figure {
            position: relative;
            float: left;
            overflow: hidden;
            margin: 10px 1%;
            height: 400px;
            width: 48%;
            background: #3085a3;
            text-align: center;
            cursor: pointer;
        }

        .grid figure img {
            position: relative;
            display: block;
            min-height: 100%;
            max-width: 100%;
            opacity: 0.8;
        }

        .grid figure figcaption {
            padding: 2em;
            color: #fff;
            text-transform: uppercase;
            font-size: 1.25em;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .grid figure figcaption::before,
        .grid figure figcaption::after {
            pointer-events: none;
        }

        .grid figure figcaption,
        .grid figure figcaption>a {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* Anchor will cover the whole item by default */
        /* For some effects it will show as a button */
        .grid figure figcaption>a {
            z-index: 1000;
            text-indent: 200%;
            white-space: nowrap;
            font-size: 0;
            opacity: 0;
        }

        .grid figure h4 {
            word-spacing: -0.15em;
            font-weight: 400;
            float: left;
        }

        .grid figure h4 span {
            font-weight: 800;

        }

        .item-heading {
            word-spacing: -0.15em;
            font-weight: 300;
            margin-left: 32%;

        }

        .item-heading span {
            font-weight: 800;

        }

        .placename-box {
            max-width: 70%;
        }

        .grid figure h2,
        .grid figure p {
            margin: 0;
            float: right;
        }

        .grid figure p {
            letter-spacing: 1px;
            font-size: 68.5%;
        }

        figure.effect-zoe figcaption {
            top: auto;
            bottom: 0;
            padding: 1em;
            height: 3.75em;
            background: #fff;
            color: #3c4a50;
            -webkit-transition: -webkit-transform 0.35s;
            transition: transform 0.35s;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }

        figure.effect-zoe h2 {
            float: left;
        }

        figure.effect-zoe p.icon-links a {
            float: right;
            color: #3c4a50;
            font-size: 1.4em;
        }

        figure.effect-zoe:hover p.icon-links a:hover,
        figure.effect-zoe:hover p.icon-links a:focus {
            color: #252d31;
        }

        .description {
            overflow-y: scroll;
            height: 300px;
        }

        .description:hover {
            margin-bottom: -10%;
        }

        figure.effect-zoe p.description {
            position: absolute;
            bottom: 8em;
            padding: 2em;
            color: #fff;
            text-transform: none;
            font-size: 90%;
            opacity: 0;
            -webkit-transition: opacity 0.35s;
            transition: opacity 0.35s;
            -webkit-backface-visibility: hidden;
            /* Fix for Chrome 37.0.2062.120 (Mac) */
        }

        figure.effect-zoe h2,
        figure.effect-zoe p.icon-links a {
            -webkit-transition: -webkit-transform 0.35s;
            transition: transform 0.35s;
            -webkit-transform: translate3d(0, 200%, 0);
            transform: translate3d(0, 200%, 0);
        }

        figure.effect-zoe p.icon-links a span::before {
            display: inline-block;
            padding: 8px 10px;
            margin-right: 5px;
            font-family: 'feathericons';
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .cards-icons {
            margin-left: 25px;
        }

        .icon-eye::before {
            content: '\e000';
        }

        .icon-paper-clip::before {
            content: '\e001';
        }

        .icon-heart::before {
            content: '\e024';
        }

        figure.effect-zoe h2 {
            display: inline-block;
        }

        figure.effect-zoe:hover p.description {
            opacity: 1;
        }

        figure.effect-zoe:hover figcaption,
        figure.effect-zoe:hover h2,
        figure.effect-zoe:hover p.icon-links a {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        figure.effect-zoe:hover h2 {
            -webkit-transition-delay: 0.05s;
            transition-delay: 0.05s;
        }

        figure.effect-zoe:hover p.icon-links a:nth-child(3) {
            -webkit-transition-delay: 0.1s;
            transition-delay: 0.1s;
        }

        figure.effect-zoe:hover p.icon-links a:nth-child(2) {
            -webkit-transition-delay: 0.15s;
            transition-delay: 0.15s;
        }

        figure.effect-zoe:hover p.icon-links a:first-child {
            -webkit-transition-delay: 0.2s;
            transition-delay: 0.2s;
        }

        /* ==============css for the scroll bar================ */

        .description::-webkit-scrollbar {
            width: 8px;
        }

        /* Track */
        .description::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 20px;
        }

        /* Handle */
        .description::-webkit-scrollbar-thumb {
            background: grey;
            border-radius: 10px;
        }

        /* Handle on hover */
        .description::-webkit-scrollbar-thumb:hover {
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
                <div class="items">
                    <div id="Uttarakhand" class="tabcontent">
                        <h3 class="item-heading">Places to visit in <span> Uttarakhand </span></h3><br>
                        <div class="grid">
                            <?php
                         $selectquery = "select * from  uttarakhand";
                         $query = mysqli_query($con,$selectquery);
                        // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
                            <figure class="effect-zoe">
                                <img src="admin/<?php echo $result['image'] ?>" alt="img25" />
                                <figcaption>
                                    <div class="placename-box">
                                        <h4><?php echo $result['place_name'] ?></h4>
                                    </div>
                                    <p class="icon-links">
                                        <a href="#"><span><i class="fas fa-shopping-bag cards-icons"></i></span></a>
                                        <a href="#"><span><i class="far fa-heart cards-icons"></i></span></a>
                                        <a href="#"><span><i class="far fa-thumbs-up cards-icons"></i></span></a>

                                    </p>
                                    <p class="description"><?php echo $result['place_desc'] ?></p>
                                </figcaption>
                            </figure>

                            <?php
                         }
                        ?>
                        </div>
                    </div>
                    <!-- ==========items for rajasthan================ -->
                    <div id="Rajasthan" class="tabcontent">
                        <h3 class="item-heading">Places to visit in <span> Rajasthan </span></h3><br>
                        <div class="grid">
                            <?php
                         $selectquery = "select * from  Rajasthan";
                         $query = mysqli_query($con,$selectquery);
                        // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
                            <figure class="effect-zoe">
                                <img src="admin/<?php echo $result['image'] ?>" alt="img25" />
                                <figcaption>
                                    <h4><?php echo $result['place_name'] ?></h4>
                                    <p class="icon-links">
                                        <a href="#"><span><i class="fas fa-shopping-bag cards-icons"></i></span></a>
                                        <a href="#"><span><i class="far fa-heart cards-icons"></i></span></a>
                                        <a href="#"><span><i class="far fa-thumbs-up cards-icons"></i></span></a>

                                    </p>
                                    <p class="description"><?php echo $result['description'] ?></p>
                                </figcaption>
                            </figure>

                            <?php
                         }
                        ?>
                        </div>
                    </div>

                    <!-- ==========items for Meghalaya================ -->
                    <div id="Meghalaya" class="tabcontent">
                        <h3 class="item-heading">Places to visit in <span> Meghalaya </span></h3><br>
                        <div class="grid">
                            <?php
                         $selectquery = "select * from  Meghalaya";
                         $query = mysqli_query($con,$selectquery);
                        // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
                            <figure class="effect-zoe">
                                <img src="admin/<?php echo $result['image'] ?>" alt="img25" />
                                <figcaption>
                                    <h4><?php echo $result['place_name'] ?></h4>
                                    <p class="icon-links">
                                        <a href="#"><span><i class="fas fa-shopping-bag cards-icons"></i></span></a>
                                        <a href="#"><span><i class="far fa-heart cards-icons"></i></span></a>
                                        <a href="#"><span><i class="far fa-thumbs-up cards-icons"></i></span></a>

                                    </p>
                                    <p class="description"><?php echo $result['description'] ?></p>
                                </figcaption>
                            </figure>

                            <?php
                         }
                        ?>
                        </div>
                    </div>

                    <!-- ==========items for Tripura================ -->
                    <div id="Tripura" class="tabcontent">
                        <h3 class="item-heading">Places to visit in <span> Tripura </span></h3><br>
                        <div class="grid">
                            <?php
                         $selectquery = "select * from  Tripura";
                         $query = mysqli_query($con,$selectquery);
                        // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
                            <figure class="effect-zoe">
                                <img src="admin/<?php echo $result['image'] ?>" alt="img25" />
                                <figcaption>
                                    <h4><?php echo $result['place_name'] ?></h4>
                                    <p class="icon-links">
                                        <a href="#"><span><i class="fas fa-shopping-bag cards-icons"></i></span></a>
                                        <a href="#"><span><i class="far fa-heart cards-icons"></i></span></a>
                                        <a href="#"><span><i class="far fa-thumbs-up cards-icons"></i></span></a>

                                    </p>
                                    <p class="description"><?php echo $result['description'] ?></p>
                                </figcaption>
                            </figure>

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