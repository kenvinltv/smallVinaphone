<?php
require_once "class_db.php";
class qly_ez extends db{
	public function ListEzcom($type=-1){
		$sql="SELECT *
            from ezcom
            WHERE  (type = $type or $type = -1)
            ";		
		$kq = mysql_query($sql,$this->conn);
		return $kq;
	}

}