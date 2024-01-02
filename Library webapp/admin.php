<?php 

    session_start();
    require_once 'config/db.php';
    if (!isset($_SESSION['admin_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link href="admin.css" rel="stylesheet">
</head>
<body>

        <?php 

            if (isset($_SESSION['admin_login'])) {
                $admin_id = $_SESSION['admin_login'];
                $stmt = $conn->query("SELECT * FROM users WHERE id = $admin_id");
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        ?>
    
        
        <header class="top-header">  
        <h3 class="menu-item">Welcome Teacher(admin), <?php echo $row['firstname'] . ' ' . $row['lastname'] ?></h3>
        <a  class="menu-logout2" href="logout.php">ออกจากระบบ</a>
    </header>   
     
    
        <div class ="main-content"> 
            <div class ="box">
            <a href="main.php">
                <br>    
                <p>ลงทำเบียนข้อมูลนักเรียน</p>
            </a>    
            <a href="data.php">
                <br>    
                <p>ลบข้อมูลนักเรียน</p>
            </a>    
            <a href="menu.php">
                </div>
            </div>

</body>
</html>