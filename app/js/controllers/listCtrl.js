'use strict';

jauntAppControllers.controller('listCtrl', ['$scope', 
  function($scope) {
    console.log('listCtrl');

	$scope.user = {
		name: 'clintonhalpin',
		displayName: 'Clinton Halpin',
		email: 'clintonhalpin@gmail.com',
		city: 'NYC',
		zipcode: '11216',
		photo : 'https://scontent-b-iad.xx.fbcdn.net/hphotos-ash3/t1.0-9/1185556_10152172601436672_764383251_n.jpg',
		place_count: '20',
		permalink_count: '5',
		places : [
			{
				name: 'Clover Club',
				location: 'Brooklyn, NY'
			},
			{
				name: 'Prospect Park',
				location: 'Brooklyn, NY'
			},
		]
	};

}]);

