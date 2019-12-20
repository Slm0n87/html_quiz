<?php
require_once('config.php');
$ip = $_SERVER['REMOTE_ADDR'];
$pcnr = $ip;
$now = date( 'Y-m-d H:i:s', time() );


$query = mysql_query("SELECT `step` FROM `rechner` WHERE `pcnr` = '$pcnr' && `step` >= ".$_GET['step']." LIMIT 1") or die('SQL-FehlerX:'.mysql_error());
$res = mysql_fetch_row($query);
if(mysql_num_rows($query) < 1){
    mysql_query("UPDATE `rechner` SET `time` = '$now', `cheater` = 1, `time` = '$now' WHERE `pcnr` = '$pcnr' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
    $query = mysql_query("SELECT `step` FROM `rechner` WHERE `pcnr` = '$pcnr' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
    $res = mysql_fetch_row($query);
    echo '<h1>Netter Versuch!</h1><br><h3>L&ouml;se erstmal die Stufe davor :P</h3><a href="task.php?step='.$res[0].'">Stufe '.$res[0].'</a>';
}else{


 if($_GET['step'] == 1){
  $nextstep = $_GET['step'] + 1;
    if(isset($_GET['a'])){
     if($_POST['pass'] == '<head>' || $_POST['pass'] == '<HEAD>'){
      if($_GET['step'] == $res[0]) mysql_query("UPDATE `rechner` SET `time` = '$now', `step` = $nextstep WHERE `pcnr` = '$pcnr' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
      echo '<center><h1>Richtig!</h1><br><h3>...</h3><a href="task.php?step='.$nextstep.'">Stufe '.$nextstep.'</a></center>';
      die();
     }else{
        echo '<center><font color="red"><h1>Falsch!</h1></font><br><h3>Versuche es nochmal =)</h3><a href="javascript:history.back();">Zur&uuml;ck</a></center>';
        die();
     }
    }
    echo'
<html><!-- Hier beginnt HTML -->
<head><!-- Hier beginnt der HTML-Header -->
<title>Stufe '.$_GET['step'].'</title><!-- Hier wird der HTML-Title definiert -->
</head><!-- Hier endet der HTML-Header -->
<body><!-- Hier beginnt der HTML-Body -->
<br><br><center><!-- Ab hier wird zentriert -->
<h1>Stufe '.$_GET['step'].' von 20</h1><!-- Die Überschrift -->
<br><br><font face="Arial">Wie beginnt der Kopf einer HTML-Datei?</font><br><br>
<form action="?step='.$_GET['step'].'&a" method="post"><!-- Hier beginnt das Formular -->
<input name="pass" type="text"> <!-- Hier wird das Passwortfeld definiert -->
<input type="submit" value="Absenden"><!-- Hier wird der Absende-Button definiert -->
</form><!-- Hier endet das Formular -->
</center><!-- Hier endet die Zentrierung -->
</body><!-- Hier endet der HTML-Body -->
</html><!-- Hier endet HTML -->';


 }elseif($_GET['step'] == 2){
  $nextstep = $_GET['step'] + 1;
    if(isset($_GET['a'])){
     if($_POST['pass'] == '</p>'){
      if($_GET['step'] == $res[0]) mysql_query("UPDATE `rechner` SET `time` = '$now', `step` = $nextstep WHERE `pcnr` = '$pcnr' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
      echo '<center><h1>Richtig!</h1><br><h3>Weiter gehts...</h3><a href="task.php?step='.$nextstep.'">Stufe '.$nextstep.'</a></center>';
      die();
     }else{
        echo '<center><font color="red"><h1>Falsch!</h1></font><br><h3>Versuche es nochmal =)</h3><a href="javascript:history.back();">Zur&uuml;ck</a></center>';
        die();
     }
    }
    echo'
<html><!-- Hier beginnt HTML -->
<head><!-- Hier beginnt der HTML-Header -->
<title>Stufe '.$_GET['step'].'</title><!-- Hier wird der HTML-Title definiert -->
</head><!-- Hier endet der HTML-Header -->
<body><!-- Hier beginnt der HTML-Body -->
<br><br><center><!-- Ab hier wird zentriert -->
<h1>Stufe '.$_GET['step'].' von 20</h1><!-- Die Überschrift -->
<br><br><font face="Arial">Was fehlt?<br><br>
<textarea cols="50" rows="20" readonly>
<html>
  <head>
    <title>Test</title>
  </head>
  <body>
    <p>This is my first paragraph
  </body>
</html>
</textarea></font><br><br>
<form action="?step='.$_GET['step'].'&a" method="post"><!-- Hier beginnt das Formular -->
<input name="pass" type="text"> <!-- Hier wird das Passwortfeld definiert -->
<input type="submit" value="Absenden"><!-- Hier wird der Absende-Button definiert -->
</form><!-- Hier endet das Formular -->
</center><!-- Hier endet die Zentrierung -->
</body><!-- Hier endet der HTML-Body -->
</html><!-- Hier endet HTML -->';


 }elseif($_GET['step'] == 3){
  $nextstep = $_GET['step'] + 1;
    if(isset($_GET['a'])){
     if($_POST['pass'] == '</body>'){
      if($_GET['step'] == $res[0]) mysql_query("UPDATE `rechner` SET `time` = '$now', `step` = $nextstep WHERE `pcnr` = '$pcnr' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
      echo '<center><h1>Richtig!</h1><br><h3>Jetzt Lohnt es sich, zugeh&ouml;rt zu haben...</h3><a href="task.php?step='.$nextstep.'">Stufe '.$nextstep.'</a></center>';
      die();
     }else{
        echo '<center><font color="red"><h1>Falsch!</h1></font><br><h3>N&auml;chster Versuch.. =)</h3><a href="javascript:history.back();">Zur&uuml;ck</a></center>';
        die();
     }
    }
    echo'
<html><!-- Hier beginnt HTML -->
<head><!-- Hier beginnt der HTML-Header -->
<title>Stufe '.$_GET['step'].'</title><!-- Hier wird der HTML-Title definiert -->
</head><!-- Hier endet der HTML-Header -->
<body><!-- Hier beginnt der HTML-Body -->
<br><br><center><!-- Ab hier wird zentriert -->
<h1>Stufe '.$_GET['step'].' von 20</h1><!-- Die Überschrift -->
<br><br><font face="Arial">Oft zeigt ein Browser auch fehlerhaft geschriebenen HTML-Code korrekt an.<br>
Trotzdem sollte man sich angew&ouml;hnen den Standard einzuhalten. Was fehlt?<br><br>
<textarea cols="50" rows="20" readonly>
<html>
<head>
<title>HSS</title>
</head>
<body style="background-color:PowderBlue;">

<h1>Look! Styles and colors</h1>

<p style="font-family:verdana;color:red">
This text is in Verdana and red</p>

<p style="font-family:times;color:green">
This text is in Times and green</p>

<p style="font-size:30px">This text is 30 pixels high</p>
</html>
</textarea></font><br><br>
<form action="?step='.$_GET['step'].'&a" method="post"><!-- Hier beginnt das Formular -->
<input name="pass" type="text"> <!-- Hier wird das Passwortfeld definiert -->
<input type="submit" value="Absenden"><!-- Hier wird der Absende-Button definiert -->
</form><!-- Hier endet das Formular -->
</center><!-- Hier endet die Zentrierung -->
</body><!-- Hier endet der HTML-Body -->
</html><!-- Hier endet HTML -->';



 }elseif($_GET['step'] == 4){
  $nextstep = $_GET['step'] + 1;
    if(isset($_GET['a'])){
     if($_POST['pass'] == '<!--'){
      if($_GET['step'] == $res[0]) mysql_query("UPDATE `rechner` SET `time` = '$now', `step` = $nextstep WHERE `pcnr` = '$pcnr' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
      echo '<center><h1>Richtig!</h1><br><h3>Weiter gehts...</h3><a href="task.php?step='.$nextstep.'">Stufe '.$nextstep.'</a></center>';
      die();
     }else{
        echo '<center><font color="red"><h1>Falsch!</h1></font><br><h3>Versuche es nochmal =)</h3><a href="javascript:history.back();">Zur&uuml;ck</a></center>';
        die();
     }
    }
    echo'
<html><!-- Hier beginnt HTML -->
<head><!-- Hier beginnt der HTML-Header -->
<title>Stufe '.$_GET['step'].'</title><!-- Hier wird der HTML-Title definiert -->
</head><!-- Hier endet der HTML-Header -->
<body><!-- Hier beginnt der HTML-Body -->
<br><br><center><!-- Ab hier wird zentriert -->
<h1>Stufe '.$_GET['step'].' von 20</h1><!-- Die Überschrift -->
<br><br><font face="Arial">Leite einen Kommentar ein!<br><br>
<form action="?step='.$_GET['step'].'&a" method="post"><!-- Hier beginnt das Formular -->
<input name="pass" type="text"> <!-- Hier wird das Passwortfeld definiert -->
<input type="submit" value="Absenden"><!-- Hier wird der Absende-Button definiert -->
</form><!-- Hier endet das Formular -->
</center><!-- Hier endet die Zentrierung -->
</body><!-- Hier endet der HTML-Body -->
</html><!-- Hier endet HTML -->';



 }elseif($_GET['step'] == 5){
  $nextstep = $_GET['step'] + 1;
    if(isset($_GET['a'])){
     if(preg_match('/(\<hr.*\>|\<HR.*\>)/',$_POST['pass'])){
      if($_GET['step'] == $res[0]) mysql_query("UPDATE `rechner` SET `time` = '$now', `step` = $nextstep WHERE `pcnr` = '$pcnr' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
      echo '<center><h1>Richtig!</h1><br><h3>Weiter mit etwas Debugging...</h3><a href="task.php?step='.$nextstep.'">Stufe '.$nextstep.'</a></center>';
      die();
     }else{
        echo '<center><font color="red"><h1>Falsch!</h1></font><br><h3>Versuche es nochmal =)</h3><a href="javascript:history.back();">Zur&uuml;ck</a></center>';
        die();
     }
    }
    echo'
<html><!-- Hier beginnt HTML -->
<head><!-- Hier beginnt der HTML-Header -->
<title>Stufe '.$_GET['step'].'</title><!-- Hier wird der HTML-Title definiert -->
</head><!-- Hier endet der HTML-Header -->
<body><!-- Hier beginnt der HTML-Body -->
<br><br><center><!-- Ab hier wird zentriert -->
<h1>Stufe '.$_GET['step'].' von 20</h1><!-- Die Überschrift -->
<br><br><font face="Arial">Wie lautet der HTML-Tag zum Erzeugen einer einfachen horizontalen Linie?<br>
<hr></font><br><br>
<form action="?step='.$_GET['step'].'&a" method="post"><!-- Hier beginnt das Formular -->
<input name="pass" type="text"> <!-- Hier wird das Passwortfeld definiert -->
<input type="submit" value="Absenden"><!-- Hier wird der Absende-Button definiert -->
</form><!-- Hier endet das Formular -->
</center><!-- Hier endet die Zentrierung -->
</body><!-- Hier endet der HTML-Body -->
</html><!-- Hier endet HTML -->';


 }elseif($_GET['step'] == 6){
  $nextstep = $_GET['step'] + 1;
    if(isset($_GET['a'])){$string = str_replace("\r\n",'',stripslashes($_POST['pass']));
     if(preg_match('/<html>.*<body>.*<table\ .*>.*<tr>.*<td>.*<td>.*<tr>.*<td>.*<td>.*<tr>.*<td>.*<td>.*<tr>.*<td>.*<td>.*<\/html>/', $string)){
      if($_GET['step'] == $res[0]) mysql_query("UPDATE `rechner` SET `time` = '$now', `step` = $nextstep WHERE `pcnr` = '$pcnr' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
      echo '<center><h1>Richtig!</h1><br><h3>War doch einfach, oder?<br>Gleich nochmal...</h3><a href="task.php?step='.$nextstep.'">Stufe '.$nextstep.'</a></center>';
      die();
     }else{
        echo '<center><font color="red"><h1>Falsch!</h1>
        </font><br><h3>Konzentrier dich =)</h3><a href="javascript:history.back();">Zur&uuml;ck</a></center>';
        die();
     }
    }
    echo'
<html><!-- Hier beginnt HTML -->
<head><!-- Hier beginnt der HTML-Header -->
<title>Stufe '.$_GET['step'].'</title><!-- Hier wird der HTML-Title definiert -->
</head><!-- Hier endet der HTML-Header -->
<body><!-- Hier beginnt der HTML-Body -->
<br><br><center><!-- Ab hier wird zentriert -->
<h1>Stufe '.$_GET['step'].' von 20</h1><!-- Die Überschrift -->
<br><br><font face="Arial">Korrigiere die 3 Fehler im Code :)<br><br>
<form action="?step='.$_GET['step'].'&a" method="post"><!-- Hier beginnt das Formular -->
<textarea name="pass" cols="100" rows="31">
<html>
  <head>
  <title>Tabelle</title>
  </head>
  <body>
  
    <tabelle width="60%" style="background-color:red" border="1" cellpadding="2" cellspacing="0">
      <tr>
    		<td>Apples</td>
    		<td>54%</td>
    	</tr>
    	<tr>
    		<td>Bananas</td>
    		<td>23%</td>
    	</tr>
    	<tr>
    		<td>Oranges</td>
    		<tb>13%</td>
    	</tr>
    	<tr>
    		<td>Other</td>
    		<td>10%</td>
    	</tr>
    </table>
    
  </body>

<htmlfertig>
</textarea></font><br><br>
<input type="submit" value="Absenden"><!-- Hier wird der Absende-Button definiert -->
<input type="reset" value="Reset"><!-- Hier wird der Reset-Button definiert -->
</form><!-- Hier endet das Formular -->
</center><!-- Hier endet die Zentrierung -->
</body><!-- Hier endet der HTML-Body -->
</html><!-- Hier endet HTML -->';





 }elseif($_GET['step'] == 7){
  $nextstep = $_GET['step'] + 1;
    if(isset($_GET['a'])){$string = str_replace("\r\n",'',stripslashes($_POST['pass']));
     if(preg_match('/<html>.*<body>.*<p>.*<a\ href\=\".*<u>.*<\/u>.*<\/a>.*<p>.*<a href\=\"http:\/\/www.microsoft.com\/?\">.*<p>.*<\/p>.*<\/body>.*<\/html>/', $string)){
      if($_GET['step'] == $res[0]) mysql_query("UPDATE `rechner` SET `time` = '$now', `step` = $nextstep WHERE `pcnr` = '$pcnr' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
      echo '<center><h1>Richtig!</h1><br><h3>Machen wir mit etwas CSS weiter...</h3><a href="task.php?step='.$nextstep.'">Stufe '.$nextstep.'</a></center>';
      die();
     }else{
        echo '<center><font color="red"><h1>Falsch!</h1>
        </font><br><h3>Versuche es nochmal =)</h3><a href="javascript:history.back();">Zur&uuml;ck</a></center>';
        die();
     }
    }
    echo'
<html><!-- Hier beginnt HTML -->
<head><!-- Hier beginnt der HTML-Header -->
<title>Stufe '.$_GET['step'].'</title><!-- Hier wird der HTML-Title definiert -->
</head><!-- Hier endet der HTML-Header -->
<body><!-- Hier beginnt der HTML-Body -->
<br><br><center><!-- Ab hier wird zentriert -->
<h1>Stufe '.$_GET['step'].' von 20</h1><!-- Die Überschrift -->
<br><br><font face="Arial">Korrigiere die 3 Fehler im Code :)<br><br>
<form action="?step='.$_GET['step'].'&a" method="post"><!-- Hier beginnt das Formular -->
<textarea name="pass" cols="100" rows="25">
<html>
<body>
<p>
<a href="index.php">
<u>This text</u> is a link to a page on 
this Web site.
</p>
<p>
<a href=http://www.microsoft.com>
<u>This text</u></a> is a link to a page on 
the World Wide Web.
</p>
<p>
You can also use an image as a link:
<a href="index.php">
<img border="0" src="image.gif" width="65" height="38">
</a>
</p>
</körper>
</html>


</textarea></font><br><br>
<input type="submit" value="Absenden"><!-- Hier wird der Absende-Button definiert -->
<input type="reset" value="Reset"><!-- Hier wird der Reset-Button definiert -->
</form><!-- Hier endet das Formular -->
</center><!-- Hier endet die Zentrierung -->
</body><!-- Hier endet der HTML-Body -->
</html><!-- Hier endet HTML -->';




  }elseif($_GET['step'] == 8){
  $nextstep = $_GET['step'] + 1;
    if(isset($_GET['a'])){
     if($_POST['pass'] == 18){
      if($_GET['step'] == $res[0]) mysql_query("UPDATE `rechner` SET `time` = '$now', `step` = $nextstep WHERE `pcnr` = '$pcnr' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
      echo '<center><h1>Richtig!</h1><br><h3>Es hat ja doch jemand aufgepasst ;-)</h3><a href="task.php?step='.$nextstep.'">Stufe '.$nextstep.'</a></center>';
      die();
     }else{
        echo '<center><font color="red"><h1>Falsch!</h1></font><br><h3>Versuche es nochmal =)</h3><a href="javascript:history.back();">Zur&uuml;ck</a></center>';
        die();
     }
    }
    echo'
<html><!-- Hier beginnt HTML -->
<head><!-- Hier beginnt der HTML-Header -->
<title>Stufe '.$_GET['step'].'</title><!-- Hier wird der HTML-Title definiert -->
<!-- Hier beginnt CSS -->
<style type="text/css">
td {font-family:Arial;}
</style>
<!-- Hier endet CSS -->
</head><!-- Hier endet der HTML-Header -->
<body><!-- Hier beginnt der HTML-Body -->
<br><br><center><!-- Ab hier wird zentriert -->
<h1>Stufe '.$_GET['step'].' von 20</h1><!-- Die Überschrift -->
<br><br><font face="Arial">F&uuml;r was steht eigentlich CSS (in <u>unserem</u> Fall)?<br><br>
<form action="?step='.$_GET['step'].'&a" method="post"><!-- Hier beginnt das Formular -->
<table border="0">
  <tr><td><input type="radio" name="pass" value="1"> Counter-Strike: Source</td></tr>
  <tr><td><input type="radio" name="pass" value="2"> Chirp Spread Spectrum</td></tr>
  <tr><td><input type="radio" name="pass" value="3"> Closed Source Software</td></tr>
  <tr><td><input type="radio" name="pass" value="4"> Cross-Site Scripting</td></tr>
  <tr><td><input type="radio" name="pass" value="5"> Computerschach und Spiele</td></tr>
  <tr><td><input type="radio" name="pass" value="6"> Content Scramble System</td></tr>
  <tr><td><input type="radio" name="pass" value="7"> Calderbank-Shor-Steane</td></tr>
  <tr><td><input type="radio" name="pass" value="8"> Cascading Style Shit</td></tr>
  <tr><td><input type="radio" name="pass" value="9"> Controlled Shear Stress</td></tr>
  <tr><td><input type="radio" name="pass" value="10"> Collaborative Software System</td></tr>
  <tr><td><input type="radio" name="pass" value="11"> chinesische Mittelstreckenrakete</td></tr>
  <tr><td><input type="radio" name="pass" value="12"> Cascarding Style Sheet</td></tr>
  <tr><td><input type="radio" name="pass" value="13"> Carotissinussyndrom</td></tr>
  <tr><td><input type="radio" name="pass" value="14"> Churg-Strauss-Syndrom</td></tr>
  <tr><td><input type="radio" name="pass" value="15"> Catalina Sky Survey</td></tr>
  <tr><td><input type="radio" name="pass" value="16"> Central Security Service</td></tr>
  <tr><td><input type="radio" name="pass" value="17"> Eine Schweizer Versicherung</td></tr>
  <tr><td><input type="radio" name="pass" value="18"> Cascading Style Sheets</td></tr>
  <tr><td><input type="radio" name="pass" value="19"> Curvature Scale Space</td></tr>
  <tr><td><input type="radio" name="pass" value="20"> Customer Self Service</td></tr>
  <tr><td><input type="radio" name="pass" value="21"> Chicago South Shore</td></tr>
</table><br>
<input type="submit" value="Absenden"><!-- Hier wird der Absende-Button definiert -->
</form><!-- Hier endet das Formular -->
</center><!-- Hier endet die Zentrierung -->
</body><!-- Hier endet der HTML-Body -->
</html><!-- Hier endet HTML -->';


 }elseif($_GET['step'] == 9){
  $nextstep = $_GET['step'] + 1;
    if(isset($_GET['a'])){$string = str_replace("\r\n",'',stripslashes($_POST['pass']));
     if(preg_match('/<html>.*<head>.*<title>.*<\/title>.*<link.*rel\=\"stylesheet\".*type\=\"text\/css\".*href\=\"formate\.css\".*>.*<\/head>.*<body>.*<\/body>.*<\/html>/', $string)){
      if($_GET['step'] == $res[0]) mysql_query("UPDATE `rechner` SET `time` = '$now', `step` = $nextstep WHERE `pcnr` = '$pcnr' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
      echo '<center><h1>Richtig!</h1><br><h3>Weils so sch&ouml;n ist noch etwas CSS...</h3><a href="task.php?step='.$nextstep.'">Stufe '.$nextstep.'</a></center>';
      die();
     }else{
        echo '<center><font color="red"><h1>Falsch!</h1>
        </font><br><h3>Versuche es nochmal =)</h3><a href="javascript:history.back();">Zur&uuml;ck</a></center>';
        die();
     }
    }
    echo'
<html><!-- Hier beginnt HTML -->
<head><!-- Hier beginnt der HTML-Header -->
<title>Stufe '.$_GET['step'].'</title><!-- Hier wird der HTML-Title definiert -->
</head><!-- Hier endet der HTML-Header -->
<body><!-- Hier beginnt der HTML-Body -->
<br><br><center><!-- Ab hier wird zentriert -->
<h1>Stufe '.$_GET['step'].' von 20</h1><!-- Die Überschrift -->
<br><br><font face="Arial">Hier wusste wohl jemand nicht, wie man eine CSS-Datei einbindet.<br><br>
<form action="?step='.$_GET['step'].'&a" method="post"><!-- Hier beginnt das Formular -->
<textarea name="pass" cols="100" rows="25">
<html>
<head>
  <title>Das link-Element f&uuml;r Stylesheets</title>
  <css rel="stylesheet" typ? href=formate.css>
</head>
<body>
  <h1>Das link-Element f&uuml;r Stylesheets</h1>
</body>
</html>
</textarea></font><br><br>
<input type="submit" value="Absenden"><!-- Hier wird der Absende-Button definiert -->
<input type="reset" value="Reset"><!-- Hier wird der Reset-Button definiert -->
</form><!-- Hier endet das Formular -->
</center><!-- Hier endet die Zentrierung -->
</body><!-- Hier endet der HTML-Body -->
</html><!-- Hier endet HTML -->';



 }elseif($_GET['step'] == 10){
  $nextstep = $_GET['step'] + 1;
    if(isset($_GET['a'])){$string = str_replace("\r\n",'',stripslashes($_POST['pass']));
     if(preg_match('/a\:link.*\{.*\}.*a\:visited.*\{.*color\:.*\}.*a\:focus.*\{.*\}.*a\:hover.*\{.*\}.*a\:active.*\#haupt.*\;.*\;.*\;.*\}.*\#text1.*\{.*\}.*(\#|\.)text2.*\{.*\;.*\;.*\;.*\;.*text-align\:.*(left|center|right|justify).*\;.*\;.*\;.*\}/', $string)){
      if($_GET['step'] == $res[0]) mysql_query("UPDATE `rechner` SET `time` = '$now', `step` = $nextstep WHERE `pcnr` = '$pcnr' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
      echo '<center><h1>Richtig!</h1><br><h3>Jetzt wirds interessant :]</h3><a href="task.php?step='.$nextstep.'">Stufe '.$nextstep.'</a></center>';
      die();
     }else{
        echo '<center><font color="red"><h1>Falsch!</h1>
        </font><br><h3>Versuche es nochmal =)</h3><a href="javascript:history.back();">Zur&uuml;ck</a></center>';
        die();
     }
    }
    echo'
<html><!-- Hier beginnt HTML -->
<head><!-- Hier beginnt der HTML-Header -->
<title>Stufe '.$_GET['step'].'</title><!-- Hier wird der HTML-Title definiert -->
</head><!-- Hier endet der HTML-Header -->
<body><!-- Hier beginnt der HTML-Body -->
<br><br><center><!-- Ab hier wird zentriert -->
<h1>Stufe '.$_GET['step'].' von 20</h1><!-- Die Überschrift -->
<br><br><font face="Arial">Korrigiere die Fehler in der CSS-Datei (5 St&uuml;ck).<br><br>
<form action="?step='.$_GET['step'].'&a" method="post"><!-- Hier beginnt das Formular -->
<textarea name="pass" cols="100" rows="25">
a:link { font-weight:bold; color:#996600; text-decoration:none; }
a:visited { font-weight:bold; coulor:silver; text-decoration:none; }
a:focus { font-weight:bold; color:red; text-decoration:underline; }
a:hover { font-weight:bold; color:white; text-decoration:none; }
a:active { font-weight:bold; color:lime; text-decoration:none; }


#haupt {
background-color:yellow;
padding:15px
width:845px;
}

#text1
background-color:green;
margin:5px;
padding:5px;
color:#66ff99;
width:400px;
float:left;


text2 {
color:yellow;
background-color:red;
margin:5px;
padding:5px;
text-align:red;
width:400px;
float:left;
}
</textarea></font><br><br>
<input type="submit" value="Absenden"><!-- Hier wird der Absende-Button definiert -->
<input type="reset" value="Reset"><!-- Hier wird der Reset-Button definiert -->
</form><!-- Hier endet das Formular -->
</center><!-- Hier endet die Zentrierung -->
</body><!-- Hier endet der HTML-Body -->
</html><!-- Hier endet HTML -->';



 }elseif($_GET['step'] == 11){
  $nextstep = $_GET['step'] + 1;
    if(isset($_GET['a'])){
     if($_POST['pass'] == 'html'){
      if($_GET['step'] == $res[0]) mysql_query("UPDATE `rechner` SET `time` = '$now', `step` = $nextstep WHERE `pcnr` = '$pcnr' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
      echo '<center><h1>!</h1><br><h3>So weit, so gut. Aber was lernen wir daraus?<br>Passw&ouml;rter haben im Quelltext nichts zu suchen.</h3><a href="task.php?step='.$nextstep.'">Stufe '.$nextstep.'</a></center>';
      die();
     }else{
        echo '<center><font color="red"><h1>Falsches Passwort!</h1></font><br><h3>HTML besteht aus Quelltext =)</h3><a href="javascript:history.back();">Zur&uuml;ck</a></center>';
        die();
     }
    }
    echo'
<html><!-- Hier beginnt HTML -->
<head><!-- Hier beginnt der HTML-Header -->
<title>Stufe '.$_GET['step'].'</title><!-- Hier wird der HTML-Title definiert -->
</head><!-- Hier endet der HTML-Header -->
<body><!-- Hier beginnt der HTML-Body -->
<br><br><center><!-- Ab hier wird zentriert -->
<h1>Stufe '.$_GET['step'].' von 20</h1><!-- Die Überschrift -->
Passwort:<br><br><!--Hier findest du das Passwort dieser Stufe: "html" -->
<form action="?step='.$_GET['step'].'&a" method="post"><!-- Hier beginnt das Formular -->
<input name="pass" type="text"> <!-- Hier wird das Passwortfeld definiert -->
<input type="submit" value="Absenden"><!-- Hier wird der Absende-Button definiert -->
</form><!-- Hier endet das Formular -->
</center><!-- Hier endet die Zentrierung -->
</body><!-- Hier endet der HTML-Body -->
</html><!-- Hier endet HTML -->';




  }elseif($_GET['step'] == 12){
    $nextstep = $_GET['step'] + 1;
    if(isset($_GET['a'])){
     if($_POST['pass'] == 'code'){
      if($_GET['step'] == $res[0]) mysql_query("UPDATE `rechner` SET `time` = '$now', `step` = $nextstep WHERE `pcnr` = '$pcnr' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
      echo '<center><h1>OK!</h1><br><h3>Auch gut versteckt sind sie nicht sicher ;)</h3><a href="task.php?step='.$nextstep.'">Stufe '.$nextstep.'</a></center>';
      die();
     }else{
        echo '<center><font color="red"><h1>Falsches Passwort!</h1></font><br><h3>HTML besteht aus Quelltext =)</h3><a href="javascript:history.back();">Zur&uuml;ck</a></center>';
        die();
     }
    }
    echo'
<html> 
<head>
<title>Stufe '.$_GET['step'].'</title>
</head>
<body>
<!-- So ausführlich müssen Kommentare aber gar nicht sein. Es genügt, wenn man die wichtigsten Punkte kommentiert. -->
<br><br><center>
<h1>Stufe '.$_GET['step'].' von 20</h1>
Passwort:<br><br>
<form action="?step='.$_GET['step'].'&a" method="post">
<input name="pass" type="text"> 
<input type="submit" value="Absenden">
</form>
</center>
</body>
</html>'."\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n<!-- Passwort: code -->";

  
  
  
 
  
  
  
  
   }elseif($_GET['step'] == 13){
    $nextstep = $_GET['step'] + 1;
    if(isset($_GET['a'])){
     if($_GET['pass'] == 'geheim'){
      if($_GET['step'] == $res[0]) mysql_query("UPDATE `rechner` SET `time` = '$now', `step` = $nextstep WHERE `pcnr` = '$pcnr' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
      echo '<center><h1>OK!</h1><br><h3>So sollte auch kein Passwort abgefragt werden.</h3><a href="task.php?step='.$nextstep.'">Stufe '.$nextstep.'</a></center>';
      die();
     }else{
        echo '<center><font color="red"><h1>Falsches Passwort!</h1></font><br><a href="javascript:history.back();">Zur&uuml;ck</a></center>';
        die();
     }
    }
    echo'
<html> 
<head>
<title>Stufe '.$_GET['step'].'</title>
<script language="JavaScript" type="text/javascript">
<!--
var passwort, i;

passwort=prompt("Bitte Passwort eingeben!","");
if (passwort=="geheim") {
window.location.href="?step=13&a&pass=" + passwort;
}else{
i=4;
}


//-->
</script>

</head>
<body>
<br><br><center>
<h1>Stufe '.$_GET['step'].' von 20</h1>
<a href="">Erneut Versuchen</a>
</center>
</body>
</html>';
  
     }elseif($_GET['step'] == 14){
    $nextstep = $_GET['step'] + 1;
    if(isset($_GET['a'])){
     if($_GET['pass'] == '55'){
      if($_GET['step'] == $res[0]) mysql_query("UPDATE `rechner` SET `time` = '$now', `step` = $nextstep WHERE `pcnr` = '$pcnr' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
      echo '<center><h1>OK!</h1><br><h3>Gut aufgepasst ;)</h3><a href="task.php?step='.$nextstep.'">Stufe '.$nextstep.'</a></center>';
      die();
     }else{
        echo '<center><font color="red"><h1>Falsches Passwort!</h1></font><br><a href="javascript:history.back();">Zur&uuml;ck</a></center>';
        die();
     }
    }
    echo'
<html> 
<head>
<title>Stufe '.$_GET['step'].'</title>
<script language="JavaScript" type="text/javascript">
<!--
var passwort;

passwort= \'12\';
i = 15;
zahl1 = \'5\';
zahl2 = 5;

passwort=prompt("Bitte Passwort eingeben!","");
if (passwort==zahl1+zahl2){
window.location.href="?step=14&a&pass=" + passwort;
}


//-->
</script>

</head>
<body>
<br><br><center>
<h1>Stufe '.$_GET['step'].' von 20</h1>
<a href="">Erneut Versuchen</a>
</center>
</body>
</html>';
  
       }elseif($_GET['step'] == 15){
    $nextstep = $_GET['step'] + 1;
    if(isset($_GET['a'])){
     if($_GET['pass'] == '42'){
      if($_GET['step'] == $res[0]) mysql_query("UPDATE `rechner` SET `time` = '$now', `step` = $nextstep WHERE `pcnr` = '$pcnr' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
      echo '<center><h1>OK!</h1><br><h3>Gut aufgepasst ;)</h3><a href="task.php?step='.$nextstep.'">Stufe '.$nextstep.'</a></center>';
      die();
     }else{
        echo '<center><font color="red"><h1>Falsches Passwort!</h1></font><br><a href="javascript:history.back();">Zur&uuml;ck</a></center>';
        die();
     }
    }
    echo'
<html> 
<head>
<script type="text/javascript" src="step15.js"></script>
<title>Stufe '.$_GET['step'].'</title>
<script language="JavaScript" type="text/javascript">

<!--

var passwort = "VielZuEinfach";


//-->
</script>

</head>
<body>
<br><br><center>
<h1>Stufe '.$_GET['step'].' von 20</h1>
<a href="">Erneut Versuchen</a>
</center>
</body>
</html>';
  
   }elseif($_GET['step'] == 16){
    $nextstep = $_GET['step'] + 1;
    if(isset($_GET['a'])){
     if($_GET['pass'] == 'bmwcabrio'){
      if($_GET['step'] == $res[0]) mysql_query("UPDATE `rechner` SET `time` = '$now', `step` = $nextstep WHERE `pcnr` = '$pcnr' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
      echo '<center><h1>OK!</h1><br><h3>Zugegeben, das war nicht leicht...</h3><a href="task.php?step='.$nextstep.'">Stufe '.$nextstep.'</a></center>';
      die();
     }else{
        echo '<center><font color="red"><h1>Falsches Passwort!</h1></font><br><a href="javascript:history.back();">Zur&uuml;ck</a></center>';
        die();
     }
    }
    echo'
<html> 
<head>
<title>Stufe '.$_GET['step'].'</title>
<script language="JavaScript" type="text/javascript">
<!--
var vw="golf",golf="vw",bmw="cabrio",cabrio="bmw",opel="astra",astra="opel";vw=cabrio;golf=bmw;passwort="keineahnung"; 





passwort=prompt("Bitte Passwort eingeben!","");
if (passwort==vw+golf){
window.location.href="?step=16&a&pass=" + passwort;
}


//-->
</script>

</head>
<body>
<br><br><center>
<h1>Stufe '.$_GET['step'].' von 20</h1>
<a href="">Erneut Versuchen</a>
</center>
</body>
</html>';

//??

   }elseif($_GET['step'] == 17){
    $nextstep = $_GET['step'] + 1;
    if(isset($_GET['a'])){
     if($_GET['pass'] == 'mies'){
      if($_GET['step'] == $res[0]) mysql_query("UPDATE `rechner` SET `time` = '$now', `step` = $nextstep WHERE `pcnr` = '$pcnr' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
      echo '<center><h1>*gg*</h1><br><h3>Endspurt =))</h3><a href="task.php?step='.$nextstep.'">Stufe '.$nextstep.'</a></center>';
      die();
     }else{
        echo '<center><font color="red"><h1>Falsches Passwort!</h1></font><br><a href="?step=17">Zur&uuml;ck</a></center>';
        die();
     }
    }
    echo'
<html> 
<head>
<title>Stufe '.$_GET['step'].'</title>
<script language="JavaScript" type="text/javascript">
<!--


passwort=prompt("Bitte Passwort eingeben!","");
if (passwort=="mies") {window.location.href="?step=17&a&pass=" + passwort;}
else {window.location.href="?step=17&a";}

//-->
</script>

</head>
<body>
</body>
</html>';

   }elseif($_GET['step'] == 18){
    $nextstep = $_GET['step'] + 1;
    if(isset($_GET['a'])){
     if($_GET['pass'] == 'EFG'){
      if($_GET['step'] == $res[0]) mysql_query("UPDATE `rechner` SET `time` = '$now', `step` = $nextstep WHERE `pcnr` = '$pcnr' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
      echo '<center><h1>*gg*</h1><br><h3>Endspurt =))</h3><a href="task.php?step='.$nextstep.'">Stufe '.$nextstep.'</a></center>';
      die();
     }else{
        echo '<center><font color="red"><h1>Falsches Passwort!</h1></font><br><a href="?step=18">Zur&uuml;ck</a></center>';
        die();
     }
    }
    echo'
<html> 
<head>
<title>Stufe '.$_GET['step'].'</title>
<script language="JavaScript" type="text/javascript">
<!--
function passwortabfrage(){
  var coupon, passwort;
  coupon=window.document.linkColor;
  passwort=prompt("Bitte Passwort eingeben!","");
  if (passwort==coupon) {
    window.location.href="?step=18&a&pass="+String.fromCharCode(69,70,71);
  }
  else {
    window.location.href="?step=18&a";
  }
}

//-->
</script>

</head>
<body bgcolor="#000000" link="#235711">
<script language="JavaScript" type="text/javascript">
passwortabfrage();
</script>
</body>
</html>';



   }elseif($_GET['step'] == 19){
    $nextstep = $_GET['step'] + 1;
    if(isset($_GET['a'])){
     if($_GET['pass'] == 'internet' || $_POST['pass'] == 'internet'){
      if($_GET['step'] == $res[0]) mysql_query("UPDATE `rechner` SET `time` = '$now', `step` = $nextstep WHERE `pcnr` = '$pcnr' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
      echo '<center><h1>OK!</h1><br><h3>Einen haben wir noch</h3><a href="task.php?step='.$nextstep.'">Stufe '.$nextstep.'</a></center>';
      die();
     }else{
        echo '<center><font color="red"><h1>Falsches Passwort!</h1></font><br><a href="?step=18">Zur&uuml;ck</a></center>';
        die();
     }
    }
    echo'
<html> 
<head>
<title>Stufe '.$_GET['step'].'</title>
</head>
<body>
<center>
<h2>Back to the roots</h2>
<h3>Da uns jetzt die Ideen ausgehen verraten wir euch das Passwort einfach so:<br>
Es lautet: "internet"<br>
Alles Klar?!</h3>
</center>
</body>
</html>';


  }elseif($_GET['step'] == 20){
    $nextstep = $_GET['step'] + 1;
    if(isset($_GET['a'])){
     if($_POST['pass'] == 'geschafft'){
      if($_GET['step'] == $res[0]) mysql_query("UPDATE `rechner` SET `time` = '$now', `step` = $nextstep WHERE `pcnr` = '$pcnr' LIMIT 1") or die('SQL-Fehler:'.mysql_error());
      echo '<center><h1>Geschafft</h1><br><h3><img src="bananadance.gif" alt="banana"> !!!Gl&uuml;ckwunsch!!! <img src="bananadance.gif" alt="banana"></h3></center>';
      die();
     }else{
        echo '<center><font color="red"><h1>Falsches Passwort!</h1></font><br><a href="javascript:history.back();">Zur&uuml;ck</a></center>';
        die();
     }
    }
    echo'
<html> 
<head>
<title>Stufe '.$_GET['step'].'</title>
</head>
<body>
<center>
<h2>(= Die Letzte Stufe =)</h2>
<h3>Danach hast du es <span>geschafft</span><br>
2 Tipps:</h3>
- Das Passwort ist "eingespant"<br>
- Sie haben "post"
</center>
</body>
</html>';
  }
  

  
}

?>
