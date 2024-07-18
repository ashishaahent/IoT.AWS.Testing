<?php
$file = 'warning.txt';

if (isset($_GET['warning'])) {
    $message = strtoupper($_GET['warning']);

    // Open the file in write mode, creating it if it doesn't exist
    $handle = fopen($file, 'w');
    if ($handle) {
        fwrite($handle, $message); // Overwrite the file with the message
        fclose($handle);
        echo "Message saved.";
    } else {
        echo "Unable to open file.";
    }
} else {
    echo "No message to save.";
}
