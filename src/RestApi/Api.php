<?php

namespace RestApi;

use Domain\Locale;
use RestApi\AbstractApi;

class Api extends AbstractApi {

    public function searchWeatherByLocale($locale){
        $allLocales = file_get_contents("./base/weather.json");
        echo $allLocales;
    }


}