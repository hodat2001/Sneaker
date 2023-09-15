
<div class="header">
    <div class="header-menu">
           <header><?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>
               <div class="logo">
                   
                    <img style="width:100px;height:100px;padding-top: 1px;" src="./img/sneaker1.jpg">
                    
               </div>
               <div class="nameshop">
                    <a href="homepage.php"><img style="width:100px;margin-top: 20px;margin-left: 25px;margin-right: 10px;" src="./img/logo.png"></a>
                </div>
               <div class="menu">
                    
                    <ul class="sub-menu" >
                        <i style="color:deepskyblue;position:relative;top:-1px" class="fa-solid fa-list"></i>
                        <li><a href="">Danh mục</a>
                            <ul class="list-menu" style="box-sizing: border-box;"><?php
$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
while($row = mysqli_fetch_array($query_danhmuc)){
?><li><a href="home-category.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><img src="admin/modules/quanlydanhmucsp/uploads/<?php echo $row['logo'] ?> " style="width:43px;height:41px;margin-right: 12px;padding-top: 15px;position:relative;top:5px"><?php echo $row['tendanhmuc'] ?></a></li><?php

} 
?></ul>
                        </li>
                    </ul>
               </div>
               <div class="search">
               <form action="index-home.php?quanly=timkiem" method="POST" >
                   <input class="input-search" type="text" name="tukhoa" placeholder="Tên Sản Phẩm">
                    <input class="input-submit-search" type="submit" name="timkiem" value="Tìm kiếm">
               </form>
                </div>
               <div class="user">
                    <a style="color: deepskyblue;margin-right:3px" href="#"><i class="fa-solid fa-cart-shopping"></i></a><?php
                                     $t=0;
                                     if(isset($_SESSION['cart'])){
                                        foreach($_SESSION['cart'] as $cart_item){
                                            $t++;
                                        }
                                    }
                                ?><a href="index-home.php?quanly=giohang" style="margin-right: 20px;">Giỏ Hàng(<?php echo$t;?>)</a><?php
				if(isset($_SESSION['dangky'])){ 
                    $taikhoan = $_SESSION['dangky'];
				?><li class="user-content"><a style="color: deepskyblue;" href="#"><i class="fa-solid fa-user"></i></a>
                    <a style="position: relative;top:0.8px" href="#"><?php echo $taikhoan ?></a>
                    <ul  class="user-logout" >
                    <li> <a style="margin-left:25px;margin-bottom:20px;position:relative;top:20px" href="homepage.php?dangxuat=1"><i style="margin-right: 5px;" class="fa-solid fa-right-from-bracket"></i>Đăng xuất</a></li>
                    <li> <a style="margin-left:25px;padding-top:15px;position:relative;top:40px" href="index-home.php?quanly=doimatkhau"><i style="margin-right: 5px;" class="fa-solid fa-lock"></i>Đổi mật khẩu</a></li>
                </ul>
                </li><?php
				}else{
				?><a style="color: deepskyblue;" href="#"><i class="fa-solid fa-user"></i></a>
                    <a style="position: relative;top:0.8px" href="index-home.php?quanly=dangky">Tài khoản</a><?php
                }
                ?></div>
               
           </header>
          </div>
        </div>
        <div class="main">
        
        <div class="content-main-product"><?php
                
				
				if(isset($_GET['quanly'])){
                    $tam = $_GET['quanly'];
                }
                else{
                    $tam = '';
                }
                if($tam=='danhmucsanpham'){
					include("main/category.php");
				}elseif($tam=='giohang'){
					include("main/cart.php");
                }
				elseif($tam=='sanpham'){
					include("main/product.php");	
				}elseif($tam=='dangky'){
					include("main/regis.php");
				}elseif($tam=='thanhtoan'){
					include("main/payment.php");
				}elseif($tam=='dangnhap'){
					include("main/login.php");
				}elseif($tam=='timkiem'){
					include("main/search.php");
				}elseif($tam=='camon'){
					include("main/thank.php");
				
				}elseif($tam=='donhangdadat'){
					include("main/order_placed.php");
				}elseif($tam=='xemdonhang'){
					include("main/view_order.php");
                }   elseif($tam=='doimatkhau'){
                    include("main/change-pass.php");
				}else{
					include("main/index-page.php");
				}
                ?></div>
        </div><?php 
         include("page/footer.php");
         ?>