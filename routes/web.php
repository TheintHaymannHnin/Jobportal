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
Route::get('/cv_form/{jobId}','UIController@cvForm')->middleware('cvform');
Route::get('/job/{jobId}/detail','UIController@jobDetail');
Route::post('/cv_form/store','UIController@storeCvForm');

Route::get('/jobs/search','UIController@searchJobs');

// Just by theint
Route::get('/search_jobs_by_algo','BrowseController@searchJobsByAlgo');

Route::get('/notis','UIController@notis');

// browse
Route::get('/category_lists','BrowseController@categorylist');
Route::get('/all_jobs/{categoryId}','BrowseController@allJobsIndexByCategory');

Route::get('/company_lists','BrowseController@companylist');
Route::get('/all_jobs_by_company/{companyId}','BrowseController@allJobsIndexByCompany');




// AUTHENTICATION BY YMS
Auth::routes();


Route::get('/employee/register_form','EmployeeRegisterController@registerForm');
Route::post('/employee/register','EmployeeRegisterController@register');

Route::get('/home', 'HomeController@index')->name('home');

//Admin
Route::prefix('admin')->group(function () {

    Route::get('/landing','AdminController@landing');

    Route::post('/send_voucher_to_admin/{companyUserId}','AdminController@sendVoucherToAdmin');

    Route::post('/approve_company/{companyUserId}','AdminController@approveCompany');

    Route::get('/users','AdminController@userIndex');

    Route::resource('/category','Admin\CategoryController');

    Route::resource('/job','Admin\JobController');

    Route::get('/download_job_excel_sheet','Admin\JobController@downloadJobExcelSheet');

    Route::get('/job/{jobId}/request_cvs','Admin\JobController@requestCVs');
    Route::get('/job/{jobId}/accepted_cvs','Admin\JobController@acceptedCVs');
    Route::get('/job/{jobId}/rejected_cvs','Admin\JobController@rejectedCVs');

    Route::get('/job/show_cv_form/{cvId}','Admin\JobController@showCvForm');
    Route::post('/job/accept_cv/{cvId}','Admin\JobController@acceptCv');
    Route::post('/job/reject_cv/{cvId}','Admin\JobController@rejectCv');

    Route::resource('/cv','Admin\CVController');

    Route::resource('/type','Admin\TypeController');
    Route::resource('/location','Admin\LocationController');
    Route::resource('/experience_level','Admin\Experience_levelController');

});



