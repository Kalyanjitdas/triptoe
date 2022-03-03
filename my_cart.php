
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My cart</title>
    <?php include 'css_links.php';?>
    <style>
    td
    {
        padding:0 20px 0 0;
    }
    .product-name
    {
        font-size:20px;
        font-weight: 700;
    }
    .price
    {
        float:right;
        font-size:20px;
        font-weight: 700;

    }
    .tot-amnt
    {
        margin-left:83%;
    }
    .heading
    {
        text-align:center;
        font-family: sans-serif;
        color: rgb(68 84 164);
    }
    .container-fluid
    {
        padding: 0% 2% 0 2%;
    }
    .total
    {
        margin-left:83.5%;
        font-size: 19px;
        font-weight:700;
    }
    .btn-success
    {
        margin-left:92%;
    }
    </style>
</head>

<body>                        
<?php include'nav.php';?>
    <div class="container-fluid">
    

        <div class="row">

            <div class="heading my-5">
                <h1>My Cart</h1>
                <hr style="width: 1060%;">
            </div>

        </div>
        <?php if(isset($_SESSION['username'])) {?>
        <h4>Products</h4>
        <hr>    
        <div class="row">           
        <?php                           
         $total=0;
        if(isset($_SESSION['cart']))
         {
         foreach($_SESSION['cart'] as $key => $value)
         {
            $total = $total + $value['discount'];
            // print_r($value);
             echo"
             
            <div class='col-lg-2'>
            
            </div>

            <div class='col-lg-10' style='border-bottom:1px solid #dedede;'>
                <span class='product-name'><p>$value[Item_name]</p></span>
                <span class='price'><p>&#8377;&nbsp;$value[discount]</p></span>
                <h6>In stocks</h6>
                <h6>Free delivery</h6>
                <form>
                <table>
             <tbody>
                <td>
                <span>
                <div class='quantity'>                   
                <label for='quantity'><span style=' font-weight: 500;'>Quantity:</span>&nbsp;</label><input
                type='number' name='quantity' placeholder='quantity'  min=1 style='width:110px;'>                    
                </div>
            
                </span>
                </td>
                <td>
                <span>
                <div class='dropdown'>
                    <button class='btn  btn-sm dropdown-toggle' type='button' id='dropdownMenu2' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                              Delivery Location
                    </button>
                    <div class='dropdown-menu' aria-labelledby='dropdownMenu2'>
                        <button class='dropdown-item' type='button'>Airport</button>
                        <button class='dropdown-item' type='button'>Railway station</button>
                        <button class='dropdown-item' type='button'>Directly to you</button>
                     </div>
                </div>
                </span>
                </td>
                <td>
                </form>
                <form action='add_to_cart.php' method='POST'>
                <td><button class='btn btn-sm btn-danger' name='remove_item'>Remove</button></td>
                <input type='hidden' name='Item_name' value='$value[Item_name]'>
                </form>
                </td>
                <tbody>
                </table>   
            </div>            
            ";
            }
            echo 
            "
            <hr>
            <p class='total'>Amount to be paid:&#8377;&nbsp;$total</p>
            <input type='submit' class='btn btn-success' value='Order Now'>
            ";
            }
            
            ?>
    <hr style="color:#000;">
        </div>
            <hr style="color:#000;">
        </div>
        <?php }else{ ?>

        <p>sign-in to view cart</p>

        <?php } ?>

    </div>
    <?php include 'footer.php';?>
</body>

</html>