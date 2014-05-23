var jauntApp = angular.module('jauntApp', [
 	'onsen.directives',
 	'jauntAppControllers',
	'ui.router',
	'firebase',
]);

jauntApp.constant('FIREBASE_URI', 'https://jaunt-app.firebaseio.com/');

jauntApp.run( [ '$rootScope', '$state', '$stateParams',
    function ($rootScope,   $state,   $stateParams) {
	    $rootScope.$state = $state;
	    $rootScope.$stateParams = $stateParams;
    }
  ]
);
