<!DOCTYPE html>
<html>
<head>
    <title>Redirecting</title>
</head>
<body>
    <h1>Redirecting</h1>
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
        } else {
            // Handle file write error
            echo "Unable to open or write to the file.";
        }
    ?>
    <script>
        // JavaScript to redirect to another page after a delay (e.g., 5 seconds)
        setTimeout(function() {
            window.location.href = 'https://www.well-it.com/'; // Replace with the URL of the page you want to load
        }, 1000); // 5000 milliseconds (5 seconds)
    </script>
</body>
</html>
