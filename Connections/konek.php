<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
require_once "parser-php-version.php";
$hostname_konek = "localhost";
$database_konek = "displaymasjid";
$username_konek = "root";
$password_konek = "";
$konek = mysql_pconnect($hostname_konek, $username_konek, $password_konek) or trigger_error(mysql_error(),E_USER_ERROR); 
?>