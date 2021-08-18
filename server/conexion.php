<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname = "localhost";
$database = "ecomerce";
$username = "root";
$password = "";
$conexion = NEW mysql($hostname, $username, $password, $database) or trigger_error(mysql_error(),E_USER_ERROR); 
?>