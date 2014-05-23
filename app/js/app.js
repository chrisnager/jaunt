var app = angular.module('app', [
 	'onsen.directives',
 	'appCtrl',
	'ui.router',
	'firebase',
]);

app.constant('FIREBASE_URI', 'https://jaunt-app.firebaseio.com/');

app.run( [ '$rootScope', '$state', '$stateParams',
    function ($rootScope,   $state,   $stateParams) {
	    $rootScope.$state = $state;
	    $rootScope.$stateParams = $stateParams;
    }
  ]
);
