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

    Route::prefix('banner')->group(function () {
        Route::get('/', function () {
            return view('admin.banner.index');
        })->name('banner');

        // create
        Route::post('/add-material-banner', 'BannerController@add_material')->name('add.material.banner');

        // edit
        Route::get('/edit-material-banner/{id}', 'BannerController@edit_material')->name('edit.material.banner');

        // update
        Route::post('/update-material-banner', 'BannerController@update_material')->name('update.material.banner');

        // delete
        Route::get('/delete-material-banner/{id}', 'BannerController@delete_material')->name('delete.material.banner');

        //json banner material
        Route::get('/json-material', 'BannerController@json_material')->name('json.banner.material');
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
