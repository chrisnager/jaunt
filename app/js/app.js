var jauntApp = angular.module('jauntApp', [
 	'onsen.directives',
 	'jauntAppControllers',
	'ui.router'
]);

jauntApp.run(
  [ '$rootScope', '$state', '$stateParams',
    function ($rootScope,   $state,   $stateParams) {
	    $rootScope.$state = $state;
	    $rootScope.$stateParams = $stateParams;
    }
  ]
);
