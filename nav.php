<?php
session_start();
?>
<style type="text/css">

  .nav-link {
    font-size: 15px;
  }

  .nav-link:hover {
    color: #000;
  }

  .fas {
    font-size: 20px;
    color: #5b5b5b;
  }

  .t-icon {
    padding: 10px;
  }

  .t-icon:hover {
    color: rgb(68 84 164);
  }

  .dropdown-menu {
    min-width: 0;

  }

  .profiledd {
    margin-top: 10%;
  }

  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
    margin-top: 10px;
    margin-left: -50px;
  }
  
  .modal-button {
    background-color: rgb(68 84 164);
    color: #fff;
  }

  .modal {
    text-align: center;
    border-radius: 10%;
  }

  .modal-title {
    font-family: 'Vollkorn', serif;
    font-size: 40px;
    color: rgb(68 84 164);
    text-shadow: 1px 1px 10px;
  }

  .modal-content {
    height: 70vh;
  }

  .img-fluid {
    height: 69vh;
  }

  .formm {
    margin: 0;
    padding-right: 5%;
    margin-top: 8%;
    font-family: 'Times New Roman', serif;
  }

  .close-button {
    margin-top: -12%;
  }

  .form-control {
    margin-bottom: 10px;
    padding-left: 2px;
  }

  ::-webkit-input-placeholder {
    font-size: 12px !important;
    font-family: sans-serif;
  }

  .social_media_signin {
    margin: 9% 0 5% 3%;
  }

  .btn-success {
    width: 30%;
  }

  .cardd {
    border: 1px solid #fff !important;
  }

  .form input,
  form textarea {
    padding: 0px;
    margin-left: 5px;
    font-family: monospace;
  }
  .name-row
  {
    margin:0;
    padding:0;
  }
  /* css for fliping the cardd */
  @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,600');

  html * {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  *,
  *:after,
  *:before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }

  .flip-cardd-3D-wrapper {
    width: 100%;
    height: 80%;
    position: relative;
    -o-perspective: 900px;
    -webkit-perspective: 900px;
    -ms-perspective: 900px;
    perspective: 900px;
    margin: 0 auto;
    border: 0px solid #fff;
  }

  #flip-cardd {
    width: 100%;
    height: 100%;
    text-align: center;
    margin: auto;
    position: absolute;
    -o-transition: all 1s ease-in-out;
    -webkit-transition: all 1s ease-in-out;
    -ms-transition: all 1s ease-in-out;
    transition: all 1s ease-in-out;
    -o-transform-style: preserve-3d;
    -webkit-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }

  .do-flip {
    -o-transform: rotateY(-180deg);
    -webkit-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
  }

  #flip-cardd-btn-turn-to-back,
  #flip-cardd-btn-turn-to-front {
    height: 40px;
    cursor: pointer;
    visibility: hidden;
    font-family: 'Open Sans', sans-serif;

  }

  #flip-cardd .flip-cardd-front,
  #flip-cardd .flip-cardd-back {
    width: 100%;
    height: 60%;
    position: absolute;
    -o-backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    z-index: 2;
    /* -webkit-box-shadow: 5px 6px 32px 2px rgba(133, 133, 133, 0.71);
  -moz-box-shadow: 5px 6px 32px 2px rgba(133, 133, 133, 0.71); */
    /* box-shadow: 5px 6px 32px 2px rgba(133, 133, 133, 0.71); */
  }

  #flip-cardd .flip-cardd-front {}

  #flip-cardd .flip-cardd-back {

    -o-transform: rotateY(180deg);
    -webkit-transform: rotateY(180deg);
    -ms-transform: rotateY(180deg);
    transform: rotateY(180deg);
  }

  #flip-cardd .flip-cardd-front p,
  #flip-cardd .flip-cardd-back p {

    display: block;
    position: absolute;
    top: 40%;
    width: 97%;
    border: 0px;
  }

  h5 {
    text-align: left;
  }

  form {
    width: 98%;
    border: 1px solid #fff;
  }

  .rbtn {
    height: 50px;
    border-radius: 50%;
    border: 6px solid #fff;
    box-shadow: 2px 2px 10px !important;
    border-color: #fff !important;
  }

  .s-text {
    color: blue;
  }

  .s-text:hover {
    color: black;
    cursor: pointer;
  }
  .disabled:hover {
    box-shadow: none;    
  }
     
