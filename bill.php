<?php
//index.php
//include autoloader

require_once ('autoload.inc.php');

// reference the Dompdf namespace

use Dompdf\Dompdf;

//initialize dompdf class

$document = new Dompdf();

$html = '
<style type="text/css">
body{
    margin-top:20px;
    background:#eee;
}
.invoice {
    background: #fff;
    padding: 20px
}

.invoice-company {
    font-size: 20px
}
.invoice-header {
    margin: 0 -20px;
    background: #f0f3f4;
    padding: 20px
}
.invoice-date,
.invoice-from,
.invoice-to {
    display: table;
    width: 1%
}

.invoice-from,
.invoice-to {
    padding-right: 20px
}

.invoice-date .date,
.invoice-from strong,
.invoice-to strong {
    font-size: 16px;
    font-weight: 600
}

.invoice-date {
    text-align: right;
    padding-left: 20px
}

.invoice-price {
    background: #f0f3f4;
    display: table;
    width: 100%
}

.invoice-price .invoice-price-left,
.invoice-price .invoice-price-right {
    display: table;
    padding: 20px;
    font-size: 20px;
    font-weight: 600;
    width: 75%;
    position: relative;
    vertical-align: middle
}

.invoice-price .invoice-price-left .sub-price {
    display: table;
    vertical-align: middle;
    padding: 0 20px
}

.invoice-price small {
    font-size: 12px;
    font-weight: 400;
    display: block
}

.invoice-price .invoice-price-row {
    display: table;
    float: center;
}

.invoice-price .invoice-price-right {
    width: 25%;
    background: #2d353c;
    color: #fff;
    font-size: 28px;
    text-align: right;
    vertical-align: bottom;
    font-weight: 300
}

.invoice-price .invoice-price-right small {
    display: block;
    opacity: .6;
    position: absolute;
    top: 10px;
    left: 10px;
    font-size: 12px
}

.invoice-footer {
    border-top: 1px solid #ddd;
    padding-top: 10px;
    font-size: 10px
}

.invoice-note {
    color: #999;
    margin-top: 80px;
    font-size: 85%
}

.invoice>div:not(.invoice-footer) {
    margin-bottom: 20px
}

.btn.btn-white, .btn.btn-white.disabled, .btn.btn-white.disabled:focus, .btn.btn-white.disabled:hover, .btn.btn-white[disabled], .btn.btn-white[disabled]:focus, .btn.btn-white[disabled]:hover {
    color: #2d353c;
    background: #fff;
    border-color: #d9dfe3;
}
</style>
 
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
                  <i class="text-inverse">ritesh</i><br>
                  poriya<br>
                  is a handsome boy<br>
                  T- u know u<br>
                  okkk<br>
                  
               </address>
                </div>
            </div>
             <div class="invoice-from">
               <b>Date:-</b>
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse">Picking Place:- yogi na ghare</strong><br>
                  Booking Date:- 04/8/1998<br>
                  Start Date:- 04/8/1998<br>
                  Return Date:- 04/8/1998<br>
                  No Of Days:- 04/8/1998><br>
                  
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
                      is a good boy br>
                      ritesh always free for good looking girls<br>
                      T: 123456789<br>
                  
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
                  <i class="text-inverse">girlfriend</i><br>
                      yogi sachi<br>
                     yogi addtityanath<br>   
                      khgffbb<br>
                  
               </address>
               </div>
            
            </div>
             
         </div> 
         <!------end information-->
         <!-- begin invoice-content -->
         <div class="invoice-content" align="">
            <!-- begin table-responsive -->
            <table class="table table-invoice" align="center" >
            <div class="table-responsive">
               
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
                           <span class="text-inverse"><center>bwddbuubwub <br>ritesh  lnbf <br>  
                      aadneffbbbj <br>ejbejbjb</center></span>
                        </td>
                        <td class="text-center"><center>Car RATE</center></td>
                        <td class="text-center"><center>2611</center></td>
                        <td class="text-center"><center>11155545</center></td></center>
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
                  <span class="f-w-600">$9000/-</span>
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
';

$document->loadHtml($html);

//$page = file_get_contents("../preview_normal.php");

//$document->loadHtml($page);

//$connect = mysqli_connect("localhost", "root", "", "testing1");



//echo $output;

//$document->loadHtml($output);

//set page size and orientation

$document->setPaper('A4', 'landscape');

//Render the HTML as PDF

$document->render();

//Get output of generated pdf in Browser

$document->stream("Webslesson", array("Attachment"=>0));
//1  = Download
//0 = Preview


?>