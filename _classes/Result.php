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
	static function read ()
	{
		global $db; 
		$sql ="SELECT * FROM `results` INNER JOIN `campaigns` ON results.id_campaign = campaigns.id"; //jointure table results et campaigns pour les afficher dans un même foreach
		$res = $db->fetch($sql, [], true);
		return $res;
	}
}