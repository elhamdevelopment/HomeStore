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