var phonecatControllers = angular.module('phonecatControllers', ['templateservicemod', 'navigationservice']);

phonecatControllers.controller('home',
    function ($scope, $http, TemplateService, NavigationService, $location) {

        $scope.demo = "hey";
        $scope.gotosearch = function () {
            $location.path("search_property");
        };

        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Rent", "navigation_residential");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/home.html";
        TemplateService.menu = "";
        $scope.testimonial = [];

        //        At start call getsearchbackground for backgounr image
        var backgroundimage = function (data, status) {
            $scope.banner = data;
            $scope.bannerimage = {
                "background": 'url(img/' + data.text + ') no-repeat',
                "background-position": 'center',
                "background-size": 'cover',
                "height": '450px'
            };
        };
        NavigationService.getbannerbackground().success(backgroundimage);



        var slidersuccess = function (data, status) {
            $scope.slider = data;
            for (var i = 0; i < $scope.slider.length; i++) {
                $scope.slider[i].activeid = i;
            }
            $scope.slider[0].active = "active";
        };

        var testimonialsuccess = function (data, status) {
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
phonecatControllers.controller('search_property', ['$scope', 'TemplateService', 'NavigationService', '$http',

  function ($scope, TemplateService, NavigationService, $http) {

        function testsingleproperty(data, status) {
            //$scope.page = data;
            console.log("data  cumming");
            console.log(data);
            $scope.singlesproperty = data;

        }
        $scope.template = TemplateService;
        //    $scope.menutitle = NavigationService.makeactive("Rent", "navigation_residential");
        TemplateService.title = $scope.menutitle;
        TemplateService.foo = "";
        TemplateService.content = "views/search_property.html";
        TemplateService.footer = "";


        TemplateService.menu = "";
        $scope.form = {
            latlong: "19.075984,72.877656",
            type: "airport"
        };
        $scope.alltypes = [
            "airport", "train_station", "bus_station", "bank|atm", "hospital", "school", "park", "restaurant", "movie_theater", "night_club|bar", "department_store|grocery_or_supermarket", "pharmacy", "shopping_mall"
        ];
        $scope.places = [];
        var placescomplete = function (data) {
            data = data.results;
            if (data.length > 5) {
                data = data.slice(0, 5);
            }
            $scope.places = data;
            //console.log(data);
        };
        $scope.getnewplaces = function (form) {
            NavigationService.getdetails(form.latlong, form.type).success(placescomplete);
        };
        $scope.properties = [];
        var propertiessuccess = function (data) {

            data = data.queryresult;
            console.log(data);
            $scope.properties = data;
            $scope.map = {
                center: {
                    latitude: data[0].lat,
                    longitude: data[0].long
                },
                zoom: 13
            };

            $scope.markers = NavigationService.formatmarkers(data);

            iconchange();

        };
        NavigationService.getproperties().success(propertiessuccess);

        $scope.markerclick = function (number) {
            $scope.showcomeout($scope.properties[number]);
        };
        $scope.console = function (data) {
            console.log(data);
            $scope.form.latlong = data.latitude + "," + data.longitude;
            NavigationService.getdetails($scope.form.latlong, $scope.form.type).success(placescomplete);
        };
        $scope.shouldcomeout = "";
        $scope.closecomeout = function () {
            $scope.shouldcomeout = "";
        };

        $scope.showcomeout = function (property) {
            console.log(property.id);
            NavigationService.getsinglesproperty(property.id).success(testsingleproperty);
            $scope.shouldcomeout = "comeout";
        };



        $scope.circles = [
            {
                id: 1,
                center: {
                    latitude: 19.075984,
                    longitude: 72.877656
                },
                radius: 2500,
                stroke: {
                    color: '#08B21F',
                    weight: 2,
                    opacity: 1
                },
                fill: {
                    color: '#08B21F',
                    opacity: 0.5
                },
                events: {

                    center_changed: function () {
                        iconchange();
                    }
                },
                geodesic: true, // optional: defaults to false
                draggable: true, // optional: defaults to false
                clickable: true, // optional: defaults to true
                editable: true, // optional: defaults to false
                visible: true // optional: defaults to true
            }

        ];

        $scope.searchfil = {
            active: true
        };

        var iconchange = function () {
            for (var i = 0; i < $scope.markers.length; i++) {
                var d = getDistance($scope.markers[i].coords.latitude, $scope.markers[i].coords.longitude, $scope.circles[0].center.latitude, $scope.circles[0].center.longitude);
                var r = $scope.circles[0].radius / 1000;
                if (d > r) {
                    $scope.markers[i].icon = 'img/circles.png';
                    $scope.properties[i].active = false;
                    console.log(i + '=' + d);
                    console.log($scope.markers);
                } else {
                    $scope.properties[i].active = true;
                    $scope.markers[i].icon = 'img/circle.png';
                }
            }
        };

        var getDistance = function (lat1, long1, lat2, long2) {
            var R = 6378.137; // Earth’s mean radius in km
            var p1 = {
                lat: lat1,
                lng: long1
            };
            var p2 = {
                lat: lat2,
                lng: long2
            };

            var dLat = rad(p2.lat - p1.lat);
            var dLong = rad(p2.lng - p1.lng);
            var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                Math.cos(rad(p1.lat)) * Math.cos(rad(p2.lat)) *
                Math.sin(dLong / 2) * Math.sin(dLong / 2);
            var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
            var d = R * c;
            return d; // returns the distance in km



        };
        var rad = function (x) {
            return x * Math.PI / 180;
        };



        $scope.$on('$includeContentLoaded', function (event) {
            //    $('#output').append('<p>' + event.targetScope.name + ' include\'s content was loaded.</p>');
            onstart();
        });
}]);






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
        $scope.singlesproperty = [];

        $scope.$on('$includeContentLoaded', function (event) {
            //    $('#output').append('<p>' + event.targetScope.name + ' include\'s content was loaded.</p>');
            onstart();
        });


        $scope.propertyid = 1;

        var testproperty = function (data, status) {
            console.log("all properties");
            console.log(data);

            $scope.property1 = data.queryresult;
            $scope.property1[0].active = "selected";

        }

        $scope.singlesproperty = {}

        $scope.changeproperty = function (prop) {

            console.log(prop);
            $scope.propertyid = prop.id;
            $scope.propdata = prop;


            for (var i = 0; i < $scope.property1.length; i++) {
                $scope.property1[i].active = "";
            }
            prop.active = "selected";
            NavigationService.getsinglesproperty($scope.propertyid).success(testsingleproperty);
        }



        NavigationService.getproperty().success(testproperty);
        NavigationService.getsinglesproperty($scope.propertyid).success(testsingleproperty);


  }]);





