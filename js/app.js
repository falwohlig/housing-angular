// JavaScript Document
var firstapp = angular.module('firstapp', [
  'ngRoute',
'templateservicemod',
'phonecatControllers',
'navigationservice'    

]);

firstapp.config(['$routeProvider',
                 function ($routeProvider) {
            $routeProvider.
            when('/home', {
                templateUrl: 'views/template.html',
                controller: 'home'
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