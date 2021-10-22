<?php

function mostrar_productos() {
    include("conexion.php");
    $query = $conexion->query("select *, categorias.nombre AS categoria , productos.nombre AS nombrep from productos inner join categorias on productos.id_categorias = categorias.id ");
    $resultado = $query->fetch_all(1);
    return $resultado;
}