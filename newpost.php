<?php
session_start();
if(!isset ($_SESSION['id'])){
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title style="text-align: center; font-size: 54px;">WebBoard SudJang</title>
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center; font-size: 54px;">WebBoard SudJang</h1>
    <hr>
    <a href=index.php style='float: right';>ย้อนกลับ</a>
    ผู้ใช้ : <?php echo $_SESSION['username']; ?>
    <form>
        <table>
            <tr><td>หมวดหมู่ : </td>
            <td>
                <select>
                    <option value="general">เรื่องทั่วไป</option>
                    <option value="study">เรื่องเรียน</option>
                </select>
            </td></tr>
        <tr><td>หัวข้อ : </td><td><input type="text"></td></tr>
        <tr><td>เนื้อหา : </td><td><textarea cols="30" rows="2"></textarea></td></tr>
        <tr><td></td><td><input type="submit" value="บันทึกข้อความ" ></td></tr>
        </table>
 </from>
</body>
</html>