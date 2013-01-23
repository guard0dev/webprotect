<!DOCTYPE html>
<html lang="en">
    <head>
<link rel="stylesheet" type="text/css" href="include/style_install.css">
        <meta charset="utf-8" />
        <title>Install WebProtect</title>
    </head>
    <body>
        <div id="body">
        <h1>Installation WebProtect</h1>
        
            <form action="input_text.htm">
  <p><br><input name="vorname" type="text" size="30" maxlength="30"></p>
  <p><br><input name="zuname" type="text" size="30" maxlength="40"></p>
</form>
<?
$fp = fopen("index.php","a+");
$datei = file($fp);
$datei[4] = $antwort1;
fwrite($fp, implode("\n", $datei));  

// Die Ausgabe der Datei
$fp = fopen('index.php', 'r');
fpassthru($fp);
echo $datei[20];    

?>

        </div>
<?php

 echo $_SERVER['REMOTE_ADDR'];
?>
        
    </body>
</html>
