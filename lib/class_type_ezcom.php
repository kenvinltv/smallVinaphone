<?php
require_once "class_db.php";
class qly_type_ezom extends db{
	public function ListTypeEzcom($type=-1){
		$sql="SELECT *
            from type_ezcom
            WHERE  (id = $type or $type = -1)
            ";				
		$kq = mysql_query($sql,$this->conn);
		return $kq;
	}
}