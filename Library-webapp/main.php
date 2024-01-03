
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียน</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <h2>ลงทะเบียน</h2>
    <form action="insertdata.php" method="post" name="student">
    <table class = "styled-table" border="1">   
        <tr>
        <th width="10"></th>
        <th width="10"></th>
        </tr>
            <tr>
                <td>รหัสนักเรียน : </td>
                <td><input type="text" name="studentID"></td>
            </tr>
            
     
            <tr>
                <td>ชื่อจริง : </td>
                <td><input type="text" name="firstname"></td>
            </tr>
            <tr>
                <td>นามสกุล : </td>
                <td><input type="text" name="lastname"></td>
            </tr>
            <tr>    
            </tr>
            <tr>
                <td>วันที่คืนหนังสือ : </td>
                <td><input type="date" name="Return_Date"> <br />
                <tr>
                <td>ชื่อหนังสือ : </td>
                <td><input type="text" name="BookName"></td>
                </td>
                </tr>
        </table>
        <br>
        <div class="botton-summit">
            <button type="submit" class="button" value="submit">บันทึก</button>
        </div>
            <br>
        <a href="admin.php">
            <br>    
            <div class="botton-summit">
            <button type ="button" class="button">back</button>
            </div>
      </a>
</a>
    </form>
</body>
</html>
<html>
 <!-- 

                        date_default_timezone_set("Asia/Bangkok");
                        $Start_Date = date("d/m/Y");
                        echo "วันนี้วันที่ ".$Start_Date."<br>";
                        echo "เวลา ".date("H:i.s");
                        echo "<br>";
                        ?>  </td>
                        
                        !-->
</html>