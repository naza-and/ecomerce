<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
<<<<<<< HEAD
$hostname = "localhost";
$database = "ecomerce";
$username = "root";
$password = "";
$conexion = NEW mysql($hostname, $username, $password, $database) or trigger_error(mysql_error(),E_USER_ERROR); 
=======
$hostname_conexion = "localhost";
$database_conexion = "ecomerce";
$username_conexion = "root";
$password_conexion = "";
$conexion = new mysqli($hostname_conexion, $username_conexion, $password_conexion, $database_conexion) or trigger_error(mysql_error(),E_USER_ERROR); 
>>>>>>> fd7a8a5c90b84b3e2ef3fd056286af0de4b013d9
?>