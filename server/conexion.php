<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conexion = "localhost";
$database_conexion = "ecomerce";
$username_conexion = "root";
$password_conexion = "";
$conexion = new mysqli($hostname_conexion, $username_conexion, $password_conexion, $database_conexion) or trigger_error(mysql_error(),E_USER_ERROR); 

?>