<?php
$apiUrl = 'URL_API';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$dados = json_decode($response, true);
$tarefas = json_decode($dados['body'], true);
?>
