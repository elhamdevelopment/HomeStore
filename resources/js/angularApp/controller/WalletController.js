adminApp.controller('walletController', ['$scope', 'WalletService', function ($scope, WalletService) {

    $scope.addCredit = function (item) {
        var $form = $("#increaseCreditForm");
        if ($form.valid()) {
            WalletService.AddCredit(item).then(function (response) {
            }, function errorCallBack(response) {
                console.log(response);

            });
        }
    };

    $scope.getWalletTransaction = function () {
        WalletService.GetWalletTransaction().then(function (response) {
            $scope.walletTrans = response.data;
        }, function errorCallBack(response) {
            iziToast.error({title: 'خطا', message: response.message});
        });
    }
}]);