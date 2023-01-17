<?php
$host = 'df-sql-jbc.mysql.database.azure.com';
$username = 'davidf';
$password = 'Jbc150615"';
$db_name = 'cbplearners';
$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306, MYSQLI_CLIENT_SSL);
$st=mysqli_real_escape_string($conn,$_POST['st']);
$end=mysqli_real_escape_string($conn,$_POST['end']);
$tut=mysqli_real_escape_string($conn,$_POST['tutors']);

$query="INSERT INTO cbplearners.tbl_cbpdates (cbpID,startdate,plannedEndDate,tutorTeam)
VALUES(NULL,{$st},{$end},{$tut});"

$result = mysqli_query($conn, $query);
	if (!$result){
		die ("Database access failed");
		echo "Failed";
	}
	else {
	header("Location: index.php");