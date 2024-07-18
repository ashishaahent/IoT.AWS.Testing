<?php
require_once("config.php");
$sql = mysqli_query($al, "SELECT * FROM sensor_data ORDER BY id DESC");
$data = [];
while ($row = mysqli_fetch_array($sql)) {
    $data[] = [
        'hash_id' => $row['hash_id'],
        'temperature' => $row['temperature'],
        'humidity' => $row['humidity'],
        'heatindex' => $row['heatindex'],
        'time' => $row['time'],
        'date' => $row['date'],
    ];
}
header('Content-Type: application/json');
echo json_encode($data);