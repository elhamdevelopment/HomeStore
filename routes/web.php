<?php
//web
Route::get('/','HomeController@index');
Route::get('/market','HomeController@indexMarket');
Route::get('/market/product','HomeController@marketProductDetail');
Route::get('/restaurant-list','HomeController@restaurants');
Route::get('/order','HomeController@order');
Route::get('/restaurant-detail','HomeController@restaurantDetail');
//user panel
Route::get('/user/dashboard','user\DashboardController@index');
Route::get('/user/dashboard','user\DashboardController@index');
Route::get('/user/profile','user\UserProfileController@profile');
Route::get('/user/address','user\AddressController@address');
Route::get('/user/change-password','auth\AccountController@showChangePassword');
Route::get('/user/favorite','user\FavoriteController@favorite');
Route::get('/user/wallet','user\WalletController@wallet');
Route::get('/user/wallet-trans','user\WalletController@walletTransaction');
Route::get('/user/order','user\OrderController@order');
Route::get('/user/order-detail','user\OrderController@orderDetail');
Route::get('/user/support','user\supportController@support');
Route::get('/user/comment','user\CommentRateController@comment');
Route::get('/user/comment-list','user\CommentRateController@getComment');
Route::get('/user/add-rate','user\CommentRateController@addRate');
//shop panel
Route::get('/shop/change-password','auth\AccountController@changePassword');
Route::get('/shop/shop-edit','shop\ShopController@editShop');
Route::get('/shop/add-product','shop\ProductController@addProduct');
//admin
Route::get('/admin/profile','admin\ProfileController@profile');
Route::get('/admin/change-password','auth\AccountController@changePassword');
Route::get('/admin/product-manage','admin\ProductManagementController@index');
Route::get('/admin/category-manage','admin\ProductCategoryManagementController@index');
Route::get('/admin/shop-manage','admin\ShopManagementController@index');



//Route::get('/tt', function () {
// return getControllerActions();
//});
//Auth::routes();
