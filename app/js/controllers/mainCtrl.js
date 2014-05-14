'use strict';

var jauntAppControllers = angular.module('jauntAppControllers', []);

jauntAppControllers.controller('mainCtrl', ['$scope', '$rootScope', '$state', "$firebase", "$firebaseSimpleLogin",
  function($scope, $rootScope, $state, $firebase, $firebaseSimpleLogin ) {
    console.log('mainCtrl');

  //    var ref = new Firebase("https://jaunt-app.firebaseio.com/");
	 // $scope.loginObj = $firebaseSimpleLogin(ref);

	 // $scope.signIn = function() {
		// $scope.loginObj.$login('password', {
		//    email: this.email,
		//    password: this.password,
		// }).then(function(user) {
		//    console.log('Logged in as: ', user.uid);
		// }, function(error) {
		//    console.error('Login failed: ', error);
		// });
	 // }
	 

	 // $scope.signUp = function() {
  //     $scope.loginObj.$createUser($scope.email, $scope.password, function(error, user) {
  //       if (!error) {
  //         console.error('Login failed: ', error);
  //       } else {
  //         console.log('Logged in as: ', user.uid);
  //       }
  //     });
  //   }


  	var ref = new Firebase('https://jaunt-app.firebaseio.com/');
    $rootScope.auth = $firebaseSimpleLogin(ref);
    
    $scope.signIn = function () {
      $rootScope.auth.$login('password', {
        email: $scope.email,
        password: $scope.password
      }).then(function(user) {
        $rootScope.alert.message = '';
      }, function(error) {
        if (error = 'INVALID_EMAIL') {
          console.log('email invalid or not signed up — trying to sign you up!');
          $scope.signUp();
        } else if (error = 'INVALID_PASSWORD') {
          console.log('wrong password!');
        } else {
          console.log(error);
        }
      });
    }

    $scope.signUp = function() {
      $rootScope.auth.$createUser($scope.email, $scope.password, function(error, user) {
        if (!error) {
          $rootScope.alert.message = '';
        } else {
          $rootScope.alert.class = 'danger';
          $rootScope.alert.message = 'The username and password combination you entered is invalid.';
        }
      });
    }

     $scope.logOut = function($event) {
     	$rootScope.auth.$logout();
     	console.log($rootScope.auth);
     }	

}]);


jauntAppControllers.controller('AlertCtrl', [
  '$scope', '$rootScope', function($scope, $rootScope) {
    $rootScope.alert = {};
  }
]);



