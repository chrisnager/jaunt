'use strict';

var appCtrl = angular.module('appCtrl', []);

appCtrl.controller('mainCtrl', function($scope, $rootScope, $state, $firebaseSimpleLogin, FIREBASE_URI ) { 
    $scope.loginService =  $firebaseSimpleLogin(new Firebase(FIREBASE_URI)),
    $scope.newUser = { email : '', password : ''},
    $scope.currentUser = null;

    $scope.getCurrentUser = function() {
      $scope.loginService.$getCurrentUser()
        .then( function(user) {
          $scope.currentUser = user;
          // $state.transitionTo('home');
        });
    };

    $scope.getCurrentUser();

    $scope.login = function( email, password ) {
      $scope.loginService.$login('password', { email: email, password: password })
        .then( function(user) {
          $scope.currentUser = user;
        });
    };

    $scope.logOut = function(){
      $scope.loginService.$logout();
      $scope.currentUser = null;
    };

});


