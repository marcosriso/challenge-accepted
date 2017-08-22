<?php

namespace RestApi;

use Domain\Locale;
use RestApi\AbstractApi;

class Api extends AbstractApi {

    public function searchWeatherByLocale($locale){
        $allweather = json_decode(file_get_contents("./base/weather.json"));
        $filtered = [];
        foreach($allweather as $weather) {
            if($weather->locale->id == $locale['id']){
                $filtered[] = $weather;
            }
        }

        echo $this->toJson($filtered);
    }

    public function serchLocaleByName($locale){
        $alllocales = json_decode(file_get_contents("./base/locales.json"));
        $filtered = [];
        foreach($alllocales as $loc) {
            if(strtolower($loc->name) == strtolower($locale['name'])){
                $filtered[] = $loc;
            }
        }

        return $filtered;
    }

    public function getAllLocales(){
        echo file_get_contents("./base/locales.json");
    }


}