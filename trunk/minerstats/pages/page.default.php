<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
	
	//GRAPHS

	google.load("visualization", "1", {packages:["corechart"]});
	google.setOnLoadCallback(drawChart);
	function drawChart() 
	{
		var data = new google.visualization.DataTable();
		data.addColumn('string', 'Date');
		data.addColumn('number', 'Joueurs');
		data.addRows(<?php echo count($statistics->getPlayerCountAVG()); ?>);
		
		<?php
		$i = 0;
		
		foreach($statistics->getPlayerCountAVG() as $date => $number)
		{
			echo 'data.setValue('.$i.', 0, \''.substr($date, 11, 13).'h\');';
			echo 'data.setValue('.$i.', 1, '.$number.');';
						
			$i++;
		}		
		?>

		var chart = new google.visualization.LineChart(document.getElementById('chart'));
		chart.draw(data, 
		{
			width: '100%', 
			height: 250, 
			title: 'Moyenne des connexions du jour', 
			legend: 'none',
			lineWidth: '4',
			colors:['#6EAAD7'],
		});
	}
	
	// BLOCKS COUNTERS
	
	$(document).ready(function() 
	{
		
		$.get("ajax/ajax.counter.php", { type: "blockcreate" }, function(data)
		{
			$('div[name="createdBlocksCounter"]').html(data);
		});
		
		$.get("ajax/ajax.counter.php", { type: "blockdestroy" }, function(data)
		{
			$('div[name="destroyedBlocksCounter"]').html(data);
		});
	
		var auto_refresh = setInterval(

		function()
		{
			$.get("ajax/ajax.counter.php", { type: "blockcreate" }, function(data)
			{
				$('div[name="createdBlocksCounter"]').html(data);
			});
			
			$.get("ajax/ajax.counter.php", { type: "blockdestroy" }, function(data)
			{
				$('div[name="destroyedBlocksCounter"]').html(data);
			});
			
		}, 3000);
	
	});
	
</script>	
	
<h1><?php echo DEFAULT_PAGE_TITLE; ?></h1>

<?php 

if($hideGraph != true)
	echo '<div id="chart"></div>';		

echo '<div class="counter">';
echo '<div name="createdBlocksCounter">';
echo '</div>';
echo '<span class="counter title">blocs cr&eacute;&eacute;s</span>';
echo '</div>';

echo '<div class="counter">';
echo '<div name="destroyedBlocksCounter">';
echo '</div>';
echo '<span class="counter title">blocs d&eacute;truits</span>';
echo '</div>';
?>