phonecatControllers.controller('residential_services',

    function ($scope, TemplateService, NavigationService, $http) {
        $scope.resiad = "active";
        $scope.template = TemplateService;
        $scope.menutitle = NavigationService.makeactive("Other Services", "navigation_residential");
        TemplateService.title = $scope.menutitle;
        TemplateService.content = "views/services.html";
        $scope.navigation = NavigationService.getnav("navigation_residential");

        $scope.globalArea = "";
        $scope.globalDay = "";
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
            NavigationService.getsingleservice($scope.serviceid, $scope.pageno, $scope.globalDay, $scope.globalArea).success(testsingleservice);
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
            NavigationService.getsingleservice($scope.serviceid, $scope.pageno, $scope.globalDay, $scope.globalArea).success(testsingleservice)
        }



        var sortAreaSuccess = function (data) {
            $scope.singleService = data.queryresult
        }



        $scope.sortArea = function (id) {
            $scope.globalArea = id;
            NavigationService.getsingleservice($scope.serviceid, $scope.pageno, $scope.globalDay, $scope.globalArea).success(testsingleservice)
        }


        $scope.sortDay = function (id) {
            $scope.globalDay = id;
            NavigationService.getsingleservice($scope.serviceid, $scope.pageno, $scope.globalDay, $scope.globalArea).success(testsingleservice)
        }


        NavigationService.getservice().success(testservice);
        NavigationService.getarea().success(testarea);
        NavigationService.getdays().success(testdays);
        //        NavigationService.getsingleservice().success(pageination)

        NavigationService.getsingleservice($scope.serviceid, $scope.pageno, $scope.globalDay, $scope.globalArea).success(testsingleservice);
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