<?php 

setcookie("username", $value);
setcookie("Khairan", $value2, time()+3600); /* expire in 1 hour */

echo "<h1>cookie 'username' ada. Isinya : ".
$_COOKIE['username'];