<?php
require_once('connection.php');


if($_POST['pname']=='joinus_event')
        {
            $no=$_POST['id'];
        $data=mysqli_fetch_array(mysqli_query($cn,"select * from student_profile where enroll_no='$no'"));
              echo json_encode($data);
        }
        



?>