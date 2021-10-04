<?php/*
session_start();
require_once('connection.php');
$uid=$_SESSION['user_id'];
$result1=mysqli_fetch_row(mysqli_query($cn,"select * from user_book_detail where uid=$uid order by user_book_id desc limit 1"));
$driver_id=$result1[9];
$car_id=$result1[1];
$result2=mysqli_fetch_row(mysqli_query($cn,"select * from car_model cmd ,brand_master bm,car_master cm,car_details cd 
where cmd.car_model_id=cm.car_model_id and cm.car_id=cd.car_id and cmd.b_id=bm.b_id and cm.car_id=$car_id"));
$result3=mysqli_fetch_row(mysqli_query($cn,"select * from registration where uid=$uid"));
$result4=mysqli_fetch_row(mysqli_query($cn,"select * from driver_detail where driver_id=$driver_id"));

if(isset($_POST['b1']))
{
	header('location:dompdf/generate_pdf.php');
}
*/
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
    <body class="">
        <!--<link href="billrecipt.css" rel="stylesheet">-->
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
                            <a href="index.html"><img src="images/logo.png" alt=""></a>
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
                                    <li class="menu-item   current-menu-parent menu-item-has-children  ">
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

                                        <li class="menu-item current-menu-parent menu-item-has-children  ">
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
                                 
                                   <li class="menu-item current-menu-parent menu-item-has-children active-color   ">
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
                            <h3>Get in touch</h3>
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //////////////////////////////// -->
        <div class="container">
            <div class="row">
               
            </div>
        </div>
        <!-- ////////////////////////////////// -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="wheel-header text-center marg-lg-t85 marg-lg-b90  marg-md-t50">
                        
                        <h3>Final Recipt </h3>
                    </div>
                </div>
            </div>
