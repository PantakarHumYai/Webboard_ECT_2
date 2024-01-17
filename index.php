<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title style="text-align: center; font-size: 54px;">WebBoard SudJang</title>
</head>
<body>
    <h1 style="text-align: center; font-size: 54px;">WebBoard SudJang</h1>
    <hr>
    <form>
        หมวดหมู่ : 
        <select>
            <option value="all">--ทั้งหมด--</option>
            <option value="general">เรื่องทั้งไป</option>
            <option value="study">เรื่องเรียน</option>
        </select>
        <?php
            if (!isset($_SESSION['id'])){
        echo "<a href=login.php style='float: right';>เข้าสู่ระบบ</a>";
            }else{
        echo "<div style='float:right'>
                ผู้ใช้งานระบบ : $_SESSION[username]&nbsp;&nbsp;
                <a href=logout.php>ออกจากระบบ</a>
            </div><br>
                <a href=newpost.php><br>สร้างกระทู้ใหม่</a>
                ";
            }
        ?>
    </form>
    <ul>
        <?php
        for($i=1;$i<=10;$i++){
            echo "<li><a href = post.php?id=$i>กระทู้ $i</a>";
            if(isset($_SESSION['id']) && $_SESSION['role']=='a'){
                echo "&nbsp;&nbsp;<a href=delete.php?id=$i>ลบ</a>";
            }
            echo "</li>";
        }
        ?>
    </ul>
</body>
</html>