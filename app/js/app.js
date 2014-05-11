var jauntApp = angular.module('jauntApp', [
 	'onsen.directives',
 	'ngRoute',
 	'jauntAppControllers'
]);

jauntApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/jaunt', {
        templateUrl: 'html/views/main.html',
        controller: 'mainCtrl',
        title: 'home'
      }).
      when('/jaunt/list', {
        templateUrl: 'html/views/jauntList.html',
        controller: 'jauntListCtrl',
        title: 'My Jaunt List'
      }).
      when('/jaunt/create', {
        templateUrl: 'html/views/createJaunt.html',
        controller: 'searchCtrl',
        title: 'Search'
      }).
      otherwise({
        redirectTo: '/jaunt'
      });
}]);