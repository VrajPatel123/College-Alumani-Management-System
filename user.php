<?php
session_start();
require_once('connection.php');
$uid=$_SESSION['user_id'];
$r=mysqli_fetch_row(mysqli_query($cn,"select * from registration where uid=$uid"));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>Wheel - Responsive and Modern Car Rental Website Template</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class=" wheel-bg2 ">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.php"><img src="images/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+91) 8320523832</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>contact@texizo.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Account
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="login.php">Login</a></li>
                                            <li><a href="registration.php">Register</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-lang-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Profile
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="userprofile.php"> User Profile </a></li>
                                            <li><a href="ridehistory.php"> Ride History </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   ">
                                        <a href="index.php">Home</a>
                                        <ul class="sub-menu dl-submenu">
                                    </ul>
                                    </li>
<!------------------------------------------------------------------------------------------------------->
                                    <li class="menu-item   current-menu-parent menu-item-has-children ">
                                        <a href="about.php">About</a>
                                        <ul class="sub-menu dl-submenu">
                                    </ul>
                                    </li>
<!-------------------------------------------------------------------------------------------------->

                                        <li class="menu-item current-menu-parent menu-item-has-children active-color ">
                                            <a href="all_car.php"> Car </a>
                                        </li>
<!--------------------------------------------------------------------------------------------------->


                                   <!--- <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="#"> Listing </a>
                                        
                                        <ul class="sub-menu dl-submenu">
                                            <li class="menu-item current-menu-item">
                                                <a href="car-list-grid.php">Car Listing - Grid View</a>
                                            </li>
                                            <li class="menu-item current-menu-item">
                                                <a href="car-list-3col2.php">Car Listing - List View</a>
                                            </li>
                                            <li class="menu-item current-menu-item">
                                                <a href="car-listing-details.php">car listing details</a>
                                            </li>
                                        </ul>
                                    </li>-->
<!---------------------------------------------------------------------------------------------->
                                 
                                   <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="reservation.php"> Reservation </a>
                                    </li>
<!------------------------------------------------------------------------------------------->
                                    
                                     <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="all_driver.php"> Driver </a>
                                    </li>
<!------------------------------------------------------------------------------------------->
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="#"> News </a>
                                        
                                        <ul class="sub-menu dl-submenu">
                                            <li class="menu-item current-menu-item">
                                                <a href="news.php"> News </a>
                                            </li>
                                            <li class="menu-item current-menu-item">
                                                <a href="offers.php"> Offers </a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li class="menu-item   current-menu-parent menu-item-has-children ">
                                        <a href="contact.php"> Contact </a>
                                        <ul class="sub-menu dl-submenu">
                                    </ul>
                                    </li>

                                   <!-- <li class="menu-item menu-item-has-children  ">
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item "><a href="contact.html">contact</a></li>
                                            <li class="menu-item "><a href="register.html">Register</a></li>
                                            <li class="menu-item "><a href="checkout.html">Ceckout</a></li>
                                            <li class="menu-item "><a href="about.html">About</a></li>
                                            <li class="menu-item "><a href="shopping.html">shopping cart</a></li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="#">Level 2</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="#">Level 3</a></li>
                                                    <li class="menu-item"><a href="#">Level 3</a></li>
                                                    <li class="menu-item"><a href="#">Level 3</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>-->
                                   <!-- <li class="menu-item menu-item-has-children  ">
                                        <a href="#">News</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="news.html">News</a></li>
                                            <li class="menu-item"><a href="news-details.html">News details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item ">
                                        <a href="#">Features</a>
                                    </li>-->
                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //////////////////////////////// -->
        <div class="wheel-start3">
            <img src="images/best1.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 padd-lr0">
                        <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                            <h3> Car - List </h3>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Car Listing</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////////// -->
        <div class="prosuct-wrap">
            <div class="container padd-lr0 xs-padd">
                <div class="row">
                    <div class="col-sm-8">
                        <header class="wheel-header marg-lg-t25 marg-lg-b65">
                            <h3>Search vehicles for your location -<span> India</span></h3>
                        </header>
                    </div>
                     <?php
                    $result1=mysqli_query($cn,"select distinct (b_name) from brand_master"); 
                    ?>
                    <div class="col-sm-4">
                        <div class="select select-4 wheel-select-w100 marg-lg-t10 marg-lg-b65 marg-sm-b30">
                            <span class="">All brands</span>
                            <ul class="list">
                                <li onclick="showbrand('all')">All brands</li>
                            <?php
                               while($r1=mysqli_fetch_row($result1))
                                {
                            ?>
                              <li onclick="showbrand('<?php echo $r1[0]; ?>');"><?php echo $r1[0]; ?></li> 
                             <?php   
                            }
                            ?>
                                
                                
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-3">

                        <div class="select select-1">
                        </div>
                    </div>
                   
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="select select-2">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="select select-3">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="wheel-car-list-btn">
                            <a href="" class="fa fa-th-list " data-list='product-elem-style1'></a>
                            <a href="" class="fa fa-th active" data-list='product-elem-style2'></a>
                        </div>
                    </div>
                </div>
            </div></br></br></br>
            <div id="h2">
            </div>
            <div id="h1">
            <div class="container padd-lr0 xs-padd">
                <div class="product-list product-list2 wheel-bgt clearfix">
                    <div class="row">
                        

                          <div id="ProfilePage">
    <div id="LeftCol">
        <div id="Photo"><?php echo $r[12]; ?></div>
        
    </div>

    <div id="Info">
        <p>
            <strong>Full Name:</strong>
            <span><?php echo $r[1]; ?></span>
        </p>
        <p>
            <strong>Gender:</strong>
            <span><?php echo $r[2]; ?></span>
        </p>
        <p>
            <strong>Date Of Birth:</strong>
            <span><?php echo $r[3]; ?></span>
        </p>
        <p>
            <strong>Email:</strong>
            <span><?php echo $r[4]; ?></span>
        </p>
        <p>
            <strong>Mobile:</strong>
            <span><?php echo $r[6]; ?></span>
        </p>
        <p>
            <strong>Password:</strong>
            <span><?php echo $r[5]; ?></span>
        </p>
    </div>

    <!-- Needed because other elements inside ProfilePage have floats -->
    <div style="clear:both"></div>
