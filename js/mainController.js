angular.module('myApp')
  .controller('mainController', function($scope) {
    $scope.showLogin = true; // Default to login form
    $scope.isLoggedIn = false;
    $scope.user = {}; // Object to store user data

    // Function to toggle between login and signup forms
    $scope.toggleLogin = function() {
      $scope.showLogin = !$scope.showLogin;
    };

    // Function to handle login
    $scope.login = function() {
      // Replace with your actual login logic (e.g., API call, database check)
      // For demonstration purposes, we'll just simulate successful login
      if ($scope.user.username === 'test' && $scope.user.password === 'test') {
        $scope.isLoggedIn = true;
        alert('Login successful!');
      } else {
        alert('Invalid username or password.');
      }
    };

    // Function to handle signup
    $scope.signup = function() {
      // Replace with your actual signup logic (e.g., API call, database insertion)
      // For demonstration purposes, we'll just simulate successful signup
      alert('Signup successful!');
    };

    // Function to handle logout
    $scope.logout = function() {
      $scope.isLoggedIn = false;
      $scope.user = {};
      alert('Logged out!');
    };
  });