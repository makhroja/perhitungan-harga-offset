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
    return redirect('login');
});

Auth::routes([
    'register' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');

// Route Admin
Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });
});

// Route Branch
Route::group(['prefix' => 'branch', 'middleware' => ['branch']], function () {
    Route::get('/', function () {
        return view('branch.dashboard');
    });
});


Route::get('/draft', function () {
    return view('draft');
});
