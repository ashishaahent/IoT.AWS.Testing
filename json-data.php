<?php
// Read the content of output.txt
$fileContent = file_get_contents('output.txt');

// Decode the JSON data
$data = json_decode($fileContent, true);

// Encode it back to JSON and print it
echo json_encode($data);
