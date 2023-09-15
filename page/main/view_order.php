<h3>Xem đơn hàng</h3>
<?php
	$code = $_GET['code'];
	$sql_lietke_dh = "SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham AND tbl_cart_details.code_cart='".$code."' ORDER BY tbl_cart_details.id_cart_details DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
<style>
  table{
    border-spacing: 15px;
    margin-top: 40px;
    border: 2px solid deepskyblue;
    border-radius: 16px;
    margin-left: 10px;
  }
  h3{
    margin-top: 110px;
    margin-left: 20px;
    color: deepskyblue;
    font-size: 19px;
  }
  table tr td{
    text-align: center;
  }
  </style>
<table style="width:95%" border="0" style="border-collapse: collapse;border-spacing:25px">
  <tr style="color: deepskyblue;">
  	<th width="5%">Id</th>
    <th>Mã đơn hàng</th>
    <th>Tên sản phẩm</th>
    <th>Số lượng</th>
    <th>Size</th>
    <th>Đơn giá</th>
    <th>Thành tiền</th>
  
  
</tr>
  <?php
  $i = 0;
  $tongtien = 0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
  	$i++;
  	$thanhtien = $row['giasp']*$row['soluongmua'];
  	$tongtien += $thanhtien ;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['code_cart'] ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><?php echo $row['soluongmua'] ?></td>
    <td><?php echo $row['size'] ?></td>
    <td><?php echo number_format($row['giasp'],0,',','.').'đ' ?></td>
    <td><?php echo number_format($thanhtien,0,',','.').'đ' ?></td>
   	
  </tr>
  <?php
  } 
  ?>
  
   		
  
   
  </tr>
 
</table>
<span style="border-bottom: 2px solid deepskyblue;margin-top: 30px;margin-left:893px;font-weight:bold;font-size:17px">Tổng tiền : <?php echo number_format($tongtien,0,',','.').'đ' ?></span>
<span style="border-bottom: 2px solid deepskyblue;margin-top: 30px;margin-left:920px;font-weight:bold;font-size:17px">Đã thanh toán</span>