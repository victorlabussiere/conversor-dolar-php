<?php
class Modelo
{

    private $cotacao;
    private $userInput = 0;

    public function setUserInput($superGlobal)
    {
        $this->userInput = $superGlobal;
    }

    public function getUserInput()
    {
        return $this->userInput;
    }

    public function setCotacao($apiPath)
    {
        $jsonData = json_decode(file_get_contents($apiPath), true);
        $this->cotacao = $jsonData['value'][0]['cotacaoCompra'];
    }

    public function getCotacao()
    {
        return $this->cotacao;
    }

    static function setFormat($pattern, $value, $currency)
    {
        return numfmt_format_currency($pattern, $value, $currency);
    }
}
