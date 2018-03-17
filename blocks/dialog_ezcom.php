<?php 	
	$result = $qly_type_ezcom->ListTypeEzcom();
	while($row = mysql_fetch_array($result)){
?>
	<div id="price-ez-dialog-<?php echo $row['id'] ?>" class="modal fade" role="dialog">
	  <div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title"><?php echo $row['name']; ?></h4>
		  </div>
		  <div class="modal-body">
			<table class="package-data" cellpadding="0" cellspacing="0">
				<tbody>
					<tr class="head" valign="top">					
						<th class="first" style="width:150px">Tên gói cước</th>					
						<th style="width:150px">Cước thuê bao </th>						
						<th style="width:350px">LƯU LƯỢNG MIỄN PHÍ/LƯU LƯỢNG TỐC ĐỘ CAO</th>
						<th style="width:100px">CƯỚC VƯỢT GÓI </th>							
					</tr>
					<?php 
						$resul_tb = $qly_ezcom->ListEzcom($row['id']);
						while($row_tb = mysql_fetch_array($resul_tb)){
					?>
						<tr class="main" valign="top">					
							<td class="first"><?php echo $row_tb['name'];?></td>					
							<td><?php echo $row_tb['price'];?></td>
							<td><?php echo $row_tb['data'];?></td>
							<td><?php echo $row_tb['price_out'];?></td>													
						</tr>
					<?php } ?>
				</tbody>
			</table>  
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Đóng lại</button>
		  </div>
		</div>

	  </div>
	</div>
<?php } ?>


<div id="register-ez-dialog" class="modal fade" role="dialog">
	  <div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">ĐĂNG KÝ GÓI CƯỚC QUA SMS</h4>
		  </div>
		  <div class="modal-body">
			<table class="package-data" cellpadding="0" cellspacing="0">
				<tbody><tr class="head" valign="top">						
					<th class="first" style="width:250px">NỘI DUNG<br> HỖ TRỢ</th>
					<th style="width:250px">NỘI DUNG<br> TIN NHẮN (*)</th>
					<th>GỬI TỚI</th>												
				</tr>
				<tr valign="top">
					<td class="first align-left">Đăng ký gói cước</td>
					<td class="alt"><strong>DK TênGóiCước<br/>
(Ví dụ: Để đăng ký gói<br/>
EZMAX, Quý Khách hãy<br/>
soạn tin DK EZMAX gửi 888)</td>
					<td class="row-span" rowspan="5" valign="middle">888</td>												
				</tr>
				<tr valign="top">						
					<td class="first align-left">Kiểm tra lưu lượng còn<br> lại của gói</td>
					<td class="alt"><strong>DATA</strong></td>		
				
				</tr>								
			</tbody>
			</table>  
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Đóng lại</button>
		  </div>
		</div>

	  </div>
	</div>
	
<div id="covertSIM-ez-dialog" class="modal fade" role="dialog">
	  <div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">CHUYỂN SIM THƯỜNG SANG SIM EZCOM</h4>
		  </div>
		  <div class="modal-body">
			<ol>
				<li><b>Đăng ký trả sau:</b> Khách hàng ra làm thủ tục tại các điểm giao dịch của VinaPhone.</li>
				<li><b>Đăng ký trả trước:</b>
					<ul>
						<li><b>Cách 1:</b> Mua bộ KIT ezCom trả trước tại các điểm giao dịch của VinaPhone.</li>
						<li><b>Cách 2:</b> Chuyển đổi SIM đang hoạt động 2 chiều hoặc SIM trả trước mới kích hoạt sang SIM ezCom, soạn tin:	<span class="cuphap">DK EZ </span>gửi <span class="cuphap">888</span></li>
						<li><b>Lưu ý:</b> Sau khi chuyển đổi thành công, thuê bao được có thể truy cập Internet ngay mới mức giá 200đồng/MB (gói mặc định EZ0). SIMCard sẽ bị khóa chiều gọi đi/nhận cuộc gọi, chỉ truy cập được Internet và gửi/nhận tin nhắn. Đồng thời, thuê bao sẽ chỉ được bảo lưu tài khoản chính sau khi chuyển đổi thành công.</li>
					</ul>
				</li>
			<ol>			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Đóng lại</button>
		  </div>
		</div>

	  </div>
	</div>
	
