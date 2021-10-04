<?php
session_start();
if (($_SESSION['admin_name'] == '') || (!isset($_SESSION['admin_name'])))
 {
    header('location:index.php');
}
else
{
	require_once("connection.php");
$id=$_REQUEST['no'];
mysqli_query($cn,"delete from news where news_id=$id");
header('location:view_news.php');
}

?>