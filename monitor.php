<?php
require_once('config.php');
/*if($_SERVER['REMOTE_ADDR'] != '127.0.0.1'){
  header('Location: http://'.$_SERVER['SERVER_NAME'].'/html/quiz');
  die();
 }*/
?>


<html>
<head>
<meta http-equiv="refresh" content="30; URL=">
<title>Monitoring HTML-Quiz</title>
</head>
<body>
<table align="center" border="1">
 <tr><th>PC</th><th>Last Step</th>
 <?php
 for($i=1;$i<=20;$i++)
 echo "<th width=\"35\">$i</th>";
 ?>
 </tr>
 <?php
 $query = mysql_query("SELECT * FROM `rechner` ORDER BY `step` DESC, `pcnr` ASC") or die('SQL-Fehler:'.mysql_error());
 
 while($res = mysql_fetch_row($query)){
  echo "<tr><td><b>Rechner $res[0]</b></td><td>$res[3]</td>";
  for($i=1;$i<=$res[1];$i++)
   if($res[2]==1 && $i <=20){
    if($i ==1)
      echo "<td bgcolor=\"red\"><img src=\"cheater.jpg\" alt=\"Cheater\"></td>";
    else
      echo "<td bgcolor=\"red\">&nbsp;</td>";
    //mysql_query("UPDATE `rechner` SET `cheater` = 0 WHERE `pcnr` = '$res[0]' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
   }elseif($res[1] <= 20){
      echo "<td bgcolor=\"green\">&nbsp;</td>";
   }elseif ($i < 21){
        echo "<td bgcolor=\"green\"><img src=\"bananadance.gif\" alt=\"banana\"></td>";
   }
  echo "</tr>";
 
 
 
 
 }
 ?>

</table>
<p style="text-align:right;">Reload every 30 Seconds.</p>
</body>
</html>
