<html>
    <head>
        <title>Climatempo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Encode+Sans" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="views/app/css/app.css">
    </head>
    <body ng-app="climatempo" ng-controller="tempoController as tp">
        <nav class="nav">
            <a href="/"><img src="views/app/images/logo-white.png" class="responsive" /></a>
        </nav>

        <section class="container">
            <div class="search-container">
                <form>
                    <input class="search" ng-model="tp.searchdata" enter-key="tp.getWeatherbyLocaleName()" placeholder="Busca por Localidade">
                    <img src="views/app/images/icons/search.png" class="search-icon" />
                </form>
            </div>
        </section>

        <section class="container" ng-if="tp.data.length">
            <header class="center-header">
                <h1 class="header">Previsão para {{ tp.data[0].locale.name }} - {{ tp.data[0].locale.state }}</h1>
                <p class="" >Período de {{ tp.data[0].period.begin | date: 'dd/MM/yyyy' }} à {{ tp.data[0].period.end | date: 'dd/MM/yyyy' }}</p>
            </header>

            <div class="container-info" ng-repeat="weather in tp.data[0].weather" >
                <div class="head-info">
                    <p class="date">{{ weather.date | date: 'dd/MM/yyyy' }}</p>
                    <p class="text">{{ weather.text }}</p>
                </div>

                <div class="body-info">
                    <div class="half-body">
                        <img src="views/app/images/icons/upload.png" />
                        <span class="max">{{ weather.temperature.max }} &ring;C</span>
                    </div>
                     <div class="half-body">
                        <img src="views/app/images/icons/download.png" />
                        <span class="min">{{ weather.temperature.min }} &ring;C</span>
                    </div>
                    <div class="half-body">
                        <img src="views/app/images/icons/raindrop-close-up.png" />
                        <span class="black">{{ weather.rain.precipitation }}mm</span>
                    </div>
                     <div class="half-body">
                        <img src="views/app/images/icons/umbrella.png" />
                        <span class="black">{{ weather.rain.probability }}%</span>
                    </div>                    
                </div>
            </div>           

        </section>

        <section class="container" ng-show="!tp.data.length">
            <header class="center-header">
                <h1 class="header">Nenhum local encontrado.</h1>
                <p class="" >Ops! É case insensitive, porém considera a acentuação. Não deu tempo de fazer uma busca mais sofisticada ...</p>
            </header>
        </section>

        <script src="views/app/js/angular.min.js"></script>
        <script src="views/app/js/init.js"></script>
        <script src="views/app/js/tempoController.js"></script>
        <script src="views/app/js/weatherService.js"></script>
        <script src="views/app/js/enterDirective.js"></script>
    </body>
</html>