<?php

  require_once('connection.php');
  if (isset($_POST['b1']))
  {
    $name=$_POST['txtname'];
    $sname=$_POST['txtsurname'];
    $gender=$_POST['r1'];
    $mobile=$_POST['txtmobile'];
    $email=$_POST['txtemail'];
    $photo=$_FILES['txtphoto']['name'];
    $tempname=$_FILES['txtphoto']['tmp_name'];
    move_uploaded_file($tempname, "admin/image/studentimg/$photo");

    $join=$_POST['txtjoin'];
    $graduate=$_POST['txtpassout'];
    $dob=$_POST['txtdob'];
    $enroll=$_POST['txtenroll'];
    $pwd=$_POST['txtpwd'];
    $security=$_POST['s1'];
    $answer=$_POST['txtanswer'];
    //$status=$_POST['r2'];
    //echo "INSERT INTO `student_profile`( `s_name`, `surname`, `gender`, `mobile`, `email`, `photo`, `joining_year`, `graduate_year`, `dob`, `enroll_no`, `pwd`, `security_question`, `answer`, `status`) VALUES ('$name','$sname','$gender','$mobile','$email','$photo','$join','$graduate','$dob','$enroll','$pwd','$security','$answer','nonactive')";
    $sql=mysqli_query($cn,"INSERT INTO `student_profile`( `s_name`, `surname`, `gender`, `mobile`, `email`, `photo`, `joining_year`, `graduate_year`, `dob`, `enroll_no`, `pwd`, `security_question`, `answer`, `status`) VALUES ('$name','$sname','$gender','$mobile','$email','$photo','$join','$graduate','$dob','$enroll','$pwd','$security','$answer','nonactive')");
//echo "insert into login (username,password) values ('$name','$pwd')";
    mysqli_query($cn,"insert into login (username,password) values ('$name','$pwd')");
    ?>
    <script type="text/javascript">
        alert("record insert successfully sent");
    </script>
    <?php
      //header('location:student_login.php');
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


<style>
        .error {
    border: 2px solid #f00;
}

.valid {
    border: 2px solid #0ff;
}

form, input {
    margin:;
}
#docs {
    display: block;
    position: fixed;
    bottom: 0;
    right: 0;
}
</style>




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
                        <h1 class="h2">Membership Form</h1>
                        <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need</p>
                        <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

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
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <div class="display-table">
                                                <div class="display-table-cell">
                                                    <div class="signin-area-wrap">
                                                        <!--<h4>Already a Member?</h4>
                                                        <div class="sign-form">
                                                            <form action="https://codeboxr.net/themedemo/unialumni/html/index.html">
                                                                <input type="text" placeholder="Enter your ID">
                                                                <input type="password" placeholder="Password">
                                                                <button type="submit" class="btn btn-reg">Login</button>
                                                            </form>
                                                        </div>-->
                                                        <!--<img src="assets/img/committee/commitee-2.jpg" alt="committee"  height="400" width="300" />-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Signin Area Content End -->

                                        <!-- Regsiter Form Area Start -->
                                        <div class="col-lg-12 col-md-6 ml-auto">
                                            <div class="register-form-wrap">
                                                <h3>registration Form</h3>
                                                <div class="register-form">
                                                    <form name="f1" method="POST" enctype="multipart/form-data" id="form">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_email">Name</label>
                                                                    <input type="text" class="form-control" name="txtname" id="txtname"placeholder="Enter Name"  />

                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_email">SurName</label>
                                                                    <input type="text" class="form-control" name="txtsurname" id="txtsurname" placeholder="Enter SurName"  />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="gender form-group">
                                                                    <label class="g-name d-block">Gender</label>
                                                                    
                                                                        <input type="radio" id="r1" name="r1" value="male" checked="checked"  />
                                                                        Male
                                                                    
                                                                    
                                                                        <input type="radio" id="r1" name="r1" value="female"  />
                                                                        Female
                                                                   
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="">Date Of Birth</label>
                                                                    <input type="date" class="form-control" id="txtdob" name="txtdob" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Email</label>
                                                                    <input type="text" class="form-control" id="txtemail" name="txtemail" placeholder="Enter email">
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">Password</label>
                                                                <input type="password" class="form-control" id="txtpwd" name="txtpwd" placeholder="Enter Password">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Mobile</label>
                                                                    <input type="text" class="form-control" id="txtmobile"name="txtmobile" placeholder="Enter MobileNumber">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                        <label for="">Joining Year</label>
                                                                        <input type="date" class="form-control" id="txtjoin" name="txtjoin" placeholder="Enter JoiningYear">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                        <label for="">Graduate/Passout Year</label>
                                                                        <input type="date" class="form-control" id="txtpassout" name="txtpassout" placeholder="Enter Passout">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Enrollment Number</label>
                                                                    <input type="text" class="form-control" id="txtenroll"name="txtenroll" placeholder="Enter Enrollment Number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Security Question</label>
                                                                    <div>
                                                                    <select class="" name="s1">
                                                                      <option>What was your childhood nickname?</option>
                                                                      <option>What is your current vehicle number?</option>
                                                                      <option>What is your pet's name?</option>
                                                                      <option>What is your favorite color?</option>
                                                                      <option>What is the name of the school?</option>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                       
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Answer</label>
                                                                    <input type="text" class="form-control" id="txtanswer"name="txtanswer" placeholder="Enter Security Answer">
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group file-input">
                                                                    <label ><i class="fa fa-upload"></i>Upload Your Photo</label>
                                                                    <input type="file" name="txtphoto" id="txtphoto" class="custom-file" for="customfile" />
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!--<div class="form-group">
                                                            <div class="custom-control custom-checkbox float-lg-right">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                <label class="custom-control-label" for="customCheck1"> I have read and agree to the <a href="#">Alumni</a> Terms of Service</label>
                                                            </div>-->
                                                            <input type="submit" class="btn btn-reg" value="Registration" name="b1" id="b1">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Regsiter Form Area End -->
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

