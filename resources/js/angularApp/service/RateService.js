adminApp.service('RateService', function ($http) {
    const token = localStorage.getItem('token');

    this.AddRate = function (item) {
        return $http({
            method: "Post",
            url: "/api/user/addRate",
            contentType: "application/json ; charset=utf-8",
            headers: {
                "Authorization": "Bearer " + token
            },
            data: item
        }).then(function (response) {
            return response.data
        }, function errorCallBack(response) {
            return response.data;
        });
    };

});