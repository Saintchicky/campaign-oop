<?php


class Result 
{
	static function create($score, $id_campaign, $id_user)
	{
		global $db;
		$res = $db->exec("INSERT INTO `results`(result, id_campaign, id_user) VALUES ('$score', '$id_campaign','$id_user')");
		if($res){
			return true;
		}else{
			return false;
		}
	}
	static function read ($id_user)
	{
		global $db; 
		$sql ="SELECT r.id,r.result,c.title FROM results r INNER JOIN campaigns c ON r.id_campaign = c.id WHERE r.id_user='$id_user'";
		// faire d'abord la selection avec select pour utliser un where avec un inner join, il faut créer un alias: exemple r. results r 
		//jointure table results et campaigns pour les afficher dans un même foreach
		if($id_user){$res = $db->fetch($sql, [], true);}
		return $res;
	}
}