adminApp.controller('profileController', ['$scope', 'ProfileService', function ($scope, ProfileService) {
    $scope.userAddress = [];
    $scope.getUserProfile = function () {
        ProfileService.GetProfile().then(function (response) {
            $scope.user = response.data;
            $scope.user.created_at = moment($scope.user.created_at).format('dddd، jD jMMMM jYYYY [ساعت] LT');
            console.log($scope.user);
        })
    };
    $scope.updateProfile = function (user) {
        var $form = $("#userProfileForm");
        if ($form.valid()) {
            ProfileService.UpdateProfile(user).then(function (response) {
                iziToast.success({title: 'موفق', message: 'به روز رسانی  با موفقیت انجام شد.'});
            }, function errorCallBack(response) {

            });
        }
    };
    $scope.changePassword = function () {
        var item = {newPassword: $scope.newPassword, currentPassword: $scope.currentPassword};
        var $form = $("#changePasswordForm");
        if ($form.valid()) {
            ProfileService.ChangePassword(item).then(function (response) {
                iziToast.success({title: 'موفق', message: 'به روز رسانی  با موفقیت انجام شد.'});
                return response.data;
            }, function errorCallBack(response) {
                iziToast.error({title: 'خطا', message: response.message});

            });
        }
    };
    $scope.logout = function () {
        ProfileService.Logout().then(function (response) {
            window.location='/';
            return response.data;
        }, function errorCallBack(response) {
            iziToast.error({title: 'خطا!!', message: 'بروز خطا در انجام عملیات!!'});
        });
    };

    //address
    $scope.addAddress = function (item) {
        var $form = $("#userAddressForm");
        if ($form.valid()) {
            ProfileService.AddAddress(item).then(function (response) {
                $scope.userAddress.push(response.data);
                $('#addressModal').modal('hide');
                iziToast.success({title: 'موفق', message: 'آدرس با موفقیت ثبت شد.'});
            }, function errorCallBack(response) {
                iziToast.error({title: 'خطا', message: 'بروز خطا در سیستم'});

            });
        }
    };
    $scope.updateAddress = function (item) {
        var $form = $("#userAddressForm");
        if ($form.valid()) {
            ProfileService.UpdateAddress(item).then(function (response) {
                iziToast.success({title: 'موفق', message: 'آدرس با موفقیت ثبت شد.'});
            }, function errorCallBack(response) {
                iziToast.error({title: 'خطا', message: 'بروز خطا در سیستم'});

            });
        }
    };
    $scope.deleteAddress = function (index, id) {
        console.log(id);
        ProfileService.DeleteAddress(id).then(function (response) {
                $scope.userAddress.splice(index, 1);
                iziToast.success({title: 'موفق', message: 'آدرس با موفقیت حذف شد.'});
            }, function errorCallBack(response) {
                iziToast.error({title: 'خطا', message: 'بروز خطا در سیستم'});
            }
        )
    };
    $scope.getUserAddress = function () {
        ProfileService.GetUserAddress().then(function (response) {
            $scope.userAddress = response.data;
        }, function errorCallBack(response) {
            iziToast.error({title: 'خطا', message: response.message});
        });
    };

    //favorite
    $scope.deleteFavorite = function (id) {
        ProfileService.DeleteFavorite(id).then(function (response) {
                iziToast.success({title: 'موفق', message: 'حذف با موفقیت انجام شد.'});
            }, function errorCallBack(response) {
                iziToast.error({title: 'خطا', message: 'بروز خطا در سیستم'});
            }
        )
    };
    $scope.addFavorite = function (item) {
        ProfileService.AddFavorite(item).then(function (response) {
                iziToast.success({title: 'موفق', message: 'عملیات با موفقیت انجام شد.'});
            }, function errorCallBack(response) {
                iziToast.error({title: 'خطا', message: 'بروز خطا در سیستم'});
            }
        )
    };
    $scope.getUserFavorite = function () {
        ProfileService.GetUserFavorite().then(function (response) {
            $scope.favShop = response.data.productFavorite;
            $scope.favProduct = response.data.shopFavorite;
        }, function errorCallBack(response) {
            iziToast.error({title: 'خطا', message: response.message});
        });
    }

}]);