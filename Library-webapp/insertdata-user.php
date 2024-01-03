<?php
require('connect.php');
session_start();


// ตรวจสอบความถูกต้องของข้อมูล
if (empty($_REQUEST['firstname']) || empty($_REQUEST['lastname']) || empty($_REQUEST['Return_Date']) || empty($_REQUEST['BookName'])) {
    echo "กรุณากรอกข้อมูลให้ครบทุกช่อง";
    exit;
}

        
        $studentID = $_SESSION['studentID'];


// แปลงข้อมูลผู้ใช้ให้เป็นสตริงที่ปลอดภัย
$studentID = mysqli_escape_string($conn, $studentID);
$firstname = mysqli_escape_string($conn, $_REQUEST['firstname']);
$lastname = mysqli_escape_string($conn, $_REQUEST['lastname']);
$Return_Date = mysqli_escape_string($conn, $_REQUEST['Return_Date']);
$BookName = mysqli_escape_string($conn, $_REQUEST['BookName']);

// Query เพื่อบันทึกข้อมูลลงในตาราง student
$sql = "INSERT INTO student (studentID, firstname, lastname, Return_Date, BookName) 
        VALUES ('$studentID', '$firstname', '$lastname', '$Return_Date', '$BookName')";
$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
    echo "New record Inserted successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn); // ปิดการเชื่อมต่อฐานข้อมูล
echo "<br><br>";
echo "--- END ---";
?>