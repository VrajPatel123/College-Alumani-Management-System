<?php require_once('connection.php');
		
		if($_POST['pname']=='student_profile')
		{
			  $data=mysqli_fetch_array(mysqli_query($cn,"select * from student_profile where s_id=".$_POST['id']));
			  echo json_encode($data);
		}
		
?>