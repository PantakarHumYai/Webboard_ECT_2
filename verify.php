<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <h1 style = "text-align: center;">Webboard KakKak</h1>
    <hr>
    <div style="text-align: center;">
<?php
            $login = $_POST['login'];
            $pwd = $_POST['password'];
            if($login == "admin" && $pwd == "ad1234") {
                $_SESSION["username"] = "Admin";
                $_SESSION["role"] = "a";
                $_SESSION["id"] = session_id();
                echo "ยินดีต้อนรับคุณ $login <br>";
            }
            elseif($login == "member" && $pwd == "mem1234"){
                $_SESSION["username"] = "Member";
                $_SESSION["role"] = "m";
                $_SESSION["id"] = session_id();
                echo "ยินดีต้อนรับคุณ $login <br>";
            }
            else{
                echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง <br>";
            }
            echo "<a href=index.php>กลับไปยังหน้าหลัก</a>";
            //echo "เข้าสู่ระบบด้วย <br>";
            //echo "Login = $_POST[login]<br>";
            //echo "Password = $_POST[pwd]<br>"
        ?>
    </div>
</body>
</html>