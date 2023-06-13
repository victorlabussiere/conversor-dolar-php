<?php
include __DIR__ . '/../model/FormModel.php';

// Exibidor de resultado
$resultState = false;

// API path
$path = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao=%2706-01-2023%27&$top=1&$skip=0&$format=json&$select=cotacaoCompra,dataHoraCotacao';

// Aplicação de modelo
$brPattern = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
$model = new Modelo();
$model->setCotacao($path);
$model->setUserInput(isset($_GET['coin']) ? $_GET['coin'] : 0);

$userInput = $model->getUserInput();
$cotacao = $model->getCotacao();

if (isset($_GET['coin'])) {
    // Exibir o resultado apenas no SUBMIT do formulário.
    $resultState = true;

    // Setting dos valores calculados
    $result = $cotacao * $userInput;
    $vl = $model->setFormat($brPattern, $result, 'BRL');
} else $resultState = false;
