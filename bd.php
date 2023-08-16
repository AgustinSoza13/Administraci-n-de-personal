<?php
    $servidor="localhost";//ip 127.0.0.1
    $baseDeDatos="app";
    $usuario="root";
    $contraseña="";
    try{
        $conexion=new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contraseña);
    }
    catch(Exception $ex){
        echo "Error al conectar con la base de datos".$ex->getMessage();
    }



?>