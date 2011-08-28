<?php 
require_once('../config.php');
require_once('../connect.php');
require_once('../classes/class.statistics.php');

$statistics = new statistics;

if(isset($_GET['type']))
{
	echo $statistics->getBlocksCounter($_GET['type']);
}

?>