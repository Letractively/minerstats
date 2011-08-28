<?php 
require_once('../config.php');
require_once('../connect.php');
require_once('../lang/'.$language.'.php');

$req = mysql_query('SELECT count(*) FROM `stats` WHERE `player` = "'.mysql_real_escape_string($_POST['playerID']).'"');
$data[1] = mysql_fetch_array($req);

$req = mysql_query('SELECT count(*) FROM `minerstats` WHERE `playerName` = "'.mysql_real_escape_string($_POST['playerID']).'"');
$data[2] = mysql_fetch_array($req);

if(!empty($_POST['email']) && preg_match('/(.+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i', $_POST['email']))
{
	
	if(!empty($_POST['playerID']))
	{
		if($data[1][0] != 0)
		{
		
			if($data[2][0] == 0)
			{
			
				if(!empty($_POST['password1']))
				{
					
					if(!empty($_POST['password2']))
					{
						
						if($_POST['password1'] == $_POST['password2'])
						{
						
							mysql_query('INSERT INTO `minerstats` VALUES (NULL, "'.mysql_real_escape_string($_POST['playerID']).'", "'.md5($_POST['password1']).'", "'.mysql_real_escape_string($_POST['email']).'")');
						}
						else
						{
							echo 'password matching error|'.ACTIVATION_MATCHING_PASSWORD_ERROR;
						}
						
					}
					else
					{
						echo 'password2 error|'.ACTIVATION_PASSWORD2_ERROR;
					}	
					
				}
				else
				{
					echo 'password1 error|'.ACTIVATION_PASSWORD1_ERROR;
				}	
			}
			else
			{
				echo 'playerID error|'.ACTIVATION_PLAYERID_FOUND_ERROR;
			}
		}
		else
		{
			echo 'playerID error|'.ACTIVATION_PLAYERID_NOTFOUND_ERROR;
		}
		
	}
	else
	{
		echo 'playerID error|'.ACTIVATION_PLAYERID_ERROR;
	}
	
}
else
{
	echo 'email error|'.ACTIVATION_EMAIL_ERROR;
}

?>