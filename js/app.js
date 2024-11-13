angular.module('myApp', [])  
.directive('main', function() {
  return {
    restrict: 'E', // 'E' for element
    templateUrl: 'pages/main.php'
  };
})

  .directive('navigation', function() {
    return {
      restrict: 'E', // 'E' for element
      templateUrl: 'pages/navigation.php'
    };
  })
  
  .directive('footer', function() {
    return {
      restrict: 'E', // 'E' for element
      templateUrl: 'pages/footer.php'
    };
  });

  