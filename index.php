<?php 
ob_start();
session_start();
include_once 'config.php'; 
require_once "lib/class_mi.php";
require_once "lib/class_type.php";
require_once "lib/class_type_ezcom.php";
require_once "lib/class_ezcom.php";
require_once "lib/class_message.php";
$qly_mi = new qly_mi;
$qly_type = new qly_type;
$qly_type_ezcom = new qly_type_ezom;
$qly_ezcom = new qly_ez;
$qly_mess = new qly_mess;
?> 
<html>
<head>
    <!-- http://themes.ladipage.vn/#/preview-ladipage?ladi=594dca37ab9d34daa02cf337 -->
    <meta charset="utf-8">
    <base href="http://localhost/smallVinaphone/">
    <title><?php echo title; ?></title>
    <meta name="description" content="<?php echo description; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/ico" href="favicon.ico">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="asset/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="asset/css/normalize.css">
    <link rel="stylesheet" href="asset/css/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="asset/js/owl.carousel.min.js"></script>
    
</head>
<?php 
	if(isset($_POST['dk_goi_cuoc'])){
		$qly_mess->NhapSDT_GoiLai();
	}
?>
<body class="main-body">    
    <div class="wrapper">
        <section class="phone-request">
            <div class="container">
                <div class="phone-request-content col-sm-6 col-sm-offset-6 col-lg-6 col-lg-offset-6">
                    <h2>Gói cước <span>INTERNET</span></h2>
                    <p>Bạn muốn tư vấn gói cước dịch vụ, hãy để lại thông tin cho chúng tôi?</p>
                    <form action="" method="post">
                        <input name="hoten" type="text" class="form-control" placeholder="Họ và tên">
                        <input name="sdt" type="text" class="form-control" placeholder="Số điện thoại">
                        <textarea type="text" placeholder="Để lại lời nhắn cho chúng tôi" name="message" rows="4" lp-label="Lời nhắn"></textarea>
                        <input name="dk_goi_cuoc" type="submit" class="form-control" value="ĐĂNG KÝ ĐỂ NHẬN TƯ VẤN">
                    </form>
                </div>                
            </div>
        </section>
        <section class="mobile-internet">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 title">
                        <h2 class="text-center"><span>Gói cước MI</span></h2>
                        <p class="title-description text-center">Các gói cước Mobile Internet do VinaPhone cung cấp.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="box">
                             <div class="box-thumbnails">
                                <span><i class="fas fa-dollar-sign"></i></span>
                             </div>
                             <div class="box-content">
                                <h4><a href="#banggiacuoc-mi" title="">Bảng Giá Cước</a></h4>
                                <p>Bảng giá cước dịch vụ mobile internet.</p>
                             </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="box">
                             <div class="box-thumbnails">
                                <span><i class="fas fa-clipboard-list"></i></span>
                             </div>
                             <div class="box-content">
                                <h4><a class="quidoi-button" href="" data-toggle="modal" data-target="#quidoi-mi-dialog" title="quidoi-mi-dialog">Bảng Qui Đổi</a></h4>
                                <p>Sử dụng dịch vụ & bảng qui đổi lưu lượng gói cuóc.</p>
                             </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="box">
                             <div class="box-thumbnails">
                                <span><i class="fas fa-sun"></i></span>                         
                             </div>
                             <div class="box-content">
                                <h4><a href="" data-toggle="modal" data-target="#register-mi-dialog" title="">Đăng ký</a></h4>
                                <p>Đăng ký gói cước qua SMS.</p>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="price-mobile-internet" id="banggiacuoc-mi">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 title">
                        <h2 class="text-center"><span>BẢNG GIÁ CƯỚC DỊCH VỤ MOBILE INTERNET</span></h2>
                    </div>
                </div>
                
                <div class="price-slide owl-carousel">
                    
					<?php 	
						$result_slide = $qly_type->ListTypeMI();
						while($row = mysql_fetch_array($result_slide)){
					?>
					
					<div class="item">
                        <span class="thumbnails"><i class="fas fa-cubes"></i></span>
                        <div class="slide-noidung">
							<p class="title-slide"><a href="" data-toggle="modal" data-target="#price-mi-dialog-<?php echo $row['id'] ?>"><?php echo $row['name']; ?></a></p>
							<?php if($row['description'] !== ''){ ?>
							<div class="description-slide">
								<p><?php echo $row['description']; ?></p>
							</div>
							<?php } ?>
						</div>
                    </div>
					<?php } ?>
					<script type="text/javascript">
						$(document).ready(function(){
							$('.owl-carousel').owlCarousel({
								loop:true,
								margin:10,
								responsiveClass:true,
								responsive:{
									0:{
										items:1,
										nav:true
									},
									600:{
										items:2,
										nav:false
									},
									1000:{
										items:3,
										nav:true,
										loop:false
									}
								}
							});
						});						
					</script>
                </div>

                <div class="note">
                    <div class="box-description">
                            <p class="note-text">Lưu ý:</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="box-content">
                                        <h4><a href="" title="">Thời gian sử dụng</a></h4>
                                        <ol>
                                            <li>Đối với gói cước M0 là vô thời hạn.</li>
                                            <li>Đối với các gói cước M10, M25, M50, M120, MAX, MAXS, MAX100, MAX200 là 30 ngày.</li>
                                        </ol>
                                    </div>                                
                                </div>
                                <div class="col-sm-6">
                                    <div class="box-content">
                                        <h4><a href="" title="">Cước lưu lượng vượt gói:</a></h4>
                                        <ol>
                                            <li>Đối với gói cước M0 là 75đ/50KB.</li>
                                            <li>Đối với các gói cước M10, M25, M50, M120 là 25đ/50KB.</li>
                                            <li>Đối với các gói cước MAX, MAXS, MAX100, MAX200 là miễn phí</li>
                                        </ol>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                </div>
            </div>            
        </section>    
		
		<?php include_once 'blocks/dialog_mi.php' ?>
		
        <section class="mobile-internet ezCom">
            <div class="container">                
                <div class="row">
                    <div class="col-xs-4 title">
                        <h2><span>EzCom</span></h2>
                        <p class="title-description">ezCom là dịch vụ truy cập Internet từ máy tính bảng.</p>
                    </div>
                    <div class="col-xs-8">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="box">
                                     <div class="box-thumbnails">
                                        <span><i class="fas fa-dollar-sign"></i></span>
                                     </div>
                                     <div class="box-content">
                                        <h4><a href="#banggiacuoc-ezCom" title="">Bảng Giá Cước</a></h4>
                                        <p>Bảng giá cước dịch vụ EzCom.</p>
                                     </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="box">
                                     <div class="box-thumbnails">
                                        <span><i class="fas fa-sun"></i></span>                         
                                     </div>
                                     <div class="box-content">
                                        <h4><a href="" data-toggle="modal" data-target="#register-ez-dialog" title="" >Đăng ký</a></h4>
                                        <p>Đăng ký gói cước qua SMS.</p>
                                     </div>
                                </div>
                            </div>                           
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="box">
                                     <div class="box-thumbnails">
                                        <span><i class="fas fa-exchange-alt"></i></span>
                                     </div>
                                     <div class="box-content">
                                        <h4><a href="" data-toggle="modal" data-target="#covertSIM-ez-dialog" title="">Chuyển sim</a></h4>
                                        <p>Chuyển SIM thường qua SIM eZcom.</p>
                                     </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="box">
                                     <div class="box-thumbnails">
                                        <span><i class="fab fa-monero"></i></span>                         
                                     </div>
                                     <div class="box-content">
                                        <h4><a href="" data-toggle="modal" data-target="#checkout-ez-dialog" title="checkout-ez-dialog">Thanh toán</a></h4>
                                        <p>Cách thức thanh toán.</p>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
		<section class="price-mobile-internet" id="banggiacuoc-ezCom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 title">
                        <h2 class="text-center"><span>BẢNG GIÁ CƯỚC DỊCH VỤ EZCOM</span></h2>
                    </div>
                </div>
                
                <div class="price-slide owl-carousel">
                    <?php 	
						$result_slide_2 = $qly_type_ezcom->ListTypeEzcom();
						while($row = mysql_fetch_array($result_slide_2)){
					?>
					
					
					<div class="item">
                        <span class="thumbnails"><i class="fas fa-cubes"></i></span>
                        <div class="slide-noidung">
							<p class="title-slide"><a href="" data-toggle="modal" data-target="#price-ez-dialog-<?php echo $row['id'] ?>"><?php echo $row['name']; ?></a></p>
							<?php if($row['description'] !== ''){ ?>
							<div class="description-slide">
								<p><?php echo $row['description']; ?></p>
							</div>
							<?php } ?>
						</div>
                    </div>
                    
					<?php } ?>
                </div>

                <div class="note">
                    <div class="box-description">
                            <p class="note-text">Lưu ý:</p>
                            <div class="row">
								<div class="col-sm-12">
                                    <div class="box-content">                                       
                                        <ol>
                                            <li>Gói DMAX/DMAX100/DMAX200/DMAX300/D150/D150/D250/D500 được sử dụng lần lượt là 5GB/9GB/20GB/30GB/3GB/4GB/5GB ở tốc độ truy cập tối đa. Sau mức này, Quý Khách tiếp tục sử dụng Internet miễn phí với tốc độ 32 Kbps/32 Kbps</li>
                                            <li> Lưu lượng miễn phí của các gói ngày D10 không được cộng dồn và sử dụng đến 23:59:59 của ngày đăng ký. Không giới hạn số lượng gói ngày được đăng ký (gói cước không được gia hạn tự động). </li>
                                            <li> Đối với gói D150/D250/D500: Dung lượng Data miễn phí/tháng được cộng vào ngày đầu tiên của tháng và chỉ được sử dụng đến hết 23:59:59 của ngày cuối cùng của tháng, không được cộng dồn sang tháng kế tiếp. Thời hạn sử dụng gói D150/D250/D500 là 6 tháng/12 tháng (đến ngày cuối cùng của tháng thứ 6/tháng thứ 12 kể từ tháng đầu tiên đăng ký). </li>
                                            <li>Riêng đối với thuê bao trả sau đăng ký gói D150/D250/D500: </li>
                                            <li>Thuê bao phải đăng ký sử dụng gói DMAX trước, sau đó thực hiện thanh toán tiền gói D150/D250/D500 tại điểm giao dịch. Hiệu lực gói D150/D250/D500 từ tháng kế tiếp tháng thực hiện thanh toán tiền trước. Hết thời gian của gói D150/D250/D500, nếu không tiếp tục thanh toán trước cho gói D150/D250/D500, thuê bao sẽ quay trở lại gói DMAX. </li>
											<li>Số tiền thu trước của gói D150/D250/D500 sẽ được VinaPhone quản lý trên hệ thống để giảm trừ dần vào gói cước sử dụng hàng tháng. Số tiền thu trước được đưa vào báo cáo doanh thu phân bổ dần đều trên số tháng đóng tiền trước. </li>
											<li>Đối với các gói cước X19, X29, X39, X49:
												<ul>
													<li>Quý Khách có thể đăng ký nhiều lần hoặc đăng ký cùng lúc các gói cước X19, X29, X39, X49. Dung lượng tốc độ cao của các lần đăng ký gói X19, X29, X39, X49 và gói chính sẽ được cộng dồn. Sau khi sử dụng hết dung lượng ở tốc độ tối đa, thuê bao sẽ bị hạ băng thông xuống tốc độ truy cập (32 Kbps/32 Kbps).</li>
													<li>Gói X19, X29, X39, X49 không được gia hạn tự động. Sau khi thuê bao đăng ký lại gói chính hoặc được gia hạn gói chính thành công, để có thể tiếp tục sử dụng gói X19, X29, X39, X49, thuê bao cần phải thực hiện đăng ký lại.</li>
													<li>Thời hạn sử dụng của các gói X19, X29, X39, X49 phụ thuộc vào thời hạn sử dụng của gói chính. Nếu gói chính hết hạn sử dụng, gói X19, X29, X39, X49 sẽ tự động bị hủy. Ngoài ra, các gói cước X19, X29, X39, X49 cũng sẽ bị hủy tự động ngay khi sử dụng hết dung lượng của gói ở tốc độ tối đa.</li>
												</ul>
											</li>
                                        </ol>
                                    </div>                                
                                </div>                                
                            </div>
                        </div>
                </div>
            </div>            
        </section> 
		<?php include_once 'blocks/dialog_ezcom.php' ?>
		<section class="footer"></section>
    </div>
    <!--.wrapper-->
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="asset/js/custom.js"></script>
</body>

</html>