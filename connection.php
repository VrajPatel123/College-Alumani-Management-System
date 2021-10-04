<?php

$cn=mysqli_connect('localhost','root','','final_project');

function fetch_user_last_activity($s_id, $cn)
{
 $query = "
 SELECT * FROM login_details 
 WHERE s_id = '$s_id' 
 ORDER BY last_activity DESC 
 LIMIT 1
 ";
 $sql=mysqli_query($cn,$query);
 //$statement = $connect->prepare($query);
 //$statement->execute();
 //$result = $statement->fetchAll();
 $result = mysqli_fetch_row($sql);
 /*foreach($result as $row)
 {
  return $row['last_activity'];
 }*/
}

?>