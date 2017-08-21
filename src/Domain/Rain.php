<?php

namespace Domain;

/**
* Este Objeto representa a estrutura de dados Rain
* Por se tratar de um teste, vou representar aqui o meu entendimento
* de encapsulamento de dados.
*/
class Rain {
    private $probability;
    private $precipitation;

    function __construct($probability, $precipitation){
        $this->probability = $probability;
        $this->precipitation = $precipitation;
    }

    public function getProbability(){
        return $this->probability;
    }

    public function getPrecipitation(){
        return $this->precipitation;
    }

}