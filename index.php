<?php
/**
*   Weather Test APP by @mriso_dev
*   Nesta demonstração crio uma API rest utilizando fundamentos de Orientação à Objetos.
*   Utilizei poucos componentes prontos e nenhum framework visando uma demonstração técnica.
*
*/

require_once 'vendor/autoload.php';

use RestApi\Api;

// Roteador de Urls
$router = new AltoRouter();

/**
* Página Mobile
* Se utilizando o Apache, ativar mod rewrite e AllowOverride All para funcionar.
* 
*/
$router->map( 'GET', '/', function() {
    require __DIR__ . '/views/mobile.php';
});

$router->map( 'GET', '/api', function() {
    header('Content-Type: application/json; charset=utf-8');
    Api::searchWeatherByLocale('osasco');
});


$match = $router->match();  

if($match){
    call_user_func($match['target'], $match['params']);
}

