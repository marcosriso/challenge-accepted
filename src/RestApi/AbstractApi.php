<?php

namespace RestApi;

/**
*   Classe que Abstrai Possíveis Métodos comuns à API REST
*
*/
class AbstractApi {

    protected function toJson($str){
        return json_encode($str);
    }
}