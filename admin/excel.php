<?php

include 'DBController.php';
    $db_handle = new DBController();
    $productResult = $db_handle->runQuery("select * from emp");

    if (isset($_POST["b1"])) {
        $filename = "Backup_emp.xls";
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=\"$filename\"");
        $isPrintHeader = false;
        if (! empty($productResult)) {
            foreach ($productResult as $row) {
                if (! $isPrintHeader) {
                    echo implode("\t", array_keys($row)) . "\n";
                    $isPrintHeader = true;
                }
                echo implode("\t", array_values($row)) . "\n";
            }
        }
        exit();
    }

require_once('connection.php');
$result=mysqli_query($cn,"select * from emp");



    ?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form method="post">
    <table>
        <tr>
            <td>Name</td>
            <td>surname</td>
            <td>email</td>
            <td>mobile</td>
        </tr>
        <?php
        while($r=mysqli_fetch_row($result))
        {
        ?>
            
            <td><?php echo $r[1]; ?></td>
            <td><?php echo $r[2]; ?></td>
            <td><?php echo $r[3]; ?></td>
              <td><?php echo $r[4]; ?></td>
        <?php
        }
        ?>
        <tr>
            <td><input type="submit" name="b1" value="export to excel" /></td>
        </tr>
    </table>
</form>
</body>
</html>

