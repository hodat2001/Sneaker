<?php
include('../../config/config.php');

$tenloaisp = $_POST['tendanhmuc'];
$hinhanh = $_FILES['logo']['name'];
$hinhanh_tmp = $_FILES['logo']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$thutu = $_POST['thutu'];
if(isset($_POST['themdanhmuc'])){
	//them
	$sql_them = "INSERT INTO tbl_danhmuc(tendanhmuc,logo,thutu) VALUE('".$tenloaisp."','".$hinhanh."','".$thutu."')";
	mysqli_query($mysqli,$sql_them);
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	header('Location:../../index-admin.php?action=quanlydanhmucsanpham&query=them');
}elseif(isset($_POST['suadanhmuc'])){
	//sua
	if($hinhanh!=''){
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
		
		$sql_update = "UPDATE tbl_sanpham SET tendanhmuc='".$tenloaisp."',hinhanh='".$hinhanh."',thutu='".$thutu."' WHERE id_sanpham='$_GET[idsanpham]'";
		//xoa hinh anh cu
		$sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['hinhanh']);
		}

	}else{
	$sql_update = "UPDATE tbl_danhmuc SET tendanhmuc='".$tenloaisp."',thutu='".$thutu."' WHERE id_danhmuc='$_GET[iddanhmuc]'";
	}mysqli_query($mysqli,$sql_update);
	header('Location:../../index-admin.php?action=quanlydanhmucsanpham&query=them');
}else{

	$id=$_GET['iddanhmuc'];
	$sql_xoa = "DELETE FROM tbl_danhmuc WHERE id_danhmuc='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index-admin.php?action=quanlydanhmucsanpham&query=them');
}

?>