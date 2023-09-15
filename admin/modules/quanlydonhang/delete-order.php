<?php
    include('../../config/config.php');
    if(isset($_GET['code'])){
        $code = $_GET['code'];
        $sql1 ="delete from tbl_cart where code_cart='$code'";
        $sql2 ="delete from tbl_cart_details where code_cart='$code'";
        $query =  mysqli_query($mysqli,$sql1);
        $query2 =  mysqli_query($mysqli,$sql2);
        header('Location:index-admin.php?action=quanlydonhang&query=lietke');
    }

?>