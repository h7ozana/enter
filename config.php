<?php
define('DB_SERVER', 'enterrds1.cjcutxa28atb.ap-northeast-2.rds.amazonaws.com');
define('DB_USERNAME', 'newjeans');
define('DB_PASSWORD', 'newjeans');
define('DB_NAME', 'EnterDB3');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
