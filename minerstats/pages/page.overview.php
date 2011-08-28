<h1>
<?php 
$playerName = (isset($_GET['player']))? $_GET['player'] : $_COOKIE['minerstats-playerName'] ;
//echo '<span class="action right"><a href="?page=admin&action=delete&player='.$playerName.'">Supprimer le profil</a></span>';
echo 'Profil du joueur '.$playerName; 
?>
</h1>

<?php 
require_once('blocks.php');
require_once('mobs.php');
$stats = $statistics->getFullStats($playerName);

//Stats variables definition
$playedFor = ($stats['stats']['playedfor'] > 0)? round($stats['stats']['playedfor'] / 3600) : '0' ;
$totalBlockDestroy = ($stats['stats']['totalblockdestroy'] > 0)? number_format($stats['stats']['totalblockdestroy'], 0, '.', ' ') : '0' ;
$totalBlockCreate = ($stats['stats']['totalblockcreate'] > 0)? number_format($stats['stats']['totalblockcreate'], 0, '.', ' ') : '0' ;
$lastLogin = ($stats['stats']['lastlogin'] > 0)? $stats['stats']['lastlogin'] : 'never' ;
$walkedBlocks = ($stats['stats']['move'] > 0)? $stats['stats']['move'] : '0' ;
$walkedKM = ($stats['stats']['move'] > 0)? ($stats['stats']['move'] * 0.5) / 1000 : '0' ;
$ratio = ($totalBlockDestroy != 0 && $totalBlockCreate != 0)? number_format(($totalBlockCreate / $totalBlockDestroy), 2, '.', ' ') : 0 ;
$totalDeaths = ($stats['deaths']['total'] > 0)? number_format($stats['deaths']['total'], 0, '.', ' ') : '0' ;
$totalKills = ($stats['kills']['total'] > 0)? number_format($stats['kills']['total'], 0, '.', ' ') : '0' ;
$chatLetters = ($stats['stats']['chat'] > 0)? number_format($stats['stats']['chat'], 0, '.', ' ') : '0' ;
$logins = ($stats['stats']['login'] > 0)? number_format($stats['stats']['login'], 0, '.', ' ') : '0' ;
?>

<div class="overview-right">
	<h3>Ses statistiques</h3>
	
		<div class="stats-left">
			<span class="stat">Temps de jeu : <?php echo $playedFor; ?> heures</span>
			<span class="stat">Blocs créés : <?php echo $totalBlockCreate; ?></span>
			<span class="stat">Blocs détruits : <?php echo $totalBlockDestroy; ?></span>
			<span class="stat">Morts : <?php echo $totalDeaths; ?></span>
			<span class="stat">Mobs tués : <?php echo $totalKills; ?></span>		
		</div>
	
		<div class="stats-right">
			<span class="stat">Ratio : <?php echo $ratio; ?></span>		
			<span class="stat">Distance parcourue : <?php echo number_format($walkedBlocks, 0, '.', ' '); ?> blocs</span>
			<span class="stat">Lettres dans le Chat : <?php echo $chatLetters; ?></span>
			<span class="stat">Connexions au serveur : <?php echo $logins; ?></span>
			<span class="stat">Dernière connexion : <?php echo $functions->getElapsedTime($lastLogin); ?></span>			
		</div>
		
	<h3>Ses badges</h3>
	<div class="badges">

		<?php
		$badges->getBadgeTime($playedFor);	
		$badges->getBadgeLumberjack($stats['blockdestroy']['log']);
		$badges->getBadgeDigger(($stats['blockdestroy']['dirt'] + $stats['blockdestroy']['soil'] + $stats['blockdestroy']['grass'] + $stats['blockdestroy']['gravel'] + $stats['blockdestroy']['sand']));
		$badges->getBadgeCoalMiner($stats['blockdestroy']['coalore']);
		$badges->getBadgeIronMiner($stats['blockdestroy']['ironore']);
		$badges->getBadgeRedstoneMiner($stats['blockdestroy']['redstoneore']);
		$badges->getBadgeGoldMiner($stats['blockdestroy']['goldore']);
		$badges->getBadgeDiamondMiner($stats['blockdestroy']['diamondore']);
		?>

	</div>
