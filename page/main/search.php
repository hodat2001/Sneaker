<?php
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '".$tukhoa."%'";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
?>
<div style="margin-top: 170px;">
<h3 > Từ khoá tìm kiếm : <?php echo $_POST['tukhoa']; ?></h3>

				<ul class="product_list" style="margin-top: 30px;">
					<?php
					if (empty($tukhoa)) {
						echo "<h4>Không có sản phẩm này</h4>	";
					}
					
					else {
						
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					
					<li style="margin-left: 30px;margin-right:30px">
						
						<span style="margin-top: 10px;margin-bottom:10px"><a style="margin-top: 10px;margin-bottom:10px" href="index-home.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>"><img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>"></a></span>
						<span style="margin-top: 10px;margin-bottom:10px"><a style="margin-top: 10px;margin-bottom:10px" href="index-home.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>"><p class="title_product"> <?php echo $row['tensanpham'] ?></p></a></span>
						<span style="margin-top: 10px;margin-bottom:10px"><p style="margin-top: 10px;margin-bottom:10px" class="price_product"><?php echo number_format($row['giasp'],0,',','.').'đ' ?></p></span>
						<span style="margin-top: 10px;margin-bottom:10px"><p style="margin-top: 10px;margin-bottom:10px;text-align: center;color:dodgerblue"><?php echo $row['tendanhmuc'] ?></p></span>
						
					</li>
					<?php
					} }
					
					?>
					
				</ul>
</div>			