<!----------------------------------------------Start Of design Recipt----------------------------------->
<div class="container">
   <div class="col-md-12">
      <div class="invoice">
         <!-- begin invoice-company -->
         <div class="invoice-company text-inverse f-w-600">
           <center><img src="images/texizonelogo/texizonelogo.png"></center><br>
           <center><h1>Texizone ,India.</h1></center>  
            <span></span>
         </div>
         <!-- end invoice-company -->
         <!-- begin invoice-header -->
         <div class="invoice-header" align="center">

            <div class="invoice-from">
               <b>from</b>
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse">Head Office</strong><br>
                  Texizone ,India.<br>
                  220-A aashiewad park, udhna<br>
                  surat, 394210<br>
                  T: 8320523832<br>
                  texizone2020@gmail.com<br>
                  
               </address>
            </div>
            <div class="invoice-to">
               
                <div class="invoice-from">
                    <b>Customer photo</b>
                    <address class="m-t-5 m-b-5">
                    <img src="" height="100px" width="100px">
                </div>
                <div class="invoice-from">
               <b>to</b>
               <address class="m-t-5 m-b-5">
                  <i class="text-inverse"><?php echo $result3[1]; ?></i><br>
                  <?php echo $result3[3]; ?><br>
                  <?php echo $result3[8]; echo" "; echo $result3[9];?><br>
                  T- <?php echo $result3[6]; ?><br>
                  <?php echo $result3[4]; ?><br>
                  
               </address>
                </div>
            </div>
             <div class="invoice-from">
               <b>Date:-</b>
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse">Picking Place:- <?php echo $result1[17]; ?></strong><br>
                  Booking Date:- <?php echo $result1[15]; ?><br>
                  Start Date:- <?php echo $result1[4]; ?><br>
                  Return Date:- <?php echo $result1[5]; ?><br>
                  No Of Days:- <?php echo $result1[3]; ?><br>
                  
               </address>
            </div>
            
         </div>
         <!-- end invoice-header -->
         <!---start information-->
         <div class="invoice-header" align="center">

            <div class="invoice-to">
                <div class="invoice-from">
               <b>Driver photo</b>
               <address class="m-t-5 m-b-5">
                 <img src="img1.jpg" height="100px" width="100px">
               </div>

               <div class="invoice-from">
               <small>Driver information<br>
               ------------------</small>
               <address class="m-t-5 m-b-5">
                  <i class="text-inverse">Ritesh Poriya.</i><br>
                      <?php echo $result4[2]; ?><br>
                      <?php echo $result4[7]; ?><br>
                      T: <?php echo $result4[3]; ?><br>
                  
               </address>
               </div>
            
            </div>  

            <div class="invoice-to">
                <div class="invoice-from">
               <b>Car photo</b>
               <address class="m-t-5 m-b-5">
                 <img src="img1.jpg" height="100px" width="100px">
               </div>

               <div class="invoice-from">
               <small>Car information<br>
               ---------------</small>
               <address class="m-t-5 m-b-5">
                  <i class="text-inverse"><?php echo $result2[4]; echo" ";echo $result2[2]; ?></i><br>
                      <?php echo $result2[16]; ?><br>
                      <?php echo""; echo $result2[15]; ?><br>   
                      <?php echo $result2[9]; echo" Model"; ?><br>
                  
               </address>
               </div>
            
            </div>
             
         </div> 
         <!------end information-->
         <!-- begin invoice-content -->
         <div class="invoice-content" align="">
            <!-- begin table-responsive -->
            <div class="table-responsive">
               <table class="table table-invoice" align="center" >
                  <thead >
                     <tr>
                        <center><th><center>Information</center></th></center>
                        <th class="text-center" width="10%">RATE PER KM/-</th>
                        <th class="text-center" width="10%">DAYS</th>
                        <th class="text-center" width="20%">LINE TOTAL</th>
                     </tr>
                  </thead>
                 <tbody>
                     <tr>
                       <td>
                           <span class="text-inverse"></span>
                        </td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-right"></td></center>
                     </tr>
                     <tr>
                       <td>
                           <span class="text-inverse"><center><?php echo $result2[4]; ?> <br><?php echo $result2[2]; ?> <br>  
                      <?php echo $result2[9]; echo" "; echo $result2[15]; ?> <br><?php echo $result2[16]; ?></center></span>
                        </td>
                        <td class="text-center"><center>Car RATE</center></td>
                        <td class="text-center"><center><?php echo $result1[3]; ?></center></td>
                        <td class="text-center"><center><?php echo $result1[11]; ?></center></td></center>
                     </tr>
                     <tr>
                      <td>
                           <span class="text-inverse"></span>
                        </td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-right"></td></center>
                     </tr>
                     <tr>
                      <td>
                           <span class="text-inverse"></span>
                        </td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-right"></td></center>
                     </tr>
                     
                     
                  </tbody>

               </table>

            </div>
            <!-- end table-responsive -->
            <!-- begin invoice-price -->
            <div class="invoice-price">
               <div class="invoice-price-left">
                  <div class="invoice-price-row">
                     <div class="sub-price">
                        <small></small>
                        <span class="text-inverse">Payment Type</span>
                     </div>
                     <div class="sub-price">
                        <i class="&#xf52c; text-muted"></i>
                     </div>
                     <div class="sub-price">
                        <small></small>
                        <span class="text-inverse">CASH</span>
                     </div>
                  </div>
               </div>
               <div class="invoice-price-right">
                  <small>TOTAL</small>
                  <span class="f-w-600">₹<?php echo $result1[11]; ?>/-</span>
               </div>
            </div>
            <!-- end invoice-price -->
         </div>
         <!-- end invoice-content -->
         <!-- begin invoice-note -->
         

                 
         <!-- end invoice-note -->
         <!-- begin invoice-footer -->
         <div class="invoice-footer">
            <p class="text-center m-b-5 f-w-600">
               THANK YOU FOR YOUR BOOKING
            </p>
            <p class="text-center">
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-globe"></i> Texizone.com</span><br>
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-phone-volume"></i> T:8320523832</span><br>
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-envelope"></i> Texizone2020@gmail.com</span><br>

            </p>

         </div>

         
            
            <center><button type="submit" class="wheel-btn" name="b1">Generate PDF</button></center>
            
         
         <!-- end invoice-footer -->
      </div>
   </div>
</div>  
<br>
<br>
<!---------------------------------------------------------------------------------------------------------------------------------------------------End Of Design Recipt---------------------------------------------------------------------------------------------------------------------------------------------------->
  </div>
        <!-- ///////////////////////////////////// -->
        <div class="container-fluid padd-lr0">
            <div class="row">
                <div class="col-xs-12 padd-lr0">
                    <div 
                        class="wheel-map" 
                        data-lat="45.7143528" 
                        data-lng="-74.0059731"  
                        data-marker="images/marker.png" 
                        data-zoom="10" 
                        data-style="style-1"
                        ></div>
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
                                <li><span><i class="fa fa-map-marker"></i>121 King Street, Melbourne <br>
                                    VIC 3000, Australia  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +61 3 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>contact@wheel-rental.com</span></a></li>
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
                                <li><a href="" class="">About us</a></li>
                                <li><a href="" class="">Customer Service</a></li>
                                <li><a href="" class="">Contact Us</a></li>
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
                                <div class="wheel-footer-galery-item"><a href=""><img src="images/i11.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href=""><img src="images/i12.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href=""><img src="images/i13.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href=""><img src="images/i14.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href=""><img src="images/i15.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href=""><img src="images/i16.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href=""><img src="images/i17.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href=""><img src="images/i18.jpg" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; WHEEL 2016 | Designed with Love By bigpsfan</span></div>
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
        <!-- sixth block end -->
    </body>
</html>