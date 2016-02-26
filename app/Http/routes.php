<?php

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

/* Dashboard */
Route::get('/', 'PagesController@dashboard');
Route::get('/dashboard', 'PagesController@dashboard');
Route::get('profile/{id}', 'PagesController@profile');

/* User Routes */
Route::get('user/account', 'UserController@account');
Route::get('/user/{id}', 'UserController@user');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


Route::get('training', 'TrainingController@index');
Route::get('doTraining/{id}', 'TrainingController@doTrain');

Route::get('gym', 'GymController@index');
Route::get('doGym/{id}', 'GymController@doGym');

Route::get('myClub', 'PagesController@myClub');

Route::get('shop', 'ShopController@index');
Route::get('estateAgent', 'ShopController@estateAgent');
Route::get('carDealership', 'ShopController@carDealership');

Route::get('achievements', 'AchievementController@userIndex');
Route::get('achievements/all', 'AchievementController@all');

Route::get('events', 'EventController@index');

/*Admin Routes*/
Route::get('/admin', 'AdminController@admin');

Route::resource('/admin/userManager', 'UserManagerController');

/* Testing */
Route::get('test', 'AuditController@test');