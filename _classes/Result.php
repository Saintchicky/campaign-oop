<?php


class Result 
{
	static function create($score, $id_campaign)
	{
		global $db;
		$res = $db->exec("INSERT INTO `results`(result, id_campaign) VALUES ('$score', '$id_campaign')");
		if($res){
			return true;
		}else{
			return false;
		}
	}
}