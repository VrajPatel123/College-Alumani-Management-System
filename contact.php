<?php
session_start();
    require_once('connection.php');
    if(isset($_POST['b1']))
    {
        $name=$_POST['txtname'];
        $mobile=$_POST['txtmobile'];
        $email=$_POST['txtemail'];
        $subject=$_POST['txtsubject'];
        $message=$_POST['txtmessage'];

        $sql=mysqli_query($cn,"INSERT INTO `contact`( `name`, `mobile`, `email`, `subject`, `message`) VALUES ('$name','$mobile','$email','$subject','$message')");

    echo '<script language="type/javascript">';
    echo 'alert("record insert successfully sent")';  //not showing an alert box.
    echo '</script>';
    header('location:contact.php');
    }

    if(isset($_POST['btnrate']))
    {
    $review_date=date("Y-m-d");
    $msg=$_POST['txtmsg'];
    $rate=$_POST['rating'];
    //$news_id=$id;
    $sid=$_SESSION['sid'];
    //echo "insert into rate_all (user_id,review_date,msg,rate) values ('$sid','$review_date','$msg','$rate')";
    mysqli_query($cn,"insert into rate_all (user_id,review_date,msg,rate) values ('$sid','$review_date','$msg','$rate')");

    }
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2020 11:37:38 GMT -->
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
                    <h1 class="h2">Contact Us</h1>
                    <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the
                        need</p>
                    <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Contact Page Content Start ==-->
<section id="page-content-wrap">
    <div class="contact-page-wrap section-padding">
        <div class="container">



            <div class="row m-0">
                    <div class="col-md-4 p-0">
                        <div class="contact-box">
                           <div style="    font-size: 30px; color: black; margin-top: -10px;"><i class="fa fa-phone"> </i></div>
                            <span><b>Tel</b></span>
                            <p><a href="tel:+91-8160691814">+91-8160691814</a>  </p>
                        </div>
                    </div>
                    <div class="col-md-4 p-0">
                        <div class="contact-box">
                            <div style="    font-size: 30px; color: black; margin-top: -10px;"><i class="fa fa-envelope"> </i></div>
                            <span><b>Mail</b></span>
                            
                            <p> <a href="mailto:alumnistar2020@gmail.com">alumnistar2020@gmail.com</a> </p>
                        </div>
                    </div>
                         <div class="col-md-4 p-0">
                            <div class="contact-box">
                                <div style="    font-size: 30px; color: black; margin-top: -10px;"><i class="fa fa-whatsapp"> </i></div>
                                <span><b>WhatsApp</b></span>
                                <p> <a href="https://api.whatsapp.com/send?phone=919099432100&text=Hi,I contacted you Through your website and this message only testing purpose.">8160691814</a> </p>
                            </div>
                        </div>
                                        
            </div>
            <br><br>
            <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <form name="f1" method="post" enctype="multipart/form-data" >
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








                <div class="col-lg-12">
                    <div class="contact-content-inner">
                        <div class="row">
                            
                            <div class="col-lg-6 m-auto">
                                <div class="contact-form-wrap">
                                  <h3>send message</h3>
                                    <form name="f1" method="POST" enctype="multipart/form-data" onsubmit="return validation()">
                                        <div class="row">
                                          <div class="col">
                                            <div class="form-group">
                                              <label>Name</label>
                                              <input type="text" name="txtname"  id="txtname" class="form-control">
                                              <span id="name" class="text-danger font-weight-bold"></span>
                                            </div>
                                          </div>

                                          <div class="col">
                                            <div class="form-group">
                                              <label>Mobile No.</label>
                                              <input type="text" name="txtmobile" id="txtmobile" class="form-control">
                                              <span id="mobile" class="text-danger font-weight-bold"></span>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label>Email</label>
                                          <input type="text" name="txtemail" id="txtemail" class="form-control">
                                          <span id="email" class="text-danger font-weight-bold"></span>
                                        </div>
                                         <div class="form-group">
                                          <label>Subject</label>
                                          <input type="text" name="txtsubject" id="txtsubject" class="form-control">
                                          <span id="sub" class="text-danger font-weight-bold"></span>
                                        </div>

                                        <div class="form-group">
                                          <label>Message</label>
                                          <textarea name="txtmessage" id="txtmessage" rows="10" cols="80" class="form-control"></textarea>
                                          <span id="msg" class="text-danger font-weight-bold"></span>
                                        </div>
                                        <button class="btn btn-reg" name="b1">Send</button>
                                        <div id="cbx-formalert"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>


