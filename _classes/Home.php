<?php

class Home {
    
    static function read($id=null)
    {
		global $db;
			$sql = "SELECT * FROM `campaigns`";
			if($id){ $sql .= " WHERE id=$id LIMIT 1";}
			 $res = $db->fetch($sql,[],true); 
 		return $res;
	}
}