<?php
session_start();
if (($_SESSION['sname'] == '') || (!isset($_SESSION['sname'])))
 {
    header('location:student_login.php');
}
else
{

require_once('connection.php');
$id=$_SESSION['sid'];
//echo "select * from bio_normal where s_id=$id order by bid desc limit 1";
$r=mysqli_fetch_array(mysqli_query($cn,"select * from bio_normal where s_id=$id order by bid desc limit 1 "));
}
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2020 11:37:29 GMT -->
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
<style type="text/css">
    div,span,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,abbr,address,cite,code,del,dfn,em,img,ins,kbd,q,samp,small,strong,sub,sup,var,b,i,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,figcaption,figure,hgroup,menu,nav,section,summary,time,mark,audio,video {
border:0;
font:inherit;
font-size:100%;
margin:0;
padding:0;
vertical-align:baseline;
}

article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section {
display:block;
}

/*html, body {background: #181818; font-family: 'Lato', helvetica, arial, sans-serif; font-size: 16px; color: #222;}*/

.clear {clear: both;}

p {
    font-size: 1em;
    line-height: 1.4em;
    margin-bottom: 20px;
    color: #444;
}

#cv {
    width: 90%;
    max-width: 800px;
    background: #f3f3f3;
    margin: 30px auto;
}

.mainDetails {
    padding: 25px 35px;
    border-bottom: 2px solid;
    background: #ededed;
}

#name h1 {
    font-size: 2.5em;
    font-weight: 700;
    font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
    margin-bottom: -6px;
}

#name h2 {
    font-size: 2em;
    margin-left: 2px;
    font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
}

#mainArea {
    padding: 0 40px;
}

#headshot {
    width: 12.5%;
    float: left;
    margin-right: 30px;
}

#headshot img {
    width: 100%;
    height: auto;
    -webkit-border-radius: 50px;
    border-radius: 50px;
}

#name {
    float: left;
}

#contactDetails {
    float: right;
}

#contactDetails ul {
    list-style-type: none;
    font-size: 0.9em;
    margin-top: 2px;
}

#contactDetails ul li {
    margin-bottom: 3px;
    color: #444;
}

#contactDetails ul li a, a[href^=tel] {
    color: #444; 
    text-decoration: none;
    -webkit-transition: all .3s ease-in;
    -moz-transition: all .3s ease-in;
    -o-transition: all .3s ease-in;
    -ms-transition: all .3s ease-in;
    transition: all .3s ease-in;
}

#contactDetails ul li a:hover { 
    color: #cf8a05;
}


section {
    border-top: 1px solid #dedede;
    padding: 20px 0 0;
}

section:first-child {
    border-top: 0;
}

section:last-child {
    padding: 20px 0 10px;
}

.sectionTitle {
    float: left;
    width: 25%;
}

.sectionContent {
    float: right;
    width: 72.5%;
}

.sectionTitle h1 {
    font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
    font-style: italic;
    font-size: 1.5em;
    color: #cf8a05;
}

.sectionContent h2 {
    font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
    font-size: 1.5em;
    margin-bottom: -2px;
}

.subDetails {
    font-size: 0.8em;
    font-style: italic;
    margin-bottom: 3px;
}

.keySkills {
    list-style-type: none;
    -moz-column-count:3;
    -webkit-column-count:3;
    column-count:3;
    margin-bottom: 20px;
    font-size: 1em;
    color: #444;
}

.keySkills ul li {
    margin-bottom: 3px;
}

@media all and (min-width: 602px) and (max-width: 800px) {
    #headshot {
        display: none;
    }
    
    .keySkills {
    -moz-column-count:2;
    -webkit-column-count:2;
    column-count:2;
    }
}

@media all and (max-width: 601px) {
    #cv {
        width: 95%;
        margin: 10px auto;
        min-width: 280px;
    }
    
    #headshot {
        display: none;
    }
    
    #name, #contactDetails {
        float: none;
        width: 100%;
        text-align: center;
    }
    
    .sectionTitle, .sectionContent {
        float: none;
        width: 100%;
    }
    
    .sectionTitle {
        margin-left: -2px;
        font-size: 1.25em;
    }
    
    .keySkills {
        -moz-column-count:2;
        -webkit-column-count:2;
        column-count:2;
    }
}

@media all and (max-width: 480px) {
    .mainDetails {
        padding: 15px 15px;
    }
    
    section {
        padding: 15px 0 0;
    }
    
    #mainArea {
        padding: 0 25px;
    }

    
    .keySkills {
    -moz-column-count:1;
    -webkit-column-count:1;
    column-count:1;
    }
    
    #name h1 {
        line-height: .8em;
        margin-bottom: 4px;
    }
}

