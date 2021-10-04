<?php
session_start();
if (($_SESSION['sname'] == '') || (!isset($_SESSION['sname'])))
 {
    header('location:student_login.php');
}
else
{
//session_start();
require_once('connection.php');
$id=$_REQUEST['event_id'];
$r=mysqli_fetch_array(mysqli_query($cn,"select * from event where event_id=$id"));
}
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/single-event.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2020 11:37:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>uniAlumni</title>

    <meta name="description" content="simple description for your site"/>
<meta name="keywords" content="keyword1, keyword2"/>
<meta name="author" content="Jobz"/>

<!-- twitter card starts from here, if you don't need remove this section -->
<meta name="twitter:card" content="summary"/>
<meta name="twitter:site" content="@yourtwitterusername"/>
<meta name="twitter:creator" content="@yourtwitterusername"/>
<meta name="twitter:url" content="http://twitter.com/"/>
<meta name="twitter:title" content="Your home page title, max 140 char"/> <!-- maximum 140 char -->
<meta name="twitter:description" content="Your site description, maximum 140 char "/> <!-- maximum 140 char -->
<meta name="twitter:image"
      content="assets/img/twittercardimg/twittercard-144-144.png"/>  <!-- when you post this page url in twitter , this image will be shown -->
<!-- twitter card ends here -->

<!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
<meta property="og:title" content="Your home page title"/>
<meta property="og:url" content="http://your domain here.com"/>
<meta property="og:locale" content="en_US"/>
<meta property="og:site_name" content="Your site name here"/>
<!--meta property="fb:admins" content="" /-->  <!-- use this if you have  -->
<meta property="og:type" content="website"/> <!-- 'article' for single page  -->
<meta property="og:image"
      content="assets/img/opengraph/fbphoto-476-476.png"/> <!-- when you post this page url in facebook , this image will be shown -->
<!-- facebook open graph ends here -->

<!-- desktop bookmark -->
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- icons & favicons -->
<link rel="shortcut icon" type="image/x-icon"  href="assets/img/favicon/favicon.ico"/>  <!-- this icon shows in browser toolbar -->
<link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico"/> <!-- this icon shows in browser toolbar -->
<link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="assets/img/favicon/manifest.json">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

<!-- Fallback For IE 9 [ Media Query and html5 Shim] -->
<!--[if lt IE 9]>
<script src="assets/vendor/css3-mediaqueries-js/css3-mediaqueries.js"></script>
<![endif]-->

<!-- GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet" />

<!-- BOOTSTRAP CSS -->
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/vendor/navbar/bootstrap-4-navbar.css" />

<!--Animate css -->
<link rel="stylesheet" href="assets/vendor/animate/animate.css" media="all" />

<!-- FONT AWESOME CSS -->
<link rel="stylesheet" href="assets/vendor/fontawesome/css/font-awesome.min.css" />

<!--owl carousel css -->
<link rel="stylesheet" href="assets/vendor/owl-carousel/owl.carousel.css" media="all" />

<!--Magnific Popup css -->
<link rel="stylesheet" href="assets/vendor/magnific/magnific-popup.css" media="all" />

<!--Nice Select css -->
<link rel="stylesheet" href="assets/vendor/nice-select/nice-select.css" media="all" />

<!--Offcanvas css -->
<link rel="stylesheet" href="assets/vendor/js-offcanvas/css/js-offcanvas.css" media="all" />

<!-- MODERNIZER  -->
<script src="assets/vendor/modernizr/modernizr-custom.js"></script>

<!-- Main Master Style  CSS  -->
<link id="cbx-style" data-layout="1" rel="stylesheet" href="assets/css/style-default.min.css" media="all" />

</head>
<body>

<!--[if lt IE 7]>
<p class="browsehappy">We are Extreamly sorry, But the browser you are using is probably from when civilization started.
    Which is way behind to view this site properly. Please update to a modern browser, At least a real browser. </p>
<![endif]-->

<?php include_once('header.php'); ?>
<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Get Together 2018</h1>
                    <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the
                        need</p>
                    <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Gallery Page Content Start ==-->




