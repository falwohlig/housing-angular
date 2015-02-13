var phonecatControllers = angular.module('phonecatControllers', ['templateservicemod', 'navigationservice']);

phonecatControllers.controller('home',
    function ($scope, $http, TemplateService, NavigationService) {

        $scope.demo = "hey";


        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Rent", "navigation_residential");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/home.html";
        TemplateService.menu = "";
        $scope.testimonial = [];

        //        At start call getsearchbackground for backgounr image
        var backgroundimage = function (data, status) {
            console.log(data);
            $scope.banner = data;
            $scope.bannerimage = {
                "background": 'url(img/' + data.text + ') no-repeat',
                "background-position": 'center',
                "background-size": 'cover',
                "height": '450px'
            };
            console.log($scope.bannerimage);
        };
        NavigationService.getbannerbackground().success(backgroundimage);



        var slidersuccess = function (data, status) {
            //        console.log("slider images");
            //            console.log(data);
            $scope.slider = data;
            for (var i = 0; i < $scope.slider.length; i++) {
                $scope.slider[i].activeid = i;
            }
            $scope.slider[0].active = "active";
        };

        var testimonialsuccess = function (data, status) {
            console.log(data);
            $scope.testimonial = data;
            //        for(var i = 0 ; i < $scope.testimonial.length ; i++)
            //        {
            //            $scope.testimonial[i].style = {
            //                "background": 'url(img/'+$scope.testimonial[i].image+') no-repeat',
            //                "background-position": 'center',
            //                "background-size": 'cover'
            //            };
            //        }
        }
        var getvideosuccess = function (data, status) {
            console.log(data);
            $scope.video = data;
            for (var i = 0; i < $scope.video.length; i++) {
                $scope.video[i].style = {
                    "background": 'url(img/' + $scope.video[i].image + ') no-repeat',
                    "background-position": 'center',
                    "background-size": 'cover'
                };
            }
        }

        NavigationService.getsliderimage().success(slidersuccess);
        NavigationService.gettestimonial().success(testimonialsuccess);
        NavigationService.getvideo().success(getvideosuccess);

    });

phonecatControllers.controller('residential_rent', ['$scope', 'TemplateService', 'NavigationService', '$http',

  function ($scope, TemplateService, NavigationService, $http) {
        $scope.resiad = "active";
        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Rent", "navigation_residential");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/rent.html";
        $scope.navigation = NavigationService.getnav("navigation_residential");
        $scope.$on('$includeContentLoaded', function (event) {
            //    $('#output').append('<p>' + event.targetScope.name + ' include\'s content was loaded.</p>');
            onstart();
        });

  }]);

phonecatControllers.controller('residential_negotiation', ['$scope', 'TemplateService', 'NavigationService', '$http',

  function ($scope, TemplateService, NavigationService, $http) {
        $scope.resiad = "active";
        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Negotation", "navigation_residential");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/negotiation.html";
        $scope.navigation = NavigationService.getnav("navigation_residential");
  }]);
phonecatControllers.controller('residential_reverse_auction', ['$scope', 'TemplateService', 'NavigationService', '$http',

  function ($scope, TemplateService, NavigationService, $http) {
        $scope.resiad = "active";
        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Reverse Auction", "navigation_residential");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/reverse_auction.html";
        $scope.navigation = NavigationService.getnav("navigation_residential");
  }]);
phonecatControllers.controller('residential_sell', ['$scope', 'TemplateService', 'NavigationService', '$http',

  function ($scope, TemplateService, NavigationService, $http) {
        $scope.resiad = "active";
        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Sell", "navigation_residential");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/sell.html";
        $scope.navigation = NavigationService.getnav("navigation_residential");
        $scope.$on('$includeContentLoaded', function (event) {
            //    $('#output').append('<p>' + event.targetScope.name + ' include\'s content was loaded.</p>');
            onstart();
        });


  }]);
