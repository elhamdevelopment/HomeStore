adminApp.service('WalletService', function ($http) {
    const token = localStorage.getItem('token');

    this.AddCredit = function (item) {
        return $http({
            method: "Post",
            url: "/api/wallet/acdCredit",
            contentType: "application/json ; charset=utf-8",
            headers: {
                "Authorization": "Bearer " + token
            },
            data: item
        }).then(function (response) {
            console.log(response);
            return response.data
        }, function errorCallBack(response) {
            return response.data;
        });
    };

});