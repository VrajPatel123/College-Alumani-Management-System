<?php
session_start();
  require_once('connection.php');
  $staff=mysqli_fetch_row(mysqli_query($cn,"select count(*) from staff_detail"));
  $news=mysqli_fetch_row(mysqli_query($cn,"select count(*) from news"));
  $event=mysqli_fetch_row(mysqli_query($cn,"select count(*) from event"));
  $placement=mysqli_fetch_row(mysqli_query($cn,"select count(*) from job_ad"));

  $sql=mysqli_query($cn,"SELECT job_ad.job_id,student_profile.s_name,student_profile.surname,student_profile.photo,job_ad.job_name,job_ad.company_name,job_ad.company_logo,job_ad.ad_photo,job_ad.date,
job_ad.apply_date,job_ad.expire_date,job_ad.fees,job_ad.description,job_ad.company_email,job_ad.company_description,job_ad.view from job_ad INNER JOIN student_profile ON job_ad.s_id = student_profile.s_id 

union

SELECT job_ad.job_id,fullname,surname,adminimg,job_ad.job_name,job_ad.company_name,job_ad.company_logo,job_ad.ad_photo,job_ad.date,
job_ad.apply_date,job_ad.expire_date,job_ad.fees,job_ad.description,job_ad.company_email,job_ad.company_description,job_ad.view from job_ad ,admin_login where s_id IS NULL ORDER by date limit 3
");

?>


<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2020 11:36:45 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Alumninati</title>

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
<meta name="msapplication-TileImage" content="assets/img/favicon/logo.png">
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
<p class="browsehappy">We are Extreamly sorry, But the browser you are using is probably from when civilization started. Which is way behind to view this site properly. Please update to a modern browser, At least a real browser. </p>
<![endif]-->

<?php include_once('header.php'); ?>
    <!--== Slider Area Start ==-->
<section id="slider-area">
    <div class="slider-active-wrap owl-carousel text-center text-md-left">
        <!-- Single Slide Item Start -->
        <div class="single-slide-wrap slide-bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider-content">
                            <h2>We Are Proud</h2>
                            <h3>Students of <span>Oxfornt University</span></h3>
                            <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need (academic, relocation, career, projects, mentorship, etc. you can ask the community and get responses in three.</p>
                            <div class="slider-btn">
                                <a href="#about-area" class="btn btn-brand smooth-scroll">our mission</a>
                                <a href="about.html" class="btn btn-brand-rev">our story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Slide Item End -->

        <!-- Single Slide Item Start -->
        <div class="single-slide-wrap slide-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider-content">
                            <h2>We Are Not Proud</h2>
                            <h3>Students of <span>Oxfornt University</span></h3>
                            <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need (academic, relocation, career, projects, mentorship, etc. you can ask the community and get responses in three.</p>
                            <div class="slider-btn">
                                <a href="#" class="btn btn-brand">our mission</a>
                                <a href="#" class="btn btn-brand-rev">our story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Slide Item End -->

        <!-- Single Slide Item Start -->
        <div class="single-slide-wrap slide-bg-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider-content">
                            <h2>Why Proud for u</h2>
                            <h3>Students of <span>Oxfornt University</span></h3>
                            <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need (academic, relocation, career, projects, mentorship, etc. you can ask the community and get responses in three.</p>
                            <div class="slider-btn">
                                <a href="#" class="btn btn-brand">our mission</a>
                                <a href="#" class="btn btn-brand-rev">our story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Slide Item End -->
    </div>

    <!-- Social Icons Area Start -->
    <div class="social-networks-icon">
        <ul>
            <li><a href="https://www.facebook.com/BMBCA.ADMIN/" target="_blank"><i class="fa fa-facebook"></i> <span>7.2k Likes</span></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i> <span>3.2m Followers</span></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i> <span>7.2k Likes</span></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i> <span>2.2k Subscribers</span></a></li>
        </ul>
    </div>
    <!-- Social Icons Area End -->
</section>
<!--== Slider Area End ==-->

<?php
$result=mysqli_query($cn,"select * from event order by event_date desc limit 3");
?>
    <!--== Upcoming Event Area Start ==-->
<section id="upcoming-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="upcoming-event-wrap">
                    <div class="up-event-titile">
                        <h3>Upcoming event</h3>
                    </div>
                    <div class="upcoming-event-content owl-carousel">
                        <!-- No 1 Event -->
                        <?php
                        while($r=mysqli_fetch_row($result))
                        {


                        ?>
                        <div class="single-upcoming-event">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="up-event-thumb">
                                        <img src="admin\image\eventimg\<?php echo $r[2]; ?>" style="width: 700px; height: 390px" class="img-fluid" alt="Upcoming Event">
                                        <h4 class="up-event-date">It’s <?php echo $r[1]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="up-event-text">
                                                <div class="event-countdown">
                                                     <div class="event-countdown-counter" data-date="<?php echo $r[1] ?>"></div> 
                                                    <p>Remaining</p>
                                                </div>
                                                <h3><a href="single_event.php?event_id=<?php echo $r[0]; ?>" target="_blank"><?php echo $r[7]; ?></a></h3>
                                                <p><?php echo $r[5]; ?></p>
                                                <a href="single_event.php?event_id=<?php echo $r[0]; ?>" target="_blank" class="btn btn-brand btn-brand-dark">join with us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- partial -->

                        <?php
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Upcoming Event Area End ==-->

    <!--== About Area Start ==-->
<section id="about-area" class="section-padding">
    <div class="about-area-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 ml-auto">
                    <div class="about-content-wrap">
                        <div class="section-title text-center text-lg-left">
                            <h2>Our Misssion</h2>
                        </div>

                        <div class="about-thumb">
                            <img src="assets/img/about-bg.jpg" alt="" class="img-fluid">
                        </div>

                        Bhagwan Mahavir University Alumni Association shall serve as a platform to bridge the gap of student – alumni interaction driven by the ideals and values that shall ensure the upliftment of both present and future alumnus with support to build a social, knowledgeable and motivational capital for  Bhagwan Mahavir University and its students.
                        <a href="about.html" class="btn btn-brand about-btn">know more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== About Area End ==-->

    <!--== Our Responsibility Area Start ==-->
<section id="responsibility-area" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Our Responsibility</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Responsibility Content Wrapper ==-->
        <div class="row text-center text-sm-left">
            <!--== Single Responsibility Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-responsibility">
                    <img src="assets/img/responsibility/01.png" alt="Responsibility">
                    <h4>Scholarship</h4>
                    <p>De create building thinking about your requirment and latest treand on our marketplace area</p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->

            <!--== Single Responsibility Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-responsibility">
                    <img src="assets/img/responsibility/02.png" alt="Responsibility">
                    <h4>Help Current Students</h4>
                    <p>De create building thinking about your requirment and latest treand on our marketplace area</p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->

            <!--== Single Responsibility Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-responsibility">
                    <img src="assets/img/responsibility/03.png" alt="Responsibility">
                    <h4>Help Our University</h4>
                    <p>De create building thinking about your requirment and latest treand on our marketplace area</p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->

            <!--== Single Responsibility Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-responsibility">
                    <img src="assets/img/responsibility/04.png" alt="Responsibility">
                    <h4>Build Our Community</h4>
                    <p>De create building thinking about your requirment and latest treand on our marketplace area</p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->
        </div>
        <!--== Responsibility Content Wrapper ==-->
    </div>
</section>
<!--== Our Responsibility Area End ==-->

    <!--== FunFact Area Start ==-->
<section id="funfact-area">
    <div class="container-fluid">
        <div class="row text-center">
            <!--== Single FunFact Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-funfact-wrap">
                    <div class="funfact-icon">
                        <img src="assets/img/fun-fact/user.svg" alt="Funfact">
                    </div>
                    <div class="funfact-info">
                        <h5 class="funfact-count"><?php echo $staff[0]; ?></h5>
                        <p>Staff</p>
                    </div>
                </div>
            </div>
            <!--== Single FunFact End ==-->

            <!--== Single FunFact Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-funfact-wrap">
                    <div class="funfact-icon">
                        <img src="assets/img/fun-fact/picture.svg" alt="Funfact">
                    </div>
                    <div class="funfact-info">
                        <h5 class="funfact-count"><?php echo $event[0]; ?></h5>
                        <p>Event</p>
                    </div>
                </div>
            </div>
            <!--== Single FunFact End ==-->

            <!--== Single FunFact Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-funfact-wrap">
                    <div class="funfact-icon">
                        <img src="assets/img/fun-fact/event.svg" alt="Funfact">
                    </div>
                    <div class="funfact-info">
                        <h5><span class="funfact-count"><?php echo $news[0]; ?></span></h5>
                        <p>News</p>
                    </div>
                </div>
            </div>
            <!--== Single FunFact End ==-->

            <!--== Single FunFact Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-funfact-wrap">
                    <div class="funfact-icon">
                        <img src="assets/img/fun-fact/medal.svg" alt="Funfact">
                    </div>
                    <div class="funfact-info">
                        <h5><span class="funfact-count"><?php echo $placement[0]; ?></span></h5>
                        <p>Placement</p>
                    </div>
                </div>
            </div>
            <!--== Single FunFact End ==-->
        </div>
    </div>
</section>
<!--== FunFact Area End ==-->

    <!--== Job Opportunity Area Start ==-->
<section id="job-opportunity" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Recent Jobs</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Job opportunity Wrapper ==-->
        <div class="job-opportunity-wrapper">
            <div class="row">
                <!--== Single Job opportunity Start ==-->
                <?php
                        while($r=mysqli_fetch_row($sql))
                        {


                        ?>
                            <div class="col-lg-4 col-sm-6 text-center">
                                <div class="single-job-opportunity">
                                    <div class="job-opportunity-text">
                                        <div class="job-oppor-logo">
                                            <div class="display-table">
                                                <div class="display-table-cell">
                                                    <img src="admin/image/clogoimg/<?php echo $r[6]; ?>" alt="logo">
                                                </div>
                                            </div>
                                        </div>
                                        <h3><a><?php echo $r[5]; ?></a></h3><h6><?php echo $r[4]; ?></h6><br>
                                        <div class="row">
                                            <!--<div class="col-sm-4"style="font-weight: bold;">salary </div>-->
                                            <div class="col-sm-6"style="font-weight: bold;">Apply Date</div>
                                            <div class="col-sm-6"style="font-weight: bold;">expiry </div>
                                        </div>
                                         <div class="row">
                                            <!--<div class="col-sm-4"> 0-150000</div>-->
                                            <div class="col-sm-6"><?php echo $r[9]; ?></div>
                                            <div class="col-sm-6"><?php echo $r[10]; ?></div>
                                        </div><br>
                                        <div class="row">
                                            <button class="col-sm-2 btn" style="border-radius: 75px; background-color: lightgrey;font-weight: bold;font-size: 12px;">job</button>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-sm-6"><img align="left" src="admin/image/studentimg/<?php echo $r[3]; ?>" class="img-circle elevation-2" alt="User Image"  style="height: 40px; width: 40px; border-radius: 50px;" />
                                                <b><?php echo $r[1]; ?>&nbsp;<?php echo $r[2]; ?></b> <br>&nbsp;<b>on</b> <?php echo $r[8]; ?>
                                            </div>

                                            <div class="col-sm-6"> <i class="fa fa-eye" style="padding-top: 12px;font-size: 18px;"> <?php echo $r[15]; ?></i>
                                           </div>
                                        </div>
                                    </div>
                                        <a href="view_oppurtunity.php?job_id=<?php echo $r[0]; ?>" class="btn btn-job" style="text-align: right;">View</a>
                                </div>
                            </div>
                        <?php
                            }
                        ?>
                            <!--== Single Job opportunity End ==--> 
                        </div>
                <!--== Single Job opportunity End ==-->

                
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="oppurtunity.php" class="btn btn-brand btn-loadmore">All job list</a>
                </div>
            </div>
        </div>
        <!--== Job opportunity Wrapper ==-->
    </div>
</section>
<!--== Job Opportunity Area End ==-->

    <!--== Gallery Area Start ==-->
<section id="gallery-area" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Our gallery</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Gallery Container Warpper ==-->
        <div class="gallery-content-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Gallery Menu Start -->
                    <div class="gallery-menu text-center">
                        <span class="active" data-filter="*">All</span>
                        <!-- <span data-filter=".old">Old Memories</span>
                        <span data-filter=".event">Event</span>
                        <span data-filter=".pic">Our Picnic</span>
                        <span class="d-none d-sm-inline-block" data-filter=".recent">Recent</span> -->
                    </div>
                    <!-- Gallery Menu End -->
<?php
require_once('connection.php');
$result=mysqli_query($cn,"select * from gallery ORDER BY g_id DESC limit 5");
?>
                    <!-- Gallery Item content Start -->
                        <div class="row gallery-gird">
    <!-- Single Gallery Start -->
    <?php
                        while($r=mysqli_fetch_row($result))
                        {


                        ?>
    <div class="col-lg-3  col-sm-6 recent event">
        <div class="single-gallery-item " style="background-image: url(admin/image/gallary/gallary_images/<?php echo $r[4]; ?>);">
            <div class="gallery-hvr-wrap">
                <div class="gallery-hvr-text">
                    <h4></h4>
                    <p class="gallery-event-date"></p>
                </div>
                <a href="admin/image/gallary/gallary_images/<?php echo $r[4]; ?>" class="btn-zoom image-popup">
                    <img src="assets/img/zoom-icon.png" alt="a">
                </a>
            </div>
        </div>
    </div>
    <?php
                            }
                        ?>
    <!-- Single Gallery End -->


</div>
                    <!-- Gallery Item content End -->
                </div>
            </div>
        </div>
        <!--== Gallery Container Warpper==-->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="gallery.php" class="btn btn-brand btn-loadmore">View All Gallary </a>
                </div>
            </div>
    </div>
</section>
<!--== Gallery Area Start ==-->

    <!--== Scholership Promo Area Start ==-->
<section id="scholership-promo">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="scholership-promo-text">
                    <h2>Demo University Provide <span>Placement</span> For Talented Student!</h2>
                    <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need academic, relocation, career, projects, mentorship, etc you can ask the community and get </p>
                    <a href="#" class="btn btn-brand">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Scholership Promo Area End ==-->

    <!--== Blog Area Start ==-->
<section id="blog-area" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Recent News</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->
<?php

  require_once('connection.php');
  $sql1=mysqli_query($cn,"SELECT * FROM `news` ORDER BY date_of_news DESC limit 3"); 
?>

        <!--== Blog Content Wrapper ==-->
        <div class="row">
            <!--== Single Blog Post start ==-->
            <?php
                 while($r=mysqli_fetch_row($sql1))
                 {


            ?>
            <div class="col-lg-4 col-md-6">
                <article class="single-blog-post">
                    <figure class="blog-thumb">
                        <div class="blog-thumbnail">
                            <img src="admin/image/newsimg/<?php echo $r[4]; ?>" alt="news image" class="img-fluid" />
                        </div>
                        <!-- <figcaption class="blog-meta clearfix">
                            <a href="single-blog.html" class="author">
                                <div class="author-pic">
                                    <img src="assets/img/blog/author.jpg" alt="Author">
                                </div>
                                <div class="author-info">
                                    <h5>Daney williams</h5>
                                    <p>2 hours Ago</p>
                                </div>
                            </a>
                            <div class="like-comm pull-right">
                                <a href="#"><i class="fa fa-comment-o"></i>77</a>
                                <a href="#"><i class="fa fa-heart-o"></i>12</a>
                            </div>
                        </figcaption> -->
                    </figure>

                    <div class="blog-content">
                        <h3><a href="single-news.php"><?php echo $r[2]; ?></a></h3>
                       
                        <a href="single-news.php?news_id=<?php echo $r[0]; ?>" target="_blank" class="btn btn-brand">More</a>
                    </div>
                </article>
            </div>
             <?php
                }
             ?>
            <!--== Single Blog Post End ==-->

        </div>
        <!--== Blog Content Wrapper ==-->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="news.php" class="btn btn-brand btn-loadmore">View News </a>
                </div>
            </div>
    </div>
</section>
<!--== Blog Area EndBlog ==-->
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




</body>

<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2020 11:37:21 GMT -->
</html>
