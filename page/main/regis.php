<?php
	if(isset($_POST['dangky'])) {
		$taikhoan = $_POST['taikhoan'];
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$matkhau = md5($_POST['matkhau']);
		$diachi = $_POST['diachi'];
		$sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(taikhoan,email,diachi,matkhau,dienthoai) VALUE('".$taikhoan."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
		if($sql_dangky){
			echo'<p style="color:green">Bạn đã đăng ký thành công</p>';
			$_SESSION['dangky'] = $taikhoan;
			$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
			header('Location:index-home.php?quanly=giohang');
		}
	}
?>
<style>
        
        .header h2{
            margin-left: 10px;
            margin-top: 20px;
            color:#4682B4;
        }
        .content-main{
            margin: auto;
            border: 2px solid white;
            width: 380px;
            height: 470px;
            background-color: white;
            margin: auto;
			margin-left: 300px;
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
        .regis > form{
            position: relative;
            top:60px;
            box-shadow: 0px 0px 17px 2px dodgerblue;
            border-radius: 8px;
            background-color: white;
			
        }
        .input-number{
            margin-left: 30px;
            margin-right: 40px;
            margin-top: 20px;
            margin-bottom: 20px;
            border-bottom: 2px solid deepskyblue;
        }
        .input-user{
            margin-left: 30px;
            margin-right: 40px;
            border-bottom: 2px solid deepskyblue;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .input-pass{
            margin-left: 30px;
            margin-right: 40px;
            margin-top: 20px;
            margin-bottom: 20px;
            border-bottom: 2px solid deepskyblue;
            display: flex;
        }
        .login{
            margin-left: 40px;
            margin: 20px;
        }
        .input-number input{
            width: 230px;
            height: 25px;
            
            border: none;
            background: none;
            outline: none;
           
        }
        .input-user input{
            width: 230px;
            height: 25px;
            border-radius: 7px;
            border: none;
            background: none;
            outline: none;
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
        .input-email input{
            outline: none;
            border: none;
            background: none;
            text-indent: 5px;
            width: 230px;
            height: 25px;
        }
        .input-email{
            border-bottom: 2px solid deepskyblue;
            margin-left: 30px;
            margin-right: 40px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .input-email i{
            color: deepskyblue;
        }
        .input-address input{
            outline: none;
            border: none;
            background: none;
            text-indent: 9px;
            width: 230px;
            height: 25px;
        }
        .input-address{
            border-bottom: 2px solid deepskyblue;
            margin-left: 30px;
            margin-right: 40px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .input-address i{
            color: deepskyblue;
        }
        .input-submit{
            margin-left: 30px;
            margin-bottom: 20px;
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
        .login a{
            text-decoration: none;
            color:rgb(0,191,255);
            transition: linear 0.2s;
        }
        .login a:hover{
            color: dodgerblue;
        }
        .login a i:hover{
            transform: scale(1.5);
            transition: 0.7s;
        }
        #eye{
            color: deepskyblue;
            cursor: pointer;
            margin-top: 4px;
            margin-left: 30px;
        }
    </style>
<div class="regis" style="margin-top: 100px;margin-bottom:100px">
        <form autocomplete="off" action="" method="POST" class="content-main">
            <div class="header-main">
                
                <h3>Đăng Ký</h3>
            </div>
            <div class="input-number">
                <i style="color:deepskyblue;margin-right:6px" class="fa-solid fa-phone"></i>
                <input type="text" name="dienthoai" placeholder="Số điện thoại" required><br>
            </div>
            <div class="input-user">
                <i style="color:deepskyblue;margin-right:6px" class="fa-solid fa-user"></i>
                <input type="text" name="taikhoan" placeholder="Tài khoản" required><br>
            </div>
            <div class="input-pass">
                <i style="color:deepskyblue;margin-right:6px" class="fa-solid fa-lock"></i>
                <input onclick="" id="password" type="password" name="matkhau" placeholder="Mật khẩu" required>
                <div id="eye">
                    <i class="fa-regular fa-eye"></i>
                </div>
            </div>
            <div class="input-email">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-address">
                <i class="fa-solid fa-location-dot"></i>
                <input type="text" name="diachi" placeholder="Địa chỉ" required>
            </div>
            <div class="input-submit">
                <input type="submit" name="dangky" value="Đăng Ký">
            </div>
            <div style="padding-top: 15px;padding-left:10px" class="login">
                <a href="http://localhost:8080/Shop_HD/Homepage/Homepage.php"><i class="fa-regular fa-circle-left"></i></a>
                <span style="padding-left: 30px;">Bạn đã có tài khoản?</span>
                <a href="index-home.php?quanly=dangnhap">Đăng nhập</a>
            </div>
        </form>
    </div>
    

<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
<script>
    $(document).ready(function(){
    $('#eye').click(function(){
        $(this).toggleClass('open');
        $(this).children('i').toggleClass('fa-solid fa-eye-slash');
        if($(this).hasClass('open')){
            $(this).prev().attr('type', 'text');
        }else{
            $(this).prev().attr('type', 'password');
        }
    });
});
</script>