<?php 

?>

<?php 

$servername ="localhost";
$username ="root";
$password ="";
$dbname ="library";

$conn = mysqli_connect($servername, $username,$password,$dbname);

if (!$conn) {
    die("connection : failed (เชื่อมต่อฐานข้อมูล ไม่ สำเร็จ)" . 
    mysqli_connect_errors());
}   else {
    echo "Connection : ok (เชื่อมต่อฐานข้อมูลสำเร็จ)";

}    


// mysqli_close($conn); // ปิดฐารข้อมูล


?>