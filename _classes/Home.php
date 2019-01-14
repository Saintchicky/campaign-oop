<?php

class Home {
    
    static function read($id_campaign=null)
    {
		global $db;
			$sql = "SELECT * FROM `campaigns`";
			if($id_campaign){ $sql .= " WHERE id=$id_campaign LIMIT 1";}
			 $res = $db->fetch($sql,[],true); 
 		return $res;
	}
}