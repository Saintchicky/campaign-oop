<?php

class Campaign 
{
	static function create ($question, $answer, $score, $id_campaign)
	{
		global $db;

		$res = $db->exec("INSERT INTO `question_answers` (question, answer, score, id_campaign) VALUES ('$question','$answer','$score','$id_campaign')");
		if($res){
			return true;
		}else{
			return false;
		}
	}
}