<h1>Vos badges</h1>

<p><b>Progression</b></p>

<div id="badge-bar">
	<div class="badge-count">
	<?php 
	$playerName = (isset($_GET['player']))? $_GET['player'] : $_COOKIE['minerstats-playerName'] ;
	$stats = $statistics->getFullStats($playerName);	
	$playedFor = ($stats['stats']['playedfor'] > 0)? round($stats['stats']['playedfor'] / 3600) : '0' ;
	
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
	<span>
	<?php 
	echo $badges->getNbBadgesGet().'/'.$badges->getTotalBadges();
	$progress = ( $badges->getNbBadgesGet() / $badges->getTotalBadges() ) * 100;
	?>
	</span>
	<div class="badge-progress" style="width: <?php echo $progress; ?>%;"></div>
</div>


<p><b>Paliers des niveaux</b></p>
<ul>
<li>Niveau 1 : à partir de 64 blocs.</li>
<li>Niveau 2 : à partir de 124 blocs.</li>
<li>Niveau 3 : à partir de 256 blocs.</li>
<li>Niveau 4 : à partir de 512 blocs.</li>
<li>Niveau 5 : à partir de 1 024 blocs.</li>
<li>Niveau 6 : à partir de 2 048 blocs.</li>
<li>Niveau 7 : à partir de 4 096 blocs.</li>
<li>Niveau 8 : à partir de 8 192 blocs.</li>
<li>Niveau 9 : à partir de 16 384 blocs.</li>
<li>Niveau 10 : à partir de 32 768 blocs.</li>
<li>Niveau 11 : à partir de 65 536 blocs.</li>
<li>Niveau 12 : à partir de 131 072 blocs.</li>
</ul>

<p><b>Heures de jeu</b></p>


<div class="badge-list">
	<img src="media/badges/stevehead.png">
	<span class="info"><b>Joueur noob</b><br/>Vous êtes nouveau ou pas très actif sur le serveur.</span>
</div>

<div class="badge-list">
	<img src="media/badges/time-1.png">
	<span class="info"><b>Joueur régulier</b><br/>Vous avez passé entre 10 et 50 heures sur le serveur.</span>
</div>

<div class="badge-list">
	<img src="media/badges/time-2.png">
	<span class="info"><b>Joueur fidèle</b><br/>Vous avez passé entre 50 et 200 heures sur le serveur.</span>
</div>

<div class="badge-list">
	<img src="media/badges/time-3.png">
	<span class="info"><b>Joueur obsédé</b><br/>Vous avez passé entre 200 et 400 heures sur le serveur.</span>
</div>

<div class="badge-list">
	<img src="media/badges/time-4.png">
	<span class="info"><b>Joueur totalement accroc !</b><br/>Totalement possédé, vous avez passé plus de 400 heures sur le serveur.</span>
</div>

<p><b>Mère nature</b></p>

<div class="badge-list">
	<img src="media/badges/lumberjack.png">
	<span class="info"><b>Bûcheron</b><br/>Votre niveau de compétences en coupage de bois.</span>
</div>

<div class="badge-list">
	<img src="media/badges/digger.png">
	<span class="info"><b>Terraformeur</b><br/>Votre niveau de compétences en terraformation de terre, herbe, gravier et sable.</span>
</div>

<div class="badge-list">
	<img src="media/badges/coal-miner.png">
	<span class="info"><b>Mineur de charbon</b><br/>Votre niveau de compétences en minage de charbon.</span>
</div>

<div class="badge-list">
	<img src="media/badges/iron-miner.png">
	<span class="info"><b>Mineur de fer</b><br/>Votre niveau de compétences en minage de fer.</span>
</div>

<div class="badge-list">
	<img src="media/badges/redstone-miner.png">
	<span class="info"><b>Mineur de Redstone</b><br/>Votre niveau de compétences en minage de Redstone.</span>
</div>

<div class="badge-list">
	<img src="media/badges/gold-miner.png">
	<span class="info"><b>Mineur d'or</b><br/>Votre niveau de compétences en minage d'or.</span>
</div>

<div class="badge-list">
	<img src="media/badges/lapis-miner.png">
	<span class="info"><b>Mineur de Diamant</b><br/>Votre niveau de compétences en minage de Lapis.</span>
</div>

<div class="badge-list">
	<img src="media/badges/diamond-miner.png">
	<span class="info"><b>Mineur de Diamant</b><br/>Votre niveau de compétences en minage de charbon.</span>
</div>