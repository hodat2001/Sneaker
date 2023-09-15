<ul class="content-menu" style="transition: 4s;">
    <li ><a href="index-admin.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục</a></li>
    <li ><a href="index-admin.php?action=quanlysp&query=them">Quản lý sản phẩm</a></li>
    <li ><a href="index-admin.php?action=quanlydonhang&query=lietke">Quản lý đơn hàng</a></li>
    <?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangnhap']);
		header('Location:login-admin.php');
	}
?>
<li style="margin-top:-0.3px;border-right: 0px"><a href="index-admin.php?dangxuat=1">Đăng xuất : <?php if(isset($_SESSION['dangnhap'])){
		echo $_SESSION['dangnhap'];

	} ?></a></li>

</ul>
