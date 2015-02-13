var adminurl="http://bdp.epuratech.com/admin/index.php/json/";
//var adminurl="http://localhost/housing/index.php/json/";

var navigationservice = angular.module('navigationservice', [])

.factory('NavigationService', function ($http) {


    var navigation_residential = [{
            name: "Buy/Rent",
            classis: "selected-top",
            link: "#/residential_property",
            subnav: []
    }, {
            name: "Sell",
            classis: "",
            link: "#/residential_sell",
            subnav: []
    }, {
            name: "Rent",
            classis: "",
            link: "#/residential_rent",
            subnav: []
    }, {
            name: "Other Services",
            classis: "",
            link: "#/residential_services",
            subnav: []
    }, {
            name: "Negotation",
            classis: "",
            link: "#/residential_negotiation",
            subnav: []
    }, {
            name: "Reverse Auction",
            classis: "",
            link: "#/residential_reverse_auction",
            subnav: []
    }
];

    var navigation_commercial = [{
            name: "Buy/Rent",
            classis: "selected-top",
            link: "#/commercial_property",
            subnav: []
    }, {
            name: "Sell",
            classis: "",
            link: "#/commercial_sell",
            subnav: []
    }, {
            name: "Rent",
            classis: "",
            link: "#/commercial_rent",
            subnav: []
    }, {
            name: "Other Services",
            classis: "",
            link: "#/commercial_services",
            subnav: []
    }, {
            name: "Negotation",
            classis: "",
            link: "#/commercial_negotiation",
            subnav: []
    }, {
            name: "Reverse Auction",
            classis: "",
            link: "#/commercial_reverse_auction",
            subnav: []
    }
];

    var navigation_projects = [{
            name: "Buy/Rent",
            classis: "selected-top",
            link: "#/projects_property",
            subnav: []
    }, {
            name: "Sell",
            classis: "",
            link: "#/projects_sell",
            subnav: []
    }, {
            name: "Rent",
            classis: "",
            link: "#/projects_rent",
            subnav: []
    }, {
            name: "Other Services",
            classis: "",
            link: "#/projects_services",
            subnav: []
    }, {
            name: "Negotation",
            classis: "",
            link: "#/projects_negotiation",
            subnav: []
    }, {
            name: "Reverse Auction",
            classis: "",
            link: "#/projects_reverse_auction",
            subnav: []
    }
];
    
    var navigation_plots = [{
            name: "Buy/Rent",
            classis: "selected-top",
            link: "#/plots_property",
            subnav: []
    }, {
            name: "Sell",
            classis: "",
            link: "#/plots_sell",
            subnav: []
    }, {
            name: "Rent",
            classis: "",
            link: "#/plots_rent",
            subnav: []
    }, {
            name: "Other Services",
            classis: "",
            link: "#/plots_services",
            subnav: []
    }, {
            name: "Negotation",
            classis: "",
            link: "#/plots_negotiation",
            subnav: []
    }, {
            name: "Reverse Auction",
            classis: "",
            link: "#/plots_reverse_auction",
            subnav: []
    }
];
    
    
    
    var navigation = {
        navigation_residential: navigation_residential,
        navigation_commercial: navigation_commercial,
        navigation_projects: navigation_projects,
        navigation_plots: navigation_plots
    };


    return {
        getnav: function (mainmenu) {
            console.log(navigation[mainmenu]);
            return navigation[mainmenu];
        },

        makeactive: function (menuname, nav) {

            console.log(nav);
            
            for (var i = 0; i < navigation[nav].length; i++) {
                if (navigation[nav][i].name == menuname) {
                    navigation[nav][i].classis = "selected-top"
                } else {
                    navigation[nav][i].classis = "";
                }
            }
            return menuname;
        },
        getchat: function () {
            return "first project";
        },
        getbannerbackground: function () {
            return $http.get(adminurl+"getsearchbackground",{});
        },

        getsliderimage: function () {
            return $http.get(adminurl+"getnewproperty",{});
        },

        gettestimonial: function () {
            return $http.get(adminurl+"gettestimonial",{});
        },

        getvideo: function () {
            return $http.get(adminurl+"getvideo",{});
        },
        getservice: function () {
            return $http.get(adminurl+"getallservicetype",{});
        },
        
        getarea: function () {
            return $http.get(adminurl+"getallarea",{});
        },
        getdays: function () {
            return $http.get(adminurl+"getallweekday",{});
        },
                getsingleservice: function (serviceId) {
            return $http.get(adminurl+"getserviceproviderbytype",{ params: {servicetype:serviceId}});
        },


    }
});