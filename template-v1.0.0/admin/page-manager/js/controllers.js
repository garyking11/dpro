var adminControllers = angular.module('adminControllers', ['ngMessages', 'ngResource']);

// populate page-manager
adminControllers.controller('PageController',

    [ '$scope', '$http', '$routeParams', '$log',
        function( $scope, $http, $routeParams, $log ) {
			
    $http.get('/admin/page-manager/includes/page-data.json').success(function(data,status,headers,config) {
																		
            $scope.pages = data;

            $scope.whichItem = $routeParams.itemId;

            console.log($scope.whichItem + ' is itemId' );
            console.log($scope.pages );




            console.log("PageController has fired");

			});
			
	}]); // PageController


// populate pages and edit forms
adminControllers.controller('DataController',
    ['$scope', '$http', '$routeParams', '$filter', '$log', '$resource',
        function( $scope, $http, $routeParams, $filter, $log, $resource )

        {

            $http.get('/admin/page-manager/includes/page-data.json')
                .success(function(result) {
//data,status,headers,config

                         $scope.pageData = result;


                    $scope.pageData.page_data[0].name= $filter('uppercase')($scope.pageData.page_data[0].name);

                    // success message
                    $log.info($scope.pageData.page_data[0].name);

                    })

                .error(function (data, status) {
                    console.log('There was an error');
                });

// start RemovePage
            $scope.RemovePage = function(index) {

                console.log('test');
               var whichItem = $routeParams.itemId;

                 console.log(index + ' index');

                 var confirmDelete = confirm('Remove Page?');

                 if (confirmDelete==true) {

                     $scope.pageData.page_data.splice(index,1);
                 //$scope.ValidateSave();
                 }
            }




        }])

// page-manager-add-page
 adminControllers.controller('CrudController',
     ['$scope',  '$routeParams', '$http', '$log', '$filter','$resource',
         function( $scope, $routeParams, $http, $log, $filter, $resource ) {

             $scope.url = "";
             $scope.characters = 5;
             $scope.pageTitle = 'Add New Page';


             $scope.rules = [
                 { rulename: "Must be 5 characters" },
                 { rulename: "Must not be used elsewhere" },
                 { rulename: "Must be very cool" }

                 ];

             // watch
             $scope.$watch('name',function() {

             });

             console.log($scope.rules);
	 // Update data

/*	  $scope.ValidateSave() = function() {

		  alert('test');

	  };*/


// start SaveAll
     $scope.SaveAll = function() {

        $scope.pageData = [];
         $scope.whichItem = $routeParams.itemId;

             //start get data
         $http.get('/admin/page-manager/includes/page-data.json')
             .success(function(result) {


                 $scope.pageData = result;
                 console.log( $scope.pageData.page_data);

             })
             .error(function (data, status) {
                 console.log('There was an error');
             }); // end get


               var pageData = { page_data :
               [{
                   name   : $scope.name,
                   url    : $scope.url,
                   title  : $scope.title,
                   block1 : $scope.block1,
                   block2 : $scope.block2,
                   block3 : $scope.block3
               }]};


        // start post data
         $http.post('/admin/page-manager/includes/data.ajax.php',

         pageData

         ).success(function(result)  {

                 // success message
                  $log.info($scope.name + ' = data');


             })
             .error(function (data, status) {
                 console.log('There was an error');
             });
     }






}]); // CrudController


						
						 
