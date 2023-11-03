<?php

$db = mysqli_connect("localhost", "root", "llaves", "appsalon");


if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    exit;
}

