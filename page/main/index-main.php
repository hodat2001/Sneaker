<?php
	if(isset($_GET['trang'])){
		$page = $_GET['trang'];
	}else{
		$page = 1;
	}
	if($page == '' || $page == 1){
		$begin = 0;
	}else{
		$begin = ($page*12)-12;
	}
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,12";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
?>
				<ul class="product_list">
					<?php
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<ul class="product">
						
						<li><a href="index-home.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>"><img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>"></a><li>
						<li><a href="index-home.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>"><?php echo $row['tensanpham'] ?></a></li>
						<li><p class="price_product"><?php echo number_format($row['giasp'],0,',','.').'đ' ?></p></li>
							
						
					</ul>
					
					<?php
					} 
					?>
				</ul>
				<div style="clear:both;"></div>
				
				<?php
				$sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
				$row_count = mysqli_num_rows($sql_trang);  
				$trang = ceil($row_count/12);
				?>
				<div class="page">
				 <p>Trang hiện tại : <?php echo $page ?>/<?php echo $trang ?> </p> 
				
				<ul class="list_page">

					<?php
					
					for($i=1;$i<=$trang;$i++){ 
					?>
						<li <?php if($i==$page){echo 'style="background: dodgerblue;"';}else{ echo ''; }  ?>><a href="homepage.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
					<?php
					} 
					?>
					
				</ul>
				</div>