<?php 
class badges
{
	var $nbBadgesGet = 0;
	var $nbTotalBadges = 0;

	function getTotalBadges()
	{		
		return $this->nbTotalBadges;
	}
	
	function getNbBadgesGet()
	{
		return $this->nbBadgesGet;
	}	
	
	function getBadgeTime($time)
	{	
		$this->nbTotalBadges += 5;
		
		if($time < 10)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/stevehead.png" class="badge" title="Joueur noob">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($time > 10 && $time < 50)
		{
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/time-1.png" class="badge" title="Joueur régulier">' : false ;
			$this->nbBadgesGet += 2;
		}
		elseif($time > 50 && $time < 200)
		{
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/time-2.png" class="badge" title="Joueur fidèle">' : false ;		
			$this->nbBadgesGet += 3;
		}
		elseif($time > 200 && $time < 400)
		{
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/time-3.png" class="badge" title="Joueur obsédé">' : false ;		
			$this->nbBadgesGet += 4;
		}
		elseif($time > 400)
		{
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/time-4.png" class="badge" title="Joueur totalement accroc !">' : false ;		
			$this->nbBadgesGet += 5;
		}

	}
	
	function getBadgeCoalMiner($coalores)
	{	
		$this->nbTotalBadges += 12;
				
		if($coalores > 64 && $coalores < 128)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/coal-miner-1.png" class="badge" title="Mineur de charbon de niveau 1">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($coalores > 128 && $coalores < 256)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/coal-miner-2.png" class="badge" title="Mineur de charbon de niveau 2">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($coalores > 256 && $coalores < 512)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/coal-miner-3.png" class="badge" title="Mineur de charbon de niveau 3">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($coalores > 512 && $coalores < 1024)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/coal-miner-4.png" class="badge" title="Mineur de charbon de niveau 4">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($coalores > 1024 && $coalores < 2048)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/coal-miner-5.png" class="badge" title="Mineur de charbon de niveau 5">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($coalores > 2048 && $coalores < 4096)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/coal-miner-6.png" class="badge" title="Mineur de charbon de niveau 6">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($coalores > 4096 && $coalores < 8192)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/coal-miner-7.png" class="badge" title="Mineur de charbon de niveau 7">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($coalores > 8192 && $coalores < 16384)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/coal-miner-8.png" class="badge" title="Mineur de charbon de niveau 8">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($coalores > 16384 && $coalores < 32768)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/coal-miner-9.png" class="badge" title="Mineur de charbon de niveau 9">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($coalores > 32768 && $coalores < 65536)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/coal-miner-10.png" class="badge" title="Mineur de charbon de niveau 10">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($coalores > 65536 && $coalores < 131072)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/coal-miner-11.png" class="badge" title="Mineur de charbon de niveau 11">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($coalores > 131072)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/coal-miner-12.png" class="badge" title="Mineur de charbon de niveau 12">' : false ;			
			$this->nbBadgesGet += 1;
		}
	
	}
	
	function getBadgeIronMiner($ironores)
	{	
		$this->nbTotalBadges += 12;
				
		if($ironores > 64 && $ironores < 128)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/iron-miner-1.png" class="badge" title="Mineur de fer de niveau 1">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($ironores > 128 && $ironores < 256)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/iron-miner-2.png" class="badge" title="Mineur de fer de niveau 2">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($ironores > 256 && $ironores < 512)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/iron-miner-3.png" class="badge" title="Mineur de fer de niveau 3">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($ironores > 512 && $ironores < 1024)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/iron-miner-4.png" class="badge" title="Mineur de fer de niveau 4">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($ironores > 1024 && $ironores < 2048)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/iron-miner-5.png" class="badge" title="Mineur de fer de niveau 5">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($ironores > 2048 && $ironores < 4096)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/iron-miner-6.png" class="badge" title="Mineur de fer de niveau 6">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($ironores > 4096 && $ironores < 8192)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/iron-miner-7.png" class="badge" title="Mineur de fer de niveau 7">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($ironores > 8192 && $ironores < 16384)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/iron-miner-8.png" class="badge" title="Mineur de fer de niveau 8">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($ironores > 16384 && $ironores < 32768)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/iron-miner-9.png" class="badge" title="Mineur de fer de niveau 9">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($ironores > 32768 && $ironores < 65536)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/iron-miner-10.png" class="badge" title="Mineur de fer de niveau 10">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($ironores > 65536 && $ironores < 131072)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/iron-miner-11.png" class="badge" title="Mineur de fer de niveau 11">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($ironores > 131072)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/iron-miner-12.png" class="badge" title="Mineur de fer de niveau 12">' : false ;			
			$this->nbBadgesGet += 1;
		}	
		
	}
	
	function getBadgeRedstoneMiner($redstoneores)
	{	
		$this->nbTotalBadges += 12;
				
		if($redstoneores > 64 && $redstoneores < 128)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/redstone-miner-1.png" class="badge" title="Mineur de Redstone de niveau 1">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($redstoneores > 128 && $redstoneores < 256)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/redstone-miner-2.png" class="badge" title="Mineur de Redstone de niveau 2">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($redstoneores > 256 && $redstoneores < 512)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/redstone-miner-3.png" class="badge" title="Mineur de Redstone de niveau 3">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($redstoneores > 512 && $redstoneores < 1024)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/redstone-miner-4.png" class="badge" title="Mineur de Redstone de niveau 4">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($redstoneores > 1024 && $redstoneores < 2048)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/redstone-miner-5.png" class="badge" title="Mineur de Redstone de niveau 5">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($redstoneores > 2048 && $redstoneores < 4096)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/redstone-miner-6.png" class="badge" title="Mineur de Redstone de niveau 6">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($redstoneores > 4096 && $redstoneores < 8192)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/redstone-miner-7.png" class="badge" title="Mineur de Redstone de niveau 7">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($redstoneores > 8192 && $redstoneores < 16384)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/redstone-miner-8.png" class="badge" title="Mineur de Redstone de niveau 8">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($redstoneores > 16384 && $redstoneores < 32768)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/redstone-miner-9.png" class="badge" title="Mineur de Redstone de niveau 9">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($redstoneores > 32768 && $redstoneores < 65536)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/redstone-miner-10.png" class="badge" title="Mineur de Redstone de niveau 10">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($redstoneores > 65536 && $redstoneores < 131072)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/redstone-miner-11.png" class="badge" title="Mineur de Redstone de niveau 11">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($redstoneores > 131072)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/redstone-miner-12.png" class="badge" title="Mineur de Redstone de niveau 12">' : false ;			
			$this->nbBadgesGet += 1;
		}	
		
	}
	
	function getBadgeGoldMiner($goldores)
	{	
		$this->nbTotalBadges += 12;
				
		if($goldores > 64 && $goldores < 128)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/gold-miner-1.png" class="badge" title="Mineur d\'or de niveau 1">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($goldores > 128 && $goldores < 256)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/gold-miner-2.png" class="badge" title="Mineur d\'or de niveau 2">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($goldores > 256 && $goldores < 512)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/gold-miner-3.png" class="badge" title="Mineur d\'or de niveau 3">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($goldores > 512 && $goldores < 1024)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/gold-miner-4.png" class="badge" title="Mineur d\'or de niveau 4">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($goldores > 1024 && $goldores < 2048)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/gold-miner-5.png" class="badge" title="Mineur d\'or de niveau 5">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($goldores > 2048 && $goldores < 4096)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/gold-miner-6.png" class="badge" title="Mineur d\'or de niveau 6">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($goldores > 4096 && $goldores < 8192)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/gold-miner-7.png" class="badge" title="Mineur d\'or de niveau 7">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($goldores > 8192 && $goldores < 16384)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/gold-miner-8.png" class="badge" title="Mineur d\'or de niveau 8">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($goldores > 16384 && $goldores < 32768)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/gold-miner-9.png" class="badge" title="Mineur d\'or de niveau 9">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($goldores > 32768 && $goldores < 65536)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/gold-miner-10.png" class="badge" title="Mineur d\'or de niveau 10">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($goldores > 65536 && $goldores < 131072)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/gold-miner-11.png" class="badge" title="Mineur d\'or de niveau 11">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($goldores > 131072)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/gold-miner-12.png" class="badge" title="Mineur d\'or de niveau 12">' : false ;			
			$this->nbBadgesGet += 1;
		}	

	}
	
	function getBadgeLapisMiner($lapisores)
	{	
		$this->nbTotalBadges += 12;
				
		if($lapisores > 64 && $lapisores < 128)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/lapis-miner-1.png" class="badge" title="Mineur de Lapis de niveau 1">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($lapisores > 128 && $lapisores < 256)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/lapis-miner-2.png" class="badge" title="Mineur de Lapis de niveau 2">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($lapisores > 256 && $lapisores < 512)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/lapis-miner-3.png" class="badge" title="Mineur de Lapis de niveau 3">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($lapisores > 512 && $lapisores < 1024)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/lapis-miner-4.png" class="badge" title="Mineur de Lapis de niveau 4">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($lapisores > 1024 && $lapisores < 2048)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/lapis-miner-5.png" class="badge" title="Mineur de Lapis de niveau 5">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($lapisores > 2048 && $lapisores < 4096)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/lapis-miner-6.png" class="badge" title="Mineur de Lapis de niveau 6">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($lapisores > 4096 && $lapisores < 8192)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/lapis-miner-7.png" class="badge" title="Mineur de Lapis de niveau 7">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($lapisores > 8192 && $lapisores < 16384)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/lapis-miner-8.png" class="badge" title="Mineur de Lapis de niveau 8">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($lapisores > 16384 && $lapisores < 32768)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/lapis-miner-9.png" class="badge" title="Mineur de Lapis de niveau 9">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($lapisores > 32768 && $lapisores < 65536)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/lapis-miner-10.png" class="badge" title="Mineur de Lapis de niveau 10">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($lapisores > 65536 && $lapisores < 131072)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/lapis-miner-11.png" class="badge" title="Mineur de Lapis de niveau 11">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($lapisores > 131072)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/lapis-miner-12.png" class="badge" title="Mineur de Lapis de niveau 12">' : false ;			
			$this->nbBadgesGet += 1;
		}	
		
	}
	
	function getBadgeDiamondMiner($diamondores)
	{	
		$this->nbTotalBadges += 12;
				
		if($diamondores > 64 && $diamondores < 128)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/diamond-miner-1.png" class="badge" title="Mineur de Diamant de niveau 1">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($diamondores > 128 && $diamondores < 256)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/diamond-miner-2.png" class="badge" title="Mineur de Diamant de niveau 2">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($diamondores > 256 && $diamondores < 512)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/diamond-miner-3.png" class="badge" title="Mineur de Diamant de niveau 3">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($diamondores > 512 && $diamondores < 1024)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/diamond-miner-4.png" class="badge" title="Mineur de Diamant de niveau 4">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($diamondores > 1024 && $diamondores < 2048)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/diamond-miner-5.png" class="badge" title="Mineur de Diamant de niveau 5">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($diamondores > 2048 && $diamondores < 4096)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/diamond-miner-6.png" class="badge" title="Mineur de Diamant de niveau 6">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($diamondores > 4096 && $diamondores < 8192)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/diamond-miner-7.png" class="badge" title="Mineur de Diamant de niveau 7">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($diamondores > 8192 && $diamondores < 16384)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/diamond-miner-8.png" class="badge" title="Mineur de Diamant de niveau 8">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($diamondores > 16384 && $diamondores < 32768)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/diamond-miner-9.png" class="badge" title="Mineur de Diamant de niveau 9">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($diamondores > 32768 && $diamondores < 65536)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/diamond-miner-10.png" class="badge" title="Mineur de Diamant de niveau 10">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($diamondores > 65536 && $diamondores < 131072)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/diamond-miner-11.png" class="badge" title="Mineur de Diamant de niveau 11">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($diamondores > 131072)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/diamond-miner-12.png" class="badge" title="Mineur de Diamant de niveau 12">' : false ;			
			$this->nbBadgesGet += 1;
		}	
		
	}
	
	function getBadgeLumberjack($logs)
	{	
		$this->nbTotalBadges += 12;
				
		if($logs > 64 && $logs < 128)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/lumberjack-1.png" class="badge" title="Bûcheron de niveau 1">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($logs > 128 && $logs < 256)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/lumberjack-2.png" class="badge" title="Bûcheron de niveau 2">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($logs > 256 && $logs < 512)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/lumberjack-3.png" class="badge" title="Bûcheron de niveau 3">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($logs > 512 && $logs < 1024)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/lumberjack-4.png" class="badge" title="Bûcheron de niveau 4">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($logs > 1024 && $logs < 2048)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/lumberjack-5.png" class="badge" title="Bûcheron de niveau 5">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($logs > 2048 && $logs < 4096)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/lumberjack-6.png" class="badge" title="Bûcheron de niveau 6">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($logs > 4096 && $logs < 8192)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/lumberjack-7.png" class="badge" title="Bûcheron de niveau 7">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($logs > 8192 && $logs < 16384)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/lumberjack-8.png" class="badge" title="Bûcheron de niveau 8">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($logs > 16384 && $logs < 32768)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/lumberjack-9.png" class="badge" title="Bûcheron de niveau 9">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($logs > 32768 && $logs < 65536)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/lumberjack-10.png" class="badge" title="Bûcheron de niveau 10">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($logs > 65536 && $logs < 131072)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/lumberjack-11.png" class="badge" title="Bûcheron de niveau 11">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($logs > 131072)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/lumberjack-12.png" class="badge" title="Bûcheron de niveau 12">' : false ;			
			$this->nbBadgesGet += 1;
		}	
		
	}
	

	
	function getBadgeDigger($blocks)
	{	
		$this->nbTotalBadges += 12;
				
		if($blocks > 64 && $blocks < 128)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/digger-1.png" class="badge" title="Terraformeur de niveau 1">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($blocks > 128 && $blocks < 256)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/digger-2.png" class="badge" title="Terraformeur de niveau 2">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($blocks > 256 && $blocks < 512)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/digger-3.png" class="badge" title="Terraformeur de niveau 3">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($blocks > 512 && $blocks < 1024)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/digger-4.png" class="badge" title="Terraformeur de niveau 4">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($blocks > 1024 && $blocks < 2048)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/digger-5.png" class="badge" title="Terraformeur de niveau 5">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($blocks > 2048 && $blocks < 4096)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/digger-6.png" class="badge" title="Terraformeur de niveau 6">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($blocks > 4096 && $blocks < 8192)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/digger-7.png" class="badge" title="Terraformeur de niveau 7">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($blocks > 8192 && $blocks < 16384)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/digger-8.png" class="badge" title="Terraformeur de niveau 8">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($blocks > 16384 && $blocks < 32768)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/digger-9.png" class="badge" title="Terraformeur de niveau 9">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($blocks > 32768 && $blocks < 65536)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/digger-10.png" class="badge" title="Terraformeur de niveau 10">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($blocks > 65536 && $blocks < 131072)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/digger-11.png" class="badge" title="Terraformeur de niveau 11">' : false ;			
			$this->nbBadgesGet += 1;
		}
		elseif($blocks > 131072)
		{			
			echo ($_GET['page'] != 'badges')? '<img src="media/badges/digger-12.png" class="badge" title="Terraformeur de niveau 12">' : false ;			
			$this->nbBadgesGet += 1;
		}	
		
	}	
}
?>