</div>

<applet code="net.minecraft.skintest.ModelPreviewApplet"
  archive="http://www.minecraft.net/skin/skintest.jar" codebase="."
  width="320" height="320">
    <param name="name" value="<?php echo $playerName; ?>" />
</applet>

<br clear="both">

<h1>Satistiques des blocs</h1>

<?php 
echo '<table border="0" cellspacing="0" class="stats" name="stats">';
echo '<thead>';
echo '<tr class="no-hover">';
echo '<th width="240">Bloc</th>';
echo '<th width="100">Pos&eacute;s</th>';
echo '<th width="100">D&eacute;truits</th>';
echo '<th width="100">Ramass&eacute;s</th>';
echo '<th width="100">Jet&eacute;s</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

foreach($blocks as $block)
{
	$blockCreate = (@isset($stats['blockcreate'][$block]))? number_format($stats['blockcreate'][$block], 0, ',', ' ') : '0' ;
	$blockDestroy = (@isset($stats['blockdestroy'][$block]))? number_format($stats['blockdestroy'][$block], 0, ',', ' ') : '0' ;
	$blockPickUp = (@isset($stats['itempickup'][$block]))? number_format($stats['itempickup'][$block], 0, ',', ' ') : '0' ;
	$blockDrop = (@isset($stats['itemdrop'][$block]))? number_format($stats['itemdrop'][$block], 0, ',', ' ') : '0' ;
	
	if($blockCreate > '0' or $blockDestroy > '0' or $blockPickUp > '0' or $blockDrop > '0')
	{
		echo '<tr>';
		echo '	<td><img src="media/items/'.$block.'.png"> <a href="?page=ranks&block='.$block.'">'.$blockNames[$block].'</a></td>';
		echo '	<td class="center">'.$blockCreate.'</td>';
		echo '	<td class="center">'.$blockDestroy.'</td>';
		echo '	<td class="center">'.$blockPickUp.'</td>';
		echo '	<td class="center">'.$blockDrop.'</td>';
		echo '</tr>';
	}

}

?>

	</tbody>
</table>

<br />

<h1>Satistiques des Mobs</h1>

<br />

<?php 
echo '<table border="0" cellspacing="0" class="stats" name="stats">';
echo '<thead>';
echo '<tr class="no-hover">';
echo '<th width="240">Mob</th>';
echo '<th width="100">Tu&eacute;s</th>';
echo '<th width="100">Dmg inflig&eacute;s</th>';
echo '<th width="100">Dmg re&ccedil;us</th>';
echo '<th width="100">Vous a tu&eacute;</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

foreach($mobs as $mob)
{
	$mobKills = (@isset($stats['kills'][$mob]))? number_format($stats['kills'][$mob], 0, ',', ' ') : '0' ;
	$mobDamageDealt = (@isset($stats['damagedealt'][$mob]))? number_format($stats['damagedealt'][$mob], 0, ',', ' ') : '0' ;
	$mobDamageTaken = (@isset($stats['damagetaken'][$mob]))? number_format($stats['damagetaken'][$mob], 0, ',', ' ') : '0' ;
	$mobDeaths = (@isset($stats['deaths'][$mob]))? number_format($stats['deaths'][$mob], 0, ',', ' ') : '0' ;
	
	if($mobKills > '0' or $mobDamageDealt > '0' or $mobDamageTaken > '0' or $mobDeaths > '0')
	{
		echo '<tr>';
		echo '	<td><img src="media/mobs/'.$mob.'.png"> <a href="?page=ranks&mob='.$mob.'">'.$mobNames[$mob].'</a></td>';
		echo '	<td class="center">'.$mobKills.'</td>';
		echo '	<td class="center">'.$mobDamageDealt.'</td>';
		echo '	<td class="center">'.$mobDamageTaken.'</td>';
		echo '	<td class="center">'.$mobDeaths.'</td>';
		echo '</tr>';
	}

}

?>

	</tbody>
</table>

<br />
<br />








