<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="style3.css">
</head>

<body>
  <?php
  require('connect.php');

  $sql = '
    SELECT * FROM student;';

  $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
  ?>
  <table class = "styled-table" border="1">
  <tr>
      <th width="50">
        <div align="center">No</div>
      </th>
      <th width="100">
        <div align="center">studentID</div>
      </th>
    
      <th width="100">
        <div align="center">firstname</div>
      </th>
      <th width="100">
        <div align="center">lastname</div>
      </th>
      <th width="100">
        <div align="center">วันที่คืนหนังสือ</div>
      </th>

      <th width="100">
        <div align="center">ชื่อหนังสือ</div>
      </th>
      <th width="100">
        <div align="center">ลบข้อมูลนักเรียน</div>
      </th>
   
</tr>
    

    <?php
    $i = 1;
    while ($objResult = mysqli_fetch_array($objQuery)) {
    ?>
      <tr>
        <td>
          <div align="center"><?php echo $i; ?></div>
        </td>
        <td><?php echo $objResult["studentID"]; ?></td>

        <td><?php echo $objResult["firstname"]; ?></td>
        <td><?php echo $objResult["lastname"]; ?></td>
        <td><?php echo $objResult["Return_Date"]; ?></td>
        <td><?php echo $objResult["BookName"]; ?></td>    
        <td align="center"><a href="deletedata.php?studentid=<?php echo $objResult["studentID"]; ?>">Delete</a></td>
      </tr>
      
    <?php
      $i++;
    }
    ?>
  </table>
  <a href="user.php">
            <br>    
            <button>back  </button>
      </a>
  <?php
  mysqli_close($conn); // ปิดฐานข้อมูล
  echo "<br><br>";
  echo "--- END ---";
  ?>
</body>

</html>