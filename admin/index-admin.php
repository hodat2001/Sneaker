<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giày HD | Admin</title>
    <link rel="stylesheet" href="./css/index-admin.css">
    <link rel="icon" href="./modules/quanlysp/uploads/logo.png">
    <link rel="stylesheet" href="../fontawesome-free-6.1.0-web/css/all.css">
</head>
<?php
 session_start();
 if(!isset($_SESSION['dangnhap'])){
 	header('Location:login-admin.php');
 } 
?>
<body>
    <div class="container">
        <h2 style="color:darkturquoise;text-align:center;font-size:32px">Quản lý Admin - Giày HD</h2>
        <div class="main-admin">
        <?php
        include("../admin/config/config.php");
            include("modules/menu-modules.php");
            ?>
        </div>
        <div class="mains-admin">
            <?php
            include("modules/main-modules.php");
        ?>
        </div>
    </div>
</body>
</html>