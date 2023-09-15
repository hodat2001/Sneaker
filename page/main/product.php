<p>&nbsp;</p>
<?php
	$sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
	$query_chitiet = mysqli_query($mysqli,$sql_chitiet);
	while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div style="margin-top: 100px" class="wrapper_product">
	<div class="img-category">
		<img style="cursor:pointer" width="100%" src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
	</div>
	<form class="form-product-detail" method="POST" action="page/main/add-cart.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
		<div class="product-detail">
			<h3 style="margin:0">Tên sản phẩm : <?php echo $row_chitiet['tensanpham'] ?></h3>
			<p>Mã Sản Phẩm: <?php echo $row_chitiet['masp'] ?></p>
			<p>Giá : <?php echo number_format($row_chitiet['giasp'],0,',','.').'đ' ?></p>
			<p>Size : <?php echo $row_chitiet['size'] ?></p>
			<p>Số lượng : <?php echo $row_chitiet['soluong'] ?></p>
			<p>Tóm tắt : <?php echo $row_chitiet['tomtat'] ?></p>
			
			<p>Danh mục : <?php echo $row_chitiet['tendanhmuc'] ?></p>
			<div style="display: flex;height:100px">
			<div class="product-addcart">
			<p><i class="fa-solid fa-cart-shopping"></i><input class="" name="themgiohang" type="submit" value="Thêm giỏ hàng"></p>
			</div>
			<div class="product-back">
				<p><a style=" margin-left: 10px;margin-top:20px;margin-right:5px" href="index.php"><i class="fa-regular fa-circle-left"></i>Quay về</a></p>
			</div>
			</div>
		</div>
	</form>

</div>
<?php
} 
?>
