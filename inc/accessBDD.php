<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'base4reco');
define('DB_PASSWORD', 'base4reco');
define('DB_NAME', 'TrocDeTrucs');
define('DB_DSN', 'mysql:dbname=' . DB_NAME . ';host=' . DB_HOST . ';port=3306;charset=UTF8');

$dbh = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
?>
