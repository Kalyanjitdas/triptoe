<?php include 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Product details</title>
    <?php include 'css_links.php';?>
    <style>
        h2 {
            text-align: center;
            margin: 5% 0 0 0;
        }

        p {
            margin: 0;

        }

        .availability {
            margin-top: 10%;
        }

        .buy-btnn {
            color: #fff !important;
            float: left;
            padding-right: 10px;
            border-right: 1px solid #fff;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: none;
            font-size: 10;
            line-height: 0;
        }

        .color-shade {
            color: rgb(68 84 164);
        }
    </style>
</head>

<body>
    <?php include 'nav.php';?>
    <hr style=" margin:0 0 3% 5%; padding:0; width: 90%; height: 3px;">
    <?php
        $pr_id = $_GET['product_id'];  
        $_SESSION["product_idd"] = $pr_id;        
        $selectquery = "select * from products where p_id=$pr_id";
        $query = mysqli_query($con,$selectquery);
        // $result = mysqli_fetch_array($query);
        while($result = mysqli_fetch_array($query))
        {
        ?>
    <div class="row">        
            <div class="col-lg-5 col-md-5 col-sm-12">

                <div class="container">
                    <img class="img-fluid" src="<?php echo $result['image']?>" alt="product image">
                    <input type="hidden" name="product_image" value="<?php echo $result['image']?>">
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12">
            <form action="add_to_cart.php" method="post">
                <div class="product-name color-shade"><b>
                        <h5><?php echo $result['p_name']?></h5>
                        <input type="hidden" name="product_name" value="<?php echo $result['p_name']?>">
                    </b></div>
                <hr style=" width: 90%;">
                <div class="price">
                    <p>M.R.P.:₹&nbsp;<span style="text-decoration: line-through;"><?php echo $result['price']?></span>
                    <input type="hidden" name="product_price" value="<?php echo $result['price']?>">
                    </p>
                    <?php
                $actual_price = $result['price'];
                $discount_percentage = $result['discount'];
                $discount_applied = $actual_price-($actual_price*$discount_percentage/100);
                $saved = $actual_price-$discount_applied;
                ?>
                    <p>Discounted Price:<span style="color: red;">₹&nbsp;<?php echo $discount_applied;?></span>
                    <input type="hidden" name="product_price_discounted" value="<?php echo $discount_applied;?>">
                    </p>
                    <p>You save:<span
                            style="font-weight:200;">₹&nbsp;<?php echo $saved;?>(<?php echo $discount_percentage;?>%)</span>
                            <input type="hidden" name="product_discount_applied" value="<?php echo $ddiscount_percentage;?>">
                    </p>
                </div>

                <div class="delivery">
                    <p>Free delivery: <?php echo $result['delivery'] ?>
                    <input type="hidden" name="product_delivery_date" value="<?php echo $result['delivery'] ?>">
                    </p>
                </div>                
                <div class="availability">
                    <h6 style="color: green;">In stock</h6>
                    Sold by ABC bamboo products private limited.
                </div>
                <br>
                <a href="add_to_cart.php"><button type="submit" class="btn btn-success"  name="add_cart"><i class="fas fa-shopping-cart buy-btnn"></i>Add to cart
                <span><?php if(isset($_SESSION['cart'])){ echo count($_SESSION['cart']); }else{ echo '0';} ?></span>
                </button></a>
                <!-- <a href="add_to_wishlist.php"><button class="btn btn-success" name="add_wishlist"><i class="fas fa-heart buy-btnn"></i> Add to wishlist</button></a> -->
                
            </form>
            </div>
        
    </div>
    <?php
          }
        ?>
    </div>
    
    <h2 class="color-shade" style="margin-top:5%;font-family: 'Vollkorn', serif;">More! Related products</h2>
    <?php include 'products.php'?>
    <?php include 'footer.php'?>

</body>

</html>