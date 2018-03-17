<?php
require_once "class_db.php";
class qly_mess extends db{
  public function NhapSDT_GoiLai()
	{
		if($_SESSION['last_session_request'] > time() - 10){
			echo "<script>alert('Bạn nhập quá nhanh! Vui lòng chờ trong giây lát để nhập lại!' );</script>";
		}
		else
		{
			$sdt=$this->XoaDinhDang($_POST['sdt']);			
			$sdt = mysql_real_escape_string($sdt);      
			if($sdt == null || $sdt == "") return false;
			$hoten = mysql_real_escape_string($_POST['hoten']);      
			$mess = $_POST['message'];
		
			$sdt1=$sdt."---http://".@$_SERVER[HTTP_HOST].@$_SERVER[REQUEST_URI]; 
			$conn2 = mysql_connect(HOST,USER,PASS);
				mysql_select_db(DATABASE, $conn2);
				mysql_query("set names 'utf8'");
							
			$sql="INSERT INTO `message` (				
					`name`,
					`sdt` ,			
					`mess` ,
					`NgayGioDK`,`IP`
					)
					VALUES ('".$hoten."','".$sdt1."','".$mess."', '".date("Y-m-d H:i:s")."','".$this->getClientIP()."');";
			mysql_query($sql,$conn2);
			
			echo "<script>alert('Số điện thoại ".$sdt." của bạn đã được gửi đến chúng tôi. Chúng tôi sẽ gọi lại cho bạn trong thời gian sớm nhất!' );</script>";
		}
		$_SESSION['last_session_request'] = time();
	}
	function getClientIP() {	
		if (isset($_SERVER)) {
	
			if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
				return $_SERVER["HTTP_X_FORWARDED_FOR"];
	
			if (isset($_SERVER["HTTP_CLIENT_IP"]))
				return $_SERVER["HTTP_CLIENT_IP"];
	
			return $_SERVER["REMOTE_ADDR"];
		}
	
		if (getenv('HTTP_X_FORWARDED_FOR'))
			return getenv('HTTP_X_FORWARDED_FOR');
	
		if (getenv('HTTP_CLIENT_IP'))
			return getenv('HTTP_CLIENT_IP');
	
		return getenv('REMOTE_ADDR');
	}
	
}
?>