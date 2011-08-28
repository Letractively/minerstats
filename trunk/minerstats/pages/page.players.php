<h1>Liste des joueurs du serveur</h1>

<?php 
$players = $statistics->getPlayersList();

echo '<div class="player-list">';

$i = 1;
$nb = number_format(count($players) / 2, 0, '.', ' ');


foreach($players as $player => $stat)
{
	$status = ($stat['lastlogout'] < $stat['lastlogin'])? 'online' : 'offline' ;
	$lastLogin = ($stat['lastlogin'] > 0)? $functions->getElapsedTime($stat['lastlogin']) : 'jamais' ;
	
	echo '<div class="player-block '.$status.'">';
	echo '<img src="avatar.php?nick='.$player.'">';
	echo '<a href="?page=overview&player='.$player.'">'.$player.'</a> <span>derni&egrave;re connexion '.$lastLogin.'</span>';
	echo '</div>';
	
	if($i == $nb)
	{
		echo '</div>';
		echo '<div class="player-list">';
	}

	$i++;
	
}

echo '</div>';

// $debug->dump($players);
?>