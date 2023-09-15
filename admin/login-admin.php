<?php
	session_start();
	include('config/config.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['username'];
		$matkhau = $_POST['password'];
		$sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$_SESSION['dangnhap'] = $taikhoan;
			header("Location:index-admin.php");
		}else{
			echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
			
		}
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Giày HD | Đăng nhập Admin</title>
    <link rel="icon" href="../img/logo.png">
	<style>
	*{
            margin: 0;
            padding: 0;
			
        }
        .container{
            box-sizing: border-box;
        }
        .main{
            
            background-size:cover;
            background-repeat: no-repeat;
            background: linear-gradient(45deg, #00BFFF, #00FFFF, #1E90FF, 	#87CEEB);
            height: 570px;
        }
        .header h2{
            margin-left: 10px;
            margin-top: 20px;
            color:#4682B4;
        }
        .content-main{
            margin: auto;
            border: 2px solid white;
            width: 380px;
            height: 350px;
            background-color: white;
            margin: auto;
			margin-left: 400px;
        }
        .header-main h3{
            margin-bottom:50px;
            font-size:23px;
            text-align:center;
            color:deepskyblue;
            margin-top: 40px;
        }
        .header a img{
            margin-top: 8px;
            height: 60px;
        }
        form{
            position: relative;
            top:60px;
            box-shadow: 0px 0px 17px 2px dodgerblue;
            border-radius: 8px;
            background-color: white;
			
        }
        .input-user{
            margin-left: 30px;
            margin-right: 40px;
            border-bottom: 2px solid deepskyblue;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        .input-pass{
            margin-left: 30px;
            margin-right: 40px;
            margin-top: 30px;
            margin-bottom: 30px;
            border-bottom: 2px solid deepskyblue;
            display: flex;
        }
		.input-pass input{
            width: 230px;
            height: 25px;
            border-radius: 7px;
            border: none;
            background: none;
            outline: none;
            text-indent: 5px;
        }
		.input-user input{
            width: 230px;
            height: 25px;
            border-radius: 7px;
            border: none;
            background: none;
            outline: none;
        }
		#eye{
            color: deepskyblue;
            cursor: pointer;
            margin-top: 4px;
            margin-left: 30px;
        }
		.input-submit{
            margin-left: 30px;
            margin-bottom: 20px;
			margin-top: 50px;
        }
        .input-submit input{
            width: 310px;
            height: 30px;
            cursor: pointer;
            font-size: 17px;
            color:rgb(254,247, 245);
            background-color:rgb(0,191,255);
            border-radius: 3px;
            border: 1px solid rgb(0,191,255);
            margin-top: 10px;
        }
        .input-submit input:hover{
            background-color: dodgerblue;
            border: 1px solid dodgerblue;
        }
		.main-login{
			margin-top: 50px;
		}
</style>
</head>
<body>
<div class="main-login">
<form action="" autocomplete="off" method="POST" class="content-main">
<div class="header-main">
                
                <h3>Đăng Nhập Admin</h3>
            </div>
			<div class="input-user">
                <i style="color:deepskyblue;margin-right:6px" class="fa-solid fa-user"></i>
                <input type="text" name="username" placeholder="Tài khoản" ><br>
            </div>
			<div class="input-pass">
                <i style="color:deepskyblue;margin-right:6px" class="fa-solid fa-lock"></i>
                <input onclick="" id="password" type="password" name="password" placeholder="Mật khẩu" >
            </div>
			<div class="input-submit">
                <input type="submit" name="dangnhap" value="Đăng nhập">
            </div>
	</form>
</div>
	<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
