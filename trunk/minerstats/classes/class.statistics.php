<?php 
class statistics 
{
	var $stats;
	var $ranks;
	var $counter;
	var $playersList;
		
	function getFullStats($player = false)
	{
		if($player)
		{
			$request = 'SELECT * FROM `stats` WHERE `player` = "'.mysql_real_escape_string($player).'" ORDER BY UPPER(`player`)';
			$result = mysql_query($request);
			while($data = mysql_fetch_assoc($result))
			{			
				$this->stats[$data['category']][$data['stat']] = $data['value'];		
			}			
		}
		else
		{
			$request = 'SELECT * FROM `stats` ORDER BY UPPER(`player`)';
			$result = mysql_query($request);
			while($data = mysql_fetch_assoc($result))
			{			
				$this->stats[$data['player']][$data['category']][$data['stat']] = $data['value'];		
			}				
		}
		
		return $this->stats;
		
	}
	
	function getBlockRanking($block)
	{
		$request = 'SELECT * FROM `stats` WHERE `stat` = "'.mysql_real_escape_string($block).'" AND (
		`category` = "blockdestroy" OR 
		`category` = "blockcreate" OR 
		`category` = "itempickup" OR 
		`category` = "itemdrop")';
		$result = mysql_query($request);
		while($data = mysql_fetch_assoc($result))
		{			
			$this->ranks[$data['player']][$data['category']] = $data['value'];		
		}		
		
		return $this->ranks;
		
	}
	
	function getMobRanking($mob)
	{
		$request = 'SELECT * FROM `stats` WHERE `stat` = "'.mysql_real_escape_string($mob).'" AND (
		`category` = "kills" OR 
		`category` = "damagedealt" OR 
		`category` = "damagetaken" OR 
		`category` = "deaths")';
		$result = mysql_query($request);
		while($data = mysql_fetch_assoc($result))
		{			
			$this->ranks[$data['player']][$data['category']] = $data['value'];		
		}		
				
		return $this->ranks;
		
	}
	
	function getPlayerCountAVG()
	{
		
		$avg[] = array();
		$playerCountAVG = array();

		//Récupération des données de l'hitorique des connexions
		$request = 'SELECT timestamp, playercount FROM `onlinelog` WHERE `timestamp` LIKE "'.date('Y-m-d').'%"';
		$result = mysql_query($request);
		while($data = mysql_fetch_assoc($result))
		{			
			@$dates[substr($data['timestamp'], 0, -6)] .= $data['playercount'].'|';
		}

		//On explose chaque chaîne en un tableau
		foreach($dates as $date => $value)
		{
			$playerCount[$date] = explode('|', $value);	
		}

		foreach($playerCount as $date => $numbers)
		{
			array_pop($numbers);
			
			foreach($numbers as $number)
			{
				@$avg[$date] += $number;
			}

			$playerCountAVG[$date] = ceil($avg[$date] / count($numbers));
			
		}

		for($i = 0; $i <= date('H'); $i++)
		{
			$count = (strlen($i) == 1)? '0'.$i : $i ;
			
			if(!array_key_exists(date('Y-m-d').' '.$count, $playerCountAVG))
			{
				$playerCountAVG[date('Y-m-d').' '.$count] = 0;
			}
			
		}

		ksort($playerCountAVG);		
		
		return $playerCountAVG;
		
	}
	
	function getBlocksCounter($type)
	{
		$req = mysql_query('SELECT SUM(value) FROM `stats` WHERE `category` = "'.$type.'"');
		$data = mysql_fetch_array($req);
		
		$this->counter = '';
		$total = number_format($data[0], 0, '', ',');		
		$chars = preg_split('//', $total, -1, PREG_SPLIT_NO_EMPTY);
		
		foreach($chars as $char)
		{
			
			if(is_numeric($char))
			{
				$this->counter .= '<span class="digit">'.$char.'</span>'."\n";
			}
			else
			{
				$this->counter .= '<span class="dot">'.$char.'</span>'."\n";				
			}
		
		}
		
		return $this->counter;
	}
	
	function getPlayersList()
	{
		$request = 'SELECT * FROM `stats` WHERE `stat` = "playedfor" or `stat` = "lastlogin" or  `stat` = "lastlogout" ORDER BY UPPER(`player`)';
		$result = mysql_query($request);
		while($data = mysql_fetch_assoc($result))
		{			
			@$this->player[$data['player']][$data['stat']] .= $data['value'];
		}
		
		return $this->player;
	}
	
	function playerExists($player)
	{

		$req = mysql_query('SELECT COUNT(*) FROM `stats` WHERE `player` = "'.$player.'"');
		$data = mysql_fetch_array($req);
		
		if($data[0] != 0)
		{
			return true;
		}
		else
		{
			return false;
		}

	}	
	
}
?>