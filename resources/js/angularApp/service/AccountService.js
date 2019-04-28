adminApp.service('accountService', function ($http, toaster) {

    this.Login = function (item) {
        return $http({
            method: "Post",
            url: "../../api/Account/Login",
            contentType: "application/json ; charset=utf-8",
            data: item
        }).then(function (response) {
            return response.data
        }, function errorCallBack(response) {
            var msg = response.data.message;
            if (msg !== undefined)
                toaster.pop("error", "عملیات ناموفق", msg);
            else
                toaster.pop("error", 'عملیات ناموفق', 'بروز خطا در سیستم');
            return response.data;
        });
    };

    this.LoginOff = function () {
        return $http({
            method: "Post",
            url: "../../api/Account/LogOff",
            contentType: "application/json ; charset=utf-8",
            data: {}
        }).then(function (response) {
            return response.data
        }, function errorCallBack(response) {
            return response.data;
        });
    };

    this.Register = function (item) {
        return $http({
            method: "Post",
            url: "../../api/Account/Register",
            contentType: "application/json ; charset=utf-8",
            data: item
        }).then(function (response) {
            return response.data
        }, function errorCallBack(response) {
            // var msg = response.message;
            // if (msg !== undefined)
            //     toaster.pop("error", "عملیات ناموفق", msg);
            // else
            //     toaster.pop("error", 'عملیات ناموفق', 'بروز خطا در سیستم.لطفا مجدد سعی نمایید');
            return response.data;
        });
    };

    this.VerifyPhoneNumber = function (item) {
        return $http({
            method: "Post",
            url: "../api/Account/VerifyPhoneNumber",
            contentType: "application/json ; charset=utf-8",
            data: item
        }).then(function (response) {
            return response.data
        }, function errorCallBack(response) {
            var msg = response.message;
            if (msg !== undefined)
                toaster.pop("error", "عملیات ناموفق", msg);
            else
                toaster.pop("error", 'عملیات ناموفق', 'بروز خطا در سیستم.لطفا مجدد سعی نمایید');
            return response.data;
        });
    };

    this.ForgotPassword = function (email) {
        return $http({
            method: "Post",
            url: "../../api/Account/ForgotPassword",
            contentType: "application/json ; charset=utf-8",
            data: { Email: email }
        }).then(function (response) {
            
            return response.data
        }, function errorCallBack(response) {
            consle.log(response);
            var msg = response.message;
            if (msg !== undefined)
                toaster.pop("error", "عملیات ناموفق", msg);
            else
                toaster.pop("error", 'عملیات ناموفق', 'بروز خطا در سیستم.لطفا مجدد سعی نمایید');
            return response.data;
        });
    };

    this.ResetPassword = function (item) {
        return $http({
            method: "Post",
            url: "../../api/Account/ResetPassword",
            contentType: "application/json ; charset=utf-8",
            data: item
        }).then(function (response) {
            return response.data
        }, function errorCallBack(response) {
            var msg = response.message;
            if (msg !== undefined)
                toaster.pop("error", "عملیات ناموفق", msg);
            else
                toaster.pop("error", 'عملیات ناموفق', 'بروز خطا در سیستم.لطفا مجدد سعی نمایید');
            return response.data;
        });
    };

    this.ConfirmEmail = function (item) {
        return $http({
            method: "Post",
            url: "../../api/Account/ConfirmEmail",
            contentType: "application/json ; charset=utf-8",
            data: item
        }).then(function (response) {
            return response.data
        }, function errorCallBack(response) {
            var msg = response.message;
            if (msg !== undefined)
                toaster.pop("error", "عملیات ناموفق", msg);
            else
                toaster.pop("error", 'عملیات ناموفق', 'بروز خطا در سیستم.لطفا مجدد سعی نمایید.');
            return response.data;
        });
    };

});