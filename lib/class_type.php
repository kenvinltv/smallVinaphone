<?php
require_once "class_db.php";
class qly_type extends db{
	public function ListTypeMI($type=-1){
		$sql="SELECT *
            from type
            WHERE  (id = $type or $type = -1)
            ";				
		$kq = mysql_query($sql,$this->conn);
		return $kq;
	}
}