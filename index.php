<?php
require_once('config.php');
$ip = $_SERVER['REMOTE_ADDR'];
$pcnr = $ip;

if(isset($_GET['reset'])){
  mysql_query("DELETE FROM `rechner` WHERE `pcnr` = '$ip' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
  echo '<center><h3>Stand zur&uuml;ckgesetzt!</h3><br><a href="./">Weiter</a></center>';
  die();
}

  $query = mysql_query("SELECT * FROM `rechner` WHERE `pcnr` = '$pcnr' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
  if(mysql_num_rows($query) < 1){
      $now = date( 'Y-m-d H:i:s', time() );
      mysql_query("INSERT INTO `rechner` (`pcnr`, `step`, `cheater`, `created`, `last_update`) VALUES ('$pcnr', 1, 0, '$now', '$now')") or die('SQL-Fehler:'.mysql_error());
      echo '<center><h1>Los Gehts!</h1><br><a href="task.php?step=1">Stufe 1</a></center>';
  }else{
      $query = mysql_query("SELECT `step` FROM `rechner` WHERE `pcnr` = '$pcnr' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
      $res = mysql_fetch_row($query);
      echo '<center><h1>Du hast schon begonnen!</h1><br><a href="?reset">&lt;&lt; Zur&uuml;cksetzen</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="task.php?step='.$res[0].'">Weiter mit Stufe '.$res[0].' &gt;&gt;</a></center>';
  }

?>
