<?php
/**
*   Weather Test APP by @mriso_dev
*   ---------------------------------------------------------------------------------------
*   Nesta demonstração crio uma API rest utilizando fundamentos de Orientação à Objetos.
*   Utilizei poucos componentes prontos e nenhum framework visando uma demonstração técnica.
*   Exceções foram o AltoRouter na REST API e o AngularJS no Frontend.
*
*   Pretendia utilizar o GULP para minificar os JS e o node para subir o frontend em um serviço 
*   distinto, mas o tempo estava muito curto para mim recentemente.
*
*   
*   Instruções
*
*   Clone em seu servidor e aponte para a raiz. No caso eu usei apache com mod rewrite ativado
*   e vHost configurado com overrideAll.
*
*   No arquivo index.php estão as rotas da API rest.
*/

require_once 'vendor/autoload.php';

use RestApi\Api;
use Tests\testApi;

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

$router->map( 'GET', '/api/[i:id]', function($id) {
    header('Content-Type: application/json; charset=utf-8');
    $api = new Api();
    $api->searchWeatherByLocaleID($id);
});

$router->map( 'POST', '/api', function() {
    header('Content-Type: application/json; charset=utf-8');
    $name = file_get_contents('php://input');
    $api = new Api();
    $api->searchWeatherByLocaleName($name);
});

$router->map( 'GET', '/api/locales', function() {
    header('Content-Type: application/json; charset=utf-8');
    $api = new Api();
    $api->getAllLocales();
});

$match = $router->match();  

if($match){
    call_user_func($match['target'], $match['params']);
}

