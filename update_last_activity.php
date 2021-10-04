<?php

//update_last_activity.php

include('connection.php');

session_start();

/*$query = "
UPDATE login_details 
SET last_activity = now() 
WHERE login_details_id = '".$_SESSION["login_details_id"]."'
";*/

$sql=mysqli_query($cn,"UPDATE login_details 
SET last_activity = now() 
WHERE login_details_id = '".$_SESSION["login_details_id"]."'
");
    $r=mysqli_fetch_row($sql);

?>