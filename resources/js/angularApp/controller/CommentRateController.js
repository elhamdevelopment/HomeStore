adminApp.controller('profileController', ['$scope', 'CommentService', 'RateService', function ($scope, CommentService, RateService) {

    //comment
    $scope.addComment = function (item) {
        CommentService.AddComment(item).then(function (response) {
                iziToast.success({title: 'موفق', message: 'عملیات با موفقیت انجام شد.'});
            }, function errorCallBack(response) {
                iziToast.error({title: 'خطا', message: 'بروز خطا در سیستم'});
            }
        )
    };
    $scope.addRate = function (item) {
        RateService.AddRate(item).then(function (response) {
                iziToast.success({title: 'موفق', message: 'عملیات با موفقیت انجام شد.'});
            }, function errorCallBack(response) {
                iziToast.error({title: 'خطا', message: 'بروز خطا در سیستم'});
            }
        )
    };

}]);