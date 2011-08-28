<?php
setcookie("minerstats-playerID", '', (time() - 604800), '/');
setcookie("minerstats-playerName", '', (time() - 604800), '/');

header('Location: ../index.php')
?>