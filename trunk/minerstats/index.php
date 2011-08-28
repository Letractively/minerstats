<?php 
//Config
require_once('config.php');
require_once('connect.php');
require_once('lang/'.$language.'.php');

//Classes
require_once('classes/class.debug.php');
require_once('classes/class.functions.php');
require_once('classes/class.statistics.php');
require_once('classes/class.introduction.php');
require_once('classes/class.badges.php');

$debug = new debug;
$functions = new functions;
$statistics = new statistics;
$introduction = new introduction;
$badges = new badges;

//Affichage
include('includes/inc.header.php');

if(isset($_GET['page']))
{
	switch($_GET['page'])
	{
		case 'activation':
			include('pages/page.activation.php');
		break;
		case 'overview':			
			$page = ($statistics->playerExists($_GET['player']))? 'pages/page.overview.php' : 'pages/page.404.php' ;			
			include($page);
		break;
		case 'ranks':
			include('pages/page.ranks.php');
		break;
		case 'players':
			include('pages/page.players.php');
		break;
		case 'logs':
			include('pages/page.logs.php');
		break;
		case 'news':
			include('pages/page.news.php');
		break;
		case 'rankings':
			include('pages/page.rankings.php');
		break;
		case 'badges':
			$page = (isset($_COOKIE['minerstats-playerName']))? 'pages/page.badges.php' : 'pages/page.404.php' ;	
			include($page);
		break;		
		default:
			include('pages/page.404.php');
		break;
	}
}
else
{
	include('pages/page.default.php');
}
	
include('includes/inc.footer.php');
?>