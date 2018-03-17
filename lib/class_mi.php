<?php
require_once "class_db.php";
class qly_mi extends db{
	public function ListMI($type=-1,$quydoi = -1){
		$sql="SELECT *
            from mi
            WHERE  (type = $type or $type = -1) AND (quydoi = $quydoi or $quydoi=-1)
            ";		
		$kq = mysql_query($sql,$this->conn);
		return $kq;
	}
	
}