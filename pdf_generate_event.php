

<?php
//index.php
//include autoloader
session_start();
require_once('autoload.inc.php');
require_once('connection.php');

// reference the Dompdf namespace

use Dompdf\Dompdf;

//initialize dompdf class

$document = new Dompdf();
//$evid=$_REQUEST['ev_id'];
$id=$_SESSION['sid'];

//echo $evid;
//echo "select * from apply_event ae,event e,student_profile sp where ae.s_id=sp.s_id and ae.event_id=e.event_id and ae_id=$evid";
$result=mysqli_fetch_row(mysqli_query($cn,"select * from apply_event ae,event e,student_profile sp where ae.s_id=sp.s_id and ae.event_id=e.event_id  and sp.s_id=$id"));

$html = '
    <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

    <table border="2">
       
        <tr>
            <td>Student Name :</td>
            <td>'.$result[37].' &nbsp;'. $result[38].'</td>
        </tr>
        <tr>
            <td>Gender :</td>
            <td>'.$result[39].'</td>
        </tr>
        <tr>
            <td>Email :</td>
            <td>'.$result[41].'</td>
        </tr>
        <tr>
            <td>Mobile :</td>
            <td>'. $result[40].'</td>
        </tr>
        <tr>
            <td>Event Name :</td>
            <td>'.$result[18].'</td>
        </tr>
        <tr>
            <td>Registered Date :</td>
            <td>'.$result[4].'</td>
        </tr>
        <tr>
            <td>Event Date :</td>
            <td>'.$result[12].'</td>
        </tr>
        <tr>
            <td>Payement Type :</td>
            <td>'.$result[3].'</td>
        </tr>
        <tr>
            <td>Amount :</td>
            <td>'.$result[5].'</td>
        </tr>
        
    </table>

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

$document->stream("Bill Receipt", array("Attachment"=>1));
//1  = Download
//0 = Preview


?>