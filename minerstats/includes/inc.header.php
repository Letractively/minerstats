<!DOCTYPE html> 
<html> 
	<head> 
		<title><?php echo MINERSTATS_TITLE; ?></title> 
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.qtip.min.js"></script>
		<script type="text/javascript" src="js/jquery.scripts.js"></script>
		<script type="text/javascript" src="js/jquery.fixedtableheader.js"></script>
		<script type="text/javascript" src="js/jquery.tablesorter.js"></script>
		<link rel="stylesheet" type="text/css" href="media/css/style.css">
		<link type="text/css" rel="stylesheet" href="media/css/jquery.qtip.min.css" />
		<link rel="shortcut icon" href="media/images/favicon.png">
	</head>
	
	<body> 
		
		<div class="login-bg"></div>
		
		<div id="login-form">
			
			<div class="content">
				
					<h2><?php echo LOGIN; ?></h2>
					
					<div class="info-label loading" name="logging"><?php echo LOGGING_FORM_LOADING; ?></div>
					
					<label for="mc-login"><?php echo LOGGING_FORM_PLAYERID; ?></label>
					<input type="text" name="mc-login" id="mc-login">
					
					<label for="password"><?php echo LOGGING_FORM_PASSWORD; ?></label>
					<input type="password" name="password" id="password">
					
					<input type="button" class="submit" name="logging" value="<?php echo LOGGING_FORM_SUBMIT; ?>">

			</div>
			
		</div>
	
		<div id="header">
			<div>				
				<?php 
				if(isset($_COOKIE['minerstats-playerName']))
				{
					echo '<a class="links logout no-img" href="#logout">';
					echo LOGOUT;
					echo '</a>';
					
					echo '<a class="links" href="?page=overview&player='.$_COOKIE['minerstats-playerName'].'" style="background-image: url(avatar.php?nick='.$_COOKIE['minerstats-playerName'].');">';
					echo $_COOKIE['minerstats-playerName'];
					echo '</a>';
				}
				else
				{
					echo '<a class="links no-img" href="?page=activation">';
					echo ACTIVATION;
					echo '</a>';
					
					echo '<a class="links no-img login" href="#login">';
					echo LOGIN;
					echo '</a>';
				}						
				?>				
				<a href="http://code.google.com/p/minerstats/" target="_blank"><img src="media/images/logo.png"></a>
				<sup><?php echo MINERSTATS_VERSION; ?></sup>
			</div>
		</div>
		
		<div id="menu">
			<div>
				<a href="?"><?php echo MENU_ITEM_0; ?></a>
				<a href="?page=news"><?php echo MENU_ITEM_1; ?></a>
				<a href="?page=players"><?php echo MENU_ITEM_2; ?></a>
				<!--<a href="?page=rankings"><?php echo MENU_ITEM_3; ?></a>-->
				<a href="?page=badges"><?php echo MENU_ITEM_4; ?></a>
			</div>
		</div>
		
		<?php
		if(isset($_COOKIE['minerstats-playerName']))
		{
			$stats = $statistics->getFullStats($_COOKIE['minerstats-playerName']);
			
			//Stats variables definition
			$playedFor = ($stats['stats']['playedfor'] > 0)? round($stats['stats']['playedfor'] / 3600) : '0' ;
			$totalBlockDestroy = ($stats['stats']['totalblockdestroy'] > 0)? number_format($stats['stats']['totalblockdestroy'], 0, '.', ' ') : '0' ;
			$totalBlockCreate = ($stats['stats']['totalblockcreate'] > 0)? number_format($stats['stats']['totalblockcreate'], 0, '.', ' ') : '0' ;
			$lastLogin = ($stats['stats']['lastlogin'] > 0)? $functions->getElapsedTime($stats['stats']['lastlogin']) : 'never' ;
			$walkedBlocks = ($stats['stats']['move'] > 0)? number_format($stats['stats']['move'], 0, '.', ' ') : '0' ;
			$walkedKM = ($stats['stats']['move'] > 0)? number_format(round(($stats['stats']['move'] * 0.5) / 1000), 0, '.', ' ') : '0' ;		
		?>
			
			<div id="stats">
				<span class="stat"><?php echo STATBAR_TIME_PLAYED1; ?> <span><?php echo $playedFor; ?></span> <?php echo STATBAR_TIME_PLAYED2; ?></span>
				<span class="stat"><?php echo STATBAR_DESTROYED_BLOCKS; ?> <span><?php echo $totalBlockDestroy; ?></span></span>
				<span class="stat"><?php echo STATBAR_CREATED_BLOCKS; ?> <span><?php echo $totalBlockCreate; ?></span></span>
				<span class="stat"><?php echo STATBAR_LAST_LOGIN; ?> <span title="<?php echo $lastLogin; ?>"><?php echo $lastLogin; ?></span></span>
				<span class="stat"><?php echo STATBAR_WALKED_BLOCKS1; ?> <span><?php echo $walkedBlocks; ?></span> <?php echo STATBAR_WALKED_BLOCKS2; ?> <span><?php echo $walkedKM; ?></span> <?php echo STATBAR_WALKED_BLOCKS3; ?></span>
			</div>
			
		<?php } ?>		
		
			<div id="page-content">
		
