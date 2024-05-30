<?php
/* VARIABLES DE CONFIGURACIÓN */
$server_db = "dtb.database.windows.net";
$usuario_db = "CloudSAcff10363";
$password_db = "342461323_Yeiker";
$base_db = "diariodb";

/* CONEXIÓN A LA BASE DE DATOS */
try {
    $dsn = "mysql:host=$server_db;dbname=$base_db";
    $conexion = new PDO($dsn, $usuario_db, $password_db);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>