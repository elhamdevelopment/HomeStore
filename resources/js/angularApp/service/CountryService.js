/**
 * Created by reza on 28/02/2017.
 */
adminApp.service("countryService",function ($http,toaster) {

    this.AddCountry = function (item) {
        return $http({
            method: "Post",
            url: "../api/Country/AddCountry",
            contentType: "application/json ; charset=utf-8",
            data: item
        }).then(function (response) {
            return response.data
        }, function errorCallBack(response) {
            toaster.pop('error', 'خطا در ثبت', response.statusText);
        });
    };
    this.DeleteCountry = function (id) {
        return $http({
            method: "Post",
            url: "../api/Country/DeleteCountry",
            contentType: "application/json ; charset=utf-8",
            data: {Id:id}
        }).then(function (response) {
            return response.data
        }, function errorCallBack(response) {
            toaster.pop('error', 'خطا در ثبت', response.statusText);
        });
    };
    this.EditCountry = function (item) {
        return $http({
            method: "Post",
            url: "../api/Country/EditCountry",
            contentType: "application/json ; charset=utf-8",
            data: item
        }).then(function (response) {
            return response.data
        }, function errorCallBack(response) {
            toaster.pop('error', 'خطا در ثبت', response.statusText);
        });
    };

    this.GetCountries = function () {
        return $http({
            method: "Post",
            url: "../api/Country/GetCountries",
            contentType: "application/json ; charset=utf-8",
            data: {}
        }).then(function (response) {
            return response.data
        }, function errorCallBack(response) {
            toaster.pop('error', 'خطا در ثبت', response.statusText);
        });
    };

    this.GetCountryById = function (id) {
        return $http({
            method: "Post",
            url: "../api/Country/AddCountry",
            contentType: "application/json ; charset=utf-8",
            data: {Id:id}
        }).then(function (response) {
            return response.data
        }, function errorCallBack(response) {
            toaster.pop('error', 'خطا در ثبت', response.statusText);
        });
    };

});
