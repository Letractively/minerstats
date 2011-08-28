<?php 

if(isset($_GET['mob']))
{
	require_once('mobs.php');
		
	echo '<h1>';	
	echo 'Classement du mob <img src="media/mobs/'.ucfirst($_GET['mob']).'.png" width="24" height="24"> '.$mobNames[$_GET['mob']]; 
	echo '</h1>';	
	
	echo '<table border="0" cellspacing="0" class="stats nums">';
	echo '<thead>';
	echo '<tr class="no-hover">';
	echo '<th width="50">#</th>';
	echo '</thead>';

	for($i = 1; $i <= count($statistics->getMobRanking($_GET['mob'])); $i++)
	{
		echo '<tr>';
		echo '	<td align="center">'.$i.'</td>';
		echo '</tr>';
	}

	echo '<table border="0" cellspacing="0" class="stats" name="ranks">';
	echo '<thead>';
	echo '<tr class="no-hover">';
	echo '<th width="240">Joueur</th>';
	echo '<th width="100" class="sorted">Tu&eacute;s</th>';
	echo '<th width="100">Dmg inflig&eacute;s</th>';
	echo '<th width="100">Dmg re&ccedil;us</th>';
	echo '<th width="100">Vous a tu&eacute;</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';

	
	foreach($statistics->getMobRanking($_GET['mob']) as $player => $value)
	{
		$mobKills = (@isset($value['kills']))? number_format($value['kills'], 0, ',', ' ') : '0' ;
		$mobDamageDealt = (@isset($value['damagedealt']))? number_format($value['damagedealt'], 0, ',', ' ') : '0' ;
		$mobDamageTaken = (@isset($value['damagetaken']))? number_format($value['damagetaken'], 0, ',', ' ') : '0' ;
		$mobDeaths = (@isset($value['deaths']))? number_format($value['deaths'], 0, ',', ' ') : '0' ;
		
		if($mobKills > '0' or $mobDamageDealt > '0' or $mobDamageTaken > '0' or $mobDeaths > '0')
		{
			echo '<tr>';
			echo '<td><img src="avatar.php?nick='.$player.'"><a href="?page=overview&player='.$player.'">'.$player.'</a></td>';
			echo '	<td class="center">'.$mobKills.'</td>';
			echo '	<td class="center">'.$mobDamageDealt.'</td>';
			echo '	<td class="center">'.$mobDamageTaken.'</td>';
			echo '	<td class="center">'.$mobDeaths.'</td>';
			echo '</tr>';
		}

	}
	
	echo '</tbody>';
	echo '</table>';
	echo '<br />';
	echo '<br />';
	
}
else
{

	require_once('blocks.php');
	
	echo '<h1>';	
	echo 'Classement du bloc <img src="media/items/'.$_GET['block'].'.png" width="24" height="24"> '.$blockNames[$_GET['block']]; 
	echo '</h1>';			
		
	echo '<table border="0" cellspacing="0" class="stats nums">';
	echo '<thead>';
	echo '<tr class="no-hover">';
	echo '<th width="50">#</th>';
	echo '</thead>';

	for($i = 1; $i <= count($statistics->getBlockRanking($_GET['block'])); $i++)
	{
		echo '<tr>';
		echo '	<td align="center">'.$i.'</td>';
		echo '</tr>';
	}

	echo '<table border="0" cellspacing="0" class="stats" name="ranks">';
	echo '<thead>';
	echo '<tr class="no-hover">';
	echo '<th width="240">Joueur</th>';
	echo '<th width="100" class="sorted">Pos&eacute;s</th>';
	echo '<th width="100">D&eacute;truits</th>';
	echo '<th width="100">Ramass&eacute;s</th>';
	echo '<th width="100">Jet&eacute;s</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';


	foreach($statistics->getBlockRanking($_GET['block']) as $player => $value)
	{
		$blockDestroy = (isset($value['blockdestroy']))? number_format($value['blockdestroy'], 0, ',', ' ') : '0' ;
		$blockCreate = (isset($value['blockcreate']))? number_format($value['blockcreate'], 0, ',', ' ') : '0' ;
		$itemPickup = (isset($value['itempickup']))? number_format($value['itempickup'], 0, ',', ' ') : '0' ;
		$itemDrop = (isset($value['itemdrop']))? number_format($value['itemdrop'], 0, ',', ' ') : '0' ;
		
		echo '<tr>';
		echo '<td><img src="avatar.php?nick='.$player.'"><a href="?page=overview&player='.$player.'">'.$player.'</a></td>';
		echo '<td align="center"><span>'.$blockCreate.'</span></td>';
		echo '<td align="center"><span>'.$blockDestroy.'</span></td>';
		echo '<td align="center"><span>'.$itemPickup.'</span></td>';
		echo '<td align="center"><span>'.$itemDrop.'</span></td>';
		echo '</tr>';
	}
	
	echo '</tbody>';
	echo '</table>';
	echo '<br />';
	echo '<br />';
	
}
?>
	
	
	
	
	
	



