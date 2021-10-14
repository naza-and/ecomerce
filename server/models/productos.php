<?php

function mostrar_productos() {
    include("conexion.php");
    $query = $conexion->query("select * from productos");
    $resultado = $query->fetch_all(1);
    return $resultado;
}
//consulta de categorias de juego

function mostrar_categorias() {
    $query = $conexion->query("select productos.nombre,productos.descripcion, productos.precio, productos.cantidad  
    from productos
    inner join categoria on categoria.id = id_categorias WHERE categoria.nombre=´aventura´");
    $resultado = $query->fetch_all(1);
    return $resultado;
}