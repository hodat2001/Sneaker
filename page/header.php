<div class="header">
    <div class="header-menu">
           <header>
           <?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>
               
               <div class="logo">
                   
                    <img class="img-sneaker" style="width:100px;height:100px;padding-top: 1px;" src="./img/img-sneaker.png">
                    
               </div>
               <div class="nameshop">
                    <a href="homepage.php"><img style="width:100px;margin-top: 20px;margin-left: 25px;margin-right: 10px;" src="./img/logo.png"></a>
                </div>
               <div class="menu">
                    
                    <ul class="sub-menu" >
                        <i style="color:deepskyblue;position:relative;top:-1px" class="fa-solid fa-list"></i>
                        <li><a href="#">Danh mục</a>
                            <ul class="list-menu" style="box-sizing: border-box;z-index:-5">
                            <?php
	
    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
     while($row = mysqli_fetch_array($query_danhmuc)){

       ?>
  
   <li><a href="home-category.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><img src="admin/modules/quanlydanhmucsp/uploads/<?php echo $row['logo'] ?> " style="width:43px;height:41px;margin-right: 12px;padding-top:7px;position:relative;top:5px"><?php echo $row['tendanhmuc'] ?></a></li>

   
   <?php

   } 
   ?>
                            </ul>
                        </li>
                    </ul>
               </div>
               <div class="search">
               <form autocomplete="off" action="index-home.php?quanly=timkiem" method="POST" >
                   <input class="input-search" type="text" name="tukhoa" placeholder="Tên Sản Phẩm">
                    <input class="input-submit-search" type="submit" name="timkiem" value="Tìm kiếm">
               </form>
               </div>
               <div class="user">
                    <a style="color: deepskyblue;margin-right: 2px;" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                    <?php
                                     $t=0;
                                     if(isset($_SESSION['cart'])){
                                        foreach($_SESSION['cart'] as $cart_item){
                                            $t++;
                                        }
                                    }
                                ?>
                    <a style="margin-right: 20px;" href="index-home.php?quanly=giohang">Giỏ Hàng(<?php echo$t;?>)</a>
                    
                    <?php
				if(isset($_SESSION['dangky'])){ 
                    $taikhoan = $_SESSION['dangky'];
				?>
                <li class="user-content"><a style="color: deepskyblue;" href="#"><i class="fa-solid fa-user"></i></a>
                    <a style="position: relative;top:0.8px" href="#"><?php echo $taikhoan ?></a>
                    <ul  class="user-logout" >
                    <li> <a style="margin-left:25px;margin-bottom:20px;position:relative;top:20px" href="homepage.php?dangxuat=1"><i style="margin-right: 5px;" class="fa-solid fa-right-from-bracket"></i>Đăng xuất</a></li>
                    <li> <a style="margin-left:25px;padding-top:15px;position:relative;top:40px" href="index-home.php?quanly=doimatkhau"><i style="margin-right: 5px;" class="fa-solid fa-lock"></i>Đổi mật khẩu</a></li>
                </ul>
                </li>
                    <?php
				}else{
				?>
                <a style="color: deepskyblue;" href="index-home.php?quanly=dangky"><i class="fa-solid fa-user"></i></a>
                    <a style="position: relative;top:0.8px" href="index-home.php?quanly=dangky">Tài khoản</a>
               
                    <?php
                }
                ?>
               </div>
               
           </header>
          </div>
        </div>
        <div class="banner" >
            <div class="logo-banner">
                <img id="img" onclick="changeImage()" src="./img/banner10.jfif">
            </div>
            <script>
                var index=1;
                changeImage = function(){
                    var img = ["./img/./banner10.jfif","./img/./banner11.jpg","./img/./banner8.jpg","./img/banner6.jpg","./img/banner9.png"];
                    document.getElementById('img').src = img[index];
                    index++;
                    if(index==5){
                        index=0;
                    }
                }
                setInterval(changeImage,2000);
            </script>
            <div class="content-banner">
                <div class="content-banner1">
                    <h3 style="margin-bottom: 10px;">Miễn Phí Vận Chuyển</h3>
                    <p>100% đơn hàng đều được miễn phí <br>vận chuyển khi thanh toán trước.</p>
                </div>
                <div class="content-banner2">
                    <h3 style="margin-bottom: 10px;">Được xem sản phẩm trước</h3>
                    <p>Bạn sẽ được xem sản phẩm trước <br>khi mua hàng và được đổi hàng.</p>
                </div>
                <div class="content-banner3">
                    <h3>Đổi trả 1-1 hoặc hoàn tiền</h3>
                    <p>Nếu phát sinh lỗi hoặc bạn cảm <br>thấy chưa đáp ứng được nhu cầu.</p>
                </div>
            </div>
        </div>
        <div class="content-sub">
            <h2 style="margin-left: 100px;">Thương hiệu nổi bật</h2>
            <div class="content-sub-logo">
                <div class="content-nike">
                    <a href="home-category.php?quanly=danhmucsanpham&id=1"><img src="./img/nike2.png"></a>
                </div>
                <div class="content-addias">
                    <a href="home-category.php?quanly=danhmucsanpham&id=2"><img src="./img/addias2.png"></a>
                </div>
                <div class="content-puma">
                    <a href="home-category.php?quanly=danhmucsanpham&id=3"><img src="./img/puma2.png"></a>
                </div>
                <div class="content-mlb">
                    <a href="home-category.php?quanly=danhmucsanpham&id=4"><img src="./img/mlb2.png"></a>
                </div>
                <div class="content-gucci">
                    <a href="home-category.php?quanly=danhmucsanpham&id=5"><img src="./img/gucci0.png"></a>
                </div>
                <div class="content-vans">
                    <a href="home-category.php?quanly=danhmucsanpham&id=16"><img src="./img/vans2.png"></a>
                </div>
            </div>
        </div>