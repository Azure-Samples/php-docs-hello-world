<!DOCTYPE html>
<html>
<head>
    <title>Welcome to our Landing Page</title>
</head>
<body>
    <h1>Welcome to our Landing Page</h1>

    <?php
$visitorip = $_SERVER["REMOTE_ADDR"];
if (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
    $visitorip .= '(' . $_SERVER["HTTP_X_FORWARDED_FOR"] . ')';
}
if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
    $visitorip .= '(' . $_SERVER["HTTP_CLIENT_IP"] . ')';
}

// Specify the file path where you want to save the IP addresses
$file = 'visitor_ips.txt';

// Open the file in append mode to add the IP address
if ($handle = fopen($file, 'a')) {
    // Append the IP address along with a timestamp to the file
    $timestamp = date('Y-m-d H:i:s');
    $data = "[$timestamp] $visitorip\n";
    fwrite($handle, $data);

    // Close the file
    fclose($handle);

    echo "IP address saved to $file";
} else {
    echo "Unable to open or write to the file.";
}
?>
</body>
</html>
