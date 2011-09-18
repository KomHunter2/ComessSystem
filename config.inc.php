<?php

$dbhost = "";
$dbname = "";
$dbuser = "";
$dbpass = "";

$connection = mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname);

if($connection!=true)
{
echo "<b> Warnung: </b> Die Verbindung zur Datenbank ist fehlgeschlagen. (<a href=\"http://comess.entenmix.de/support.php?error=01\">Fehlercode: 01</a>)";
}

$version = "1.0.0 Alpha 1";
$versionscode = "100unstable";
$copyright = "<a href=\"http://comess.entenmix.de\">ComessBook $version, entwickelt von KomHunter</a>";

?>