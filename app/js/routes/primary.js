'use strict';

jauntApp.config(function($stateProvider, $urlRouterProvider) {

  $urlRouterProvider.otherwise("/jaunt");

  $stateProvider
      .state('home', {
        url: '/jaunt',
        data: {
            css: ['css/home.css']
        },
        views: {
          'main': {
              templateUrl: 'html/views/main.html',
              controller: 'mainCtrl',
          }
        }
      }) 
      .state('list', {
        url: '/jaunt/list',
        views: {
          'main': {
              templateUrl: 'html/views/list.html',
              controller: 'listCtrl',
          }
        }
      })  
      .state('search', {
        url: '/jaunt/search',
        views: {
          'main': {
              templateUrl: 'html/views/search.html',
              controller: 'searchCtrl',
          }
        }
      })    
});