phonecatControllers.controller('residential_property', ['$scope', 'TemplateService', 'NavigationService', '$http',

  function ($scope, TemplateService, NavigationService, $http) {
        $scope.template = TemplateService;
        $scope.resiad = "active";
        $scope.menutitle = NavigationService.makeactive("Buy/Rent", "navigation_residential");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/property.html";
        TemplateService.menu = "views/menu.html";
        $scope.navigation = NavigationService.getnav("navigation_residential");

        $scope.$on('$includeContentLoaded', function (event) {
            //    $('#output').append('<p>' + event.targetScope.name + ' include\'s content was loaded.</p>');
            onstart();
        });

  }]);





phonecatControllers.controller('residential_services',

    function ($scope, TemplateService, NavigationService, $http) {
        $scope.resiad = "active";
        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Other Services", "navigation_residential");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/services.html";
        $scope.navigation = NavigationService.getnav("navigation_residential");
        
     $scope.globalArea ="" ;
     $scope.globalDay ="" ;
     $scope.serviceid = 1;
    $scope
    
        var testservice = function (data, status) {


            console.log("get service data");
            console.log(data);
            $scope.service1 = data;
            $scope.service1[0].active = "selected";

        }


        var testarea = function (data, status) {


            console.log("get area data");
            console.log(data);
            $scope.area1 = data;

        }

        var testdays = function (data, status) {


                console.log("get area data");
                console.log(data);
                $scope.days = data;

            }
            //
            //        var pageination = function(data,status)
            //        {
            ////            $scope.pages = [url:"",id:""];
            //            
            //            $scope.page = {};
            //            $scope.page = data;
            //            $scope.page.status = true;
            //            $scope.page.lastpage=5;
            //        }
        $scope.changepage = function (id) {
           $scope.pageno = id;
        NavigationService.getsingleservice($scope.serviceid,$scope.pageno,$scope.globalDay,$scope.globalArea).success(testsingleservice);
        };

        var testsingleservice = function (data, status) {
            $scope.page = data;
            $scope.singleService = data.queryresult;
            console.log($scope.singleService);
            $scope.pageslink = [];
            $scope.page.lastpage = 5;
            for (var i = 0; i < $scope.page.lastpage; i++) {
                $scope.pageslink.push(i + 1);
            }

            console.log($scope.page);

            if (data.lastpage > 0) {
                $scope.page.status = "true";
            }

        }

      


        $scope.changeService = function (serve) {
            console.log(serve);
            $scope.serviceid = serve.id;
            for (var i = 0; i < $scope.service1.length; i++) {
                $scope.service1[i].active = "";
            }
            serve.active = "selected";
                NavigationService.getsingleservice($scope.serviceid,$scope.pageno,$scope.globalDay,$scope.globalArea).success(testsingleservice)
        }
        
        
        
        var sortAreaSuccess = function(data){
            $scope.singleService = data.queryresult
        }
        
        
    
        $scope.sortArea = function(id){
    $scope.globalArea = id;       NavigationService.getsingleservice($scope.serviceid,$scope.pageno,$scope.globalDay,$scope.globalArea).success(testsingleservice)
    }


        $scope.sortDay = function(id){
    $scope.globalDay = id;       NavigationService.getsingleservice($scope.serviceid,$scope.pageno,$scope.globalDay,$scope.globalArea).success(testsingleservice)
    }

        
        NavigationService.getservice().success(testservice);
        NavigationService.getarea().success(testarea);
        NavigationService.getdays().success(testdays);
        //        NavigationService.getsingleservice().success(pageination)
        
        NavigationService.getsingleservice($scope.serviceid,$scope.pageno,$scope.globalDay,$scope.globalArea).success(testsingleservice);
    });



