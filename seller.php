<?php include 'dbcon.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>seller's page</title>
    <?php include 'css_links.php';?>
    <style>
        .card {
            padding: 2%;
            width: 95%;
        }

        .small-box {
            padding: 2% 0 2% 1%;
        }

        .submit-btn {
            margin-top: 5%;
        }

        .tab {
            float: left;
            width: 90%;
            text-align: center;
        }

        /* Style the buttons inside the tab */
        .tab button {
            display: block;
            background-color: #f5f0f0;
            color: #536162;
            padding: 15px 16px;
            width: 100%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 3%;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current "tab button" class */
        .tab button.active {
            background-color: #ccc;
        }
    </style>
</head>

<body>
    <div class="container-fluid">

        <h1 style="text-align: center; margin-bottom: 5%;">Seller's Dashboard</h1>
        <div class="row">

            <div class="col-lg-2 col-md-2">
                <div class="tab">
                    <button class="tablinks btn" onclick="sellerOpt(event, 'Dashboard')" id="defaultOpen">Dashboard</button>
                    <button class="tablinks btn" onclick="sellerOpt(event, 'productupload')">Product upload</button>
                    <button class="tablinks btn" onclick="sellerOpt(event, 'Page1')">Page 1</button>
                </div>

            </div>
            <div class="col-lg-10 col-md-10">
                <div id="productupload" class="tabcontent">
                    <div class="card">
                        <form method="POST" action="product_upload.php" enctype="multipart/form-data" role="form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="product_name">Product Name</label>
                                        <input type="text" class="form-control" id="product_name"
                                            aria-describedby="emailHelp" placeholder="Enter Product name" name="pname">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="Price">Price</label>
                                        <input type="text" class="form-control" id="Price" aria-describedby="emailHelp"
                                            placeholder="Enter Product price" name="pprice">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 small-box">
                                <label for="Price">Product Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="photo">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 small-box">
                                    <div class="col-auto my-1">
                                        <label class="mr-sm-2" for="discount_applied">Discount applied</label>
                                        <select class="custom-select mr-sm-2" id="discount_applied" name="pdiscount">
                                            <option selected>Choose...</option>
                                            <option value="10">10%</option>
                                            <option value="20">20%</option>
                                            <option value="30">30%</option>
                                            <option value="40">40%</option>
                                            <option value="50">50%</option>
                                            <option value="60">60%</option>
                                            <option value="70">70%</option>
                                            <option value="80">80%</option>
                                            <option value="90">90%</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="product_description">Products description</label>
                                        <textarea class="form-control" id="product_description" rows="3" name="pdesc"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="delivery_date">Delivery Date</label>
                                        <input type="text" class="form-control" id="delivery_date"
                                            aria-describedby="emailHelp" placeholder="Enter delivery date" name="deldate">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary submit-btn" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
                <div id="Dashboard" class="tabcontent">
                    <h3>Dashboard</h3>
                    <p>content of the dashboard will be displayed here.</p>
                </div>

                <div id="Page1" class="tabcontent">
                    <h3>No content yet</h3>
                    <p>Content is comming soon stay stuned!</p>
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
</body>

</html>