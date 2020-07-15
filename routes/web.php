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

Route::get('/', function () {
    return view('welcome');
});
Route::get('index',[
    'as'=>'trangchu',
    'uses'=>'PageController@getIndex'
]);
Route::get('indexAdmin',[
    'as'=>'trangchuAdmin',
    'uses'=>'PageController@getIndexAdmin'
]);
Route::get('producManagement',[
    'as'=>'Pro_management',
    'uses'=>'PageController@getProductManagement'
]);
Route::get('customerManagement',[
    'as'=>'Cus_management',
    'uses'=>'PageController@getCustomerManagement'
]);
Route::get('insert','PageController@insert');
Route::post('insert','PageController@insertProduct');
Route::get('edit/{id}','PageController@editPro');
Route::post('edit/{id}','PageController@editProduct');
Route::get('delete/{id}','PageController@deleteProduct');
//hung
Route::get('index',[
    'as'=>'trangchu',
    'uses'=>'PageController@getIndex'
]);
Route::post('tim-kiem',[
    'as'=>'search',
    'uses'=>'PageController@getSearch'
]);
//mai
Route::get('register',[
    'as'=>'signup',
    'uses'=>'PageController@getSignup'
]);
Route::post('register',[
    'as'=>'signup',
    'uses'=>'PageController@postSignup'
]);
Route::get('login',[
    'as'=>'signin',
    'uses'=>'PageController@getLogin'
]);
Route::post('login',[
    'as'=>'signin',
    'uses'=>'PageController@postLogin'
]);