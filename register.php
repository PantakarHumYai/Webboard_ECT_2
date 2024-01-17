<?php
session_start();
if(isset($_SESSION['id'])){
    header("loction:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1 style="text-align: center;">สมัครสามาชิก</h1>
    <hr>
 <from action="">
    <table style="border: 2px solid black; width: 40%;" align="center">
            <tr style="background-color: #6cd2fe; font-size: 40px;"><td colspan="2" align="center">สมัครสมาชิก</td></tr>
            <tr style="font-size: 30px;"><td>ชื่อบัญชี : </td><td><input type="text" name="User" size="42" required></td></tr>
            <tr style="font-size: 30px;"><td>รหัสผ่าน : </td><td><input type="password" name="pass" size="42" required></td></tr>
            <tr style="font-size: 30px;"><td>ชื่อ-นามสกุล : </td><td><input type="text" name="name" size="42" required></td></tr>
            <tr style="font-size: 30px;"><td>เพศ : </td><td>
                <input type="radio" name="Male">ชาย<br>
                <input type="radio" name="feMale">หญิง<br>
                <input type="radio" name="More">อื่นๆ<br>
            </td></tr>
            <tr style="font-size: 30px;"><td>อีเมล : </td><td><input type="email" name="pass" size="42" required></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="สมัครสมาชิก" style="font-size: 25px; font-family: Verdana;"></td></tr>
    <br><br>
    </table>
 </from>
 <br><br><br>
<div style="font-size: 30px; text-align: center;""><a href="index.php">กลับไปหน้าหลัก</a></div>
</body>
</html>