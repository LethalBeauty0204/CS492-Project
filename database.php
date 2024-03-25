<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:cs492bookstore.database.windows.net,1433; Database = cs492bookstore", "cs492admin", "rebgyQ-4bufje-qirxut");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "cs492admin", "pwd" => "rebgyQ-4bufje-qirxut", "Database" => "cs492bookstore", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:cs492bookstore.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
