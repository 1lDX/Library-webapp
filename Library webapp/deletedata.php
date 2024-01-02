
<?php

$delete_ID  = $_REQUEST['studentid'];

require('connect.php');

$sql = '
    DELETE FROM student
    WHERE studentid = ' . $delete_ID . ';
    ';

$objQuery = mysqli_query($conn, $sql);
if ($objQuery) {
    echo "Record " . $delete_ID . " was Deleted.";
} else {
    echo "Error : Delete";
}

mysqli_close($conn); // ปิดฐานข้อมูล
echo "<br><br>";
echo "--- END ---";
?>

<html>
    <P href="data.php">Back</p>
    </html>

