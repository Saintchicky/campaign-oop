<?php

class Home {
    
    static function read($id_user)
    {
		global $db;
			$sql = "SELECT * FROM `campaigns`";
			if($id_user){ $sql .= " WHERE id_user=$id_user";}
			 $res = $db->fetch($sql,[],true); 
 		return $res;
	}
}