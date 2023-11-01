<?php
$visitorip = $_SERVER["REMOTE_ADDR"];
if (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
    $visitorip .= ' (' . $_SERVER["HTTP_X_FORWARDED_FOR"] . ')';
}
if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
    $visitorip .= ' (' . $_SERVER["HTTP_CLIENT_IP"] . ')';
}

// Specify the file path where you want to save the IP, OS, and browser information
$file = 'visitor_info.txt';

// Check if the IP address is already in the file
if (file_exists($file) && is_readable($file)) {
    $existingData = file_get_contents($file);
    if (strpos($existingData, $visitorip) === false) {
        // Get the user-agent string
        $userAgent = $_SERVER["HTTP_USER_AGENT"];

        // Parse the user-agent string to extract OS and browser information
        $os = "Unknown";
        $browser = "Unknown";

        // ... (Rest of your code to determine OS and browser)

        // Prepare the data for writing to the file
        $timestamp = date('Y-m-d H:i:s');
        $data = "Timestamp: $timestamp\n";
        $data .= "IP Address: $visitorip\n";
        $data .= "Operating System: $os\n";
        $data .= "Browser: $browser\n\n";

        // Open the file in append mode to add the information
        if ($handle = fopen($file, 'a')) {
            // Append the information to the file
            fwrite($handle, $data);

            // Close the file
            fclose($handle);
        } else {
            // Handle file write error
            echo "";
        }
    }
} else {
    // Handle file read error or missing file
    echo "";
}
?>
