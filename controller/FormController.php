<?php
include __DIR__ . '/../model/FormModel.php';
include __DIR__ . '/../helpers/FormActions.php';

// Exibidor de resultado
$resultState = false;

$model = new Modelo();
$model->setCotacao($path);
$model->setUserInput(isset($_POST['coin']) ? $_POST['coin'] : 0);

$userInput = $model->getUserInput();
$cotacao = $model->getCotacao();

// Exibir o resultado apenas no SUBMIT do formulário.
if (isset($_GET['currency'])) {
    if (isset($_POST['coin'])) {
        $resultState = true;

        // Setting dos valores calculados
        $resultBR = calcRealToDolar($cotacao, $userInput);
        $resultUS = calcDolarToReal($cotacao, $userInput);
        $vlBR = Modelo::setFormat($brPattern, $resultBR, 'BRL');
        $vlUS = Modelo::setFormat($usaPattern, $resultUS, 'USD');
    }
} else $resultState = false;
