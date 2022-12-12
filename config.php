<?php
error_reporting(0);
define('DB_SERVER', 'localhost');
define('DB_ASTUNNUS', 'root');
define('DB_SALASANA', '');
define('DB_NAME', 'retrogamershavenlogin');
 
$link = mysqli_connect(DB_SERVER, DB_ASTUNNUS, DB_SALASANA, DB_NAME);
 
if($link === false){
    die("ERROR: yhdistäminen epäonnistui. " . mysqli_connect_error());
}
?>