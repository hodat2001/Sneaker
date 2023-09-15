<div class="main-cart" style="margin-bottom:100px;margin-top:100px">
<div  style="display: flex;margin-top:50px">
<h3>Giỏ hàng 
  <?php



  if(isset($_SESSION['dangky'])){
    echo 'xin chào: '.'<span style="color:deepskyblue">'.$_SESSION['dangky'].'</span>';
   
  } 
  ?>
</h3>
<?php
				if(isset($_SESSION['dangky'])){ 

				?>
<div style="margin-left: 700px;border-bottom:2px solid deepskyblue">

<a style="font-weight: bold;" href="index-home.php?quanly=donhangdadat">Theo dõi đơn hàng</a>



</div>
<?php 
        }else{
          ?>
          <div style="margin-left: 860px;border-bottom:2px solid deepskyblue">
          <a href="index-home.php?quanly=dangky">Chưa đăng ký</a>
          </div>
          <?php } ?>
</div>

<?php
	if(isset($_SESSION['cart'])){
		
	}
?>


<table height="65%" width="100%" border="0" style="width:100%;text-align: center;border:2px solid deepskyblue;margin-top:70px;margin-right:50px;border-radius:12px" class="table-cart">
  <tr style="margin-bottom: 20px;padding-left:20px;color:deepskyblue">
    <th width="4%">Id</th>
    <th width="8%">Mã sp</th>
    <th width="18%">Tên sản phẩm</th>
    <th width="19%">Hình ảnh</th>
    <th width="10%">Số lượng</th>
    <th width="15%">Giá sản phẩm</th>
    <th width="7%">Size</th>
    <th width="12%">Thành tiền</th>
    <th width="20%">Quản lý</th>
  </tr>
  <div>
  <?php
  if(isset($_SESSION['cart'])){
  	$i = 0;
  	$tongtien = 0;
  	foreach($_SESSION['cart'] as $cart_item){
  		$thanhtien = $cart_item['soluong']*$cart_item['giasp'];
  		$tongtien+=$thanhtien;
  		$i++;
  ?>
  <tr>
    <td height="160"><?php echo $i; ?></td>
    <td><?php echo $cart_item['masp']; ?></td>
    <td><?php echo  $cart_item[ 'tensanpham'] ; ?></td>
    <td><img src="admin/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="156"></td>
    <td>
    	<a href="page/main/add-cart.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa fa-plus fa-style" aria-hidden="true"></i></a>
    	<?php echo $cart_item['soluong']; ?>
    	<a href="page/main/add-cart.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa fa-minus fa-style" aria-hidden="true"></i></a>    </td>
      <td><?php echo number_format($cart_item['giasp'],0,',','.').'đ'; ?></td>
      <td><?php echo $cart_item['size']; ?></td>
    

    
    <td><?php echo number_format($thanhtien,0,',','.').'đ' ?></td>
    <td style="width:100px"><a href="page/main/add-cart.php?xoa=<?php echo $cart_item['id'] ?>" class="style2"><input name="Input" type="button" value="Xóa"  style="width:60px" /></a></td>
  </tr>
  <?php
  	}
  ?>
  </div>
</table>

<div> 
   <tr>
    <td colspan="8">
    	<p style="float: left;margin-top:25px;font-weight:bold;font-size:16.5px"><strong>Tổng tiền</strong>: <?php echo number_format($tongtien,0,',','.').'đ' ?></p>
    	<br/>
    	<p style="float: right;"><a href="page/main/add-cart.php?xoatatca=1" class="style2"><input name="Input" type="button" value="Xóa Tất Cả"  /></a></p>
      <?php
        if(isset($_SESSION['dangky'])){
          ?>
           <p><a href="page/main/payment.php"><strong>
             <input style="margin-left: 340px;height:35px;width:130px" name="Input" type="button" value="Đặt Hàng"   >
           </strong></a></p>  
        </div>
      <?php
        }else{
      ?>
        <p><a style="margin-left: 250px;" href="index-home.php?quanly=dangky" class="style1"><input style="width:160px;height:40px" name="tien hanh dat hang" type="button" class="style1" value="Tiến hành đặt hàng" />
        </a></p>
      <?php
        }
      ?>    </td>
  </tr>
  <?php	
  }else{ 
  ?>
   <tr>
    <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
  </tr>
  <?php
  } 
  ?>
</table>

<style>
  
</style>
</div>