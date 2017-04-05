<?php
Route::pattern('id', '[0-9]+');
Route::pattern('slug', '.+');
Route::pattern('cat', '.+');

Route::get('/', ['as' => 'index.index', 'uses' => 'IndexController@index']);
Route::get('lien-he', ['as' => 'index.contact', 'uses' => 'IndexController@contact']);
Route::post('lien-he', ['as' => 'index.postContact', 'uses' => 'IndexController@postContact']);
Route::get('gioi-thieu', ['as' => 'intro.index', 'uses' => 'IndexController@intro']);
Route::get('tin-tuc', ['as' => 'news.index', 'uses' => 'NewsController@index']);
Route::get('tin-tuc/{slug}-{id}', ['as' => 'news.detail', 'uses' => 'NewsController@detail']);
Route::get('promotion', ['as' => 'promotion.index', 'uses' => 'NewsController@index']);
Route::get('promotion/{slug}-{id}', ['as' => 'promotion.detail', 'uses' => 'PromotionController@detail']);
Route::get('{cat}/{name}/{slug}-{id}', ['as' => 'product.detail', 'uses' => 'ProductController@detail']);
Route::get('{cat}-{slug}-{id}', ['as' => 'product.index', 'uses' => 'ProductController@index']);
Route::get('{slug}-{id}', ['as' => 'product.indexCat', 'uses' => 'ProductController@index']);
Route::get('all-products', ['as' => 'product.all', 'uses' => 'ProductController@all']);
Route::post('review', ['as' => 'product.review', 'uses' => 'ProductController@review']);
Route::get('cart', ['as' => 'cart.index', 'uses' => 'CartController@index']);
Route::post('quickAdd', ['as' => 'cart.add', 'uses' => 'CartController@add']);
Route::post('updateCart', ['as' => 'cart.updateCart', 'uses' => 'CartController@updateCart']);
Route::post('removecart', ['as' => 'cart.removecart', 'uses' => 'CartController@removecart']);
Route::get('destroy', ['as' => 'cart.destroy', 'uses' => 'CartController@destroy']);
Route::post('buyNow', ['as' => 'cart.buyNow', 'uses' => 'CartController@buyNow']);
Route::get('checkout', ['as' => 'cart.checkout', 'uses' => 'CartController@checkout']);
Route::post('order', ['as' => 'cart.order', 'uses' => 'CartController@order']);
Route::get('login', ['as' => 'auth.auth.getlogin', 'uses' => 'Auth\LoginController@login']);
Route::post('login', ['as' => 'auth.auth.login', 'uses' => 'Auth\LoginController@postLogin']);
Route::post('register', ['as' => 'auth.auth.register', 'uses' => 'Auth\RegisterController@postRegister']);
Route::get('search', ['as' => 'search', 'uses' => 'ProductController@search']);

