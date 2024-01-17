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
    <title>login</title>
</head>
<body>
    <h1 style="text-align: center; font-size: 54px;">WebBoard Login</h1>
    <hr>
    <br><br>
    <form action="verify.php" method="POST">
        <table style = "border : 2px solid black; width : 40%;" align="center">
            <tr><td colspan="2" style = "background-color: #6CD2FE;">เข้าสู่ระบบ</td></tr>
            <tr><td>Login</td><td><input type = "text" name = "login" size = "90" required></td></tr>
            <tr><td>Password</td><td><input type = "password" name = "password" size = "90" required></td></tr>
            <tr><td colspan = "2" align="center"><input type = "submit" value = "Login"></td></tr>
        </table>
        <br>
        <p style = "text-align: center;">ถ้ายังไม่ได้เป็นสมาชิก <a href = "register.php" >กรุณาสมัครสมาชิก</a></p>
        </form>
 <br>
 <div style="font-size: 20px; text-align: center;""><a href="index.php">กลับไปหน้าหลัก</a></div>
</body>
</html>