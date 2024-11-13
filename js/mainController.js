angular.module('myApp')
  .controller('mainController', function($scope, $http) {
    $scope.showLogin = true; // Default to login form
    $scope.isLoggedIn = false;
    $scope.user = {}; // Object to store user data

    // Function to toggle between login and signup forms
    $scope.toggleLogin = function() {
      $scope.showLogin = !$scope.showLogin;
    };

    // Function to handle login
    $scope.login = function() {
      $http.post('api/login.php', {
        username: $scope.user.username,
        password: $scope.user.password
      })
      .then(function(response) {
        // Successful login
        if (response.data.success) {
          $scope.isLoggedIn = true;
          $scope.user.username = response.data.username; // Set username in the scope
          // You might want to redirect to a protected page or display a welcome message
        } else {
          // Handle login errors (e.g., display an error message)
          alert(response.data.error);
        }
      })
      .catch(function(error) {
        // Handle network or other errors
        console.error('Error during login:', error);
        alert('Network error or server issue.');
      });
    };

    // Function to handle signup
    $scope.signup = function() {
      $http.post('api/signup.php', {
        username: $scope.user.username,
        password: $scope.user.password
        // ... other fields
      })
      .then(function(response) {
        // Successful signup
        if (response.data.success) {
          // Handle successful signup (e.g., redirect to login, display a message)
          alert('Signup successful! Please log in.');
        } else {
          // Handle signup errors (e.g., display an error message)
          alert(response.data.error);
        }
      })
      .catch(function(error) {
        // Handle network or other errors
        console.error('Error during signup:', error);
        alert('Network error or server issue.');
      });
    };

    // Function to handle logout
    $scope.logout = function() {
      $http.get('api/logout.php')
      .then(function(response) {
        // Successful logout
        if (response.data.success) {
          $scope.isLoggedIn = false;
          $scope.user.username = ''; // Clear username in the scope
          // You might want to redirect to a login page or display a logout message
        } else {
          // Handle logout errors
          console.error('Logout failed:', response.data.error);
          alert('Logout failed.');
        }
      })
      .catch(function(error) {
        // Handle network or other errors
        console.error('Error during logout:', error);
        alert('Network error or server issue.');
      });
    };
  });