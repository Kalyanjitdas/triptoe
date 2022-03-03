<!DOCTYPE html>
<html>
<?php include 'dbcon.php'?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA_Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<title>Ecommerce Slider</title>
	<!--page-icon------------>
	<link rel="shortcut icon" href="images/logo.png">
	<!--stylesheet------------->
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<!--light-slider.css------------->
	<link rel="stylesheet" type="text/css" href="css/lightslider.css">
	<!--Jquery-------------------->
	<script type="text/javascript" src="js/Jquery.js"></script>
	<!--lightslider.js--------------->
	<script type="text/javascript" src="js/lightslider.js"></script>
	<style type="text/css">
		@charset "utf-8";

		/* CSS Document */
		/*body{
	margin:0px;
	padding: 0px;
	background-color:#eef8ff;
}*/
		a {
			text-decoration: none;
		}

		.box {
			width: 380px;
			height: 300px;
			box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.2);
			border-radius: 10px;
			overflow: hidden;
			margin: 25px;
		}

		.slide-img {
			height: 200px;
			position: relative;
		}

		.slide-img img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			box-sizing: border-box;
		}

		.detail-box {
			width: 100%;
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 10px 20px;
			box-sizing: border-box;
			font-family: calibri;
		}

		.type {
			display: flex;
			flex-direction: column;
		}

		.type a {
			color: #222222;
			margin: 5px 0px;
			font-weight: 700;
			letter-spacing: 0.5px;
			padding-right: 8px;
		}

		.type span {
			color: rgba(26, 26, 26, 0.5);
		}

		.price {
			color: #333333;
			font-weight: 600;
			font-size: 1.1rem;
			font-family: poppins;
			letter-spacing: 0.5px;
		}

		.overlay {
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
			width: 100%;
			height: 100%;
			background-color: rgba(92, 95, 236, 0.6);
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.buy-btn {
			width: 160px;
			height: 40px;
			display: flex;
			justify-content: center;
			align-items: center;
			background-color: #FFFFFF;
			color: #252525;
			font-weight: 700;
			letter-spacing: 1px;
			font-family: calibri;
			border-radius: 20px;
			box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.2);
		}

		.buy-btn:hover {
			color: #FFFFFF;
			background-color: #f15fa3;
			transition: all ease 0.3s;
		}

		.overlay {
			visibility: hidden;
		}

		.slide-img:hover .overlay {
			visibility: visible;
			animation: fade 0.5s;
		}

		@keyframes fade {
			0% {
				opacity: 0;
			}

			100% {
				opacity: 1;
			}
		}

		.slider {
			width: 100%;
			height: 50vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		span {
			text-align: left;
		}
		p
		{
			margin-left:0;
		}
	</style>
</head>

<body>
	<section class="slider">
		<ul id="autoWidth" class="cs-hidden">	
		<?php
        $selectquery = "select * from products";
        $query = mysqli_query($con,$selectquery);
		// $result = mysqli_fetch_array($query);
		// $pr_id = $result[''];		
        while($result = mysqli_fetch_array($query))
        {		
        ?>		
			
			<li class="item-a">
				<!--box-slider--------------->
				<div class="box">
					<!--img-box---------->
					<div class="slide-img">
						<img alt="1" src="<?php echo $result['image'] ?>">
						<!--overlayer---------->
						<div class="overlay">
							<!--buy-btn------>
							<a href="product details.php?product_id=<?php echo $result['p_id'] ?>" class="buy-btn">Buy Now</a>
						</div>
					</div>
					<!--detail-box--------->
					<div class="detail-box">
						<!--type-------->
						<div class="type">
							<p><?php echo $result['p_name'] ?></p>
							<span>New Arrival</span>
						</div>
						<!--price-------->
						<p class="price">₹&nbsp;<?php echo $result['price'] ?></p>

					</div>

				</div>
			</li>
			<?php
          	}
      		?>

		</ul>
	</section>



	<!--script-link----------->
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		// JavaScript Document
		$(document).ready(function () {
			$('#autoWidth').lightSlider({
				autoWidth: true,
				loop: true,
				onSliderLoad: function () {
					$('#autoWidth').removeClass('cS-hidden');
				}
			});
		});
	</script>
</body>

</html>