<h1> All Reviews By Viewers....</h1>
<div class="row">
<?php
$result1=mysqli_query($cn,"select * from rate_all  order by review_date desc");
while($r1=mysqli_fetch_row($result1))
{


?>

<div>
    Review-Date : <?php echo $r1[2]; ?></br>
   
    Message : <?php echo $r1[3]; ?></br>

               <fieldset class="rating">
                  <input type="checkbox" id="star5" name="rating" value="5" <?php if($r1[4]=="5") {?> checked="checked" <?php }?>/><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                  <input type="checkbox" id="star4half" name="rating" value="4.5" <?php if($r1[4]=="4.5") {?> checked="checked" <?php }?> /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                  <input type="checkbox" id="star4" name="rating" value="4" <?php if($r1[4]=="4") {?> checked="checked" <?php }?>/><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                  <input type="checkbox" id="star3half" name="rating" value="3.5" <?php if($r1[4]=="3.5") {?> checked="checked" <?php }?>/><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                  <input type="checkbox" id="star3" name="rating" value="3" <?php if($r1[4]=="3") {?> checked="checked" <?php }?>/><label class = "full" for="star3" title="Meh - 3 stars"></label>
                  <input type="checkbox" id="star2half" name="rating" value="2.5" <?php if($r1[4]=="2.5") {?> checked="checked" <?php }?>/><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                  <input type="checkbox" id="star2" name="rating" value="2" <?php if($r1[4]=="2") {?> checked="checked" <?php }?>/><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                  <input type="checkbox" id="star1half" name="rating" value="1.5" <?php if($r1[4]=="1.5") {?> checked="checked" <?php }?>/><label class="half" for="  star1half" title="Meh - 1.5 stars"></label>
                  <input type="checkbox" id="star1" name="rating" value="1" <?php if($r1[4]=="1") {?> checked="checked" <?php }?>/><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                  <input type="checkbox" id="starhalf" name="rating" value="0.5" <?php if($r1[4]=="0.5") {?> checked="checked" <?php }?>/><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                </fieldset>
</div>
<hr>

<?php

}
?>
<hr>
</div>
</div>


<!--== Contact Page Content End ==-->
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

<script type="text/javascript">
  function validation()
  {
    var name = document.getElementById('txtname').value;
    var email = document.getElementById('txtemail').value;
    var mobile = document.getElementById('txtmobile').value;
    var sub = document.getElementById('txtsubject').value;
    var msg = document.getElementById('txtmessage').value;

    
    if (name == "") 
    {
      document.getElementById('name').innerHTML = "** Please fill the username field";
      return false;
    }
    if((name.length <=2)||(name.length >20))
    {
      document.getElementById('name').innerHTML = "** Name length must be between 2 and 20";
      return false;
    }
    if(!isNaN(name))
    {
       document.getElementById('name').innerHTML = "** only character are allowed";
      return false;
    }


    if(email == "")
    {
      document.getElementById('email').innerHTML =" ** Please fill the email field";
      return false;
    }
    if(email.indexOf('@') <= 0 )
    {
      document.getElementById('email').innerHTML =" ** @ Invalid Position";
      return false;
    }
    if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.'))
    {
      document.getElementById('email').innerHTML =" ** . Invalid Position";
      return false;
    }


    if(mobile == "")
    {
      document.getElementById('mobile').innerHTML =" ** Please fill the Mobile Number field";
      return false;
    }
    if(isNaN(mobile))
    {
      document.getElementById('mobile').innerHTML =" ** User must write digits only not characters";
      return false;
    }
    if(mobile.length!=10)
    {
      document.getElementById('mobile').innerHTML =" ** Mobile Number must be 10 digits only";
      return false;
    }

    if(sub == "")
    {
      document.getElementById('sub').innerHTML =" ** Please fill the Subject field";
      return false;
    }
    if((sub.length <= 5) || (sub.length > 20)) 
    {
      document.getElementById('sub').innerHTML =" ** Subject lenght must be between  5 and 20";
      return false; 
    }
    
    if(msg == "")
    {
      document.getElementById('msg').innerHTML =" ** Please fill the Message field";
      return false;
    }
    if((msg.length <= 10) || (msg.length > 100)) 
    {
      document.getElementById('msg').innerHTML =" ** Message lenght must be between  10 and 100";
      return false; 
    }


    

  }
</script>


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

<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2020 11:37:38 GMT -->
</html>
