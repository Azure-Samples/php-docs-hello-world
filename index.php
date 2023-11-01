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
            $visitorip .= ' (' . $_SERVER["HTTP_X_FORWARDED_FOR"] . ')';
        }
        if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
            $visitorip .= ' (' . $_SERVER["HTTP_CLIENT_IP"] . ')';
        }

        // Get the user-agent string
        $userAgent = $_SERVER["HTTP_USER_AGENT"];

        // Parse the user-agent string to extract OS and browser information
        $os = "Unknown";
        $browser = "Unknown";

        // Define arrays of known OS and browser substrings
        $osArray = array(
            'Windows' => 'Windows',
            'Linux' => 'Linux',
            'Mac OS' => 'Mac OS',
            'iOS' => 'iPhone|iPad|iPod',
            'Android' => 'Android'
        );

        $browserArray = array(
            'Chrome' => 'Chrome',
            'Firefox' => 'Firefox',
            'Safari' => 'Safari',
            'Edge' => 'Edg',
            'IE' => 'MSIE|Trident'
        );

        // Determine the visitor's operating system
        foreach ($osArray as $osName => $osPattern) {
            if (preg_match("/$osPattern/i", $userAgent)) {
                $os = $osName;
                break;
            }
        }

        // Determine the visitor's browser
        foreach ($browserArray as $browserName => $browserPattern) {
            if (preg_match("/$browserPattern/i", $userAgent)) {
                $browser = $browserName;
                break;
            }
        }

        // Specify the file path where you want to save the IP, OS, and browser information
        $file = 'visitor_info.txt';

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
    ?>
    <script>
        // JavaScript to redirect to another page after a delay (e.g., 5 seconds)
        setTimeout(function() {
            window.location.href = 'https://www.well-it.com/';
        }, 1000); // 5000 milliseconds (5 seconds)
    </script>
</body>
</html>
