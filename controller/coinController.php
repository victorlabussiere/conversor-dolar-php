<?php
$resultState = false;
$apiData = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao=%2706-01-2023%27&$top=1&$skip=0&$format=json&$select=cotacaoCompra,dataHoraCotacao';

$jsonData = json_decode(file_get_contents($apiData), true);
$cotacao = $jsonData['value'][0]['cotacaoCompra'];

$userInput = $_GET['coin'] ?? '0';

$result = '';
$stringResult = '';
$placeholderFormater = '';
if (isset($_GET['coin'])) {
    $resultState = true;
    $result = $cotacao * $userInput;
    $stringResult = strval($userInput);
} else $resultState = false;
