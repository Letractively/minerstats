<?php 
class functions
{
	function getElapsedTime($time)
	{
		//1 day = 34560 s
		//1 hour = 1440 s
		//1 minute = 60 s
		
		$timestamp = time() - $time;
		$days = floor(($timestamp / 34560));
		$hours = floor(($timestamp / 1440));
		$minutes = floor(($timestamp / 60));
		
		if($days > 0)
		{
			$elapsedTime = $days;
			$sufix = ($days == 1)? 'jour' : 'jours' ;
		}
		else
		{
		
			if($hours > 0)
			{
				$elapsedTime = $hours;
				$sufix = ($hours == 1)? 'heure' : 'heures' ;
			}
			else 
			{
				if($minutes > 0)
				{
					$elapsedTime = $minutes;
					$sufix = ($minutes == 1)? 'minute' : 'minutes' ;
				}
				else
				{	
					$elapsedTime = $timestamp;
					$sufix = 'secondes';
				}				
				
			}
		
		}
		
		return $elapsedTime.' '.$sufix;
	}
	
	function readerRss($file, $objects)
	{
		
		if($string = @implode("", @file($file)))
		{			
			$tmp = preg_split("/<\/?"."item".">/", $string);
			
			for($i=1; $i < sizeof($tmp) - 1; $i +=2)

			foreach($objects as $object) 
			{
				$tmp2 = preg_split("/<\/?".$object.">/", $tmp[$i]);
				$result[$i-1][] = @$tmp2[1];
			}

			return $result;
			
		}
		
	}
	
	function uncdata($xml)
    {
        // States:
        //
        //     'out'
        //     '<'
        //     '<!'
        //     '<!['
        //     '<![C'
        //     '<![CD'
        //     '<![CDAT'
        //     '<![CDATA'
        //     'in'
        //     ']'
        //     ']]'
        //
        // (Yes, the states a represented by strings.) 
        //

        $state = 'out';

        $a = str_split($xml);

        $new_xml = '';

        foreach ($a AS $k => $v) {

            // Deal with "state".
            switch ( $state ) {
                case 'out':
                    if ( '<' == $v ) {
                        $state = $v;
                    } else {
                        $new_xml .= $v;
                    }
                break;

                case '<':
                    if ( '!' == $v  ) {
                        $state = $state . $v;
                    } else {
                        $new_xml .= $state . $v;
                        $state = 'out';
                    }
                break;

                 case '<!':
                    if ( '[' == $v  ) {
                        $state = $state . $v;
                    } else {
                        $new_xml .= $state . $v;
                        $state = 'out';
                    }
                break;

                case '<![':
                    if ( 'C' == $v  ) {
                        $state = $state . $v;
                    } else {
                        $new_xml .= $state . $v;
                        $state = 'out';
                    }
                break;

                case '<![C':
                    if ( 'D' == $v  ) {
                        $state = $state . $v;
                    } else {
                        $new_xml .= $state . $v;
                        $state = 'out';
                    }
                break;

                case '<![CD':
                    if ( 'A' == $v  ) {
                        $state = $state . $v;
                    } else {
                        $new_xml .= $state . $v;
                        $state = 'out';
                    }
                break;

                case '<![CDA':
                    if ( 'T' == $v  ) {
                        $state = $state . $v;
                    } else {
                        $new_xml .= $state . $v;
                        $state = 'out';
                    }
                break;

                case '<![CDAT':
                    if ( 'A' == $v  ) {
                        $state = $state . $v;
                    } else {
                        $new_xml .= $state . $v;
                        $state = 'out';
                    }
                break;

                case '<![CDATA':
                    if ( '[' == $v  ) {


                        $cdata = '';
                        $state = 'in';
                    } else {
                        $new_xml .= $state . $v;
                        $state = 'out';
                    }
                break;

                case 'in':
                    if ( ']' == $v ) {
                        $state = $v;
                    } else {
                        $cdata .= $v;
                    }
                break;

                case ']':
                    if (  ']' == $v  ) {
                        $state = $state . $v;
                    } else {
                        $cdata .= $state . $v;
                        $state = 'in';
                    }
                break;

                case ']]':
                    if (  '>' == $v  ) {
                        $new_xml .= str_replace('>','&gt;',
                                    str_replace('>','&lt;',
                                    str_replace('"','&quot;',
                                    str_replace('&','&amp;',
                                    $cdata))));
                        $state = 'out';
                    } else {
                        $cdata .= $state . $v;
                        $state = 'in';
                    }
                break;
            } // switch

        }

        //
        // Return.
        //
            return html_entity_decode($new_xml);
    }
	
	function substrDesc($title, $desc)
	{
		$titleLen = strlen($title);
		$descLen = strlen($desc);
		
		if(($titleLen + $descLen) > 110)
		{	
			return substr($desc, 0, (110 - strlen($titleLen))).'...';
		}
		else 
		{
			return $desc;
		}
	}
	
	
}
?>
