angular.module('myApp')
    .component('navigationPage', {
        templateUrl: 'pages/navigation.php',
        controller: 'NavigationController'
    })
    .controller('NavigationController', function($scope, $location, $window) {
        $scope.pageRoutes = [
            { id: '1', name: 'Home', url: 'pages/home.php' },
            { id: '2', name: 'About Us', url: 'pages/about.php'},
            { id: '3', name: 'Gallery', url: 'pages/gallery.php' },
            { id: '4', name: 'Contact Us', url: 'pages/contact.php' },
        ];

        $scope.refreshPage = function() {
            $window.location.reload();
        };

        $scope.defaultPage = 'pages/home.php';
        $scope.activeTab = '';
        $scope.currentPage = {};

        $scope.setTab = function (url) {
            $location.path(url);
            $scope.activeTab = url;
            $scope.currentPage = $scope.pageRoutes.find(function(page) {
                return page.url === url;
            });
        };

        $scope.currentPage = $scope.pageRoutes.find(function(page) {
            return page.url === $scope.defaultPage;
        });
    });
