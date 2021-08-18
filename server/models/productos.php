<?php

function mostrar_productos() {
    include("conexion.php");
    $query = $conexion->query("select descripcion from productos");
    $resultado = $query->fetch_all(1);
    return $resultado;
}

