<html>
    <head>
        <title>Climatempo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Encode+Sans" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="views/app/css/app.css">
    </head>
    <body ng-app="climatempo">
        <nav class="nav">
            <a href="/"><img src="views/app/images/logo-white.png" class="responsive" /></a>
        </nav>

        <section class="container">
            <div class="search-container">
                <form>
                    <input class="search" placeholder="Busca por Localidade">
                    <img src="views/app/images/icons/search.png" class="search-icon" />
                </form>
            </div>
        </section>

        <section class="container" ng-controller="tempoController">
            <h1>Previsão para Osasco - SP</h1>

            <div class="container-info">
                <div class="head-info">
                    <p class="date">01/01/01</p>
                    <p class="text">bla bla bla bla bla bla bla</p>
                </div>

                <div class="body-info">
                    <div class="half-body">
                        <img src="views/app/images/icons/upload.png" />
                        <span class="max">30 C</span>
                    </div>
                     <div class="half-body">
                        <img src="views/app/images/icons/download.png" />
                        <span class="min">22 C</span>
                    </div>
                    <div class="half-body">
                        <img src="views/app/images/icons/raindrop-close-up.png" />
                        <span class="black">11mm</span>
                    </div>
                     <div class="half-body">
                        <img src="views/app/images/icons/umbrella.png" />
                        <span class="black">70%</span>
                    </div>                    
                </div>
            </div>

           

        </div>

        <script src="views/app/js/angular.min.js"></script>
        <script src="views/app/js/init.js"></script>
        <script src="views/app/js/tempoController.js"></script>
        <script src="views/app/js/weatherService.js"></script>
    </body>
</html>