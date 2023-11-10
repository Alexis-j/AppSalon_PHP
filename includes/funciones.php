<?php

function obtener_servicios() {
    try {
        //importar las credenciales 
        require 'database.php';
        //consulta codigo sql
        $sql = "SELECT * FROM servicios;";
        //realizar la consulta a la base de datos
        $consulta = mysqli_query($db, $sql);

        return $consulta;
    }
    catch (\throwable $th) {
        var_dump($th);
    }
}

obtener_servicios();