</style>
<?php
    include'dbcon.php';
    if (isset($_POST['submit'])) 
    {
        $email = $_POST['emaill'];
        $password = $_POST['passs'];

        $email_search = "select * from registration where email ='$email'";
        $query = mysqli_query($con,$email_search);

        $email_count = mysqli_num_rows($query);
        if ($email_count) 
        {
            $email_pass = mysqli_fetch_assoc($query);
            $db_pass = $email_pass['password'];
            
            // $_SESSION['lname'] = $email_pass['lname'];            
            // $_SESSION['email'] = $email_pass['email'];
            

            $pass_decode = password_verify($password, $db_pass);                 
            
            if ($pass_decode) 
            {
              $_SESSION['username'] = $email_pass['fname'];
              $_SESSION['email_sess'] = $email_pass['email']; 
                ?>
            <script>
                alert("Login Successful");
                location.href='index.php'
            </script>
            <?php        

            }
            else
            {
                ?>
            <script>
                alert("password incorrect");
                location.href='index.php'
            </script>
            <?php
                
            }
        }
        else
        {
            ?>
            <script>
                alert("Invalid Email");
                location.href='index.php'
            </script>
            <?php
        }
    }
    ?>
<nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="images/triptoe_logo1.png" alt="" width="40" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item ">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <!-- <li class="nav-item dropdown dropleft">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">Book Online</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item " href="#"><i class="t-icon fas fa-bus 3x"></i> Bus</a></li>
            <li><a class="dropdown-item " href="#"><i class="t-icon fas fa-car"></i>Cab</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item " href="#"><i class="t-icon fas fa-hotel"></i> Hotel</a></li>
            <li><a class="dropdown-item " href="#"><i class="t-icon fas fa-house-user"></i>Home stays</a></li>
            <li><a class="dropdown-item " href="#"><i class="t-icon fas fa-umbrella-beach"></i>Holidays</a></li>
            <li><a class="dropdown-item " href="#"><i class="t-icon fas fa-hiking"
                  style="font-size: 24px;"></i>Adventure</a></li>
          </ul>
        </li> -->

        <!-- <li class="nav-item ">
          <a class="nav-link" href="#">Book Online</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="stay.php">Stay</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="discover.php">Discover</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="discover.php">Discover</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Shop</a>
        </li>
        <li class="nav-item"> -->
          <!-- <a class="nav-link" href="#">Blog</a> 
        </li>-->
        <!-- <li class="nav-item dropdown dropleft">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">More </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
        
        <li class="nav-item dropdown dropleft ">
          <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false"><i class="far fa-user"></i></a>
          <ul class="dropdown-menu profiledd icon" aria-labelledby="navbarDropdown">            
            <li><a class="dropdown-item " href="#"><i class="t-icon fas fa-user"></i>My profile</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item " href="my_cart.php"><i class="t-icon fas fa-shopping-cart"></i> My shopping cart</a></li>
            <?php if(isset($_SESSION['username'])) {?>
            <li><a class="dropdown-item " href="my_hotel.php"><i class="t-icon fas fa-hotel"></i> My Hotel Booking</a></li>
            <?php }else{ ?> 
            <li><a class="dropdown-item " href="my_hotel.php"><i class="t-icon fas fa-hotel"></i> My Hotel Booking</a></li>
            <?php } ?>
            <!-- <li><a class="dropdown-item " href="#"><i class="t-icon fas fa-heart"></i> My wish list</a></li> -->
            <!-- <li><a class="dropdown-item " href="#"><i class="t-icon fas fa-mountain"></i>My packages</a></li> -->
            <li><a class="dropdown-item " href="#"><i class="t-icon fas fa-umbrella-beach"></i>Holidays</a></li>
            <li><a class="dropdown-item " href="#"><i class="t-icon fas fa-hiking"
                  style="font-size: 24px;"></i>Adventure</a></li>
          </ul>
        </li>
        <!-- ===========================CHANGING LOGIN BUTTON IF SESSTION IS SET================================ -->             
        <?php if(!isset($_SESSION['username'])) {?>
        <li class="nav-item">
          <!-- Large modal -->
          <button type="button" class="btn modal-button" data-toggle="modal"
            data-target=".bd-example-modal-lg">Sign-in</button>

          <div class="modal fade bd-example-modal-lg exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <div class="row">
                  <div class="col-md-6">
                    <div class="signinimg"><img class="img-fluid" src="images/signup.png" alt="signup image"></div>
                  </div>
                  <div class="col-md-6 formm">
                    <button type="button" class="close close-button" data-dismiss="modal" aria-label="Close"
                      style="float: right;border: 0px solid #e9ecef;width:30px;">
                      <span aria-hidden="true" style="font-size: 25px;">&times;</span>
                    </button>
                    <div class="flip-cardd-3D-wrapper">
                      <div id="flip-cardd">
                        <div class="flip-cardd-front conatiner">
                          <h2 style="text-align: left;">Sign-in</h2>
                          <form class="cardd disabled" id="flip-cardd" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                            <div class="flip-cardd-front">
                              <!-- sign_in form data starts from here -->
                              <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                  aria-describedby="emailHelp" placeholder="Enter email" name="emaill" required>
                              </div>
                              <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                  placeholder="Password" name="passs" required>
                              </div>
                              <div class="form-group">
                                <div>Don't have an account?<span class="s-text"
                                    id="flip-cardd-btn-turn-to-back">Sign-up</span></div>
                              </div>
                              <button type="submit" class="btn btn-success" name="submit"
                                style=" margin-top: 20px;">Submit</button>

                              <div class="form-group social_media_signin">
                                <h6><b style="opacity:0.6;">--------------------Social sign-In-------------------</b>
                                </h6>
                                <div class="btn btn-danger rbtn"><i class="fab fa-google"></i></div>
                                <div class="btn btn-danger rbtn"><i class="fab fa-facebook-f"></i></div>
                                <div class="btn btn-danger rbtn"><i class="fab fa-twitter"></i></div>
                              </div>

                            </div>
                          </form>
                          <!-- =====================================new account============================ -->
                          <!-- =====================================register============================ -->
                        </div>
                        <div class="flip-cardd-back">
                          <form class="cardd disabled" id="flip-cardd" action="register.php" method="post">
                            <div class="flip-cardd-front" style="margin-top: -30px;">
                              <h2 style="text-align: left;">Create New Account</h2>
                              <div class="row" style="margin:0 !important; width:100%;">
                                <div class="col-lg-6 col-md-6" style="padding:0;">
                                  <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                      placeholder="First name" name="fname" required>
                                  </div>
                                </div>
                                <div class="col-lg-6 col-md-6" style="padding:0;">
                                  <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                      placeholder="Last name" name="lname" required>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                  aria-describedby="emailHelp" name="email" placeholder="Enter email">
                              </div>
                              <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                  placeholder="Password" name="pass" required>
                              </div>
                              <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                  placeholder="Confirm Password" name="cpass" required>
                              </div>
                              <div class="form-group">
                                <div>Already have an account?<span class="s-text"
                                    id="flip-cardd-btn-turn-to-front">Sign-in</span></div>
                              </div>
                              <button type="submit" class="btn btn-success my-2" name="submit">Submit</button>
                              <div class="form-group social_media">
                                <h6><b style="opacity:0.6;">--------------------Social sign-up--------------------</b>
                                </h6>
                                <div class="btn btn-danger rbtn"><i class="fab fa-google"></i></div>
                                <div class="btn btn-danger rbtn"><i class="fab fa-facebook-f"></i></div>
                                <div class="btn btn-danger rbtn"><i class="fab fa-twitter"></i></div>
                              </div>

                            </div>
                          </form>
                          <!-- <button id="flip-cardd-btn-turn-to-front">flip</button> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>   
        <?php }else{ ?>     
        <li>
        <a href="logout.php"> <button class="btn btn-secondary my-sm-0">Logout</button></a>
        </li>  
        <?php } ?>      
      </ul>
    </div>    
  </div>  
  <script>
    document.addEventListener('DOMContentLoaded', function (event) {

      document.getElementById('flip-cardd-btn-turn-to-back').style.visibility = 'visible';
      document.getElementById('flip-cardd-btn-turn-to-front').style.visibility = 'visible';

      document.getElementById('flip-cardd-btn-turn-to-back').onclick = function () {
        document.getElementById('flip-cardd').classList.toggle('do-flip');
      };

      document.getElementById('flip-cardd-btn-turn-to-front').onclick = function () {
        document.getElementById('flip-cardd').classList.toggle('do-flip');
      };

    });
  </script>
  <!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
	</script>
	<!-- =========================script for drop down======================================= -->

	<script type="text/javascript">
		$('.dropdown').on('show.bs.dropdown', function (e) {
			$(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
		});

		$('.dropdown').on('hide.bs.dropdown', function (e) {
			$(this).find('.dropdown-menu').first().stop(true, true).slideUp(200);
		});
	</script>
	<!-- ===============================ends here=================================== -->
</nav>