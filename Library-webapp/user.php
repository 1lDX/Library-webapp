<?php 
    session_start();
    require_once 'config/db.php';

    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
        exit;
    }


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


    <div class="main-content"> 
        <div class="box">
          
            <div class="mid-box">
                <div class="image-box">
             
                    
                    <img src ="english1.jpg">
                    <h2>English 1</h2>
                    <p>lorem lorem lorem lorem</p>
                    <p>lorem lorem lorem lorem</p> 
                    
              
                    <div class="col-2 btn">
                    <form method="POST" action="rent_book.php">        
                    <input type="hidden" name="book_name" value="New frontier">    
                    <button type="submit" class="button" name="rent_book">เช่าหนังสือ</button>
                    </form>    
                </div>

                </div>   
            </div>
            
            
            <div class="mid-box">
          
                <img src ="english2.jpg">
                    <h2>English 2</h2>
                    <p>lorem lorem lorem lorem</p>
                    <p>lorem lorem lorem lorem</p> 
                
                <form method="POST" action="rent_book.php">
                    <input type="hidden" name="book_name" value="New frontier">
                    <button type="submit" class="button" name="rent_book">เช่าหนังสือ</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>