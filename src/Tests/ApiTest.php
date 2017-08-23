<?php

require_once './vendor/autoload.php';
use PHPUnit\Framework\TestCase;

/**
* Apenas um simples teste de Output. 
* Gostaria de ter mais tempo para fazer testes mais elaborados.
* Mas no atual momento está impossível.
*/
class ApiTest extends TestCase
{
    /** @test */
    public function testExpectJsonLocale()
    {
        $locales = file_get_contents("./base/locales.json");
        $apiContent = file_get_contents("/api/locales");
        $this->assertEquals($apiContent, $locales);

    }

}