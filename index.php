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
        หมดหมู่ : 
        <select>
            <option value="all">--ทั้งหมด--</option>
            <option value="general">เรื่องทั้งไป</option>
            <option value="study">เรื่องเรียน</option>
        </select>
        <a href="login.html" style="float: right;">เข้าสู่ระบบ</a>
    </form>
    <ul>
        <?php
        for($i=1;$i<=10;$i++){
            echo "<li><a href = post.php?id=$i>กระทู้ $i</a></li>";
        }
        ?>
    </ul>
</body>
</html>