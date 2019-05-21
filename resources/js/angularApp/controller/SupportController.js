adminApp.controller('supportController', ['$scope', 'SupportService', function ($scope, SupportService) {


    //support
    $scope.addSupport = function (subject,description) {
        var item = {subject: subject, description: description};
        var $form = $("#contactForm");
        if ($form.valid()) {
            SupportService.AddSupport(item).then(function (response) {
                console.log(response);
                iziToast.success({title: 'عملیات موفق', message: 'اطاعات با موفقیت ارسال گردید.'});
            }, function errorCallBack(response) {
                iziToast.error({title: 'خطا', message: 'بروز خطا در ارسال اطلاعات'});
            });
        }
    };

}]);