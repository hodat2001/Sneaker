<?php
	$sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
	$query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
<div class="fix-product">
<h3 style="margin-top: 2px;">Sửa danh mục sản phẩm</h3>
<table border="0" width="100%" style="margin:auto;background-color:deepskyblue;margin-bottom:50px;border-spacing:10px;border-radius:10px">
 <form method="POST" action="modules/quanlydanhmucsp/handle-product.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>"  enctype="multipart/form-data">
 	<?php
 	while($dong = mysqli_fetch_array($query_sua_danhmucsp)) {
 	?>
	  <tr>
	  	<td>Tên danh mục</td>
	  	<td><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc" required></td>
	  </tr>
	  <tr>
	  	<td>Logo</td>
	  	<td><input type="file" value="<?php echo $dong['logo'] ?>" name="logo" required></td>
	  </tr>
	  <tr>
	    <td>Thứ tự</td>
	    <td><input type="text" value="<?php echo $dong['thutu'] ?>" name="thutu" required></td>
	  </tr>
	   <tr>
	    <td colspan="2"><input onclick="alert('Bạn đã sửa thành công')" style="margin-left: 80px;" type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
	  </tr>
	  <?php
	  } 
	  ?>

 </form>
</table>
</div>