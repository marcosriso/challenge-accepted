(function(){   
 
 "use strict";

  angular.module('climatempo')
    .controller('tempoController', ['weatherService', function(weatherService){
      
        var vm = this;

        vm.getWeatherbyLocaleID = function(){
            weatherService.getWeatherbyLocaleID(3477, callback);
        }

        var callback = function(data){
            console.log(data);
        }

        function init(){
            vm.getWeatherbyLocaleID();
        }

        init();

    }])

})();