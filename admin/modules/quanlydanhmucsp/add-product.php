<div class="add-product">
<h3 style="margin-top: 50px;" >Thêm danh mục sản phẩm</h3>
<table  border="0"  style="background-color:deepskyblue;height:140px;width:400px;margin-top:30px;border-spacing:10px;border-radius:10px" >
 <form method="POST" action="modules/quanlydanhmucsp/handle-product.php"  enctype="multipart/form-data">
	  <tr>
	  	<td style="color: white;">Tên danh mục</td>
	  	<td><input type="text" name="tendanhmuc" required></td>
	  </tr>
	  <tr>
	  	<td style="color: white;">Logo</td>
	  	<td><input type="file" name="logo" required></td>
	  </tr>
	  <tr>
	    <td style="color: white;">Thứ tự</td>
	    <td><input type="text" name="thutu" required></td>
	  </tr>
	   <tr>
	    <td colspan="2"><input onclick="alert('Bạn đã thêm thành công')" style="margin-left: 70px" type="submit" name="themdanhmuc" value="Thêm danh mục sản phẩm"></td>
	  </tr>
 </form>
</table>
</div>