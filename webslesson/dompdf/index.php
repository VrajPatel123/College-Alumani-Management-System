<?php
//index.php
//include autoloader

require_once 'autoload.inc.php';

// reference the Dompdf namespace

use Dompdf\Dompdf;

//initialize dompdf class

$document = new Dompdf();


//$document->loadHtml($html);

$page = file_get_contents("cat.html");

$document->loadHtml($page);

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