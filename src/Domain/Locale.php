<?php

namespace Domain;

/**
* Este Objeto representa a estrutura de dados Locale
* Por se tratar de um teste, vou representar aqui o meu entendimento
* de encapsulamento de dados.
*/
class Locale {
    private $id;
    private $name;
    private $state;
    private $latitude;
    private $longitude;

    function __construct($id, $name, $state, $latitude, $longitude){
        $this->id = $id;
        $this->name = $name;
        $this->state = $state;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getState(){
        return $this->state;
    }

    public function getLatitude(){
        return $this->latitude;
    }

    public function getLongitude(){
        return $this->longitude;
    }

    public function toArray(){
        return [
            "id" => $this->getId(),
            "name" => $this->getName(),
            "state" => $this->getState(),
            "latitude" => $this->getLatitude(),
            "longitude" => $this->getLongitude()
        ];
    }


}