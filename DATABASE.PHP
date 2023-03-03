<?php
$connectionString = getenv("DATABASE_URL");
$conn = mysqli_connect($connectionString);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
