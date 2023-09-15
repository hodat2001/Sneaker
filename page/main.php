
<div class="main">
            <div class="content-main-header">
                <h2>Sản Phẩm Mới Nhất</h2>
            </div>
            <div class="content-main-product"><?php
				if(isset($_GET['quanly'])){
                    $tam = $_GET['quanly'];
                }
                else{
                    $tam = '';
                }
                if($tam=='danhmucsanpham'){
					include("main/category.php");
				}elseif($tam=='giohang'){
					include("main/cart.php");
                }
				elseif($tam=='sanpham'){
					include("main/product.php");	
				}elseif($tam=='dangky'){
					include("main/regis.php");
				}elseif($tam=='thanhtoan'){
					include("main/payment.php");
				}elseif($tam=='dangnhap'){
					include("main/login.php");
				}elseif($tam=='timkiem'){
					include("main/search.php");
				}elseif($tam=='camon'){
					include("main/thank.php");
				}elseif($tam=='thaydoimatkhau'){
					include("main/fix-pass.php");
					}elseif($tam=='donhangdadat'){
					include("main/order_placed.php");
				}elseif($tam=='xemdonhang'){
					include("main/view-order.php");
                   }   elseif($tam=='doimatkhau'){
                        include("main/change-pass.php");
				}else{
					include("main/index-page.php");
				}
                ?></div>
            <div class="content-main-service">
                <div class="service-delivery">
                    <ul>
                        <li><img src="./img/delivery.png"></li>
                        <li>GIAO HÀNG TOÀN QUỐC</li>
                        <li><span>Vận chuyển khắp Việt Nam</span></li>
                    </ul>
                </div>
                <div class="service-payment">
                    <ul>
                       
                        <li><img src="./img/payment.png"></li>
                        <li>THANH TOÁN KHI NHẬN HÀNG</li>
                        <li><span>Nhận hàng tại nhà rồi thanh toán</span></li>
                    </ul>
                </div>
                <div class="service-insurance">
                    <ul>
                        
                        <li><img src="./img/insurance.png"></li>
                        <li>BẢO HÀNH DÀI HẠN</li>
                        <li><span>Bảo hành lên đến 60 ngày</span></li>
                    </ul>
                </div>
                <div class="service-exchange">
                    <ul>
                        
                        <li><img src="./img/exchange.png"></li>
                        <li>ĐỔI HÀNG DỄ DÀNG</li>
                        <li><span>Đổi hàng thoải mái trong 30 ngày</span></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>