phonecatControllers.controller('commercial_rent', ['$scope', 'TemplateService', 'NavigationService', '$http',

  function ($scope, TemplateService, NavigationService, $http) {
        $scope.commercial = "active";
        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Rent", "navigation_commercial");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/rent.html";
        $scope.navigation = NavigationService.getnav("navigation_commercial");
        $scope.$on('$includeContentLoaded', function (event) {
            //    $('#output').append('<p>' + event.targetScope.name + ' include\'s content was loaded.</p>');
            onstart();
        });

  }]);

phonecatControllers.controller('commercial_negotiation', ['$scope', 'TemplateService', 'NavigationService', '$http',

  function ($scope, TemplateService, NavigationService, $http) {
        $scope.commercial = "active";
        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Negotation", "navigation_commercial");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/negotiation.html";
        $scope.navigation = NavigationService.getnav("navigation_commercial");
  }]);
phonecatControllers.controller('commercial_reverse_auction', ['$scope', 'TemplateService', 'NavigationService', '$http',

  function ($scope, TemplateService, NavigationService, $http) {
        $scope.commercial = "active";
        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Reverse Auction", "navigation_commercial");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/reverse_auction.html";
        $scope.navigation = NavigationService.getnav("navigation_commercial");
  }]);
phonecatControllers.controller('commercial_sell', ['$scope', 'TemplateService', 'NavigationService', '$http',

  function ($scope, TemplateService, NavigationService, $http) {
        $scope.commercial = "active";
        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Sell", "navigation_commercial");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/sell.html";
        $scope.navigation = NavigationService.getnav("navigation_commercial");
        $scope.$on('$includeContentLoaded', function (event) {
            //    $('#output').append('<p>' + event.targetScope.name + ' include\'s content was loaded.</p>');
            onstart();
        });


  }]);
phonecatControllers.controller('commercial_property', ['$scope', 'TemplateService', 'NavigationService', '$http',

  function ($scope, TemplateService, NavigationService, $http) {
        $scope.commercial = "active";
        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Buy/Rent", "navigation_commercial");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/property.html";
        $scope.navigation = NavigationService.getnav("navigation_commercial");

        $scope.$on('$includeContentLoaded', function (event) {
            //    $('#output').append('<p>' + event.targetScope.name + ' include\'s content was loaded.</p>');
            onstart();
        });

  }]);

phonecatControllers.controller('commercial_services', ['$scope', 'TemplateService', 'NavigationService', '$http',

  function ($scope, TemplateService, NavigationService, $http) {
        $scope.commercial = "active";
        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Other Services", "navigation_commercial");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/services.html";
        $scope.navigation = NavigationService.getnav("navigation_commercial");

  }]);


phonecatControllers.controller('projects_rent', ['$scope', 'TemplateService', 'NavigationService', '$http',

  function ($scope, TemplateService, NavigationService, $http) {
        $scope.project = "active";
        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Rent", "navigation_projects");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/rent.html";
        $scope.navigation = NavigationService.getnav("navigation_projects");
        $scope.$on('$includeContentLoaded', function (event) {
            //    $('#output').append('<p>' + event.targetScope.name + ' include\'s content was loaded.</p>');
            onstart();
        });

  }]);

phonecatControllers.controller('projects_negotiation', ['$scope', 'TemplateService', 'NavigationService', '$http',

  function ($scope, TemplateService, NavigationService, $http) {
        $scope.project = "active";
        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Negotation", "navigation_projects");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/negotiation.html";
        $scope.navigation = NavigationService.getnav("navigation_projects");
  }]);
phonecatControllers.controller('projects_reverse_auction', ['$scope', 'TemplateService', 'NavigationService', '$http',

  function ($scope, TemplateService, NavigationService, $http) {
        $scope.project = "active";
        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Reverse Auction", "navigation_projects");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/reverse_auction.html";
        $scope.navigation = NavigationService.getnav("navigation_projects");
  }]);
