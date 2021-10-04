<?php
session_start();
require_once('connection.php');
$name=$_REQUEST['name'];
//echo "select * from student_profile where s_name like '%$name%' or surname like '%$name%'";

$result=mysqli_query($cn,"select * from student_profile where s_name like '%$name%' or surname like '%$name%' ")
?>



<html>
<body>
	                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Batch</th>
                                            <th scope="col">View Alumni Profile</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            while($data=mysqli_fetch_array($result))
                                            {
                                        ?>
                                        <tr>
                                            <td><img src="admin/image/studentimg/<?php echo $data[6] ?>" alt="table"><?php echo strtoupper("$data[1]")?> &nbsp;<?php echo strtoupper("$data[2]") ?></td>
                                            <td><?php echo strtoupper("$data[3]") ?></td>
                                            <td><?php echo strtoupper("$data[5]") ?></td>
                                            <td><?php echo strtoupper("$data[7]") ?>&nbsp; / &nbsp; <?php echo strtoupper("$data[8]") ?></td>
                                            <td align="center"><button type="button" class="btn btn-reg" onclick="location.href='student_single_detail.php?id=<?php echo $data[0]; ?>' "  >View</button></td>
                                        </tr>
                                        <?php 
                                          }
                                        ?>

                                        
                                    </tbody>
                                </table>
</body>
</html>