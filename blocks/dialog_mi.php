<?php 	
	$result = $qly_type->ListTypeMI();
	while($row = mysql_fetch_array($result)){
?>
	<div id="price-mi-dialog-<?php echo $row['id'] ?>" class="modal fade" role="dialog">
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
						<th style="width:150px">Cước thuê bao <br>
						<span>(đồng/30 ngày/tuần/giờ)</span></th>
						<th style="width:150px">Lưu lượng sử dụng tốc độ cao</th>
						<th style="width:400px">Ghi chú</th>						
						<th>SMS</th>
					</tr>
					<?php 
						$resul_tb = $qly_mi->ListMI($row['id']);
						while($row_tb = mysql_fetch_array($resul_tb)){
					?>
						<tr class="main" valign="top">					
							<td class="first"><?php echo $row_tb['name'];?></td>					
							<td><?php echo $row_tb['price'];?></td>
							<td><?php echo $row_tb['data'];?></td>
							<td><?php echo $row_tb['note'];?></td>						
							<td><a href="sms:<?php echo $row_tb['sms'];?>">Đăng ký</a></td>
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


<div id="register-mi-dialog" class="modal fade" role="dialog">
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
					<td class="alt"><strong>DK TênGóiCước</strong><br>(Ví dụ: Để đăng ký gói MAX<br>, Quý Khách hãy soạn tin DK<br> MAX gửi 888)</td>
					<td class="row-span" rowspan="5" valign="middle">888</td>												
				</tr>
				<tr valign="top">						
					<td class="first align-left">Kiểm tra lưu lượng còn<br> lại của gói</td>
					<td class="alt"><strong>DATA</strong></td>						
				</tr>
				<tr valign="top">						
					<td class="first align-left">Trợ giúp tìm hiểu các gói<br> cước</td>
					<td class="alt"><strong>TG MI</strong></td>						
				</tr>
				<tr valign="top">						
					<td class="first align-left">Hủy gói cước</td>
					<td class="alt"><strong>HUY TênGóiCước</strong></td>						
				</tr>
				<tr valign="top">						
					<td class="first align-left">Hủy dịch vụ</td>
					<td class="alt"><strong>HUY MI</strong></td>						
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
	
<div id="quidoi-mi-dialog" class="modal fade" role="dialog">
	  <div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">QUÝ KHÁCH CÓ THỂ SỬ DỤNG DUNG LƯỢNG MIỂN PHÍ GÓI NHƯ THẾ NÀO? (*)</h4>
		  </div>
		  <div class="modal-body">
			<select class="control-goicuoc">
				<?php 
					$array_quidoi = $qly_mi->ListMI(-1,1);
					while($row = mysql_fetch_array($array_quidoi)){
				?>
					<option value="<?php echo $row['id']; ?>"><?php echo $row['name'] ?></option>				
				<?php } ?>
			</select>
			
				<?php 	
					$array_quidoi1 = $qly_mi->ListMI(-1,1);
					while($row1 = mysql_fetch_array($array_quidoi1)){
				?>
				<table class="noidung-goicuoc noidung-goicuoc-<?php echo $row1['id']; ?> package-data M10" cellpadding="0" cellspacing="0" style="display: table;">				
					<tbody>
						<tr valign="center">
							<td class="first">Số lần đọc tin<br>tức trên web</td>						
							<td class="alt"><?php echo $row1['doctrenweb'];?></td>
							<td>Số lần đọc email<br><span>(dạng chữ)</span></td>
							<td class="alt"><?php echo $row1['docemail'];?></td>						
						</tr>
						<tr valign="center">						
							<td class="first">Số phút nghe<br> nhạc online</td>
							<td class="alt"><?php echo $row1['nghenhac'];?></td>
							<td>Số phút<br>xem video</td>
							<td class="alt"><?php echo $row1['xemvideo'];?></td>						
						</tr>
						<tr valign="center">
							<td class="first">Số lượt tải<br>game/bài hát</td>
							<td class="alt"><?php echo $row1['taigame'];?></td>
							<td>Giá gói cước<br><span>(đồng)</span></td>
							<td class="alt"><?php echo $row1['giagoicuoc'];?></td>						
						</tr>
						<tr valign="center">
							<td colspan="3" class="first">Cước phí phải trả nếu không đăng ký gói<br><span>(đồng)</span></td>
							<td class="alt"><?php echo $row1['khongdk'];?></td>						
						</tr>	
					</tbody>
				</table>
						<?php  } ?>					
				
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Đóng lại</button>
		  </div>
		</div>

	  </div>
	</div>