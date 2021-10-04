<?php
session_start();
if (($_SESSION['sname'] == '') || (!isset($_SESSION['sname'])))
 {
    header('location:student_login.php');
}
else
{
require_once('connection.php');
$id=$_REQUEST['news_id'];

$sql=mysqli_query($cn,"select * from news where news_id=$id");
$r=mysqli_fetch_row($sql);
if(isset($_POST['btnrate']))
{
    $review_date=date("Y-m-d");
    $msg=$_POST['txtmsg'];
    $rate=$_POST['rating'];
    $news_id=$id;
    $sid=$_SESSION['sid'];
    //echo "insert into rate_news (news_id,user_id,review_date,msg,rate) values ($news_id,$sid,'$review_date','$msg',$rate)";
mysqli_query($cn,"insert into rate_news (news_id,user_id,review_date,msg,rate) values ($news_id,$sid,'$review_date','$msg',$rate)");
}
}
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/single-blog-withoutsidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2020 11:37:38 GMT -->
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
                    <h1 class="h2">News Details</h1>
                    <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the
                        need</p>
                    <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Blog Page Content Start ==-->
<div id="page-content-wrap">
    <div class="blog-page-content-wrap section-padding">
        <div class="container">
            <div class="row">
                <!-- Blog content Area Start -->
                <div class="col-lg-10 m-auto">
                    <article class="single-blog-content-wrap">
                        <header class="article-head">
                            <div class="single-blog-thumb">
                                <img src="admin/image/newsimg/<?php echo $r[4]; ?>" class="img-fluid" alt="Blog">
                            </div>
                            <div class="single-blog-meta">
                                <h2><?php echo $r[2]; ?></h2>
                                <div class="posting-info">
                                    <a href="#"></a> • Posted by: <a href="#">Admin</a>
                                </div>
                            </div>
                        </header>
                        <section class="blog-details">
                            <?php echo $r[3]; ?>
                            <!--<blockquote class="blockquote">
                                Integer tincidunt nec nisl vitae ullamcorper. Proin sed ultrices erat. Praesent varius ultrices massa at faucibus.
                            </blockquote>-->
                        </section>
       <form name="f1" method="post" enctype="multipart/form-data">
                                            <fieldset class="rating">
                  <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                  <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                  <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                  <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                  <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                  <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                  <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                  <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="  star1half" title="Meh - 1.5 stars"></label>
                  <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                  <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                </fieldset>
                <input type="text" name="txtmsg" id="txtmsg" placeholder="Enter your review" />
<input type="submit" name="btnrate" value="Send Review" class="btn btn-primary waves-effect waves-light" />
</form>
<div>
<h1> All Reviews By Viewers....</h1>

<?php
$result1=mysqli_query($cn,"select * from rate_news rn,student_profile sp where sp.s_id=rn.user_id and news_id=$id order by review_date desc");
while($r1=mysqli_fetch_row($result1))
{


?>

<div>
    Review-Date : <?php echo $r1[3]; ?></br>
    Name : <?php echo $r1[7];?>&nbsp;&nbsp;<?php echo $r1[8];?></br>
    Message : <?php echo $r1[4]; ?>
               <fieldset class="rating">
                  <input type="checkbox" id="star5" name="rating" value="5" <?php if($r1[5]=="5") {?> checked="checked" <?php }?>/><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                  <input type="checkbox" id="star4half" name="rating" value="4.5" <?php if($r1[5]=="4.5") {?> checked="checked" <?php }?> /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                  <input type="checkbox" id="star4" name="rating" value="4" <?php if($r1[5]=="4") {?> checked="checked" <?php }?>/><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                  <input type="checkbox" id="star3half" name="rating" value="3.5" <?php if($r1[5]=="3.5") {?> checked="checked" <?php }?>/><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                  <input type="checkbox" id="star3" name="rating" value="3" <?php if($r1[5]=="3") {?> checked="checked" <?php }?>/><label class = "full" for="star3" title="Meh - 3 stars"></label>
                  <input type="checkbox" id="star2half" name="rating" value="2.5" <?php if($r1[5]=="2.5") {?> checked="checked" <?php }?>/><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                  <input type="checkbox" id="star2" name="rating" value="2" <?php if($r1[5]=="2") {?> checked="checked" <?php }?>/><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                  <input type="checkbox" id="star1half" name="rating" value="1.5" <?php if($r1[5]=="1.5") {?> checked="checked" <?php }?>/><label class="half" for="  star1half" title="Meh - 1.5 stars"></label>
                  <input type="checkbox" id="star1" name="rating" value="1" <?php if($r1[5]=="1") {?> checked="checked" <?php }?>/><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                  <input type="checkbox" id="starhalf" name="rating" value="0.5" <?php if($r1[5]=="0.5") {?> checked="checked" <?php }?>/><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                </fieldset>
</div>
<hr>

<?php

}
?>
</div>



                                            <footer class="post-share">
                            <div class="row no-gutters ">
                                <div class="col-8">
                                    <div class="shareonsocial">
                                        <span>Share:</span>
                                        <a href="http://www.facebook.com/sharer/sharer.php?u=https://www.w3schools.com/howto/howto_css_social_media_buttons.asp" target="_blank"><i class="fa fa-facebook"></i></a>

                                        <a href="http://twitter.com/share?text=please visit a website&url=https://www.w3schools.com/howto/howto_css_social_media_buttons.asp" target="_blank"><i class="fa fa-twitter"></i></a>

                                        <a href="http://www.linkedin.com/shareArticle?mini=true&url=https://www.legendblogs.com/blog/how-to-create-social-sharing-links-for-facebook,-whatsapp-and-more/121744" target="_blank"><i class="fa fa-linkedin"></i></a>
                                        <a href="https://api.whatsapp.com/send?text=Hi,I contacted you Through your website and this message only testing purpose." target="_blank"><i class="fa fa-whatsapp"></i></a>
                                    </div>
                                </div>
                                <!-- <div class="col-4 text-right">
                                    <div class="post-like-comm">
                                        <a href="#"><i class="fa fa-thumbs-o-up"></i>20</a>
                                        <a href="#"><i class="fa fa-comment-o"></i>15</a>
                                    </div>
                                </div> -->
                            </div>
                        </footer>
                    </article>
                </div>
                <!-- Blog content Area End -->
            </div>
        </div>
    </div>
</div>
<!--== Blog Page Content End ==-->
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


<style type="text/css">
        @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

fieldset, label { margin: 0; padding: 0; }
body{ margin: 20px; }
h1 { font-size: 1.5em; margin: 10px; }

/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
    </style>
</body>

<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/single-blog-withoutsidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2020 11:37:38 GMT -->
</html>
