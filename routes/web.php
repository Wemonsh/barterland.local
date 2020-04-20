<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'HomeController@test')->name('test');



Route::get('/', 'MainController@index')->name('index');
Route::get('/about', 'MainController@about')->name('about');
Route::get('/rules', 'MainController@rules')->name('rules');
Route::get('/help', 'MainController@help')->name('help');
Route::get('/reviews', 'MainController@reviews')->name('reviews');
Route::get('/rating', 'MainController@rating')->name('rating');


// Панель администратора
Route::group(['prefix' => 'admin'], function() {

    // Игры
    Route::group(['prefix' => 'game'], function() {
        Route::get('/', 'Admin\GameController@index')->name('game_index');
        Route::get('/create', 'Admin\GameController@create')->name('game_create');
        Route::post('/store', 'Admin\GameController@store')->name('game_store');
        Route::get('/show/{id}', 'Admin\GameController@show')->name('game_show');
        Route::get('/edit/{id}', 'Admin\GameController@edit')->name('game_edit');
        Route::post('/update/{id}', 'Admin\GameController@update')->name('game_update');
        Route::get('/destroy/{id}', 'Admin\GameController@destroy')->name('game_destroy');
    });

    // Услуги
    Route::group(['prefix' => 'service'], function() {
        Route::get('/', 'Admin\ServiceController@index')->name('service_index');
        Route::get('/create', 'Admin\ServiceController@create')->name('service_create');
        Route::post('/store', 'Admin\ServiceController@store')->name('service_store');
        Route::get('/show/{id}', 'Admin\ServiceController@show')->name('service_show');
        Route::get('/edit/{id}', 'Admin\ServiceController@edit')->name('service_edit');
        Route::post('/update/{id}', 'Admin\ServiceController@update')->name('service_update');
        Route::get('/destroy/{id}', 'Admin\ServiceController@destroy')->name('service_destroy');
    });

    // Типы услуг
    Route::group(['prefix' => 'service-type'], function() {

    });

    // Селекты
    Route::group(['prefix' => 'select'], function() {
        Route::get('/', 'Admin\SelectController@index')->name('select_index');
        Route::get('/create', 'Admin\SelectController@create')->name('select_create');
        Route::post('/store', 'Admin\SelectController@store')->name('select_store');
    });

    // Содержимое селектов
    Route::group(['prefix' => 'select-entity'], function() {

    });

    // Пользователи
    Route::group(['prefix' => 'user'], function() {
        // Список пользователей
        Route::get('/', 'Admin\UserController@index')->name('user_index');
        // Редактирование пользователя
        Route::match(['get', 'post'], '/edit/{id}', 'Admin\UserController@edit')->name('user_edit');
    });


    Route::group(['prefix' => 'users'], function() {

        Route::get('/', 'Admin\UserController@index')->name('user_index');
        // Редактировать роли

    });

    Route::group(['prefix' => 'roles'], function() {
        // Список ролей
        Route::get('/', 'Admin\RoleController@index')->name('role_index');
        // Создание роли
        Route::match(['get', 'post'], '/create', 'Admin\RoleController@create')->name('role_create');
        // Редактировать роли
        Route::match(['get', 'post'], '/edit/{id}', 'Admin\RoleController@edit')->name('role_edit');
        // Удалить роли
        Route::get('/delete/{id}', 'Admin\RoleController@delete')->name('role_delete');
    });

    Route::group(['prefix' => 'permissions'], function() {
        // Список разрешений
        Route::get('/', 'Admin\PermissionController@index')->name('permission_index');
        // Создание разрешения
        Route::match(['get', 'post'], '/create', 'Admin\PermissionController@create')->name('permission_create');
        // Редактировать разрешение
        Route::match(['get', 'post'], '/edit/{id}', 'Admin\PermissionController@edit')->name('permission_edit');
        // Удалить разрешение
        Route::get('/delete/{id}', 'Admin\PermissionController@delete')->name('permission_delete');
    });
});