</div>
                        
                    </div>
                </div>
            </div>
        </div>
            
        </div>
        <!-- ////////////////////////////////////////// -->
        <div class="wheel-quote text-center">
            <img src="images/bg3.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="swiper-container" data-autoplay="7000" data-touch="1" data-mouse="0" data-xs-slides="1" data-sm-slides="1" data-md-slides="1" data-lg-slides="1" data-add-slides="1" data-slides-per-view="responsive" data-loop="1" data-speed="1000">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="wheel-quote-item">
                                        <div class="wheel-quote-logo"><img src="images/l2.png" alt=""></div>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                        <h6>Catrina Romero</h6>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="wheel-quote-item">
                                        <div class="wheel-quote-logo"><img src="images/l2.png" alt=""></div>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                        <h6>Catrina Romero</h6>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="wheel-quote-item">
                                        <div class="wheel-quote-logo"><img src="images/l2.png" alt=""></div>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                        <h6>Catrina Romero</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination"></div>
                        </div>
                        <div class="swiper-outer-left fa fa-angle-left"></div>
                        <div class="swiper-outer-right fa fa-angle-right"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="wheel-quote-partners">
                            <a href=""><img src="images/p1.png" alt=""></a>
                            <a href=""><img src="images/p2.png" alt=""></a>
                            <a href=""><img src="images/p3.png" alt=""></a>
                            <a href=""><img src="images/p4.png" alt=""></a>
                            <a href=""><img src="images/p5.png" alt=""></a>
                            <a href=""><img src="images/p6.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            <h5>Newsletter Signup </h5>
                            <h3>Subscribe & get<span> 20% </span> Off</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Your Email Adddress">
                            <button class="wheel-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo2.png" alt=""></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>BMEF college of computer application, Bharthana,Vesu<br>
                                    Surat ,  INDIA </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +91 0261 987654</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>contact@texizo.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item">
                            <h3>Useful Links</h3>
                            <ul>
                                <li><a href="about.php" class="">About us</a></li>
                                <li><a href="" class="">Customer Service</a></li>
                                <li><a href="contact.php" class="">Contact Us</a></li>
                                <li><a href="" class="">Safety Recall</a></li>
                                <li><a href="" class="">Privacy policy</a></li>
                                <li><a href="" class="">Site Map</a></li>
                                <li><a href="" class="">Terms & condition</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                            <h3>Vehicles</h3>
                            <ul>
                                <li><a href="" class="">Exotic Cars</a></li>
                                <li><a href="" class="">SUVs</a></li>
                                <li><a href="" class="">Trucks</a></li>
                                <li><a href="" class="">Mini Vans</a></li>
                                <li><a href="" class="">Moving Trucks</a></li>
                                <li><a href="" class="">Vans</a></li>
                                <li><a href="" class="">RVs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 padd-lr0">
                        <div class="wheel-footer-gallery">
                            <h3>Photo Gallery</h3>
                            <div class="  clearfix">
                            <?php
                                while($r5=mysqli_fetch_row($result5))
                                {
                            ?>
                                <div class="wheel-footer-galery-item"><a href=""> <img src="/../project_admin/image/carphotoimg/<?php echo $r5[4]; ?>" alt="img" class="img-responsive" height="100px" width="100px"/></a></div>
                            <?php
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; Texizo 2020 | Designed with Love By Aaditya And Rohit</span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Listings</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <script type="text/javascript">
           
            
            function showbrand(bname)
            {
                
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("h1").innerHTML = this.responseText;
                        }
                        };
                    xhttp.open("POST","brand_ajax.php?name="+bname, true);

                    xhttp.send();
                    
            }
        </script>


        <style type="text/css">
#ProfilePage
{
    /* Move it off the top of the page, then centre it horizontally */
    margin: 50px auto;
    width: 635px;

/* For visibility. Delete me */
border: 1px solid red;
}

#LeftCol
{
    /* Move it to the left */
    float: left;

    width: 200px;
    text-align: center;

    /* Move it away from the content */
    margin-right: 20px;

/* For visibility. Delete me */
border: 1px solid brown;
}

#Photo
{
    /* Width and height of photo container */
    width: 200px;
    height: 200px;

/* For visibility. Delete me */
border: 1px solid green;
}

#PhotoOptions
{
    text-align: center;
    width: 200px;

/* For visibility. Delete me */
border: 1px solid brown;
}

#Info
{
    width: 400px;
    text-align: center;

    /* Move it to the right */
    float: right;

/* For visibility. Delete me */
border: 1px solid blue;
}

#Info strong
{
    /* Give it a width */
    display: inline-block;
    width: 100px;

/* For visibility. Delete me */
border: 1px solid orange;
}

#Info span
{
    /* Give it a width */
    display: inline-block;
    width: 250px;

/* For visibility. Delete me */
border: 1px solid purple;
}
</style>
        <!-- sixth block end -->
    </body>
</html>