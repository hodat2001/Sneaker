<?php
	$sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
	$query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<h3 style="margin-top:100px">Xem sản phẩm</h3>
<table style="width:100%;margin-left:20px;border-radius:14px;border-spacing:10px;margin-top:40px;margin-bottom:10px;border:2px solid deepskyblue;" border="0" >
  <tr style="color:deepskyblue;border-bottom:2px solid deepskyblue">
  	<th>Id</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Giá sp</th>
    <th>Số lượng</th>
    <th>Danh mục</th>
    <th>Size</th>
    <th>Mã sp</th>
    <th>Tóm tắt</th>
    <th>Trạng thái</th>
  	<th style="width:8%">Quản lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_sp)){
  	$i++;
  ?>
  <tr style="text-align: center;margin-top:30px">
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
    <td><?php echo $row['giasp'] ?></td>
    <td><?php echo $row['soluong'] ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td><?php echo $row['size'] ?></td>
    <td><?php echo $row['masp'] ?></td>
    <td><?php echo $row['tomtat'] ?></td>
    <td><?php if($row['tinhtrang']==1){
        echo 'Kích hoạt';
      }else{
        echo 'Ẩn';
      } 
      ?>
      
    </td>
   	<td >
   		<a style="color:deepskyblue" onclick="return confirm('Bạn có chắc chắn xóa không?')"  href="modules/quanlysp/handle_sp.php?idsanpham=<?php echo $row['id_sanpham'] ?>"><i class="fa-solid fa-trash-can"></i></a> | <a style="color:deepskyblue;"  href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>"><i class="fa-solid fa-screwdriver-wrench"></i></a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>