<div id="checkout-ez-dialog" class="modal fade" role="dialog">
	  <div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">CÁCH THỨC THANH TOÁN EZCOM</h4>
		  </div>
		  <div class="modal-body">
			<p>Với những hình thức thanh toán đa dạng, dễ dàng, thuê bao ezCom giờ đây sẽ chỉ cần vài click là có thể tha hồ lướt net, không còn bối rối mỗi khi hết tài khoản. Với dung lượng Data lớn, ezCom là một trong những dịch vụ truy cập Internet từ máy tính thuận tiện cho khách hàng. Chỉ cần sử dụng USB 3G hoặc trực tiếp qua máy tính cho khe cài SIM, thuê bao ezCom sẽ được thỏa sức online với chi phí tiết kiệm.</p>
			<p>Tuy vậy, không ít thuê bao ezCom thường gặp vướng mắc khi cần nạp thẻ do chưa quen thuộc với hình thức gắn SIM trong USB/máy tính. Giúp khách hàng khắc phục điều này, nhà mạng đã thường xuyên bổ sung các giải pháp mới nhanh chóng và tiện ích hơn:</p>
			<ol>
				<li><b>Nạp thẻ trực tuyến:</b> Để nạp thẻ dễ dàng nhất, thuê bao ezCom giờ đây chỉ cần truy cập website http://naptien.vinaphone.com.vn , chọn tiện ích Nạp tiền, nhập số SIM ezCom và mã thẻ nạp. Bên cạnh đó, khách hàng cũng có thể cài đặt ứng dụng My VinaPhone (tải tại http://my.vinaphone.com.vn ), mở và chọn tiện ích.</li>
				<li><b>Nạp thẻ trả trước, trả sau. Nạp thẻ trên iPad/Điện thoại: Quen thuộc hơn, khách hàng hãy chọn ứng dụng cài trên máy tính khi cài USB -> Chọn tài khoản -> Bấm: *100*Mã thẻ nạp#. Đồng thời, khách hàng cũng có thể chuyển SIM ezCom qua điện thoại và nạp thẻ với cú pháp *100*Mã thẻ nạp#. Khách hàng sử dụng iPad cũng nạp được trực tiếp trên thiết bị bằng cách vào Cài đặt (Settings) => Ứng dụng của SIM (SIM Applications) => SIM portal => Ứng dụng => Tiện ích => Nạp tiền.</b>	
				</li>
				<li><b>Nạp thẻ qua tài khoản ngân hàng</b>Với khách hàng đã có tài khoản ngân hàng, việc nạp thẻ cũng rất đơn giản bằng tiện ích Nạp tiền điện thoại tại internet banking hoặc nạp trực tiếp tại máy ATM. Đồng thời, một số ứng dụng khác như ví Momo cũng hỗ trợ khách hàng nạp thẻ ezCom. Để nạp thẻ qua ví Momo, khách hàng cần Tải ứng dụng Momo về điện thoại từ VinaPhone hoặc website http://momo.vn, nạp tiền vào ví Momo thông qua các điểm giao dịch ví Momo hoặc tài khoản ngân hàng.</li>
				<li><b>Nạp thẻ bằng gói cước tích hợp với điện thoại di động</b>Ngoài ra, thuê bao VinaPhone có thể sử dụng chung một gói cước MAX100 (100.000 đồng/tháng, 1,2 GB tốc độ cao) hoặc gói MAX200 (200.000 đồng/tháng, 3 GB tốc độ cao) dành cho cả 2 SIM ezCom và di động. Cước ezCom sẽ tính chung vào gói tích hợp và bạn có thể thanh toán cước tất cả qua điện thoại di động. Với thuê bao VinaPhone trả trước, các bước đăng ký tuần tự để tích hợp gói cước như sau:
					<ul>
						<li><b>Bước 1: </b>Để tích hợp, soạn TH_Số ezCom gửi 900.</li>
						<li><b>Bước 2: </b>Để mua gói Data, soạn DK_TênGóiData gửi 888.</li>					
					</ul>
				</li>
				<li><b>Nạp thẻ bằng tiện ích 2Friends hoặc E-Load</b>Với tiện ích 2Friends, thuê bao VinaPhone có thể kết nối để nạp thẻ cho SIM ezCom bằng SIM di động. Để đăng ký, khách hàng hãy soạn DK gửi 999. Sau đó, để chuyển tiền, khách hàng soạn CT_MK_SĐTnhận_Sốtiền gửi 999.Với tiện ích E-Load, khách hàng hãy đến cửa hàng VinaPhone để nạp thẻ qua SIM E-Load chuyên dụng.Để biết thêm chi tiết về các hình thức thanh toán cho SIM ezCom, khách hàng có thể gọi đến tổng đài 18001091.</li>
			<ol>			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Đóng lại</button>
		  </div>
		</div>

	  </div>
	</div>