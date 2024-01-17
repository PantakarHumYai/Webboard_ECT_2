<?php
session_start();
if(!isset ($_SESSION['id'])){
    header("location:login.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1 style = "text-align: center;">Webboard KakKak</h1>
    <hr>
    <div style="text-align: center;">
        <?php
            $number = $_GET['id'];
            echo "ต้องการดูกระทู้หมายเลข $number <br>";
            if(($number %2)==0){
                    echo"เป็นกระทู้หมายเลขคู่<br>";
            }else{
                echo"เป็นกระทู้หมายเลขคี่<br>";
            }
        ?>
    </div>
    <br>
    <table style = "border : 2px solid black; width : 40%;" align="center">
    <tr><td colspan="2" style = "background-color: #6CD2FE;">แสดงความคิดเห็น</td></tr>
    <tr><td><textarea rows ="10" cols = "70"></textarea></td></tr>
    <tr><td colspan = "2" align="center"><input type = "submit" value = "ส่งข้อความ"></td></tr>
    </table>
    <p style = "text-align: center;"><a href = "index.php" >กลับไปหน้าหลัก</a></p>
</body>
</html>