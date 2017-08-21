<?php

namespace Domain;

use Domain\Temperature;
use Domain\Rain;

/**
* Este Objeto representa a estrutura de dados Weather
* Por se tratar de um teste, vou representar aqui o meu entendimento
* de encapsulamento de dados.
*/
class Weather {
    private $period;
    private $locale;
    private $date;
    private $text;
    private $temperature;
    private $rain;

    function __construct($period, $locale, $date, $text, $temperature, $rain){
        $this->date = $date;
        $this->text = $text;
        $this->temperature = new Temperature($temperature);
        $this->rain = new Rain($rain);
    }


    public function getPeriod(){
        return $this->period;
    }

    public function getLocale(){
        return $this->locale;
    }

    public function getDate(){
        return $this->date;
    }

    public function getText(){
        return $this->text;
    }

    public function getTemperature(){
        return $this->temperature;
    }

    public function getRain(){
        return $this->rain;
    }

    public function toArray() {
        return [
            "period" => (array) $this->getPeriod(),
            "locale" => (array) $this->getLocale(),
            "date" => $this->getDate(),
            "text" => $this->getText(),
            "temperature" => (array) $this->getTemperature(),
            "rain" => (array) $this->getRain()
        ];
    }

}