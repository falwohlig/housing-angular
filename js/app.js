// JavaScript Document
var firstapp = angular.module('firstapp', [
  'ngRoute',
'templateservicemod',
'phonecatControllers',
'navigationservice',
'uiGmapgoogle-maps'    

]);

firstapp.config(['$routeProvider',
                 function ($routeProvider) {
            $routeProvider.
                        when('/login', {
                templateUrl: 'views/template.html',
                controller: 'login'
            }).
            when('/login', {
                templateUrl: 'views/template.html',
                controller: 'login'
            }).
            
            when('/news', {
                templateUrl: 'views/template.html',
                controller: 'news'
            }).
            
            when('/about', {
                templateUrl: 'views/template.html',
                controller: 'about'
            }).
            
            when('/home', {
                templateUrl: 'views/template.html',
                controller: 'home'
            }).
            when('/search_property', {
                templateUrl: 'views/template.html',
                controller: 'search_property'
            }).
            when('/residential_sell', {
                templateUrl: 'views/template.html',
                controller: 'residential_sell'
            }).
            when('/residential_negotiation', {
                templateUrl: 'views/template.html',
                controller: 'residential_negotiation'
            }).
            when('/residential_property', {
                templateUrl: 'views/template.html',
                controller: 'residential_property'
            }).
            when('/residential_rent', {
                templateUrl: 'views/template.html',
                controller: 'residential_rent'
            }).
            when('/residential_services', {
                templateUrl: 'views/template.html',
                controller: 'residential_services'
            }).
            when('/residential_reverse_auction', {
                templateUrl: 'views/template.html',
                controller: 'residential_reverse_auction'
            }).
                when('/commercial_sell', {
                templateUrl: 'views/template.html',
                controller: 'commercial_sell'
            }).
            when('/commercial_negotiation', {
                templateUrl: 'views/template.html',
                controller: 'commercial_negotiation'
            }).
            when('/commercial_property', {
                templateUrl: 'views/template.html',
                controller: 'commercial_property'
            }).
            when('/commercial_rent', {
                templateUrl: 'views/template.html',
                controller: 'commercial_rent'
            }).
            when('/commercial_services', {
                templateUrl: 'views/template.html',
                controller: 'commercial_services'
            }).
            when('/commercial_reverse_auction', {
                templateUrl: 'views/template.html',
                controller: 'commercial_reverse_auction'
            }).
            when('/projects_sell', {
                templateUrl: 'views/template.html',
                controller: 'projects_sell'
            }).
            when('/projects_negotiation', {
                templateUrl: 'views/template.html',
                controller: 'projects_negotiation'
            }).
            when('/projects_property', {
                templateUrl: 'views/template.html',
                controller: 'projects_property'
            }).
            when('/projects_rent', {
                templateUrl: 'views/template.html',
                controller: 'projects_rent'
            }).
            when('/projects_services', {
                templateUrl: 'views/template.html',
                controller: 'projects_services'
            }).
            when('/projects_reverse_auction', {
                templateUrl: 'views/template.html',
                controller: 'projects_reverse_auction'
            }).
            when('/plots_sell', {
                templateUrl: 'views/template.html',
                controller: 'plots_sell'
            }).
            when('/plots_negotiation', {
                templateUrl: 'views/template.html',
                controller: 'plots_negotiation'
            }).
            when('/plots_property', {
                templateUrl: 'views/template.html',
                controller: 'plots_property'
            }).
            when('/plots_rent', {
                templateUrl: 'views/template.html',
                controller: 'plots_rent'
            }).
            when('/plots_services', {
                templateUrl: 'views/template.html',
                controller: 'plots_services'
            }).
            when('/plots_reverse_auction', {
                templateUrl: 'views/template.html',
                controller: 'plots_reverse_auction'
            }).
            otherwise({
                redirectTo: '/home'
            });  
}]);

firstapp.filter('imagepath', function () {
    return function (input) {
            return "http://wohlig.co.in/housing/uploads/" + input;
//        
    };
});



firstapp.filter('distance2', function () {
    return function (input, expre) {
        input=input.split(",");
        expre=expre.split(",");
        
        var newdistance=Math.floor(distance(input[0],input[1],expre[0],expre[1])*1000);
        var time=Math.floor(newdistance/(500/6));
        return  newdistance+" m  -  "+time+ " min";
    };
});

function distance(lat1, lon1, lat2, lon2, unit) {
    var radlat1 = Math.PI * lat1 / 180
    var radlat2 = Math.PI * lat2 / 180
    var radlon1 = Math.PI * lon1 / 180
    var radlon2 = Math.PI * lon2 / 180
    var theta = lon1 - lon2
    var radtheta = Math.PI * theta / 180
    var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
    dist = Math.acos(dist)
    dist = dist * 180 / Math.PI
    dist = dist * 60 * 1.1515
    if (unit == "K") {
        dist = dist * 1.609344
    }
    if (unit == "N") {
        dist = dist * 0.8684
    }
    return dist;
}
