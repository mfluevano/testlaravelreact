<?php

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

/**Route for login API */
Route::post('login', 'ApiController@login');

/**Route for register API */
Route::post('register', 'ApiController@register');

/**Route for details user API */
Route::middleware('auth:api')->group(function(){
Route::post('details', 'ApiController@user_info');

});
