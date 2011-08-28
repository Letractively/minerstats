<?php 
require_once('../config.php');
require_once('../connect.php');

if(!empty($_POST['login']))
{
	$req = mysql_query('SELECT * FROM `minerstats` WHERE `playerName` = "'.mysql_real_escape_string($_POST['login']).'"');
	$data = mysql_fetch_array($req);
		
	if(!empty($_POST['password']))
	{
	
		if(md5($_POST['password']) == $data['playerPassword']) 
		{
			echo 'logging';
			setcookie("minerstats-playerID", $data['playerID'], (time() + 604800), '/');
			setcookie("minerstats-playerName", $data['playerName'], (time() + 604800), '/');
		}
		else
		{
			echo 'password error';

		}
	
	}
	else
	{
		echo 'password error';
	}
}
else
{
	echo 'username error';
}

?>