<?php
/**
* Rest API by @mriso_dev
* Neste pequeno exemplo podemos ver conceitos de Orientação à Objetos
*
*/
namespace RestApi;

use RestApi\AbstractApi;

class Api extends AbstractApi {

    public function searchWeatherByLocaleID($locale){
        $allweather = json_decode(file_get_contents("./base/weather.json"));
        $filtered = [];
        foreach($allweather as $weather) {
            if($weather->locale->id == $locale['id']){
                $filtered[] = $weather;
            }
        }

        echo $this->toJson($filtered);
    }

    public function searchWeatherByLocaleName($name){
        $allweather = json_decode(file_get_contents("./base/weather.json"));
        $filtered = [];
        foreach($allweather as $weather) {
            if(strtolower($weather->locale->name) == strtolower($name)){
                $filtered[] = $weather;
            }
        }

        echo $this->toJson($filtered);
    }

    public function getAllLocales(){
        echo file_get_contents("./base/locales.json");
    }


}