/**
 * Created by reza on 28/02/2017.
 */
adminApp.service("OrderService",function ($http,toaster) {

    this.GetOrderById = function (id) {
        return $http({
            method: "Post",
            url: "/api/user/order-detail",
            contentType: "application/json ; charset=utf-8",
            data: {Id:id}
        }).then(function (response) {
            return response.data
        }, function errorCallBack(response) {
            toaster.pop('error', 'خطا در ثبت', response.statusText);
        });
    };

    this.GetUserOrder = function () {
        return $http({
            method: "Post",
            url: "/api/user/get-order",
            contentType: "application/json ; charset=utf-8",
        }).then(function (response) {
            return response.data
        }, function errorCallBack(response) {
            toaster.pop('error', 'خطا در ثبت', response.statusText);
        });
    };

});
