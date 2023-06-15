<?php
$path = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao=%2706-01-2023%27&$top=1&$skip=0&$format=json&$select=cotacaoCompra,dataHoraCotacao';

function calcRealToDolar($a, $b)
{
    return $a * $b;
}

function calcDolarToReal($a, $b)
{
    return $b / $a;
}

// Aplicação de modelo
$brPattern = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
$usaPattern = numfmt_create('en_US', NumberFormatter::CURRENCY);
