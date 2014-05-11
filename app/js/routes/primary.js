'use strict';

jauntApp.config(function($stateProvider, $urlRouterProvider) {

  $urlRouterProvider.otherwise("/jaunt");

  $stateProvider
      .state('jaunt', {
        url: '/jaunt',
        views: {
          'main': {
              templateUrl: 'html/views/main.html',
              controller: 'mainCtrl',
          }
        }
      }) 
      .state('jauntList', {
        url: '/jaunt/list',
        views: {
          'main': {
              templateUrl: 'html/views/list.html',
              controller: 'jauntListCtrl',
          }
        }
      })    
});