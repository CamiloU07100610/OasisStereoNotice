
<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conexion = new PDO("sqlsrv:server = tcp:dtb.database.windows.net,1433; Database = diariodb", "CloudSAcff10363", "Yeiker342461323");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print ("Error connecting to SQL Server.");
    die(print_r($e));
}
?>