phonecatControllers.controller('projects_sell', ['$scope', 'TemplateService', 'NavigationService', '$http',

  function ($scope, TemplateService, NavigationService, $http) {
        $scope.project = "active";
        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Sell", "navigation_projects");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/sell.html";
        $scope.navigation = NavigationService.getnav("navigation_projects");
        $scope.$on('$includeContentLoaded', function (event) {
            //    $('#output').append('<p>' + event.targetScope.name + ' include\'s content was loaded.</p>');
            onstart();
        });


  }]);
phonecatControllers.controller('projects_property', ['$scope', 'TemplateService', 'NavigationService', '$http',

  function ($scope, TemplateService, NavigationService, $http) {
        $scope.project = "active";
        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Buy/Rent", "navigation_projects");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/property.html";
        $scope.navigation = NavigationService.getnav("navigation_projects");

        $scope.$on('$includeContentLoaded', function (event) {
            //    $('#output').append('<p>' + event.targetScope.name + ' include\'s content was loaded.</p>');
            onstart();
        });

  }]);

phonecatControllers.controller('projects_services', ['$scope', 'TemplateService', 'NavigationService', '$http',

  function ($scope, TemplateService, NavigationService, $http) {
        $scope.project = "active";
        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Other Services", "navigation_projects");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/services.html";
        $scope.navigation = NavigationService.getnav("navigation_projects");

  }]);


phonecatControllers.controller('plots_rent', ['$scope', 'TemplateService', 'NavigationService', '$http',

  function ($scope, TemplateService, NavigationService, $http) {
        $scope.plot = "active";
        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Rent", "navigation_plots");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/rent.html";
        $scope.navigation = NavigationService.getnav("navigation_plots");
        $scope.$on('$includeContentLoaded', function (event) {
            //    $('#output').append('<p>' + event.targetScope.name + ' include\'s content was loaded.</p>');
            onstart();
        });

  }]);

phonecatControllers.controller('plots_negotiation', ['$scope', 'TemplateService', 'NavigationService', '$http',

  function ($scope, TemplateService, NavigationService, $http) {
        $scope.plot = "active";
        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Negotation", "navigation_plots");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/negotiation.html";
        $scope.navigation = NavigationService.getnav("navigation_plots");
  }]);
phonecatControllers.controller('plots_reverse_auction', ['$scope', 'TemplateService', 'NavigationService', '$http',

  function ($scope, TemplateService, NavigationService, $http) {
        $scope.plot = "active";
        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Reverse Auction", "navigation_plots");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/reverse_auction.html";
        $scope.navigation = NavigationService.getnav("navigation_plots");
  }]);
phonecatControllers.controller('plots_sell', ['$scope', 'TemplateService', 'NavigationService', '$http',

  function ($scope, TemplateService, NavigationService, $http) {
        $scope.plot = "active";
        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Sell", "navigation_plots");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/sell.html";
        $scope.navigation = NavigationService.getnav("navigation_plots");
        $scope.$on('$includeContentLoaded', function (event) {
            //    $('#output').append('<p>' + event.targetScope.name + ' include\'s content was loaded.</p>');
            onstart();
        });


  }]);
phonecatControllers.controller('plots_property', ['$scope', 'TemplateService', 'NavigationService', '$http',

  function ($scope, TemplateService, NavigationService, $http) {
        $scope.plot = "active";
        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Buy/Rent", "navigation_plots");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/property.html";
        $scope.navigation = NavigationService.getnav("navigation_plots");

        $scope.$on('$includeContentLoaded', function (event) {
            //    $('#output').append('<p>' + event.targetScope.name + ' include\'s content was loaded.</p>');
            onstart();
        });

  }]);

phonecatControllers.controller('plots_services', ['$scope', 'TemplateService', 'NavigationService', '$http',

  function ($scope, TemplateService, NavigationService, $http) {
        $scope.plot = "active";
        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Other Services", "navigation_plots");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/services.html";
        $scope.navigation = NavigationService.getnav("navigation_plots");

  }]);

phonecatControllers.controller('headerctrl', ['$scope', 'TemplateService', '$http',

 function ($scope, TemplateService) {}]);