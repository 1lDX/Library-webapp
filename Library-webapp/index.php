<?php 

    session_start();
    require_once 'config/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration System PDO</title>
    <link rel="stylesheet" href ="login.css">
</head>
<body>

<div class="Div-backgound01">
        <div class="header">
        <h3 class="">สมัครสมาชิก</h3>
        
        <form action="signup_db.php" method="post">
            <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['warning'])) { ?>
                <div class="alert alert-warning" role="alert">
                    <?php 
                        echo $_SESSION['warning'];
                        unset($_SESSION['warning']);
                    ?>
                </div>
            <?php } ?>
                    

                
            
            <div class="mb-3">
                <label for="firstname">First name</label>
                <input type="text" class="input-group" name="firstname" aria-describedby="firstname">
            </div>
            <div class="mb-3">
                <label for="lastname">Last name</label>
                <input type="text" class="input-group" name="lastname" aria-describedby="lastname">
            </div>
            <div class="mb-3">
                <label for="studentID">StudentID</label>
                <input type="studentID" class="input-group" name="studentID" aria-describedby="studentID">
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" class="input-group" name="password">
            </div>
            <div class="mb-3">
                <label for="confirm password">Confirm Password</label>
                <input type="password" class="input-group" name="c_password">
            </div>

            <div class="botton-summit">
            <button type="submit" name="signup" class="button">Sign Up</button>
            </div>
        </form>
        
        <p>เป็นสมาชิกแล้วใช่ไหม คลิ๊กที่นี่เพื่อ <a href="signin.php">เข้าสู่ระบบ</a></p>
            </div>
      

    
</body>
</html>