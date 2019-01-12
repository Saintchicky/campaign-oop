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
	static function read($id_campaign)
	{
		global $db;
			$sql = "SELECT * FROM `question_answers`";
			if($id_campaign){ $sql .= " WHERE id_campaign=$id_campaign";}
			$res = $db->fetch($sql,[],true);
 		return $res;
	}
	static function update($question, $answer, $score, $id)
	{
		global $db;
		$sql = "UPDATE `question_answers` SET question='$question', answer='$answer', score='$score' WHERE id=$id";
		$res = $db->exec($sql);
		if($res){
			return true;
		}else{
			return false;
		}
	}
	static function delete ($id)
	{
		global $db; 
		$sql = "DELETE FROM `question_answers` WHERE id=$id";
		$res = $db->exec($sql);
		if($res){
			return true;
		}else{
			return false;
		}

	}
}