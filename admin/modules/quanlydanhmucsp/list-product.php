<?php
	$sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
	$query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
<div class="list-product">
<h3 style="margin-top: 10px;margin-left:20px">Xem danh mục sản phẩm</h3>
<table  style="width:110%;background-color:deepskyblue;border-radius:15px;border-spacing:10px;margin-bottom:30px" border="0">
  <tr style="color:white">
  	<th>Id</th>
    <th>Tên danh mục</th>
    <th>Logo</th>
  	<th>Quản lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
  	$i++;
  ?>
  <tr style="text-align: center;color:white">
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td><img src="modules/quanlydanhmucsp/uploads/<?php echo $row['logo'] ?>" width="150px"></td>
   	<td style="color: white;">
   		<a onclick="return confirm('Bạn có chắc chắn xóa không?')" style="color: white" href="modules/quanlydanhmucsp/handle-product.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>"><i class="fa-solid fa-trash-can"></i></a> | <a style="color: white" href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>"><i class="fa-solid fa-screwdriver-wrench"></i></a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>
</div>