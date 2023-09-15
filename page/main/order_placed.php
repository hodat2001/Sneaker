<style>
  table{

    margin-top: 30px;
    border: 2px solid deepskyblue;
    height: 60%;
    border-spacing: 20px;
    border-radius: 20px;
  }
  table tr td{
    text-align: center;
    margin-top:50px;
    border-spacing: 10px;
  }
  h3{
    margin-top: 120px;
    font-size: 19px;
    color: deepskyblue;
  }

</style>
<h3 >Đơn hàng đã đặt</h3>
<?php
$id_dangky = $_SESSION['id_khachhang'];
	$sql_lietke_dh ="SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky AND tbl_dangky.id_dangky = '$id_dangky' ORDER BY    tbl_cart.id_cart DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
<table style="width:90%;" border="0" style="margin-left:-50px">
  <tr style="color: deepskyblue;" >
  	<th>ID</th>
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
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['code_cart'] ?></td>
    <td><?php echo $row['taikhoan'] ?></td>
    <td><?php echo $row['diachi'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['dienthoai'] ?></td>
    <td>
    	<?php if($row['cart_status']==1){
    		echo '<a>Đang chờ xử lý </a>';
    	}if($row['cart_status']==0){
    		echo ' Chờ nhận hàng';
    	}if($row['cart_status']==2){
			echo 'Đã nhận hàng';
		}
    	?>
    </td>
   	<td style="font-weight:bold;font-size:17px;color:deepskyblue">
   		<a style="color:deepskyblue" href="index-home.php?quanly=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>

