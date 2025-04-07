<?php
// odbierz.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $device = $_POST['device'];
    $temp = $_POST['temp'];
    $pressure = $_POST['pressure'];

    $data = [
        'device' => $device,
        'temp' => $temp,
        'pressure' => $pressure,
        'timestamp' => date('Y-m-d H:i:s')
    ];

    $json = json_encode($data);
    file_put_contents("dane.json", $json);

    echo "OK";
} else {
    echo "Brak danych.";
}
?>
