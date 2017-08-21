<?php

namespace RestApi;

use Domain\Locale;
use RestApi\AbstractApi;

class Api extends AbstractApi {

    public function searchByLocale($locale){
        $allLocales = file_get_contents("./base/locales.json");
        echo $allLocales;
    }


}