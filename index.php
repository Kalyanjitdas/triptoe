<!DOCTYPE html>
<html>
<?php
error_reporting(0);
include 'dbcon.php';
?>

<head>
	<title>TripToe-index</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles.css">

	<?php include 'css_links.php';?>
	<style>
		body
		{
			background-color: #fff !important;
		}
		.color-shade {
			/* color: rgb(68 84 164); */
		}

		.body-desc {
			height: 180px;
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
		.chatbot
		{
			position:sticky;
			z-index: 9999;
		}
		.content
		{
			text-shadow: none;
		}

	</style>
</head>

<body>	
	<?php include 'nav.php';	
	
	$uname=$_SESSION['username'];
	$selectquery = "select * from registration where fname = '$uname'";
	$query = mysqli_query($con,$selectquery);
	$result = mysqli_fetch_array($query);
	$_SESSION["email"] = $result['email'];	
	?>	
	<div class="parallax" style="background-image: url('images/img1.jpg');">
		<div class="quote1">
			<?php if(!isset($_SESSION['username'])) {?>
			<br>“Dare to live the life you’ve always wanted.”
			<div class="subquote1">
				Travel with TripToe
			</div>
			<?php }else{ ?>
			<p style="margin-bottom:-8%; padding: 0; font-size: 2rem;">“Hi! <?php echo $_SESSION['username'];?></p>
			<br>&nbsp;Dare to live the life you’ve always wanted.”
			<div class="subquote1">
				Travel with TripToe
			</div>
			<?php } ?>
		</div>

	</div>

	<div class="mainbody">
		<!-- product courosol -->
		<div class="container_product mt-5 text-center">
			<h1 class="color-shade" style="font-family: 'Vollkorn', serif;">“Sponsored Products”</h1>
			<div class="product-list" style="">
				<?php include 'products.php';?>
			</div>
		</div>
		<!-- product coursal ends here -->

		<!-- top places content starts here -->
		<div class=" containerr " style="width: 95%; margin: auto; margin-top: 30px;">
			<!-- <div class="topplaces">
				<h1 class="color-shade" style="text-align: center;font-family: 'Vollkorn', serif;">“Know popular
					packages”
				</h1><br><br>
				<div class="row">
					<div class="containerrr col-lg-3 col-md-6 col-sm-12">
						<div class="front side" style="background-image: url('images/about.png'); ">
							<div class="content">
								<h1>Recommended packages</h1>
								<p>Check Out the packages recommended to You by Triptoe.
								</p>
							</div>
						</div>
						<div class="back side" style="background-image: url('images/about.png')">
							<div class="content">

								<p>The packages include visits of pilgrimage sites, 
								</p>
								<a href="holiday pachages.php"><button class="btn btn-primary">Know More</button></a>
							</div>
						</div>
					</div>

					<div class="containerrr col-lg-3 col-md-6 col-sm-12">
						<div class="front side" style="background-image: url('images/img4.jpg');">
							<div class="content">
								<h1>Popular packages</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
									incididunt
									ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
									ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</p>
							</div>
						</div>
						<div class="back side" style="background-image: url('images/img4.jpg');">
							<div class="content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
									incididunt
									ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
									ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</p>
								<a href="holiday pachages.php"><button class="btn btn-primary">Know More</button></a>
							</div>
						</div>
					</div>
					<div class="containerrr col-lg-3 col-md-6 col-sm-12">
						<div class="front side" style="background-image: url('images/img4.jpg')">
							<div class="content">
								<h1>Top &nbsp;packages</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
									incididunt
									ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
									ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</p>
							</div>
						</div>
						<div class="back side" style="background-image: url('images/img4.jpg')">
							<div class="content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
									incididunt
									ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
									ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</p>
								<a href="holiday pachages.php"><button class="btn btn-primary">Know More</button></a>
							</div>
						</div>
					</div>
					<div class="containerrr col-lg-3 col-md-6 col-sm-12">
						<div class="front side" style="background-image: url('images/about.png')">
							<div class="content">
								<h1>Budget packages</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
									incididunt
									ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
									ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</p>
							</div>
						</div>
						<div class="back side" style="background-image: url('images/about.png')">
							<div class="content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
									incididunt
									ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
									ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</p>
								<a href="holiday pachages.php"><button class="btn btn-primary">Know More</button></a>
							</div>
						</div>
					</div>

				</div>
			</div> -->
			<br><br><br><br><br><br>
			<div class="feed-container">
				<!-- <h1 class="color-shade" style="text-align: center;font-family: 'Vollkorn', serif;">Explore the wonders with “TripToe!”
					</h1>-->
				<hr style="width:90%; height: 7px;">
				<br><br>
				<div class="feed">

					<a href="about_tripura.php" class="card">
						<div>
							<p class="color-shade feed-text"
								style="text-align: center;font-family: 'Vollkorn', serif; margin-bottom: 20%;">Explore
								the wonders with “TripToe!”
							</p>
						</div>
					</a>


					<a href="guides.php" class="card">
						<div>
							<p class="card__category">Get a guide</p>
							<p class="card__title">Get a Compainion for your trip</p>
						</div>
					</a>

					<a href="WILDLIFE.php" class="card">
						<div>
							<p class="card__category">Tripura</p>
							<p class="card__title">A lost city on the rolling hills</p>
						</div>
					</a>
					<a href="register.php" class="card">
						<div>
							<p class="card__category">Must_do</p>
							<p class="card__title">The 10 things you must do in Uttarakhand</p>
						</div>
					</a>

					<a href="FAIRS.php" class="card">
						<div>
							<p class="card__category">Festivals</p>
							<p class="card__title">Celebration of culture and tradition</p>
						</div>
					</a>

					<a href="guides.php" class="card">
						<div>
							<p class="card__category">Book a boat</p>
							<p class="card__title">Enjoy the mesmerising sun set from the waters of lake pichola</p>
						</div>
					</a>
					<a href="haritage_properties.php" class="card">
						<div>
							<p class="card__category">Uttarakhand</p>
							<p class="card__title">Top places in uttarakhand</p>
						</div>
					</a>

					<a href="register.php" class="card">
						<div>
							<p class="card__category">City of Palaces</p>
							<p class="card__title">Experience the city of Palaces "Rajasthan"</p>
						</div>
					</a>

					<a href="register.php" class="card">
						<div>
							<p class="card__category">Beauty</p>
							<p class="card__title">Beauty of Rural areas of tripura</p>
						</div>
					</a>
					<a href="register.php" class="card">
						<div>
							<p class="card__category">Dawki</p>
							<p class="card__title">The cleanest lake of India</p>
						</div>
					</a>
					<a href="register.php" class="card">
						<div>
							<p class="card__category">Camping</p>
							<p class="card__title">Get an overwhelming experience in the coasts of Dawki</p>
						</div>
					</a>
					<a href="register.php" class="card">
						<div>
							<p class="color-shade feed-text"
								style="text-align: center;font-family: 'Vollkorn', serif; margin-bottom: 10%;">“Jobs
								fill your pockets, adventures fill your soul.”
							</p>
						</div>
					</a>
					<a href="register.php" class="card">
						<div>
							<p class="card__category">Falls From heaven</p>
							<p class="card__title">Enjoy the view of the mystical waterfalls of meghalaya</p>
						</div>
					</a>
					<a href="register.php" class="card">
						<div>
							<p class="card__category">Book now</p>
							<p class="card__title">Book a ticket for river rafting</p>
						</div>
					</a>
					<a href="register.php" class="card">
						<div>
							<p class="card__category">Doomboor lake</p>
							<p class="card__title">Take a visit to the famous coconut island of Tripura</p>
						</div>
					</a>
				</div>
			</div>
			<hr class="cardd-rule">
			<div class="row ">
				<div class="col-lg-4 col-md-4">

					<div class="cardd">

						<div class="cardd-header"></div>
						<div class="cardd-body">
							<h4 class="cardd-heading">Solo travel planning</h4>
							<hr style="width: 90%; background-color: rgb(68 84 164);height: 1px;">
							<h6 style=" margin-left: 5%;">Consultation charges: 600/hr</h6>
							<a href="consultant_list.php"><input type="button" value="Get consultation"
									class=" btn cardd-btn"></a>
						</div>

					</div>
				</div>

				<div class="col-lg-4 col-md-4">

					<div class="cardd">

						<div class="cardd-header"></div>
						<div class="cardd-body">
							<h4 class="cardd-heading">Family travel Planning</h4>
							<hr style="width: 90%; background-color: rgb(68 84 164);height: 1px;">
							<h6 style=" margin-left: 5%;">Consultation charges: 600/hr</h6>
							<a href="consultant_list.php"><input type="button" value="Get consultation"
									class=" btn cardd-btn"></a>
						</div>

					</div>
				</div>
				<div class="col-lg-4 col-md-4">

					<div class="cardd">

						<div class="cardd-header"></div>
						<div class="cardd-body">
							<h4 class="cardd-heading">International travel consultation</h4>
							<hr style="width: 90%; background-color: rgb(68 84 164);height: 1px;">
							<h6 style=" margin-left: 5%;">Consultation charges: 600/hr</h6>
							<a href="consultant_list.php"><input type="button" value="Get consultation"
									class=" btn cardd-btn"></a>
						</div>

					</div>
				</div>
			</div>

			<hr class="cardd-rule">

			<h1 class="cardd-heading" style="margin: 50px 0px 50px 0px;">Upcomming Events</h1>
			<div class="row ">
				<?php
			$selectquery = "select * from  event";
                         $query = mysqli_query($con,$selectquery);
                        // $result = mysqli_fetch_array($query);
                        while($result = mysqli_fetch_array($query))
                        {
                        ?>
				<div class="col-lg-4 col-md-4">

					<div class="cardd" style="width: 100%;height: 600px; box-shadow: 1px 1px 20px #d5d5d5;">
						<img class="card-img-top cardd-header" style="height:45%"
							src="<?php echo $result['event_image'] ?>" alt="Card image cap">
						<div class="card-body">
							<div class="body-heading">
								<h4 class="cardd-heading"><b><?php echo $result['event_name'] ?></b></h4>
							</div>
							<div class="body-desc">
								<p class="card-text"><?php echo $result['event_description'] ?></p>
							</div>
							<div class="dates">
								<div class="row" style="margin:0;padding:0;">
									<div class="col-lg-6 col-md-6" style="margin:0;padding: 0 10% 0 0 ;">
										<p><b>Starting from</b></p>
										<p class="card-text"><?php echo $result['event_start'] ?></p>
									</div>
									<div class="col-lg-6 col-md-6" style="margin:0;padding: 0 0 0 20%;">
										<p><b>Ending on</b></p>
										<p class="card-text"><?php echo $result['event_end'] ?></p>
									</div>
								</div>
							</div>



						</div>
					</div>

				</div>
				<?php
                         }
                        ?>
				<!-- <div class="col-lg-4 col-md-4">

					<div class="cardd">

						<div class="cardd-header events"></div>
						<div class="cardd-body">
						<h4 class="cardd-heading">Event Name</h4>
						<hr style="width: 90%; background-color: rgb(68 84 164);height: 1px;">
						</div>

					</div>
				</div> -->

				<!-- <div class="col-lg-4 col-md-4">

					<div class="cardd">

						<div class="cardd-header events"></div>
						<div class="cardd-body">
						<h4 class="cardd-heading">Event Name</h4>
						<hr style="width: 90%; background-color: rgb(68 84 164);height: 1px;">
						</div>

					</div>
				</div>
				<div class="col-lg-4 col-md-4">

					<div class="cardd">

						<div class="cardd-header events"></div>
						<div class="cardd-body">
						<h4 class="cardd-heading">Event Name</h4>
						<hr style="width: 90%; background-color: rgb(68 84 164);height: 1px;">
						</div>

					</div>
				</div> -->
			</div>
		</div>
	</div>
	
	</div> <?php include 'footer.php';?>

</body>

</html>