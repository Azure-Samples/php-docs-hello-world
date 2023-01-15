<?php
$hn = "df-sql-jbc.mysql.database.azure.com";
$un = "davidf";
$pw = "Katie090115";
$db = "cbplearners";

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");

?>