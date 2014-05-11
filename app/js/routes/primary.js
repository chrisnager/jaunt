'use strict';

jauntApp.config(function($stateProvider, $urlRouterProvider) {

  $urlRouterProvider.otherwise("/jaunt");

  $stateProvider
      .state('Home', {
        url: '/jaunt',
        views: {
          'main': {
              templateUrl: 'html/views/main.html',
              controller: 'homeCtrl',
          }
        }
      }) 
      .state('List', {
        url: '/jaunt/list',
        views: {
          'main': {
              templateUrl: 'html/views/list.html',
              controller: 'listCtrl',
          }
        }
      })  
      .state('Search', {
        url: '/jaunt/list',
        views: {
          'main': {
              templateUrl: 'html/views/list.html',
              controller: 'searchCtrl',
          }
        }
      })    
});