<?php

namespace Domain;

/**
* Este Objeto representa a estrutura de dados Temperature
* Por se tratar de um teste, vou representar aqui o meu entendimento
* de encapsulamento de dados.
*/
class Temperature {
    private $min;
    private $max;

    function __construct($min, $max){
        $this->min = $min;
        $this->max = $max;
    }

    public function getMin(){
        return $this->min;
    }

    public function getMax(){
        return $this->max;
    }

}