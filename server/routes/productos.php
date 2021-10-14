<?php
//Utilizamos un metodo GET para traer todos los productos.
router("GET", "/productos", function(){
    include_once("./models/productos.php");
    echo json_encode(mostrar_productos());
});

