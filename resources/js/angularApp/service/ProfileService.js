adminApp.service('ProfileService', function ($http) {
    const token = localStorage.getItem('token');

    this.UpdateProfile = function (item) {
        return $http({
            method: "Post",
            url: "/api/user/update-profile",
            contentType: "application/json ; charset=utf-8",
            headers: {
                "Authorization": "Bearer " + token
            },
            data: item
        }).then(function (response) {
            console.log(response);
            return response.data
        }, function errorCallBack(response) {
            return response.data;
        });
    };
    this.GetProfile = function () {
        return $http({
            method: "Post",
            url: "/api/user/get-user",
            contentType: "application/json ; charset=utf-8",
            headers: {
                "Authorization": "Bearer " + token
            }
        }).then(function (response) {
            console.log(response);
            return response.data
        }, function errorCallBack(response) {
            return response.data;
        });
    };
    this.ChangePassword = function (item) {
        return $http({
            method: "Post",
            url: "/api/auth/change-password",
            contentType: "application/json ; charset=utf-8",
            headers: {
                "Authorization": "Bearer " + token
            },
            data: item
        }).then(function (response) {
            console.log(response);
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
    this.Logout = function () {
        return $http({
            method: "Post",
            url: "/api/auth/logout",
            contentType: "application/json ; charset=utf-8",
            headers: {
                "Authorization": "Bearer " + token
            },
        }).then(function (response) {
            return response.data
        }, function errorCallBack(response) {
            return response.data;
        });
    };

    //address
        this.GetAddressById = function (id) {
            return $http({
                method: "Post",
                url: "/api/user/getAddressById",
                contentType: "application/json ; charset=utf-8",
                headers: {
                    "Authorization": "Bearer " + token
                },
                data: {id: id}
            }).then(function (response) {
                return response.data
            }, function errorCallBack(response) {
                return response.data;
            });
        };
    this.GetUserAddress = function () {
        return $http({
            method: "Post",
            url: "/api/user/get-address",
            contentType: "application/json ; charset=utf-8",
            headers: {
                "Authorization": "Bearer " + token
            },
        }).then(function (response) {
            return response.data
        }, function errorCallBack(response) {
            return response.data;
        });
    };
        this.AddAddress = function (item) {
            return $http({
                method: "Post",
                url: "/api/user/add-address",
                contentType: "application/json ; charset=utf-8",
                data: item,
                headers: {
                    "Authorization": "Bearer " + token
                }
            }).then(function (response) {
                return response.data
            }, function errorCallBack(response) {
                return response.data;
            });
        };
        this.UpdateAddress = function (item) {
            return $http({
                method: "Post",
                url: "/api/user/update-address",
                contentType: "application/json ; charset=utf-8",
                data: item,
                headers: {
                    "Authorization": "Bearer " + token
                }
            }).then(function (response) {
                return response.data
            }, function errorCallBack(response) {
                return response.data;
            });
        };
        this.DeleteAddress = function (id) {
            return $http({
                method: "Post",
                url: "/api/user/delete-address",
                contentType: "application/json ; charset=utf-8",
                data: {id: id},
                headers: {
                    "Authorization": "Bearer " + token
                }
            }).then(function (response) {
                return response.data
            }, function errorCallBack(response) {
                return response.data;
            });
        };

        //fav
        this.DeleteFavorite = function (id) {
            return $http({
                method: "Post",
                url: "/api/user/delete-favorite",
                contentType: "application/json ; charset=utf-8",
                data: {id: id},
                headers: {
                    "Authorization": "Bearer " + token
                }
            }).then(function (response) {
                return response.data
            }, function errorCallBack(response) {
                return response.data;
            });
        };
        this.AddFavorite = function (item) {
            return $http({
                method: "Post",
                url: "/api/user/add-favorite",
                contentType: "application/json ; charset=utf-8",
                data: item,
                headers: {
                    "Authorization": "Bearer " + token
                }
            }).then(function (response) {
                console.log(response);
                return response.data
            }, function errorCallBack(response) {
                return response.data;
            });
        };
        this.GetUserFavorite = function () {
            return $http({
                method: "Post",
                url: "/api/user/get-favorite",
                contentType: "application/json ; charset=utf-8",
                headers: {
                    "Authorization": "Bearer " + token
                }
            }).then(function (response) {
                return response.data
            }, function errorCallBack(response) {
                return response.data;
            });
        };

    }
);