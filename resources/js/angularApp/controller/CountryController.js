adminApp.controller('countryController', ['$http','$scope', 'toaster','countryService', function ($http,$scope, toaster,countryService) {
    $scope.isEdit = true;
    $scope.sort = function (keyname) {
        $scope.sortKey = keyname;   //set the sortKey to the param passed
        $scope.reverse = !$scope.reverse; //if true make it false and vice versa
    };
    $scope.addCountry = function (item) {
        countryService.AddCountry(item).then(function (response) {
            return response.data;
            toaster.pop('success', 'عملیات موفق', 'رکورد با موفقیت ثبت گردید');
        }, function errorCallBack(response) {
            toaster.pop('error', 'خطا در ثبت رکورد', response.statusText);
        });
    };
    $scope.editCountry = function (item) {
        countryService.EditCountry(item).then(function (response) {
            return response.data;
            toaster.pop('success', 'عملیات موفق', 'رکورد با موفقیت ویرایش گردید');
        }, function errorCallBack(response) {
            return response.data;
            toaster.pop('error', 'خطا در عملیات', response.statusText);
        });
    };
    $scope.deleteCountry = function (id) {
        countryService.DeleteCountry(id).then(function (response) {
            return response.data;
            toaster.pop('success', 'عملیات موفق', 'رکورد با موفقیت حذف گردید');
        }, function errorCallBack(response) {
            return response.data;
            toaster.pop('error', 'خطا در عملیات', response.statusText);
        });
    }
    $scope.getCountryById = function (id) {
        countryService.GetCountryById(id).then(function (response) {
            return response.data;
        }, function errorCallBack(response) {
            return response.data;
            toaster.pop('error', 'خطا در عملیات', response.statusText);
        });
    };
    $scope.getCountries = function () {
        $scope.countries=[
            {CountryId:1,CountryName:'هند'},
            {CountryId:1,CountryName:'عربستان'},
            {CountryId:1,CountryName:'ایران'},
            {CountryId:1,CountryName:'انگستان'},
            {CountryId:1,CountryName:'آمریکا'},
            {CountryId:1,CountryName:'استرالیا'},
            {CountryId:1,CountryName:'ارمنستان'}];
        return $scope.countries;
        // countryService.GetCountries().then(function (response) {
        //     return response.data;
        //     $scope.countries=response.data;
        // },function errorCallback(response) {
        //     return response.data;
        //     toaster.pop("error","خطا",response.statusText);
        // });
    };
    $scope.getCountries();


    // $scope.getCountries();
}]);

       
