adminApp.controller('accountController', ['$scope', 'toaster','accountService', function ($scope, toaster,accountService) {

    function GetQueryStringParameter(name) {
        url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }
    iziToast.settings({
        timeout: 3000, // default timeout
        resetOnHover: true,
        // icon: '', // icon class
        transitionIn: 'flipInX',
        transitionOut: 'flipOutX',
        position: 'topRight', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter, center
        onOpen: function () {
            console.log('callback abriu!');
        },
        onClose: function () {
            console.log("callback fechou!");
        }
    });

    $scope.login = function () {
        var item = { Email: $scope.UserName, password: $scope.Password, RememberMe: $scope.RememberMe };
        accountService.Login(item).then(function (response) {
            var res = response.res;
            var msg = response.message;
            switch (res) {
                case 0:
                    window.location.href = "../../admin/index";
                    break;
                case 1:
                    toaster.pop("warning", "اخطار!!", msg);
                    break;
                case 2:
                    window.location.href = "PhoneNumberVerification?p=" + response.mobile;
                    break;
            }
            return response.data;
        }, function errorCallBack(response) {
            toaster.pop('error', 'عملیات ناموفق', 'بروز خطا در سیستم.لطفا مجدد سعی نمایید.');
        });
    }
    $scope.register = function (user) {
        var item = {
            FirstName: user.FirstName,
            LastName: user.LastName,
            PhoneNumber: user.PhoneNumber,
            Email: user.Email,
            UserName: user.Email,
            Password: user.Password
        };
        accountService.Register(item).then(function (response) {
            // var res = response.data.res;
            // if (res == 0) {
            //     window.location.href = "PhoneNumberVerification?p=" + response.data.mobile;
            // } else {
                iziToast.show({
                    title: 'Hey',
                    message: 'What would you like to add?'
                });
            // }
            // toaster.pop('error', 'عملیات ناموفق', response.data.message);
        }, function errorCallBack(response) {
            // toaster.pop(-'error', 'عملیات ناموفق', 'بروز خطا در سیستم.لطفا مجدد سعی نمایید.');
            iziToast.show({
                title: 'Hey',
                message: 'What would you like to add?'
            });
        });
    };

   
    $scope.verifyPhoneNumber = function () {
        var mobile = GetQueryStringParameter("p");
        var item = { PhoneNumber: mobile, Code: $scope.Code };
        accountService.VerifyPhoneNumber(item).then(function (response) {
            if (response.res == 0)
                window.location.href = "../../admin/index";
        },function errorCallBack(response) {
            toaster.pop('error', 'خطا در ورود', response.statusText);
        });
    }
    $scope.forgotPassword = function (email) {
       
        accountService.ForgotPassword(email).then(function (response) {
            var res = response.res;
            if (res == 0) {
                $scope.isSuccess = true;
                toaster.pop('success', 'عملیات موفق',"یک ایمیل حاوی لینک تغییر کلمه عبور برای شما ارسال گردید.");
            }
            return response.data;
        },function errorCallBack(response) {
            toaster.pop('error', 'عملیات ناموفق', 'بروز خطا در سیستم.لطفا مجدد سعی نمایید.');
        });
    }
    $scope.resetPassword = function (pass) {
        
        var userid = GetQueryStringParameter("userid");
        var code = GetQueryStringParameter("code");
        var item = { UserId: userid, Code: code ,NewPassword:pass};
        accountService.ResetPassword(item).then(function (response) {
            var res = response.res;
            if (res == 0) {
                $scope.isSuccess = true;
                toaster.pop('success', 'عملیات موفق', "کلمه عبور شما با موفقیت تغییر یافت.");
            }
            return response.data;
        },function errorCallBack(response) {
            toaster.pop(-'error', 'عملیات ناموفق', 'بروز خطا در سیستم.لطفا مجدد سعی نمایید.');
        });
    }
    $scope.confirmEmail = function () {

        var userid = GetQueryStringParameter("userid");
        var code = GetQueryStringParameter("code");
        var item = { UserId: userid, Code: code };
        accountService.ConfirmEmail(item).then(function (response) {
            var res = response.res;
            if (res == 0) {
                $scope.isSuccess = true;
                toaster.pop('success', 'عملیات موفق', "ایمیل شما با موفقیت تایید گردید.");
            }
            else
                $scope.isSuccess = false;
            return response.data;
        }, function errorCallBack(response) {
            toaster.pop('error', 'عملیات ناموفق', 'بروز خطا در سیستم.لطفا مجدد سعی نمایید.');
        });
    }


}]);