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
$sid=$_SESSION['sid'];
$r=mysqli_fetch_array(mysqli_query($cn,"select * from event where event_id=$id"));



$month = date('m');
$day = date('d');
$year = date('Y');

$today = $year . '-' . $month . '-' . $day;
$cardname = '';
$cardno =0;
$cardmonth =0;
 $cardyear =0; 
 $cardcvv = 0;
if(isset($_POST['b1']))
{
       $amt=$r[8]; 
       $payment_type=$_POST['r1'];
       $date=$today;
       if($payment_type=='card')
       {
       $cardno=$_POST['txtcardno'];
       $cardname=$_POST['txtcardname'];

       $cardmonth=$_POST['txtcardmonth'];
       $cardyear=$_POST['txtcardyear'];
       $cardcvv=$_POST['txtcardcvv'];
        
       }
       //echo "card numbrer is ..." .$cardno;
       //echo "insert into apply_event(event_id,s_id,payment_type,payment_date,amount,card_no,name_on_card,expiry_month,expiry_year,card_cvv) values('$id','$sid','$payment_type','$date',$amt,'$cardno','$cardname','$cardmonth','$cardyear','$cardcvv');";
       mysqli_query($cn,"insert into apply_event(event_id,s_id,payment_type,payment_date,amount,card_no,name_on_card,expiry_month,expiry_year,card_cvv) values($id,$sid,'$payment_type','$date',$amt,'$cardno','$cardname',$cardmonth,$cardyear,$cardcvv)");
       //$result1=mysqli_fetch_row(mysqli_query($cn,"select max(ae_id) from apply_event where s_id=$sid"));
       //$evid=$result1[0];
      header('location:generate_bill_event.php?ev_id='.$id);
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
    <form name="ff1" method="post" enctype="multipart/form-data">
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
                                                        <div class="register-form">
                                                          
                                                                    
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label>Enrollment No.</label>
                                                     <input type="text" class="form-control" id="txtenroll" name="txtenroll" onchange="views()" />
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label>Date</label>
                                                                            <input type="date" class="form-control" id="txtdate" name="txtdate" value="<?php echo $today; ?>" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Signin Area Content End -->

                                        <!-- Regsiter Form Area Start -->
                                        <div class="col-lg-7 col-md-6 ml-auto" id="h1">
                                            <div class="register-form-wrap">
                                                
                                                    <div class="row" style="padding-left: 225px;">
                                                        <img id="img" name="img" src="" alt="student" style="width: 100px;height: 100px;-webkit-border-radius: 50px;border-radius: 50px;" />
                                                        <input type="hidden" name="h2" id="h2" >
                                                    </div><br>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-4">
                                                            <div class="form-group">
                                                                <label>Name</label>
                                                                <input type="text" class="form-control" id="txtname" name="txtname" />
                                                              </div>
                                                        </div>

                                                        <div class="col-12 col-sm-4">
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input type="text" class="form-control" id="txtemail" name="txtemail" />
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-sm-4">
                                                            <div class="form-group">
                                                                <label>Mobile</label>
                                                                <input type="text" class="form-control" id="txtmobile" name="txtmobile" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                                    
                                            </div>
                                        </div>
                                        <!-- Regsiter Form Area End -->

                                    </div>

                                </div>
                            </div>
                        </div>

                       <!-- <div class="register-page-inner">
                            <div class="col-lg-10 m-auto">
                                <div class="register-form-content">
                                    <div class="row">-->


                                        <!-- Signin Area Content Start -->
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <div class="display-table">
                                                <div class="display-table-cell">
                                                    <div class="signin-area-wrap">
                                                        <div class="register-form">
                                                            
                                                                    

                                                                <div class="row">
                                                                    <div class="col-12 col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Total Amount</label>
                     <input type="text" class="form-control" id="txta" name="txta" value="<?php echo $r[8]; ?>" />
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12 col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Pay By:-</label><br>
                                                                            <input type="radio" name="r1" id="radio1" value="cash">cash
                                                                            <input type="radio" name="r1" id="radio2" value="card">card


                                                                        </div>
                                                                        <div id="div1">
                                                                            <input type="text" name="txtcardname" id="txtcardname" placeholder="Enter Name On Card" />
                                                                            <input type="text" name="txtcardno" id="txtcardno" placeholder="Enter Card Number" />
                                                                            Expiry Month<select name="txtcardmonth" id="txtcardmonth">
                                                                                <option value="">--select month--</option>
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option value="7">7</option>
                                                                                <option value="8">8</option>
                                                                                <option value="9">9</option>
                                                                                <option value="10">10</option>
                                                                                <option value="11">11</option>
                                                                                <option value="12">12</option>
                                                                            </select>
                                                                            Expiry Year<select name="txtcardyear" id="txtcardyear">
                                                                                <option value="">--select year--</option>
                                                                                <option value="2021">2021</option>
                                                                                <option value="2022">2022</option>
                                                                                <option value="2023">2023</option>
                                                                                <option value="2024">2024</option>
                                                                                <option value="2025">2025</option>
                                                                                <option value="2026">2026</option>
                                                                                <option value="2027">2027</option>
                                                                                
                                                                            </select>
                                                                            <input type="text" name="txtcardcvv" id="txtcardcvv" placeholder="Enter Card CVV">
                                                                        </div>
                                                           

                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Signin Area Content End -->

                                        <!-- Regsiter Form Area Start -->
                                        <div class="col-lg-7 col-md-6 ml-auto">
                                            <div class="register-form-wrap">

                                                     <button type="submit" class="btn btn-reg" name="b1">Go For Payment</button>

                                            </div>
                                        </div>
                                        <!-- Regsiter Form Area End -->




<!----------------------------------------------------------------------------------------------------------->
                                    </div>
                                </div>
                            </div>
                        </div>
<!---------------------------------------------------------------------------------------------->
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
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


<!--<script type="text/javascript">
    function showdetail(name)
    {
        $("#txtenroll").on('change',function(){
            $.ajax({
                url: 'fetch_event_ajax.php',
                type: 'post',
                data: {type:$(this).val()},
                success:function(data){
                    $("#img").empty().append(data);
                    $("#txtname").empty().append(data);
                    $("#txtemail").empty().append(data);
                    $("#txtmobile").empty().append(data);
                }
            })
        })
    }


</script>-->
<!--<script type="text/javascript">
    $(document).ready(function(){
     $("#h1").hide(); 
     
 });
    $(function () { 
    /* DOM ready */
    $("#txtenroll").change(function () {
        $("#h1").show();
        //hide the element you want to hide here with
        //("id").attr("display","block"); // to show
        //("id").attr("display","none"); // to hide
    });
});
</script>-->
<script type="text/javascript">

  function views()
  {
    var sid=document.getElementById("txtenroll").value;
   // alert(sid);
   $.ajax({
     url: 'fetch_event_ajax.php',
     type: 'POST',
     data: {id:sid,pname:"joinus_event"},
     success:function(data){
      var d = jQuery.parseJSON(data);
     
  document.getElementById("txtname").value=d.s_name;
 document.getElementById("txtemail").value=d.email;
 document.getElementById("txtmobile").value=d.mobile;
 //alert(d.photo);
 document.getElementById("img").src="admin/image/studentimg/"+d.photo;

  }  
   })
   
    
    
  }


 
</script>
<script type="text/javascript">
 $(document).ready(function(){
    $('#div1').hide();
   $("#radio2").click(function(){
  $("#div1").show();
  $("#radio1").click(function(){
  $("#div1").hide();
}); 
});
});
</script>
</body>

<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2020 11:37:29 GMT -->
</html>
