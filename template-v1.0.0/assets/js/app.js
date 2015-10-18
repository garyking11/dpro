var app = angular.module('app', [
	'ngRoute',
    'ngTouch',
    'ngMessages',
	'adminControllers'
]); 

app.config(function( $routeProvider)   {
	
	$routeProvider
	.when('/', {
            templateUrl: 'assets/partials/home-page.php',
            controller: 'DataController'
        })
	.when('/admin', {
            templateUrl: 'assets/partials/page-manager.php',
            controller: 'DataController'
        })
	.when('/admin/:itemId', {
            templateUrl: 'assets/partials/page-manager-edit-page.php',
            controller: 'PageController'
        })
    .when('/page/:itemId', {
            templateUrl: 'assets/partials/page-template-2-col.php',
            controller: 'PageController'
        })
   .when('/add-page', {
            templateUrl: 'assets/partials/page-manager-add-page.php',
            controller: 'CrudController'
        })

        .otherwise({
				redirectTo: '/'
		});
		
		 // use the HTML5 History API
        //$locationProvider.html5Mode(true);
	
});

//['$routeProvider', ]
console.log('assets/js/app.js fired');
console.log(location);


app.directive("adminItemList" , ['$location', function() {


    /*if(location.hash == '#/admin') {
        console.log(location.hash);
        var sidebarTemplate = 'assets/partials/page-manager-menu.php'

    }

    else {

        var sidebarTemplate = 'assets/partials/sb-client-default.php'
    }*/
    var sidebarTemplate = 'assets/partials/page-manager-menu.php'

    return {

       templateUrl:  sidebarTemplate

        // template: '<h3>testing</h3>'
    }
}])