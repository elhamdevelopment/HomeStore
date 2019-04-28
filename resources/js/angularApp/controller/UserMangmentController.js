adminApp.controller('userManageController', ['$scope', '$http', 'userManageService', 'toaster', function ($scope, $http, userManageService, toaster) {
    
    $scope.GetAllUser = function () {
        $scope.Users = userManageService.getAllUsers();
    };

    $scope.GetAllUser();

    $scope.sort = function (keyname) {
        $scope.sortKey = keyname;   //set the sortKey to the param passed
        $scope.reverse = !$scope.reverse; //if true make it false and vice versa
    }
   
}]);

