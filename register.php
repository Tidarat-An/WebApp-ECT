<?php
session_start();
if(isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <h1 style="text-align: center;">สมัครสมาชิก</h1>
    <hr>
    <table style="border: 2px solid black; width:40%;" align="center">
        <tr><td colspan="2" style="background-color:#6CD2FE;">กรอกข้อมูล</td></tr>
        <tr><td>ชื่อบัญชี :</td><td><input type="text" name="user" size="40"></td></tr>
        <tr><td>รหัสผ่าน :</td><td><input type="text" name="Password" size="40"></td></tr>
        <tr><td>ชื่อ-นามสกุล :</td><td><input type="text" name="name" size="40"></td></tr>
        <tr><td></td><td><input type="radio" name="sex" value="m">ชาย</td></tr>
        <tr><td>เพศ :</td><td><input type="radio" name="sex" value="g">หญิง</td></tr>
        <tr><td></td><td><input type="radio" name="sex" value="x">อื่นๆ</td></tr>
        <tr><td>อีเมล :</td><td><input type="text" name="user" size="40"></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="สมัครสมาชิก"></td></tr>
    </table>
    <br>
    <div align="center">
        <a href="index.php">กลับไปหน้าหลัก</a>
    </div>
    
</body>
</html>