<script type="text/javascript">
    $(document).ready(function(){

        $('#form').submit(function(e){

            //e.preventDefault();
            var name = $('#txtname').val();
            var sname = $('#txtsurname').val();
            var dob = $('#txtdob').val();
            var email = $('#txtemail').val();
            var password = $('#txtpwd').val();
            var mobile = $('#txtmobile').val();
            var join = $('#txtjoin').val();
            var passout = $('#txtpassout').val();
            var enroll = $('#txtenroll').val();
            var ans = $('#txtanswer').val();
            var photo = $('#txtphoto').val();

            $(".error").remove();

            if(name.length == ''){
                $('#txtname').after('<span class="error text-danger font-weight-bold"> Please fill the Name field');
                return false;
            }
            if(name.length <=2 || name.length >20){
                $('#txtname').after('<span class="error text-danger font-weight-bold"> Name length must be between 2 and 20  ');
                return false;
            }

            if(sname.length == ''){
                $('#txtsurname').after('<span class="error text-danger font-weight-bold"> Please fill the SurName field');
                return false;
            }
            if(sname.length <=2 || sname.length >20){
                $('#txtsurname').after('<span class="error text-danger font-weight-bold"> SurName length must be between 2 and 20  ');
                return false;
            }

            if(dob.length == ''){
                $('#txtdob').after('<span class="error text-danger font-weight-bold"> Please fill the Date Of Birth field');
                return false;
            }

            if(email.length == ''){
                $('#txtemail').after('<span class="error text-danger font-weight-bold"> Please fill the Email field');
                return false;
            }
            if(email.indexOf('@') <= 0 )
            {
              $('#txtemail').after('<span class="error text-danger font-weight-bold">@ Invalid Position');
              return false;
            }
            if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.'))
            {
              $('#txtemail').after('<span class="error text-danger font-weight-bold"> . Invalid Position');
              return false;
            }

            if(password.length == ''){
                $('#txtpwd').after('<span class="error text-danger font-weight-bold"> Please fill the Password field');
                return false;
            }
            if(password.length < 8){
                $('#txtpwd').after('<span class="error text-danger font-weight-bold"> Password must be at least 8 character long');
                return false;
            }

            if(mobile.length == ''){
                $('#txtmobile').after('<span class="error text-danger font-weight-bold"> Please fill the Mobile Number field');
                return false;
            }
            if(mobile.length != 10){
                $('#txtmobile').after('<span class="error text-danger font-weight-bold">  Mobile Number must be 10 digits only');
                return false;
            }
            // if(isNan(mobile)){
            //     $('#txtmobile').after('<span class="error text-danger font-weight-bold">  User must write digits only not characters');
            //     return false;
            // }

            if(join.length == ''){
                $('#txtjoin').after('<span class="error text-danger font-weight-bold"> Please fill the Joining Year field');
                return false;
            }

            if(passout.length == ''){
                $('#txtpassout').after('<span class="error text-danger font-weight-bold"> Please fill the Graduate year field');
                return false;
            }
            if(enroll.length == ''){
                $('#txtenroll').after('<span class="error text-danger font-weight-bold"> Please fill the Enrollment Number field');
                return false;
            }

            if(ans.length == ''){
                $('#txtanswer').after('<span class="error text-danger font-weight-bold"> Please fill the Security Question Answer field');
                return false;
            }

            if(photo.length == ''){
                $('#txtphoto').after('<span class="error text-danger font-weight-bold"> Please Upload a Photo');
                return false;
            }

        })
    })
</script>

</body>

<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2020 11:37:29 GMT -->
</html>
