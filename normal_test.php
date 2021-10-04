<?php
$r=mysqli_fetch_array(mysqli_query($cn,"select * from bio_normal where bid=1"));
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
hiiiii   <?php echo $r[1]; ?>
</body>
</html>