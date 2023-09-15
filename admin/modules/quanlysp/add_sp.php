<h3 style="margin-top: 50px;">Thêm sản phẩm</h3>
<table border="0" width="85%" style="background-color:deepskyblue;margin:auto;border-radius:13px;border-spacing:10px;margin-top:30px">
 <form method="POST" action="modules/quanlysp/handle_sp.php" enctype="multipart/form-data" >
	  <tr style="color:white;font-weight:bold">
	  	<td>Tên sản phẩm</td>
	  	<td><input type="text" name="tensanpham" required></td>
	  </tr>
	   <tr style="color:white;font-weight:bold">
	  	<td>Mã sp</td>
	  	<td><input type="text" name="masp" required></td>
	  </tr>
	  <tr style="color:white;font-weight:bold">
	  	<td>Giá sp</td>
	  	<td><input type="text" name="giasp" required></td>
	  </tr>
	  <tr style="color:white;font-weight:bold">
	  	<td>Số lượng</td>
	  	<td><input type="text"  name="soluong" required></td>   
	  </tr>
	  <tr style="color:white;font-weight:bold">
	  	<td>Hình ảnh</td>
	  	<td><input type="file"  name="hinhanh" required></td>   
	  </tr>
	   <tr style="color:white;font-weight:bold">
	  	<td>Size</td>
	  	<td><input type="text" name="size" required></td>
	  </tr>
	  <tr style="color:white;font-weight:bold">
	  	<td>Tóm tắt</td>
	  	<td><textarea rows="10"  name="tomtat" style="resize: none" required></textarea></td>
	  </tr>
	  <tr style="color:white;font-weight:bold">
	    <td>Danh mục sản phẩm</td>
	    <td>
	    	<select name="danhmuc">
	    		<?php
	    		$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	    		$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
	    		?>
	    		<option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
	    		<?php
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	  <tr style="color:white;font-weight:bold">
	    <td>Tình trạng</td>
	    <td>
	    	<select name="tinhtrang">
	    		<option value="1">Kích hoạt</option>
	    		<option value="0">Ẩn</option>
	    	</select>
	    </td>
	  </tr>
	   <tr>
	    <td colspan="2"><input onclick="alert('Bạn đã thêm thành công')" style="margin-left: 390px" type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
	  </tr>
 </form>
</table>