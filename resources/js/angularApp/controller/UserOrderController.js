adminApp.controller('orderController', ['$http', '$scope', 'OrderService', function ($http, $scope, OrderService) {

    function GetQueryStringParameter(name) {
        url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    $scope.isEdit = true;
    $scope.sort = function (keyname) {
        $scope.sortKey = keyname;   //set the sortKey to the param passed
        $scope.reverse = !$scope.reverse; //if true make it false and vice versa
    };

    $scope.getOrderById = function () {
        // const $id = GetQueryStringParameter('id');
        // if ($id != null && $id !== typeof undefined && $id !== 0) {
            OrderService.GetOrderById(1).then(function (response) {
                console.log(response);
                $scope.order = response.data;
            }, function errorCallBack(response) {
                return response.data;
            });
        //}
    };
    $scope.getOrderById();
    $scope.getOrder = function () {
        OrderService.GetUserOrder().then(function (response) {
            $scope.orders = response.data;
            return response.data;
        }, function errorCallBack(response) {
            return response.data;
        });
    };

}]);

       
