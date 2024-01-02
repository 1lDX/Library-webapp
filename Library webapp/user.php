<?php 
    session_start();
    require_once 'config/db.php';

    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
        exit; // Ensure to exit after redirection
    }

    // Assuming the user is logged in
    if (isset($_SESSION['user_login'])) {
        $user_id = $_SESSION['user_login'];
        $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 

    if (isset($_SESSION['user_login'])) {
        $user_id = $_SESSION['user_login'];
        $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    ?>
     <header class="top-header">  
        <a class="menu-item">Welcome, <?php echo $row['firstname'] . ' ' . $row['lastname'] ?></a> 
        <a class="menu-logout" href="logout.php">ออกจากระบบ</a>
    </header>

    <!-- Your book display section -->
    <div class="main-content"> 
        <div class="box">
            <!-- Book 1 -->
            <div class="mid-box">
                <div class="image-box">
                    <!-- Book information -->
                    
                    <img src ="english1.jpg">
                    <h2>English 1</h2>
                    <p>lorem lorem lorem lorem</p>
                    <p>lorem lorem lorem lorem</p> 
                    
                    <!-- Rent Book button -->
                    <div class="col-2 btn">
                        
                     <a href="rent_book.php" class="d-grid gap-2 p-2 col btn rounded-pill text-dark"><strong>เช่าหนังสือ</strong></a>
                    </div>
                </div>   
            </div>
            
            <!-- Book 2 -->
            <div class="mid-box">
                <!-- Book information -->
                <img src ="english2.jpg">
                    <h2>English 2</h2>
                    <p>lorem lorem lorem lorem</p>
                    <p>lorem lorem lorem lorem</p> 
                <!-- ... (similar structure for Book 2) ... -->
                <form method="POST" action="rent_book.php">
                    <input type="hidden" name="book_name" value="New frontier">
                    <button type="submit" class="button" name="rent_book">เช่าหนังสือ</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>