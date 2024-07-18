<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['output']) && $_FILES['output']['error'] == 0) {
        $uploadDir = __DIR__;
        $uploadFile = $uploadDir . DIRECTORY_SEPARATOR . 'output.txt';
        echo $_FILES['output']['tmp_name'];
        if (move_uploaded_file($_FILES['output']['tmp_name'], $uploadFile)) {
            echo "The file has been uploaded successfully.";
        } else {
            echo "There was an error moving the uploaded file.";
        }
    } else {
        $error = $_FILES['output']['error'];
        echo "No file was uploaded or there was an error during the upload. Error code: $error";
    }
    echo "<br>";
    echo 'upload_tmp_dir: ' . ini_get('upload_tmp_dir') . '<br>';
    echo 'sys_get_temp_dir: ' . sys_get_temp_dir();
}