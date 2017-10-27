<?php

date_default_timezone_set("Europe/Paris");
setlocale (LC_TIME, 'fr_FR.utf8','fra');

define("HOST",'localhost');
define("BASENAME",'doURBEX');
define("LOGIN",'root');
define('PASSWORD','root');

define('BASE_URL',"http://localhost/doURBEX");
define('BASE_FILE',"C:/UwAmp/www/doURBEX/");
define('LIB',BASE_FILE."lib");

require_once("Autoload.php");