@media print {
    #cv {
        width: 100%;
    }
}

@-webkit-keyframes reset {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 0;
    }
}

@-webkit-keyframes fade-in {
    0% {
        opacity: 0;
    }
    40% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

@-moz-keyframes reset {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 0;
    }
}

@-moz-keyframes fade-in {
    0% {
        opacity: 0;
    }
    40% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

@keyframes reset {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 0;
    }
}

@keyframes fade-in {
    0% {
        opacity: 0;
    }
    40% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

.instaFade {
    -webkit-animation-name: reset, fade-in;
    -webkit-animation-duration: 1.5s;
    -webkit-animation-timing-function: ease-in;
    
    -moz-animation-name: reset, fade-in;
    -moz-animation-duration: 1.5s;
    -moz-animation-timing-function: ease-in;
    
    animation-name: reset, fade-in;
    animation-duration: 1.5s;
    animation-timing-function: ease-in;
}

.quickFade {
    -webkit-animation-name: reset, fade-in;
    -webkit-animation-duration: 2.5s;
    -webkit-animation-timing-function: ease-in;
    
    -moz-animation-name: reset, fade-in;
    -moz-animation-duration: 2.5s;
    -moz-animation-timing-function: ease-in;
    
    animation-name: reset, fade-in;
    animation-duration: 2.5s;
    animation-timing-function: ease-in;
}
 
.delayOne {
    -webkit-animation-delay: 0, .5s;
    -moz-animation-delay: 0, .5s;
    animation-delay: 0, .5s;
}

.delayTwo {
    -webkit-animation-delay: 0, 1s;
    -moz-animation-delay: 0, 1s;
    animation-delay: 0, 1s;
}

.delayThree {
    -webkit-animation-delay: 0, 1.5s;
    -moz-animation-delay: 0, 1.5s;
    animation-delay: 0, 1.5s;
}

.delayFour {
    -webkit-animation-delay: 0, 2s;
    -moz-animation-delay: 0, 2s;
    animation-delay: 0, 2s;
}

.delayFive {
    -webkit-animation-delay: 0, 2.5s;
    -moz-animation-delay: 0, 2.5s;
    animation-delay: 0, 2.5s;
}
</style>
</head>
<body>

    <!--[if lt IE 7]>
    <p class="browsehappy">We are Extreamly sorry, But the browser you are using is probably from when civilization started.
        Which is way behind to view this site properly. Please update to a modern browser, At least a real browser. </p>
    <![endif]-->

<?php include_once('header.php'); ?>
    

    <!--== Register Page Content Start ==-->
    <section id="page-content-wrap">
        <div class="register-page-wrapper section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="register-page-inner">
                            <div class="col-lg-10 m-auto">
                                <div class="register-form-content">
                                    <div class="row">
                                        <!-- Signin Area Content Start -->
                                        <!--<div class="col-lg-4 col-md-6 text-center">
                                            <div class="display-table">
                                                <div class="display-table-cell">
                                                    <div class="signin-area-wrap">-->
                                                        <!--<h4>Already a Member?</h4>
                                                        <div class="sign-form">
                                                            <form action="https://codeboxr.net/themedemo/unialumni/html/index.html">
                                                                <input type="text" placeholder="Enter your ID">
                                                                <input type="password" placeholder="Password">
                                                                <button type="submit" class="btn btn-reg">Login</button>
                                                            </form>
                                                        </div>-->
                                                        <!--<img src="assets/img/committee/commitee-2.jpg" alt="committee"  height="400" width="300" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                        <!-- Signin Area Content End -->

                                        <!-- Regsiter Form Area Start -->
                                        <div class="col-lg-12 col-md-12 ml-auto">
                                            <div class="register-form-wrap">
                                                <div class="mainDetails">
                                                    <div id="headshot">
                                                        <img src="admin/image/normal_biodata/<?php echo $r['photo']; ?>" alt="Alan Smith" style="width: 100px;height: 100px;"  />
                                                    </div>
                                                    
                                                    <div id="name">
                                                        <h1><?php echo $r[2]; ?></h1><br>
                                                        
                                                    </div>
                                                    
                                                    <div id="contactDetails">
                                                        <ul>
                                                            <li>Email: <?php echo $r[7]; ?></li>
                                                            <li>Mobile: <?php echo $r[6]; ?></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div id="mainArea">
                                                    <section>
                                                        <article>
                                                            <div class="sectionTitle">
                                                                <h1>Personal Profile</h1>
                                                            </div>
                                                            
                                                            <div class="sectionContent">
                                                                <table class="">
                                                                    <tr>
                                                                        <th style="font-weight: bold;">Date Of Birth:</th>
                                                                        <td><label><?php echo $r[4]; ?></label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="font-weight: bold;">Age:</th>
                                                                        <td><label><?php echo $r[3]; ?></label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="font-weight: bold;">Gender:</th>
                                                                        <td><label><?php echo $r[40]; ?></label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="font-weight: bold;">Address:</th>
                                                                        <td><label><?php echo $r[5]; ?></label></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </article>
                                                        <div class="clear"></div>
                                                    </section>
                                                    
                                                    
                                                    <section>
                                                        <div class="sectionTitle">
                                                            <h1>Educational Qualification</h1>
                                                        </div>
                                                        
                                                        <div class="sectionContent">
                                                            <table class="table">
                                                                                <tr>
                                                                                    
                                                                                        <th scope="col"style="font-weight: bold;">Year Of Passing</th>
                                                                                        <th scope="col"style="font-weight: bold;">Qualification</th>
                                                                                        <th scope="col"style="font-weight: bold;">Specialisation or Subjects</th>
                                                                                        <th scope="col"style="font-weight: bold;">School/College/University</th>
                                                                                        <th scope="col"style="font-weight: bold;">Total marks %/CGPA</th>
                                                                                        <th scope="col"style="font-weight: bold;">Any Other Relevant Information</th>
                                                                                    
                                                                                    
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>
                                                                                            <label><?php echo $r[8]; ?></label> 
                                                                                         </td>
                                                                                        <td>  
                                                                                            SSC/10th/ 
                                                                                        </td>
                                                                                        <td>
                                                                                            <label><?php echo $r[18]; ?></label>    
                                                                                        </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[23]; ?></label>
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[28]; ?></label>
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[33]; ?></label> 
                                                                                         </td>
                                                                                    
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>
                                                                                            <label><?php echo $r[9]; ?></label> 
                                                                                         </td>
                                                                                        <td>  
                                                                                            HSC/12th/ 
                                                                                        </td>
                                                                                        <td>
                                                                                            <label><?php echo $r[19]; ?></label>
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[24]; ?></label> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[29]; ?></label> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[34]; ?></label>
                                                                                         </td>
                                                                                    
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>
                                                                                            <label><?php echo $r[10]; ?></label>
                                                                                         </td>
                                                                                        <td>  
                                                                                            Graduation 
                                                                                        </td>
                                                                                        <td>
                                                                                            <label><?php echo $r[20]; ?></label> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[25]; ?></label> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[30]; ?></label> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[35]; ?></label> 
                                                                                         </td>
                                                                                    
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>
                                                                                            <label><?php echo $r[11]; ?></label>
                                                                                         </td>
                                                                                        <td>  
                                                                                            Post Graduation 
                                                                                        </td>
                                                                                        <td>
                                                                                            <label><?php echo $r[21]; ?></label> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[26]; ?></label> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[31]; ?></label> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[36]; ?></label> 
                                                                                         </td>
                                                                                    
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>
                                                                                            <label><?php echo $r[12]; ?></label> 
                                                                                         </td>
                                                                                        <td>  
                                                                                            Any Other 
                                                                                        </td>
                                                                                        <td>
                                                                                            <label><?php echo $r[22]; ?></label>
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[27]; ?></label> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[32]; ?></label>
                                                                                         </td>
                                                                                         <td>
                                                                                            <label><?php echo $r[37]; ?></label> 
                                                                                         </td>
                                                                                    
                                                                                </tr>
                                                                            </table>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </section>
                                                    
                                                    
                                                    <section>
                                                        <article>
                                                            <div class="sectionTitle">
                                                                <h1>Personal Information</h1>
                                                            </div>
                                                            
                                                            <div class="sectionContent">
                                                                <table class="table">
                                                                    <tr>
                                                                        <th style="font-weight: bold;">Hobies:</th>
                                                                        <td><label><?php echo $r[38]; ?></label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="font-weight: bold;">Maritial Status:</th>
                                                                        <td><label><?php echo $r[39]; ?></label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="font-weight: bold;">Language Known:</th>
                                                                        <td><label><?php echo $r[41]; ?></label></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </article>
                                                        <div class="clear"></div>
                                                    </section>
                                                    

                                                </div>

                                            </div>
                                        </div>
                                        <!-- Regsiter Form Area End -->
                                        <form name="f1" method="post" enctype="multipart/form-data">
                                            <button type="button" class="btn btn-reg" onclick="location.href='pdf_normal.php?id=<?php echo $r[0]; ?>' "  >DOWNLOAD PDF</button>
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
    <!--== Register Page Content End ==-->
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

<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2020 11:37:29 GMT -->
</html>
