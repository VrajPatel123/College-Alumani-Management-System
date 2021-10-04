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
$id=$_SESSION['sid'];
if(isset($_POST['b1']))
{
    $name=$_POST['txtname'];
    $address=$_POST['txtaddress'];
    $mobile=$_POST['txtmobile'];
    $father=$_POST['txtfather'];
    $email=$_POST['txtemail'];
    $nationality=$_POST['txtnationality'];
    $domicile=$_POST['txtdomicile'];
    $maritial=$_POST['s1'];
    $gender=$_POST['r1'];
    $cnic=$_POST['txtcnic'];
    $religion=$_POST['txtreligion'];
    $career=$_POST['txtcareer'];
    $skill01=$_POST['txtskill01'];
    $skill02=$_POST['txtskill02'];
    $skill03=$_POST['txtskill03'];


    $year_ssc=$_POST['txtyear_ssc'];
        if ($year_ssc != '') 
        {
            $ssc=$_POST['txtssc']='yes';
        }
        else
        {
            $ssc=$_POST['txtssc']='no';
        }

        $subject_ssc=$_POST['txtsubject_ssc'];
        $ssc_school=$_POST['txtssc_school'];

        $year_hsc=$_POST['txtyear_hsc'];
        if ($year_hsc != '') 
        {
            $hsc=$_POST['txthsc']='yes';
        }
        else
        {
            $hsc=$_POST['txthsc']='no';
        }
        $subject_hsc=$_POST['txtsubject_hsc'];
        $hsc_school=$_POST['txthsc_school'];
        

        $year_graduate=$_POST['txtyear_graduation'];
        if ($year_graduate != '') 
        {
            $graduate=$_POST['txtgraduate']='yes';
        }
        else
        {
            $graduate=$_POST['txtgraduate']='no';
        }
        $subject_graduate=$_POST['txtsubject_graduation'];
        $graduate_school=$_POST['txtgraduation_school'];
        

        $year_pg=$_POST['txtyear_pg'];
        if ($year_pg != '') 
        {
            $pg=$_POST['txtpg']='yes';
        }
        else
        {
            $pg=$_POST['txtpg']='no';
        }
        $subject_pg=$_POST['txtsubject_pg'];
        $pg_school=$_POST['txtpg_school'];
        

        


    /*$pg=$_POST['txtpg'];
    $graduation=$_POST['txtgraduation'];
    $hsc=$_POST['txthsc'];
    $ssc=$_POST['txtssc'];*/
    $professional=$_POST['txtprofessional'];
    $interpersonal01=$_POST['txtinterpersonal01'];
    $interpersonal02=$_POST['txtinterpersonal02'];
    $interpersonal03=$_POST['txtinterpersonal03'];
    $reference=$_POST['txtreference'];

    $photo=$_FILES['txtphoto']['name'];
    $tempname=$_FILES['txtphoto']['tmp_name'];
    move_uploaded_file($tempname, "admin/image/resume_biodata/$photo");

    //echo "INSERT INTO `bio_resume`(`s_id`,`user_image`, `name`, `address`, `mobile`, `father_name`, `email`, `nationality`, `domicile`, `marital_status`, `gender`, `cnic_number`, `relegion`, `carreer_objective`, `skill01`, `skill02`, `skill03`,`year_ssc`,`year_hsc`,`year_graduate`,`year_pg`, `pg`, `graduation`, `hsc`, `ssc`,`subject_ssc`,`subject_hsc`,`subject_graduate`,`subject_pg`,`ssc_school`,`hsc_school`,`graduate_university`,`pg_university`, `professional_experience`, `interpersonal_skill01`, `interpersonal_skill02`, `interpersonal_skill03`, `reference`) VALUES ('$id','$photo','$name','$address','$mobile','$father','$email','$nationality','$domicile','$maritial','$gender','$cnic','$religion','$career','$skill01','$skill02','$skill03','$year_ssc','$year_hsc','$year_graduate','$year_pg','$pg','$graduate','$hsc','$ssc','$subject_ssc','$subject_hsc','$subject_graduate','$subject_pg','$ssc_school','$hsc_school','$graduate_school','$pg_school','$professional','$interpersonal01','$interpersonal02','$interpersonal03','$reference')";

    $sql=mysqli_query($cn,"INSERT INTO `bio_resume`(`s_id`,`user_image`, `name`, `address`, `mobile`, `father_name`, `email`, `nationality`, `domicile`, `marital_status`, `gender`, `cnic_number`, `relegion`, `carreer_objective`, `skill01`, `skill02`, `skill03`,`year_ssc`,`year_hsc`,`year_graduate`,`year_pg`, `pg`, `graduation`, `hsc`, `ssc`,`subject_ssc`,`subject_hsc`,`subject_graduate`,`subject_pg`,`ssc_school`,`hsc_school`,`graduate_university`,`pg_university`, `professional_experience`, `interpersonal_skill01`, `interpersonal_skill02`, `interpersonal_skill03`, `reference`) VALUES ('$id','$photo','$name','$address','$mobile','$father','$email','$nationality','$domicile','$maritial','$gender','$cnic','$religion','$career','$skill01','$skill02','$skill03','$year_ssc','$year_hsc','$year_graduate','$year_pg','$pg','$graduate','$hsc','$ssc','$subject_ssc','$subject_hsc','$subject_graduate','$subject_pg','$ssc_school','$hsc_school','$graduate_school','$pg_school','$professional','$interpersonal01','$interpersonal02','$interpersonal03','$reference')");

    echo '<script language="type/javascript">';
    echo 'alert("record insert successfully sent")';  //not showing an alert box.
    echo '</script>';
    header('location:preview_resume.php');

}
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
                        <h1 class="h2">Resume Form</h1>
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
                                                <h3 align="center">Resume Form</h3>
                                                <div class="register-form">
                                                    <form name="f1" method="POST" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_email">Name</label>
                                                                    <input type="text" class="form-control" name="txtname" id="txtname"placeholder="" />
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="gender form-group">
                                                                    <label class="g-name d-block">Address</label>
                                                                    <textarea type="textbox" class="form-control" id="txtaddress"name="txtaddress" placeholder=""></textarea>
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Mobile</label>
                                                                    <input type="text" class="form-control" id="txtmobile"name="txtmobile" placeholder="">
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Father Name</label>
                                                                    <input  class="form-control" id="txtfather" name="txtfather" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Email Address</label>
                                                                    <input type="email" class="form-control" id="txtemail"name="txtemail" placeholder="">
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="">Nationality</label>
                                                                    <input type="text" class="form-control" id="txtnationality" name="txtnationality" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Domicile</label>
                                                                    <input type="text" class="form-control" id="txtdomicile"name="txtdomicile" placeholder="">
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-3">
                                                                <div class="form-group">
                                                                        <label for="">Maritial Status</label><br>
                                                                        <select class="" name="s1" id="s1">
                                                                          <option>Married</option>
                                                                          <option>Unmarried</option>
                                                                        </select>
                                                                </div>
                                                             </div>   
                                                            
                                                            <div class="col-12 col-sm-3" style="padding-top: 8px;">
                                                                <div class="gender form-group">
                                                                    <label class="g-name d-block">Gender</label>
                                                                    
                                                                        <input type="radio" id="r1" name="r1" value="male"  />
                                                                        Male
                                                                        <input type="radio" id="r1" name="r1" value="female"  />
                                                                        Female
                                                                   
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="">CNIC Number</label>
                                                                    <input type="text" class="form-control" id="txtcnic" name="txtcnic" placeholder="">
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class=" form-group">
                                                                    <div class="form-group">
                                                                        <label for="">Religion</label>
                                                                        <input type="text" class="form-control" id="txtreligion" name="txtreligion" placeholder="">
                                                                    </div>
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                        <label for="">Career Objective</label>
                                                                        <input type="text" class="form-control" id="txtcareer" name="txtcareer" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="">Skill01</label>
                                                                        <input type="text" class="form-control" id="txtskill01" name="txtskill01" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="">Skill02</label>
                                                                        <input type="text" class="form-control" id="txtskill02" name="txtskill02" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                    <label for="">Skill03</label>
                                                                        <input type="text" class="form-control" id="txtskill03" name="txtskill03" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-12">
                                                                <div class="form-group">
                                                                        <label for="">Educational Qualification</label>
                                                                        <div class="directory-table table-responsive">
                                                                            <table class="table table-bordered">
                                                                                <tr>
                                                                                    
                                                                                        <th scope="col"style="font-style: oblique;">Year Of Passing</th>
                                                                                        <th scope="col"style="font-style: oblique;">Qualification</th>
                                                                                        <th scope="col"style="font-style: oblique;">Specialisation or Subjects</th>
                                                                                        <th scope="col"style="font-style: oblique;">School/College/University/Institute</th>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>
                                                                                            <input type="text" class="form-control" id="txtyear_ssc" name="txtyear_ssc" placeholder=""> 
                                                                                         </td>
                                                                                        <td name="txtssc" id="txtssc">  
                                                                                            SSC/10th/ 
                                                                                        </td>
                                                                                        <td>
                                                                                            <input type="text" class="form-control" id="txtsubject_ssc" name="txtsubject_ssc" placeholder=""> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <input type="text" class="form-control" id="txtssc_school" name="txtssc_school" placeholder=""> 
                                                                                         </td>
                                                                                    
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>
                                                                                            <input type="text" class="form-control" id="txtyear_hsc" name="txtyear_hsc" placeholder=""> 
                                                                                         </td>
                                                                                        <td name="txthsc" id="txthsc">  
                                                                                            HSC/12th/ 
                                                                                        </td>
                                                                                        <td>
                                                                                            <input type="text" class="form-control" id="txtsubject_hsc" name="txtsubject_hsc" placeholder=""> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <input type="text" class="form-control" id="txthsc_school" name="txthsc_school" placeholder=""> 
                                                                                         </td>
                                                                                    
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>
                                                                                            <input type="text" class="form-control" id="txtyear_graduation" name="txtyear_graduation" placeholder=""> 
                                                                                         </td>
                                                                                        <td name="txtgraduate" id="txtgraduate">  
                                                                                            Graduation 
                                                                                        </td>
                                                                                        <td>
                                                                                            <input type="text" class="form-control" id="txtsubject_graduation" name="txtsubject_graduation" placeholder=""> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <input type="text" class="form-control" id="txtgraduation_school" name="txtgraduation_school" placeholder=""> 
                                                                                         </td>
                                                                                    
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>
                                                                                            <input type="text" class="form-control" id="txtyear_pg" name="txtyear_pg" placeholder=""> 
                                                                                         </td>
                                                                                        <td name="txtpg" id="txtpg">  
                                                                                            Post Graduation 
                                                                                        </td>
                                                                                        <td>
                                                                                            <input type="text" class="form-control" id="txtsubject_pg" name="txtsubject_pg" placeholder=""> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <input type="text" class="form-control" id="txtpg_school" name="txtpg_school" placeholder=""> 
                                                                                         </td>
                                                                                    
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--<div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class=" form-group">
                                                                    <div class="form-group">
                                                                        <label for="">Post Graguation</label>
                                                                        <input type="text" class="form-control" id="txtpg" name="txtpg" placeholder="">
                                                                    </div>
                                                                   
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                        <label for="">Graduation</label>
                                                                        <input type="text" class="form-control" id="txtgraduation" name="txtgraduation" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="">HSC</label>
                                                                        <input type="text" class="form-control" id="txthsc" name="txthsc" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="">SSC</label>
                                                                        <input type="text" class="form-control" id="txtssc" name="txtssc" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>-->
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="">Professional Experience</label>
                                                                        <input type="text" class="form-control" id="txtprofessional" name="txtprofessional" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="">Interpersonal Skill 01</label>
                                                                        <input type="text" class="form-control" id="txtinterpersonal01" name="txtinterpersonal01" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                               <div class="form-group">
                                                                    <label for="">Interpersonal Skill 02</label>
                                                                        <input type="text" class="form-control" id="txtinterpersonal02" name="txtinterpersonal02" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                               <div class="form-group">
                                                                    <label for="">Interpersonal Skill 03</label>
                                                                        <input type="text" class="form-control" id="txtinterpersonal03" name="txtinterpersonal03" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>    
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                               <div class="form-group">
                                                                    <label for="">Reference</label>
                                                                        <input type="text" class="form-control" id="txtreference" name="txtreference" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-4">
                                                                <div class="form-group file-input">
                                                                    <label ><i class="fa fa-upload"></i>Upload Your Photo</label>
                                                                    <input type="file" name="txtphoto" id="txtphoto" class="custom-file" for="customfile" />
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>         
                                                        <div class="form-group" align="center">
                                                            <input type="submit" class="btn btn-reg" value="Submit" name="b1" id="b1">
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

<!-- custom js: custom scripts for theme style switcher for demo purpose  -->
<script id="switcherhandle" src="assets/switcher/switcher.js"></script>


</body>

<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2020 11:37:29 GMT -->
</html>