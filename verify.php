<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <h1><center>Meaow Meaow</center> </h1>
    <hr>
    <div align="center">
        <?php
            if($_POST['login'] == "admin" && $_POST['Pwd'] == "ad1234" ){
                    echo"ยินดีต้อนรับคุณ ADMIN";
            } elseif ($_POST['login'] == "member" && $_POST['Pwd'] == "mem1234" ){
                    echo"ยินดีต้อนรับคุณ MEMBER";
            } else{
                echo"ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
            }
        ?>

    </div>
    <br>
    <center><a href="index.php">กลับไปหน้าหลัก</center></a>
</body>
</html>