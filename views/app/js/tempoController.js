(function(){   
 
 "use strict";

  angular.module('climatempo')
    .controller('tempoController', ['$scope', 'weatherService', function($scope, weatherService){
      
        var vm = this;
        vm.searchdata = '';

        vm.getWeatherbyLocaleID = function(){
            weatherService.getWeatherbyLocaleID(3477, callback);
        }

        vm.getWeatherbyLocaleName = function(){
            weatherService.getWeatherbyLocaleName(vm.searchdata, callback);
        }

        var callback = function(data){
            vm.data = data;
        }

        function init(){
            vm.getWeatherbyLocaleID();
        }

        init();

    }]);

})();