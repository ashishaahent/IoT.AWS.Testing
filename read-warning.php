<?php
$file = 'warning.txt';

if (file_exists($file)) {
    $contents = file_get_contents($file);
    echo nl2br($contents); // Convert newlines to <br> tags for HTML output
} else {
    echo "File not found.";
}
