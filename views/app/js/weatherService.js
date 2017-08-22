(function(){   
 "use strict";
    angular.module('climatempo')
        .service('weatherService', ['$http', function($http){ 

        var vm = this;

        vm.getWeatherbyLocaleID = function(id, callback){
            $http.get("/api/"+id)
            .then(function(response) {
                callback(response.data);
            });
        }

    }]);

})();