<?php

class Log 
{
	static function read ($username)
	{
		global $db;
		$sql = "SELECT id,username,pass FROM `users` WHERE username = '$username'";
		$res = $db->fetch($sql,[],false);
		return $res;

	}
	static function get_user($id)
	{
		global $db;
		$sql = "SELECT id,username,pass FROM `users` WHERE id = '$id'";
		$res = $db->fetch($sql,[],false);
		return $res;

	}
}