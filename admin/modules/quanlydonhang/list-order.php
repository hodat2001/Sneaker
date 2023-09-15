<style> 
table input{
  border:2px solid white;
  font-weight: bold;
  cursor: pointer;
  color:royalblue;
}

</style>
<h3 style="margin-top: 20px;">Xem danh sách đơn hàng</h3>
<?php
	$sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky ORDER BY tbl_cart.id_cart DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
<table style="width: 95%;margin:auto;margin-top:40px;margin-bottom:40px;border-spacing:12px;background-color:deepskyblue;border-radius:12px" border="0" >
  <tr style="color:white;font-weight:bold;font-size:20px"> 
  	<th>Id</th>
    <th>Mã đơn hàng</th>
    <th>Tài khoản</th>
    <th>Địa chỉ</th>
    <th>Email</th>
    <th>Số điện thoại</th>
    <th>Tình trạng</th>
  	<th>Quản lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
  	$i++;
  ?>
  <tr style="text-align: center;color:white;">
  	<td><?php echo $i ?></td>
    <td><?php echo $row['code_cart'] ?></td>
    <td><?php echo $row['taikhoan'] ?></td>
    <td><?php echo $row['diachi'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['dienthoai'] ?></td>
    <td>
    	<?php
    	 if($row['cart_status']==1){
echo '<a href="modules/quanlydonhang/handle.php?code='.$row['code_cart'].'"><input name="Input" type="button" value="Đơn hàng mới" style="background: #0F0"  /></a>';
    	}if($row['cart_status']==0){
echo '<a href="modules/quanlydonhang/handle-order.php?code='.$row['code_cart'].'"><input name="Input" type="button" value="Chờ nhận hàng" style="background: #B7E9C1"  /></a>';
    	}if($row['cart_status']==2){
			echo '<input name="Input" type="button" value="Đã nhận hàng" style="background: #CFF"  /></a>';
		}
    	?>
    </td>
   	<td >
   		<a style="color: white;font-weight:bold" href="index-admin.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>"><i class="fa-solid fa-eye"></i></a> |
       <a onclick="return confirm('Bạn có chắc chắn xóa không?')" style="color: white;font-weight:bold" href="index-admin.php?action=donhang&query=xoadonhang&code=<?php echo $row['code_cart'] ?>"><i class="fa-solid fa-trash-can"></i></a>  
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>