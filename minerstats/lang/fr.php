
<?php 
define('MINERSTATS_VERSION', 'VER. 2.2');
define('MINERSTATS_TITLE', ''.$serverName.' : Statistiques Minecraft &mdash; MinerStats '.MINERSTATS_VERSION.'');

//Stats
define('STATBAR_TIME_PLAYED1', 'Temps de jeu :');
define('STATBAR_TIME_PLAYED2', 'heures');
define('STATBAR_DESTROYED_BLOCKS', 'Blocs d&eacute;truits :');
define('STATBAR_CREATED_BLOCKS', 'Blocs cr&eacute;&eacute;s :');
define('STATBAR_LAST_LOGIN', 'Derni&egrave;re connexion :');
define('STATBAR_WALKED_BLOCKS1', 'Distance parcourue :');
define('STATBAR_WALKED_BLOCKS2', 'blocs soit');
define('STATBAR_WALKED_BLOCKS3', 'Km');

//Header
define('LOGIN', 'Connexion');
define('LOGOUT', 'D&eacute;connexion');
define('ACTIVATION', 'Activation');

//Logging form
define('LOGGING_FORM_PLAYERID', 'ID Minecraft');
define('LOGGING_FORM_PASSWORD', 'Mot de passe');
define('LOGGING_FORM_LOADING', 'Chargement, veuillez patienter...');
define('LOGGING_FORM_SUBMIT', 'Connecte-moi !');

//Menu
define('MENU_ITEM_0', 'Serveur');
define('MENU_ITEM_1', 'Actualit&eacute;s');
define('MENU_ITEM_2', 'Joueurs');
define('MENU_ITEM_3', 'Classements');
define('MENU_ITEM_4', 'Badges');

//Footer
define('FOOTER1', '© MinerStats 2010 &ndash; version 2.2 &ndash; 2011 D&eacute;velopp&eacute; par <abbr title="Pseudo Minecraft : Kahzaam">Kazaam</abbr>. Licence attribu&eacute;e &agrave;');
define('FOOTER2', ' <a href="http://code.google.com/p/minerstats/">Obtenir MinerStats maintenant !</a>');

//Default PAGE
define('DEFAULT_PAGE_TITLE', 'Statistiques du serveur');

//404 PAGE
define('MESSAGE_404', 'Vous &ecirc;tes perdu ?');

//Activation PAGE
define('ACTIVATION_WARNING', 'Avertissement : Pour des raisons de s&eacute;curit&eacute;, m&ecirc;me si le mot de passe est rendu illisible dans la base de donn&eacute;es gr&acirc;ce &agrave; la fonction de hachage <span><a href="http://fr.wikipedia.org/wiki/MD5">md5</a></span>, il est vivement recommand&eacute; de ne pas utiliser votre mot de passe Minecraft dans cette activation.');
define('ACTIVATION_SUBMIT', 'Confirmer l\'activation');
define('ACTIVATION_MATCHING_PASSWORD_ERROR', 'Erreur : Les mots de passe ne correspondent pas.');
define('ACTIVATION_PASSWORD1_ERROR', 'Erreur : Veuillez indiquer un mot de passe.');
define('ACTIVATION_PASSWORD2_ERROR', 'Erreur : Veuillez confirmer le mot de passe.');
define('ACTIVATION_PLAYERID_ERROR', 'Erreur : Veuillez indiquer votre pseudo Minecraft.');
define('ACTIVATION_EMAIL_ERROR', 'Erreur : Veuillez indiquer une adresse e-mail valide.');
define('ACTIVATION_PLAYERID_NOTFOUND_ERROR', 'Erreur : Le joueur n\'est pas enregistr&eacute; sur le serveur ou ne s\'est pas encore connect&eacute;.');
define('ACTIVATION_PLAYERID_FOUND_ERROR', 'Erreur : Le joueur est d&eacute;j&agrave; enregistr&eacute;.');
define('ACTIVATION_PASSWORD_TOOLTIP', 'Important : Utilisez un mot de passe diff&eacute;rent de celui de votre compte Minecraft.');
define('ACTIVATION_CASE_TOOLTIP', 'Pseudo sensible &agrave; la casse, respectez les majuscules.');

//Stats PAGE
define('DESTROYED', 'D&eacute;truits');
define('CREATED', 'Cr&eacute;&eacute;s');
?>