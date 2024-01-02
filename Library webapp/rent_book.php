
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียน</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <h2>เช่าหนังสือ</h2>
    <form action="insertdata.php" method="post" name="student">
    <table class = "styled-table" border="1">   
        <tr>
        <th width="10"></th>
        <th width="10"></th>
        </tr>
            <tr>
                <td>ชื่อหนังสือ : </td>
                <td>
                    <select name="color" id="color">
                        <option value="English1">English1</option>
                        <option value="English1">English2</option>
                    </select>
                    </td>
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
                
        </table>
        <br>
            <div class="col-2 btn">
                        
                <a href="user.php" class="d-grid gap-2 p-2 col btn rounded-pill text-dark"><strong>บันทึก</strong></a>
            </div>
        <br>
        <a href="admin.php">
            <br>    
            <button type ="button">back</button>
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
        


 
        
        
