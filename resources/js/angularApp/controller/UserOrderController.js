adminApp.controller('orderController', ['$http','$scope','OrderService', function ($http,$scope,OrderService) {
    $scope.isEdit = true;
    $scope.sort = function (keyname) {
        $scope.sortKey = keyname;   //set the sortKey to the param passed
        $scope.reverse = !$scope.reverse; //if true make it false and vice versa
    };

    $scope.getOrderById = function (id) {
        OrderService.GetOrderById(id).then(function (response) {
            $scope.order=response.data;
            return response.data;
        }, function errorCallBack(response) {
            return response.data;
        });
    };
    $scope.getOrder = function () {
        OrderService.GetUserOrder().then(function (response) {
            $scope.orders=response.data;
            return response.data;
        }, function errorCallBack(response) {
            return response.data;
        });
    };

}]);

       
