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
    $categories = App\Category::all();
    $jobsCount= App\Job::all()->count();
    $jobs= App\Job::paginate(5);
    return view('client.index',compact('categories','jobs','jobsCount'));
});



Route::get('/about', function () {
    return view('client.about');
});
Route::get('/blog', function () {
    return view('client.blog');
});

Route::get('/contact', function () {
    return view('client.contact');
});

Route::get('/new-post', function () {
    return view('client.new-post');
});

Route::get('/job-post', function () {
    return view('client.job-post');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Admin
Route::prefix('admin')->group(function () {

    Route::resource('/company','Admin\CompanyController');
    Route::resource('/category','Admin\CategoryController');
    Route::resource('/job','Admin\JobController');
    Route::resource('/cv','Admin\CVController');
    Route::resource('/type','Admin\TypeController');
    Route::resource('/location','Admin\LocationController');
    Route::resource('/experience_level','Admin\Experience_levelController');



    // =========== Bitfumes =========== the following routes aren't used anymore
    Route::GET('/', 'Admin\LoginController@login');
    Route::GET('/home', 'Admin\AdminController@index')->name('admin.home');
    // Login and Logout
    Route::GET('/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::POST('/login', 'Admin\LoginController@login');
    Route::POST('/logout', 'Admin\LoginController@logout')->name('admin.logout');

    // Password Resets
    Route::POST('/password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::GET('/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::POST('/password/reset', 'Admin\ResetPasswordController@reset');
    Route::GET('/password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::GET('/password/change', 'Admin\AdminController@showChangePasswordForm')->name('admin.password.change');
    Route::POST('/password/change', 'Admin\AdminController@changePassword');

    // Register Admins
    Route::get('/register', 'Admin\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'Admin\RegisterController@register');
    Route::get('/{admin}/edit', 'Admin\RegisterController@edit')->name('admin.edit');
    Route::delete('/{admin}', 'Admin\RegisterController@destroy')->name('admin.delete');
    Route::patch('/{admin}', 'Admin\RegisterController@update')->name('admin.update');

    // Admin Lists
    Route::get('/show', 'Admin\AdminController@show')->name('admin.show');
    Route::get('/me', 'Admin\AdminController@me')->name('admin.me');

    // Admin Roles
    Route::post('/{admin}/main/role/{role}', 'Admin\AdminRoleController@attach')->name('admin.attach.roles');
    Route::delete('/{admin}/main/role/{role}', 'Admin\AdminRoleController@detach');

    // Roles
    Route::get('/main/roles', 'Admin\RoleController@index')->name('admin.main.roles');
    Route::get('/main/role/create', 'Admin\RoleController@create')->name('admin.main.role.create');
    Route::post('/main/role/store', 'Admin\RoleController@store')->name('admin.main.role.store');
    Route::delete('/main/role/{role}', 'Admin\RoleController@destroy')->name('admin.main.role.delete');
    Route::get('/main/role/{role}/edit', 'Admin\RoleController@edit')->name('admin.main.role.edit');
    Route::patch('/main/role/{role}', 'Admin\RoleController@update')->name('admin.main.role.update');

    // active status
    Route::post('activation/{admin}', 'Admin\ActivationController@activate')->name('admin.activation');
    Route::delete('activation/{admin}', 'Admin\ActivationController@deactivate');
    Route::resource('permission', 'Admin\PermissionController');




});





