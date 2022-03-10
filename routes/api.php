<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

use Illuminate\Support\Facades\Route;

Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('user', 'UserController@user');
    Route::put('users/info', 'UserController@updateInfo');
    Route::put('users/password', 'UserController@updatePassword');
    Route::post('upload', 'ImageController@upload');

    Route::get('users', 'UserController@index');
    Route::get('users/{id}', 'UserController@show');
    Route::post('users', 'UserController@store');
    Route::put('users/{id}', 'UserController@update');
    Route::delete('users', 'UserController@destroy');
    /*  Route::apiResource('users', 'UserController'); */

    Route::get('roles', 'RoleController@index');
    Route::get('roles/{id}', 'RoleController@show');
    Route::post('roles', 'RoleController@store');
    Route::put('roles/{id}', 'RoleController@update');
    Route::delete('roles/{id}', 'RoleController@destroy');
    /*  Route::apiResource('roles', 'RoleController'); */

    Route::get('products', 'ProductController@index');
    Route::get('products/{id}', 'ProductController@show');
    Route::post('products', 'ProductController@store');
    Route::put('products/{id}', 'ProductController@update');
    Route::delete('products/{id}', 'ProductController@destroy');
    /*  Route::apiResource('products', 'ProductsController'); */

    Route::get('orders', 'OrderController@index');
    Route::get('orders/{id}', 'OrderController@show');
/*     Route::apiResource('orders', 'OrderController')->only('index', 'show');
 */
});