<section id="page-content-wrap">
    <div class="single-event-page-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-event-details">
                        <div class="event-thumbnails">
                            <div class="event-thumbnail-carousel owl-carousel">

    <div class="event-thumb-item event-thumb-img-11" style="background-image:url(admin/image/eventimg/<?php echo $r[2]; ?>)">

                                    <div class="event-meta">
                                        <h3>Recently we are going to arrange a awesome get together!</h3>
                                        
                                        <a href="joinus_event.php?event_id=<?php echo $r[0]; ?>" class="btn btn-brand btn-join">Join</a>
                                    </div>
                                </div>

                                
                                
                            </div>
                        <div class="event-countdown">
                                <div class="event-countdown-counter" data-date="<?php echo $r[1];?>"></div>
                                <p>Remaining</p>
                            </div>
                        </div>
                        <h2><?php echo $r[7];?></h2>
                        <p><?php echo $r[5];?></p>

                        <!--<p>Etiam rhoncus. Ut leo. Morbi mollis tellus ac sapien. Fusce fermentum oo nec arcu. Quisque malesuada placerat nisl. Etiam sit amet orci eget faucitincidunt. Quisque rutrum. Pellentesque posuere. Praesent ac massa at ligula laoureet iaculis. Cras risus ipsum, faucibus ut, ullamcorper id, varius ac, leo.Ut a nisl id
                            Etiam rhoncus. Ut leo. Morbi mollis tellus ac sapien. Fusce fermentum oo nec ante tempus hendrerit. Curabitur at lacus ac velit ornare lobortis. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In turpis. Quisque id mi.</p>-->
                        <div class="event-schedul">
                            <h3>Event Schedule</h3>
                            <div class="row">
                                <div class="col-lg-10 m-auto">
                                    <div class="event-schedul-accordion">
                                        <div class="accordion" id="event-schedul-accor">
                                            <!-- Single Event Schedule Start -->
                                        <?php  if($r['estime01']!='')
                                        {
                                            ?>
                                        
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h5 data-toggle="collapse" data-target="#eventschedulOne" aria-expanded="false" aria-controls="eventschedulOne"><span class="event-time"><?php echo $r[10];?></span><?php echo $r[15];?>
                                                        <span class="open-close-icon pull-right">
                                                            <i class="fa fa-angle-up"></i>
                                                            <i class="fa fa-angle-down"></i>
                                                        </span>
                                                    </h5>
                                                </div>

                                                <div id="eventschedulOne" class="collapse" aria-labelledby="headingOne" data-parent="#event-schedul-accor">
                                                    <div class="card-body">
                                                        <p><?php echo $r[20];?></p>
                                                        <!--<p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>-->
                                                        <h4 class="speaker-name"><strong>Speaker:</strong> Adam Watshon, <span class="speaker-deg">Crish Joshef</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                    }
                                    ?>
                                            <!-- Single Event Schedule End -->

                                            <!-- Single Event Schedule Start -->
                                            <?php if($r['estime02']!='')
                                            {

                                            ?>
                                            
                                            <div class="card">
                                                <div class="card-header" id="headingTwo">
                                                    <h5 data-toggle="collapse" data-target="#eventschedulTwo" aria-expanded="true" aria-controls="eventschedulTwo"><span class="event-time"><?php echo $r[11];?></span> <?php echo $r[16];?>
                                                        <span class="open-close-icon pull-right">
                                                            <i class="fa fa-angle-up"></i>
                                                            <i class="fa fa-angle-down"></i>
                                                        </span>
                                                    </h5>
                                                </div>

                                                <div id="eventschedulTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#event-schedul-accor">
                                                    <div class="card-body">
                                                        <p><?php echo $r[21];?></p>
                                                        <h4 class="speaker-name"><strong>Speaker:</strong> Adam Watshon, <span class="speaker-deg">Crish Joshef</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                            <!-- Single Event Schedule End -->

                                            <!-- Single Event Schedule Start -->
                                            <?php if($r['estime03']!='')
                                            {

                                            ?>
                                            
                                            <div class="card">
                                                <div class="card-header" id="headingThree">
                                                    <h5 data-toggle="collapse" data-target="#eventschedulThree" aria-expanded="false" aria-controls="eventschedulThree"><span class="event-time"><?php echo $r[12];?></span><?php echo $r[17];?>
                                                        <span class="open-close-icon pull-right">
                                                            <i class="fa fa-angle-up"></i>
                                                            <i class="fa fa-angle-down"></i>
                                                        </span>
                                                    </h5>
                                                </div>

                                                <div id="eventschedulThree" class="collapse" aria-labelledby="headingThree" data-parent="#event-schedul-accor">
                                                    <div class="card-body">
                                                       <p><?php echo $r[22];?></p>
                                                        <h4 class="speaker-name"><strong>Speaker:</strong> Adam Watshon, <span class="speaker-deg">Crish Joshef</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                            <!-- Single Event Schedule End -->

                                            <!-- Single Event Schedule Start -->
                                          <?php if($r['estime04']!='')
                                            {

                                            ?>
                                            
                                            <div class="card">
                                                <div class="card-header" id="headingFour">
                                                    <h5 data-toggle="collapse" data-target="#eventschedulFour" aria-expand  ed="false" aria-controls="eventschedulFour"><span class="event-time"><?php echo $r[13];?></span> <?php echo $r[18];?>
                                                        <span class="open-close-icon pull-right">
                                                            <i class="fa fa-angle-up"></i>
                                                            <i class="fa fa-angle-down"></i>
                                                        </span>
                                                    </h5>
                                                </div>

                                                <div id="eventschedulFour" class="collapse" aria-labelledby="headingFour" data-parent="#event-schedul-accor">
                                                    <div class="card-body">
                                                        <p><?php echo $r[23];?></p>
                                                        <h4 class="speaker-name"><strong>Speaker:</strong> Adam Watshon, <span class="speaker-deg">Crish Joshef</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                            <!-- Single Event Schedule End -->

                                            <!-- Single Event Schedule Start -->
                                          <?php if($r['estime05']!='')
                                            {

                                            ?>
                                            
                                            <div class="card">
                                                <div class="card-header" id="headingFive">
                                                    <h5 data-toggle="collapse" data-target="#eventschedulFive" aria-expand  ed="false" aria-controls="eventschedulFive"><span class="event-time"><?php echo $r[14];?></span> <?php echo $r[19];?>
                                                        <span class="open-close-icon pull-right">
                                                            <i class="fa fa-angle-up"></i>
                                                            <i class="fa fa-angle-down"></i>
                                                        </span>
                                                    </h5>
                                                </div>

                                                <div id="eventschedulFive" class="collapse" aria-labelledby="headingFive" data-parent="#event-schedul-accor">
                                                    <div class="card-body">
                                                        <p><?php echo $r[24];?></p>
                                                        <h4 class="speaker-name"><strong>Speaker:</strong> Adam Watshon, <span class="speaker-deg">Crish Joshef</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                            <!-- Single Event Schedule End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Gallery Page Content End ==-->
<?php include_once('footer.php'); ?>
<!--== Scroll Top ==-->
<a href="#" class="scroll-top">
    <i class="fa fa-angle-up"></i>
</a>
<!--== Scroll Top ==-->

<!-- SITE SCRIPT  -->

<!-- Jquery JS  -->
<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>

<!-- POPPER JS -->
<script src="assets/vendor/bootstrap/js/popper.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/navbar/bootstrap-4-navbar.js"></script>

<!--owl-->
<script src="assets/vendor/owl-carousel/owl.carousel.min.js"></script>

<!--Waypoint-->
<script src="assets/vendor/waypoint/waypoints.min.js"></script>

<!--CounterUp-->
<script src="assets/vendor/counterup/jquery.counterup.min.js"></script>

<!--isotope-->
<script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>

<!--magnific-->
<script src="assets/vendor/magnific/jquery.magnific-popup.min.js"></script>

<!--Smooth Scroll-->
<script src="assets/vendor/smooth-scroll/jquery.smooth-scroll.min.js"></script>

<!--Jquery Easing-->
<script src="assets/vendor/jquery-easing/jquery.easing.1.3.min.js"></script>

<!--Nice Select -->
<script src="assets/vendor/nice-select/jquery.nice-select.js"></script>

<!--Jquery Valadation -->
<script src="assets/vendor/validation/jquery.validate.min.js"></script>
<script src="assets/vendor/validation/additional-methods.min.js"></script>

<!--off-canvas js -->
<script src="assets/vendor/js-offcanvas/js/js-offcanvas.pkgd.min.js"></script>

<!-- Countdown -->
<script src="assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>

<!-- custom js: main custom theme js file  -->
<script src="assets/js/theme.min.js"></script>

<!-- custom js: custom js file is added for easy custom js code  -->
<script src="assets/js/custom.js"></script>

<!-- custom js: custom scripts for theme style switcher for demo purpose  -->
<script id="switcherhandle" src="assets/switcher/switcher.js"></script>


</body>

<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/single-event.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2020 11:37:38 GMT -->
</html>
