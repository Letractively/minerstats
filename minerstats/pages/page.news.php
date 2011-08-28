<h1>News Minecraft&nbsp;&nbsp;<img src="media/images/rss-on.png"></h1>

<?php

foreach($rssFeeds as $feedUrl)
{
	$rssContent = $functions->ReaderRss($feedUrl, array("title", "link", "description", "pubDate"));

	foreach($rssContent as $tab) 
	{	
		echo '<div id="news-box">';
		echo '	<a href="'.$tab[1].'" target="_blank" class="news-title">'.$tab[0].' <span class="news-description">'.$functions->substrDesc($tab[0], $functions->uncdata($tab[2])).'</span><div class="news-date">'.date("d/m/Y", strtotime($tab[3])).'</div></a>';
		echo '</div>';
	}

}
?>