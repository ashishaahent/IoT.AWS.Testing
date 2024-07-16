<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['output']) && $_FILES['output']['error'] == 0) {
        $uploadDir = __DIR__;
        $uploadFile = $uploadDir . DIRECTORY_SEPARATOR . 'output.txt';
        
        if (move_uploaded_file($_FILES['output']['tmp_name'], $uploadFile)) {
            echo "The file has been uploaded successfully.";
        } else {
            echo "There was an error moving the uploaded file.";
        }
    } else {
        echo "No file was uploaded or there was an error during the upload.";
    }
}