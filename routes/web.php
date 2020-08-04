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
Route::get('/','UIController@index');
Route::get('/about','UIController@about');
Route::get('/cv_form/{jobId}','UIController@cvForm');
Route::post('/cv_form/store','UIController@storeCvForm');



// AUTHENTICATION
Auth::routes();
Route::get('/employee/register_form','EmployeeRegisterController@registerForm');
Route::post('/employee/register','EmployeeRegisterController@register');


Route::get('/home', 'HomeController@index')->name('home');

//Admin
Route::prefix('admin')->group(function () {

    Route::resource('/company','Admin\CompanyController');
    Route::resource('/category','Admin\CategoryController');

    Route::resource('/job','Admin\JobController');

    Route::get('/job/{jobId}/request_cvs','Admin\JobController@requestCVs');



    Route::resource('/cv','Admin\CVController');
    Route::resource('/type','Admin\TypeController');
    Route::resource('/location','Admin\LocationController');
    Route::resource('/experience_level','Admin\Experience_levelController');

});



