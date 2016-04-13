<?php
require "dev_routes.php";

//Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

// Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
//     Route::group(['prefix' => 'v1'], function () {
//         require config('infyom.laravel_generator.path.api_routes');
//     });
// });



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



//Route::auth();


Route::group(['prefix' => LaravelLocalization::getCurrentLocale()], function()
{


// Route::get('/', function() {return View::make('home'); });
//Route::get('/', 'HomeController@index');



Route::get('/', 'ShopController@index');

 Route::resource('admin/articles', 'Admin\ArticleController');
// Route::resource('admin/products', 'Admin\ProductController');

// Route::get('/admin/products/create', 'Admin\ProductController@create');
// Route::get('/admin/products', 'Admin\ProductController@index');
// Route::get('/admin/products/destroy/{id}', 'Admin\ProductController@destroy');
// Route::post('/admin/products/save', 'Admin\ProductController@add');



// Route::get('/addProduct/{productId}', 'CartController@addItem');
// Route::get('/removeItem/{productId}', 'CartController@removeItem');
// Route::get('/cart', 'CartController@showCart');

// Route::post('/checkout', 'OrderController@checkout');

// Route::get('order/{orderId}', 'OrderController@viewOrder');
// Route::get('order', 'OrderController@index');
// Route::get('download/{orderId}/{filename}', 'OrderController@download');



    Route::group(['prefix' => '/admin', 'namespace' => 'Admin'], function () {

        /* ADD ALL LOCALIZED ADMIN ROUTES INSIDE THIS GROUP */




        Route::get('/', function()
        {
            return View('admin.layouts.dashboard');
        });


    });
});


Route::resource('admin/articles', 'Admin\ArticleController');

Route::resource('admin/articles', 'Admin\ArticleController');

Route::resource('admin/articles', 'Admin\ArticleController');

Route::resource('admin/articles', 'Admin\ArticleController');

Route::resource('admin/articles', 'Admin\ArticleController');

Route::resource('admin/articles', 'Admin\ArticleController');

Route::resource('admin/articles', 'Admin\ArticleController');

Route::resource('admin/articles', 'Admin\ArticleController');

Route::resource('admin/articles', 'Admin\ArticleController');

Route::resource('admin/products', 'Admin\ProductController');

Route::resource('admin/products', 'Admin\ProductController');

Route::resource('admin/articles', 'Admin\ArticleController');