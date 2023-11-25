<?php

$data = array(
    "general" => array(
        "server_url" => "https://demo.getodk.org",
        "constraint_behavior" => "on_finalize"
    ),
    "admin" => array(
        "edit_saved" => false
    ),
    "project" => array(
        "name" => "QR code project",
        "icon" => "Q",
        "color" => "#ff0000"
    )
);

$json_data = json_encode($data, JSON_PRETTY_PRINT);

// Salvar o JSON em um arquivo (opcional)
file_put_contents('arquivo.json', $json_data);

echo $json_data;

?>