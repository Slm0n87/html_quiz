<?php
//MySQL
$db_server = 'YOURDBSERVER';
$db_user = 'YOURDBUSER';
$db_pw = 'YOURDBPASS';
$db_schema = 'YOURDBSCHEMA';
mysql_connect($db_server, $db_user, $db_pw) or die('Keine Verbindung zur MySQL-Datenbank!');
mysql_select_db($db_schema) or die('Die Datenbank "rechner" ist nicht vorhanden');
?>
