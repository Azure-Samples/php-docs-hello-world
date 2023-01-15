<?php


$con = mysqli_init(); mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL); mysqli_real_connect($conn, "df-sql-jbc.mysql.database.azure.com", "davidf", "Katie090115", "cbplearners", 3306, MYSQLI_CLIENT_SSL);
if ($conn->connect_error) die("Fatal Error");

?>