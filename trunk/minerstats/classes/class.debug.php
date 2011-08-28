<?php 
class debug
{
	/**
	* Format and display a var content
	* @param $var array to debug
	* @param $type details to return
	* @return string
	*/
	
	function dump($var, $type = false)
	{
		switch($type)
		{
			case 'full' :
				echo '<pre>';
				echo var_dump($var);
				echo '</pre>';
			break;
			case 'default' :
				echo '<pre>';
				echo print_r($var);
				echo '</pre>';
			break;
			default:
				echo '<pre>';
				echo print_r($var);
				echo '</pre>';
			break;
		}
	}

}
?>