<?php

function obtener_servicios() {
    try {
        //importar las credenciales 
        require 'database.php';
        //consulta codigo sql
        $sql = "SELECT * FROM servicios;";
        //realizar la consulta a la base de datos
        $consulta = mysqli_query($db, $sql);
        // accerder a los resultados
        echo "<pre>";
        var_dump(mysqli_fetch_assoc($consulta));
        echo "</pre>";
        //mostrar los resultados

        //cerrar la coneccion
    }
    catch (\throwable $th) {
        var_dump($th);
    }
}

obtener_servicios();