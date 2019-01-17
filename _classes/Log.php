<?php

class Log 
{
	static function read ($username)
	{
		global $db;
		$sql = "SELECT username,pass FROM `users` WHERE username = '$username'";
	
		$res = $db->fetch($sql,[],false);
		
		return $res;

	
	}
}