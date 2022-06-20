<?php

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', '11maiky11', 'real_estate');

    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
    }

    return $db;
    
}