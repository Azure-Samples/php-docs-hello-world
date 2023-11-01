<!DOCTYPE html>
<html>
<head>
    <title>Welcome to our Landing Page</title>
</head>
<body>
    <h1>Welcome to our Landing Page</h1>

    <?php
    // Get the visitor's IP address
    $ip = $_SERVER['REMOTE_ADDR'];

    // Define the file to store the IP addresses
    $filename = 'ip_log.txt';

    // Open the file in append mode
    $file = fopen($filename, 'a');

    // Write the visitor's IP address to the file
    fwrite($file, $ip . "\n");

    // Close the file
    fclose($file);
    ?>
</body>
</html>
