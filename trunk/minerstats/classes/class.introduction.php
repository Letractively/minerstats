<?php 
class introduction
{
	var $introduction;
	
	function getPlayerIntroduction($playerName, $playedFor, $totalBlockDestroy, $totalBlockCreate, $ratio, $walkedBlocks, $walkedKM, $lastLogin)
	{
		
		$functions = new functions;
		require_once('class.functions.php');
		
		//Nombre d'heures jouées
		switch($playedFor)
		{			
			case $playedFor < "50":
				$this->introduction .= ''.$playerName.' est un habitant nouvellement arriv&eacute; dans la r&eacute;gion depuis &agrave; peine <span>'.$playedFor.' heures</span>. ';				
			break;
			
			case $playedFor > "100" && $playedFor < "200":
				$this->introduction .= ''.$playerName.' est un habitant particuli&egrave;rement fid&egrave;le puisqu\'on a pu l\'appercevoir dans la r&eacute;gion plus de <span>'.$playedFor.' heures</span> au total. ';				
			break;
			
			case $playedFor > "200" && $playedFor < "300":
				$this->introduction .= ''.$playerName.' est un habitant particuli&egrave;rement fid&egrave;le puisqu\'on a pu l\'appercevoir dans la r&eacute;gion plus de <span>'.$playedFor.' heures</span> au total. ';
			break;
			
			case $playedFor > "300":
				$this->introduction .= ''.$playerName.' est un habitant qu\'on ne pr&eacute;sente plus, tout le monde le connait. Certaines l&eacute;gendes disent qu\'il aurait &eacute;t&eacute; pr&eacute;sent dans la r&eacute;gion plus de <span>'.$playedFor.' heures</span> au total ! ';
			break;
			
		}
						
		$this->introduction .= 'Ainsi, il comptabilise <span>'.$totalBlockDestroy.' blocs d&eacute;truits</span> et <span>'.$totalBlockCreate.' blocs cr&eacute;&eacute;s.</span> ';
		
		//Ratio minage
		switch($ratio)
		{			
			case "0":
				$this->introduction .= '';				
			break;			
			case $ratio < "0.5":
				$this->introduction .= 'Il paraît que '.$playerName.' prirait Shiva, le Dieu de la destruction, chaque soir avant de passer sa nuit &agrave; miner. ';				
			break;
			
			case $ratio > "0.5" && $ratio < "1":
				$this->introduction .= 'C\'est un habitant qui pr&eacute;f&egrave;re miner plut&ocirc;t que de construire. On raconte qu\'il se serait constitu&eacute; un stock de pioche impressionnant. ';				
			break;
			
			case $ratio > "1" && $ratio < "1.5":
				$this->introduction .= 'Il prend un malin plaisir &agrave; se qualifier comme un cr&eacute;ateur plut&ocirc;t novice, statut qu\'il revendique haut et fort ! ';
			break;
			
			case $ratio > "1.5":
				$this->introduction .= 'Miner est un passe-temps auquel '.$playerName.' ne croit pas. Tout ce qui lui importe, c\'est de construire, toujours construire... ';
			break;
		}
		
		//Blocs parcourus
		switch($walkedBlocks)
		{			
			case $ratio < "5000":
				$this->introduction .= 'On est pas tout &agrave; fait s&ucirc;r, mais il se pourrait qu\'il aurait peur de sortir de chez lui ou alors il n\'aime pas marcher. ';				
			break;
			
			case $ratio > "5000" && $ratio < "100000":
				$this->introduction .= 'Il sort tr&egrave;s peu de chez lui, mais ne dit jamais non &agrave; une petite balade, seul ou &agrave; plusieurs. ';				
			break;
			
			case $ratio > "100000" && $ratio < "500000":
				$this->introduction .= 'Il aime la nature et s\'aventure parfois sur des terrains inexplor&eacute;s, mais cel&agrave; reste relativement rare. ';
			break;
			
			case $ratio > "500000":
				$this->introduction .= 'Il aime &eacute;galement profiter du paysage qu\'offre la r&eacute;gion comme l\'indiquent ses <span>'.$walkedKM.' Km</span> qu\'il a parcouru &agrave; pieds. ';
			break;
		}
		
		//Dernière activité
		switch($lastLogin)
		{			
			case ($lastLogin / 3600) < "1":
				$this->introduction .= 'La derni&egrave;re fois qu\'il a &eacute;t&eacute; apper&ccedil;u remonte &agrave; quelques minutes, il se pourrait qu\'il soit encore en ville. ';				
			break;
			
			case ($lastLogin / 3600) > "1" && $lastLogin < "10":
				$this->introduction .= 'Il est pass&eacute; il y a quelques heures dire un petit bonjour &agrave; ses amis et est reparti, il reviendra surement. ';				
			break;
			
			case ($lastLogin / 3600) > "10":
				$this->introduction .= 'La derni&egrave;re fois qu\'on l\'a vu dans la r&eacute;gion c\'&eacute;tait il y &agrave; environ <span>'.$functions->getElapsedTime($lastLogin).'</span>. ';
			break;
			
			case "never":
				$this->introduction .= 'Plus personne ne l\'a vu depuis des lustres, on n\'est m&ecirc;me pas s&ucirc;r de l\'avoir vu un jour... ';
			break;
		}
		
		
		return $this->introduction;
	}
}
?>