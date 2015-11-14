## Installation ##

### Prerequisites ###

Minerstats requires four things you must have :
  * A **Local** Web server
  * A **Local** MySQL Database
  * [Stats](http://forums.bukkit.org/threads/inactive-info-stats-v0-985-and-achievements-v0-981-617.1328/) plugin for Craftbukkit
  * [Onlinelog](http://forums.bukkit.org/threads/inactive-web-onlinelog-v1-0-1-online-player-statistics-602.9887/) plugin for Craftbukkit (optional)

Minerstats requires a local web server to work properly and a MySQL database. Without theses prerequisites, using may be very uncomfortable but not impossible. I can't provide any technical help about external databases.

Stats and OnlineLog are marked as inactive plugins but they work perfecly with Craftbukkit #1060 and newer builds.

### Step 1 : Minerstats settings ###

Unzip Minerstats archive, there is 2 folders : _minerstats_ and _plugins_. Open _minerstats_ folder and open _config.php_, here is what you should see :
```
<?php
//Base de données
$host = 'localhost';
$dbname = 'minecraft';
$login = 'root';
$pass = '';

//Votre serveur Minecraft
$serverName= 'D&eacute;dicraft';
$serverUrl= 'http://www.dedicraft.net/';

//Paramètres minerstats
$language = 'fr'; //Non utilisé (version 2.3)
$hideGraph = false;
$rssFeeds = array(
	"http://minecraft.fr/feed/", 
	"http://www.wtcraft.com/feed");

//cachedAvatars > Options dans le fichier avatar.php
?>
```

**Settings**

  * $host : The database hostname. In most cases, this setting value is _localhost_ if you have a dedicated server.
  * $dbname : The MySQL database name. Must be the same name specified in _Stats_ and _OnlineLog_ settings.
  * $login : The database login.
  * $pass : The database password.
  * $language : The Minerstats language setting, not used yet, forget it.
  * $hideGraph : Hide or not the login graph. Set true if you don't want to use it.
  * $rssFeeds : The Rss Feeds setting to grab news in Minerstats. Do not set too much urls or the page loading can be mobly long...

### Step 2 : Table adding ###

Now you have to add 3 tables in your _minercraft_ database (forget the tird table if you don't want to use OnlineLog) :

```
CREATE TABLE IF NOT EXISTS `minerstats` (
  `playerID` int(5) NOT NULL AUTO_INCREMENT,
  `playerName` varchar(20) COLLATE latin1_bin NOT NULL,
  `playerPassword` varchar(50) COLLATE latin1_bin NOT NULL,
  `playerEmail` varchar(50) COLLATE latin1_bin NOT NULL,
  PRIMARY KEY (`playerID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_bin AUTO_INCREMENT=0 ;

CREATE TABLE IF NOT EXISTS `stats` (
 `player` varchar(32) COLLATE latin1_bin NOT NULL DEFAULT '-',
 `category` varchar(32) COLLATE latin1_bin NOT NULL DEFAULT 'stats',
 `stat` varchar(32) COLLATE latin1_bin NOT NULL DEFAULT '-',
 `value` int(11) NOT NULL DEFAULT '0',
 PRIMARY KEY (`player`,`category`,`stat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

CREATE TABLE IF NOT EXISTS `onlinelog` (
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `playercount` smallint(5) unsigned NOT NULL,
 `playernames` varchar(4096) CHARACTER SET ascii NOT NULL,
 PRIMARY KEY (`id`),
 KEY `timestamp` (`timestamp`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_bin;
```

### Step 3 : Plugins installation ###
Minerstats requires 2 plugins to work properly, theses plugins are provide in the archive in _plugin_ :
  * [Stats](http://forums.bukkit.org/threads/inactive-info-stats-v0-985-and-achievements-v0-981-617.1328/): You must install this mod to use the Web interface.
  * [OnlineLog](http://forums.bukkit.org/threads/inactive-web-onlinelog-v1-0-1-online-player-statistics-602.9887/) : Optional, provides server logings statistics.

**items.txt**

You can find this file in _plugins_ folder. It provides a full blocks listing including pistons and other news blocks. To update the _Stats_ blocks file, just run the plugin once and the items.txt file will be created. Just paste the content of the items.txt provided by Minerstats.

**Permissions**

Don't forget to give permissions to your players to use _Stats_ :
  * stats.log

### Step 4 : Writing permission ###
To show properly player avatars, you have to set a writing permission on the _avatars_ in _minerstats/media/_.