Route::group(["prefix" => "admin", 'namespace' => 'admin', 'middleware' => 'admin'], function () {
    Route::get("/", ["as" => "admin.index.index", "uses" => "IndexController@index"]);
    Route::get("/index", ["as" => "admin.index.index", "uses" => "IndexController@index"]);
    Route::group(["prefix" => "category"], function () {
        Route::get("index", ["as" => "admin.cat.index", "uses" => "CategoryController@index"]);
        Route::post("add", ["as" => "admin.cat.add", "uses" => "CategoryController@postadd"]);
        Route::get("delete/{id}", ["as" => "admin.cat.delete", "uses" => "CategoryController@delete"]);
        Route::get("edit", ["as" => "admin.cat.edit", "uses" => "CategoryController@getEdit"]);
        Route::post("edit", ["as" => "admin.cat.edit", "uses" => "CategoryController@postEdit"]);
        Route::get("check_tendm", ["as" => "admin.cat.check_tendm", "uses" => "CategoryController@check_tendm"]);
    });
    Route::group(["prefix" => "product"], function () {
        Route::get("index", ["as" => "admin.product.index", "uses" => "ProductController@index"]);
        Route::post("add", ["as" => "admin.product.add", "uses" => "ProductController@postadd"]);
        Route::post("upload", ["as" => "admin.product.upload", "uses" => "ProductController@postupload"]);
        Route::get("delete/{id}", ["as" => "admin.product.delete", "uses" => "ProductController@delete"]);
        Route::get("edit/{id}", ["as" => "admin.product.edit", "uses" => "ProductController@getEdit"]);
        Route::post("ajax_upload_file", ["as" => "admin.product.uploadFiles", "uses" => "ProductController@uploadFiles"]);
        Route::post("ajax_remove_file", ["as" => "admin.product.removeFiles", "uses" => "ProductController@removeFiles"]);
        Route::post("edit/{id}", ["as" => "admin.product.edit", "uses" => "ProductController@postEdit"]);
    });
    Route::group(["prefix" => "user"], function () {
        Route::get("index", ["as" => "admin.user.index", "uses" => "UserController@index"]);
        Route::post("add", ["as" => "admin.user.add", "uses" => "UserController@postadd"]);
        Route::post("upload", ["as" => "admin.user.upload", "uses" => "UserController@postupload"]);
        Route::get("delete/{id}", ["as" => "admin.user.delete", "uses" => "UserController@delete"]);
        Route::get("edit", ["as" => "admin.user.edit", "uses" => "UserController@getEdit"]);
        Route::post("edit", ["as" => "admin.user.edit", "uses" => "UserController@postEdit"]);
    });
    Route::group(["prefix" => "contact"], function () {
        Route::get("index", ["as" => "admin.contact.index", "uses" => "ContactController@index"]);
        Route::get("edit", ["as" => "admin.contact.edit", "uses" => "ContactController@getEdit"]);
        Route::get("delete/{id}", ["as" => "admin.contact.delete", "uses" => "ContactController@delete"]);
        Route::post("send_mail", ["as" => "admin.contact.send_mail", "uses" => "ContactController@sendMail"]);
    });
    Route::group(["prefix" => "promotion"], function () {
        Route::get("index", ["as" => "admin.promotion.index", "uses" => "PromotionController@index"]);
        Route::get("edit", ["as" => "admin.promotion.edit", "uses" => "PromotionController@getEdit"]);
        Route::post("edit", ["as" => "admin.promotion.edit", "uses" => "PromotionController@postEdit"]);
        Route::get("delete/{id}", ["as" => "admin.promotion.delete", "uses" => "PromotionController@delete"]);
        Route::post("add", ["as" => "admin.promotion.add", "uses" => "PromotionController@add"]);
    });
    Route::group(["prefix" => "slide"], function () {
        Route::get("design", ["as" => "admin.slide.design", "uses" => "SlideController@design"]);
        Route::get("header", ["as" => "admin.slide.header", "uses" => "SlideController@header"]);
        Route::post("add_header", ["as" => "admin.slide.add_header", "uses" => "SlideController@add_header"]);
        //end header
        Route::get("cat", ["as" => "admin.slide.cat", "uses" => "SlideController@cat"]);
        Route::post("add_cat", ["as" => "admin.slide.add_cat", "uses" => "SlideController@add_cat"]);
        //end cat
        Route::get("image", ["as" => "admin.slide.image", "uses" => "SlideController@image"]);
        Route::post("add_image", ["as" => "admin.slide.add_image", "uses" => "SlideController@add_image"]);

        Route::get("edit", ["as" => "admin.slide.edit", "uses" => "SlideController@getEdit"]);
        Route::post("edit", ["as" => "admin.slide.edit", "uses" => "SlideController@postEdit"]);
        Route::get("delete/{id}", ["as" => "admin.slide.delete", "uses" => "SlideController@delete"]);
    });
    Route::group(["prefix" => "other"], function () {
        Route::get("news", ["as" => "admin.other.news", "uses" => "NewsController@news"]);
        Route::get("edit", ["as" => "admin.other.edit", "uses" => "NewsController@getEdit"]);
        Route::post("edit", ["as" => "admin.other.edit", "uses" => "NewsController@postEdit"]);
        Route::get("delete_news/{id}", ["as" => "admin.other.deleteNews", "uses" => "NewsController@deleteNews"]);
        Route::post("add", ["as" => "admin.other.add", "uses" => "NewsController@add"]);
        // end news
        Route::get("edit_other", ["as" => "admin.other.edit_other", "uses" => "OtherController@getEdit"]);
        Route::post("edit_other", ["as" => "admin.other.edit_other", "uses" => "OtherController@postEdit"]);
        Route::get("introduce", ["as" => "admin.other.introduce", "uses" => "OtherController@introduce"]);
        Route::get("transport_policy", ["as" => "admin.other.transport_policy", "uses" => "OtherController@transport_policy"]);
        Route::get("privacy_policy", ["as" => "admin.other.privacy_policy", "uses" => "OtherController@privacy_policy"]);
        Route::get("change_delivery", ["as" => "admin.other.change_delivery", "uses" => "OtherController@change_delivery"]);
        Route::get("transport", ["as" => "admin.other.transport", "uses" => "OtherController@transport"]);
        Route::get("transport_fee", ["as" => "admin.other.transport_fee", "uses" => "OtherController@transport_fee"]);
        Route::get("payment", ["as" => "admin.other.payment", "uses" => "OtherController@payment"]);
    });
    Route::get("order/index", ["as" => "admin.order.index", "uses" => "OrderController@index"]);
});
Route::group(['namespace' => 'Auth', 'prefix' => 'Admin'], function () {
    Route::get('login', ['as' => 'admin.login', 'uses' => 'LoginController@getLoginAdmin']);
    Route::post('login', ['as' => 'admin.login', 'uses' => 'LoginController@postLoginAdmin']);
    Route::get('logout', ['as' => 'auth.logout', 'uses' => 'LoginController@logout']);
});
