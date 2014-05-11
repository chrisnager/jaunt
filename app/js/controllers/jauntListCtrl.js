'use strict';

jauntAppControllers.controller('jauntListCtrl', ['$scope', 
  function($scope) {
    console.log('jauntListCtrl');

    $scope.username = "clintonhalpin";
	$scope.displayName = "Clinton Halpin";
	$scope.email = "clintonhalpin@gmail.com";
	$scope.city = "New York City";
	$scope.zipcode = "11216";
	$scope.photo = "https://scontent-b-iad.xx.fbcdn.net/hphotos-ash3/t1.0-9/1185556_10152172601436672_764383251_n.jpg";
}]);

