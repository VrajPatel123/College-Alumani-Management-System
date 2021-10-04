<?php require_once('connection.php');
		
		if($_POST['pname']=='edit_news')
		{
			  $data=mysqli_fetch_array(mysqli_query($cn,"select * from news where news_id=".$_POST['id']));
			  echo json_encode($data);
		}
		if($_POST['pname']=='edit_event')
		{
			  $data=mysqli_fetch_array(mysqli_query($cn,"select * from event where event_id=".$_POST['id']));
			  echo json_encode($data);
		}
		if($_POST['pname']=='edit_placement')
		{
			  $data=mysqli_fetch_array(mysqli_query($cn,"select * from job_ad where job_id=".$_POST['id']));
			  echo json_encode($data);
		}
		if($_POST['pname']=='edit_staff')
		{
			  $data=mysqli_fetch_array(mysqli_query($cn,"select * from staff_detail where staff_id=".$_POST['id']));
			  echo json_encode($data);
		}
		if($_POST['pname']=='edit_student')
		{
			  $data=mysqli_fetch_array(mysqli_query($cn,"select * from student_profile where s_id=".$_POST['id']));
			  echo json_encode($data);
		}
		if($_POST['pname']=='edit_gallary')
		{
			  $data=mysqli_fetch_array(mysqli_query($cn,"select * from gallery where g_id=".$_POST['id']));
			  echo json_encode($data);
		}
?>