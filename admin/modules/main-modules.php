
<div class="maincontent">
<div style="display: flex;">
<?php
if(isset($_GET['action']) && $_GET['query']){
	$tam = $_GET['action'];
	$query = $_GET['query'];
}else{
	$tam = '';
	$query ='';
}
if($tam=='quanlydanhmucsanpham' && $query=='them' ){
	include("modules/quanlydanhmucsp/add-product.php");
	include("modules/quanlydanhmucsp/list-product.php");
}elseif($tam=='quanlydanhmucsanpham' && $query=='sua') {
	include("modules/quanlydanhmucsp/fix-product.php");}
?>
</div>
</div>
<div class="subadmin-content">
<?php
if ($tam=='quanlysp' && $query=='them') {
	include("modules/quanlysp/add_sp.php");
	include("modules/quanlysp/list_sp.php");
}elseif($tam=='quanlysp' && $query=='sua'){
	include("modules/quanlysp/fix_sp.php");
}elseif($tam=='quanlydonhang' && $query=='lietke'){
	include("modules/quanlydonhang/list-order.php");
}elseif($tam=='donhang' && $query=='xemdonhang'){
	include("modules/quanlydonhang/view-order.php");
}
elseif($tam=='donhang' && $query=='xoadonhang'){
	include("modules/quanlydonhang/delete-order.php");
}
?>		

</div>

