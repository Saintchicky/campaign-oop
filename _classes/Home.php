<?php

class Home {

	static function create($title, $id_user)
	{
		global $db;
		$res = $db->exec("INSERT INTO `campaigns` (title, id_user) VALUES ('$title','$id_user')");
		if($res){
			return true;
		}else{
			return false;
		}
		
	}
    
    static function read($id_campaign)
    {
		global $db;
			$sql = "SELECT * FROM `campaigns`";
			if($id_campaign){ $sql .= " WHERE id=$id_campaign";}
			 $res = $db->fetch($sql,[],true); 
 		return $res;
	}
    static function read_user($id_user)
    {
		global $db;
			$sql = "SELECT * FROM `campaigns`";
			if($id_user){ $sql .= " WHERE id_user=$id_user";}
			 $res = $db->fetch($sql,[],true); 
 		return $res;
	}
}