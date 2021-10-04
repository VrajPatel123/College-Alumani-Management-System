<?php

session_start();
if (($_SESSION['sname'] == '') || (!isset($_SESSION['sname'])))
 {
    header('location:student_login.php');
}
else
{
require_once('connection.php');

$sql=mysqli_query($cn,"SELECT job_ad.job_id,student_profile.s_name,student_profile.surname,student_profile.photo,job_ad.job_name,job_ad.company_name,job_ad.company_logo,job_ad.ad_photo,job_ad.date,
job_ad.apply_date,job_ad.expire_date,job_ad.fees,job_ad.description,job_ad.company_email,job_ad.company_description,job_ad.view from job_ad INNER JOIN student_profile ON job_ad.s_id = student_profile.s_id

union

SELECT job_ad.job_id,fullname,surname,adminimg,job_ad.job_name,job_ad.company_name,job_ad.company_logo,job_ad.ad_photo,job_ad.date,
job_ad.apply_date,job_ad.expire_date,job_ad.fees,job_ad.description,job_ad.company_email,job_ad.company_description,job_ad.view from job_ad ,admin_login where s_id IS NULL
"); 




$id=$_SESSION['sid'];


/*if (($_SESSION['admin_name'] == '') || (!isset($_SESSION['admin_name'])))
 {
    header('location:index.php');
}
else
{

  require_once('connection.php');
  $aname=$_SESSION['admin_name'];*/
  if(isset($_POST['b1']))
  {
    $name=$_POST['txtjname'];
    $cname=$_POST['txtcname'];
    $clogo=$_FILES['txtclogo']['name'];
    $tempname=$_FILES['txtclogo']['tmp_name'];
    move_uploaded_file($tempname, "admin/image/clogoimg/$clogo");

    $adphoto=$_FILES['txtaphoto']['name'];
    $tmpname=$_FILES['txtaphoto']['tmp_name'];
    move_uploaded_file($tmpname, "admin/image/adimg/$adphoto");

    $date=$_POST['txtdate'];
    $adate=$_POST['txtadate'];  
    $edate=$_POST['txtedate'];
    $fess=$_POST['txtfees'];
    $jdescription=$_POST['txtjdescription'];
    $caddress=$_POST['txtcaddress'];
    $company_description=$_POST['txtcdescription'];
        

    $sql1=mysqli_query($cn,"INSERT INTO `job_ad`(`s_id`,`job_name`, `company_name`, `company_logo`, `ad_photo`, `date`, `apply_date`, `expire_date`, `fees`, `description`, `company_email`,`company_description`) VALUES ('$id','$name','$cname','$clogo','$adphoto','$date','$adate','$edate','$fess','$jdescription','$caddress','$company_description')");
    
   
      echo '<script language="javascript">';
      echo 'alert("record insert successfully sent")';  //not showing an alert box.
      echo '</script>';
        
      
}
}
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/career.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2020 11:37:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>uniAlumni</title>
    <!---ckeditor--->
  <script src="ckeditor/ckeditor.js"></script>

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
                        <h1 class="h2">Job Opportunity</h1>
                        <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need</p>
                        <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Single Album Page Content Start ==-->
    <section id="page-content-wrap">
        <div class="career-page-wrapper">
            <div class="career-page-topbg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 m-auto">
                            <img src="assets/img/careerbg.png" class="img-fluid" alt="career">
                        </div>
                    </div>
                </div>
            </div>

            <div class="career-page-content-wrap section-padding">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="event-filter-area">
                                <form action="" class="form-inline">
                                    <button class="btn btn-brand"  data-toggle="modal" data-target="#modal-primary" type="button" name="post">+ Post Oppurtunity</button>
                                </form>
                            </div>
                        </div>
                    </div>

<div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Add Oppurtunity</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" enctype="multipart/form-data" onsubmit="return validation()">
                <div class="card-body">
                  <div class="form-group"style="text-align: left">
                    <label for="exampleInputEmail1">Job Name</label>
                    <input type="text" class="form-control" id="txtjname"name="txtjname" placeholder="Enter Job Name" autocomplete="off">
                    <span id="jname" class="text-danger font-weight-bold"> </span>
                  </div>

                  <div class="form-group"style="text-align: left">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="text" class="form-control" id="txtcname"name="txtcname" placeholder="Enter Company Name" autocomplete="off">
                    <span id="cname" class="text-danger font-weight-bold"> </span>
                  </div>
                  
                  <div class="form-group"style="text-align: left">
                    <label for="exampleInputFile">Company Logo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="txtclogo" name="txtclogo"  onchange="f1()" />
                        <label class="custom-file-label" for="exampleInputFile" id="l1" >Choose file</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group"style="text-align: left">
                    <label for="exampleInputFile">Advertisement Photo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="txtaphoto" name="txtaphoto"  onchange="f1()" />
                        <label class="custom-file-label" for="exampleInputFile" id="l2" >Choose file</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group"style="text-align: left">
                    <label for="">Date</label>
                    <input type="date" class="form-control" id="txtdate" name="txtdate" placeholder="Date">
                    <span id="date" class="text-danger font-weight-bold"> </span>
                  </div>

                  <div class="form-group"style="text-align: left">
                    <label for="">Apply Date</label>
                    <input type="date" class="form-control" id="txtadate" name="txtadate" placeholder="Apply Date">
                    <span id="adate" class="text-danger font-weight-bold"> </span>
                  </div>

                  <div class="form-group"style="text-align: left">
                    <label for="">Expire Date</label>
                    <input type="date" class="form-control" id="txtedate" name="txtedate" placeholder="Expire Date">
                    <span id="edate" class="text-danger font-weight-bold"> </span>
                  </div>

                  <div class="form-group" style="text-align: left">
                    <label for="exampleInputEmail1">Fees</label>
                    <input type="text" class="form-control" id="txtfees" name="txtfees" placeholder="Enter JOb  Fees" autocomplete="off">
                    <span id="fees" class="text-danger font-weight-bold"> </span>
                  </div>
                  
                  <div class="form-group" style="text-align: left">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea type="textbox" class="form-control" id="txtjdescription" name="txtjdescription" placeholder="Enter Job Description"></textarea>
                    <script type="text/javascript">
                          CKEDITOR.replace('txtjdescription');
                      </script>
                    <span id="jdescription" class="text-danger font-weight-bold"> </span>
                  </div>

                  <div class="form-group" style="text-align: left">
                    <label for="exampleInputEmail1">Company Description</label>
                    <textarea type="textbox" class="form-control" id="txtcdescription" name="txtcdescription" placeholder="Enter company Description"></textarea>
                    <span id="cdescription" class="text-danger font-weight-bold"> </span>
                  </div>
                  
                  <div class="form-group" style="text-align: left">
                    <label for="exampleInputEmail1">Company Email</label>
                    <input type="email" class="form-control" id="txtcaddress" name="txtcaddress" placeholder="Enter Company email">
                    <span id="caddress" class="text-danger font-weight-bold"> </span>
                  </div>

                </div>
                <!-- /.card-body -->

              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-light" id="b1" name="b1" onclick="return postConfirm()">Submit</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->



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

                                            <div class="col-sm-6"> <i class="fa fa-eye" style="padding-top: 12px;font-size: 18px;"> <?php echo $r[15]; ?> Views</i>
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

                        <!-- Pagination Start -->
                        <!--<div class="row">
                            <div class="col-lg-12">
                                <div class="pagination-wrap text-center">
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                                            <li class="page-item"><a class="page-link" href="#">50</a></li>
                                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>-->
                        <!-- Pagination End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Single Album Page Content End ==-->
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
  function f1()
  {
    
    document.getElementById("l1").innerHTML=document.getElementById("txtclogo").value;
    document.getElementById("l2").innerHTML=document.getElementById("txtaphoto").value;
  }
</script>

<script type="text/javascript">
  function validation()
  {
    var jname = document.getElementById('txtjname').value;
    var cname = document.getElementById('txtcname').value;
    var date = document.getElementById('txtdate').value;
    var adate = document.getElementById('txtadate').value;
    var edate = document.getElementById('txtedate').value;
    var fees = document.getElementById('txtfees').value;
    var jdescription = document.getElementById('txtjdescription').value;
    var cdescription = document.getElementById('txtcdescription').value;
    var caddress = document.getElementById('txtcaddress').value;



    if (jname == "") 
    {
      document.getElementById('jname').innerHTML = "** Please fill the Job Name field";
      return false;
    }
    if((jname.length <=2)||(jname.length >50))
    {
      document.getElementById('jname').innerHTML = "** Job Name length must be between 2 and 50";
      return false;
    }
    if(!isNaN(jname))
    {
      document.getElementById('jname').innerHTML = "** only character are allowed";
      return false;
    }

    if (cname == "") 
    {
      document.getElementById('cname').innerHTML = "** Please fill the Company Name field";
      return false;
    }
    if((cname.length <=2)||(cname.length >50))
    {
      document.getElementById('cname').innerHTML = "** Company Name length must be between 2 and 50";
      return false;
    }
    if(!isNaN(cname))
    {
      document.getElementById('cname').innerHTML = "** only character are allowed";
      return false;
    }

    if (date == "") 
    {
      document.getElementById('date').innerHTML = "** Please fill the  Date";
      return false;
    }

    if (adate == "") 
    {
      document.getElementById('adate').innerHTML = "** Please fill the Apply Date";
      return false;
    }

    if (edate == "") 
    {
      document.getElementById('edate').innerHTML = "** Please fill the Expire Date";
      return false;
    }

    if(fees == "")
    {
      document.getElementById('fees').innerHTML =" ** Please fill the  Fees field";
      return false;
    }
    if(isNaN(fees))
    {
      document.getElementById('fees').innerHTML =" ** User must write digits only not characters";
      return false;
    }

    if (jdescription == '') 
    {
      document.getElementById('jdescription').innerHTML = "** Please fill the Job Description field";
      return false;
    }
    if (cdescription == '') 
    {
      document.getElementById('cdescription').innerHTML = "** Please fill the Company Description field";
      return false;
    }
    

    
  }
</script>

</body>

<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/career.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2020 11:37:38 GMT -->
</html>
