<?php 
	require_once('connection.php');
	if($_POST['type']=='staff'){
		 $result=mysqli_query($cn,"select * from staff_detail");
		 $op = "<option value=''>Select Staff</option>";
		  while($r=mysqli_fetch_array($result))
	        {
	        	$op .= "<option value=".$r['email'].">".$r['name']." ".$r['sname']."</option>";
	        }
	        echo $op;
	}else{
		$result=mysqli_query($cn,"select * from student_profile");
		 $op = "<option value=''>Select Student</option>";
		  while($r=mysqli_fetch_array($result))
	        {
	        	$op .= "<option value=".$r['email'].">".$r['s_name']." ".$r['surname']."</option>";
	        }
	        echo $op;
	}


?>