<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GenerateController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/soon', function () {
    return view('soon');
})->name('soon');

    Route::resource('Export', ExportController::class);
    Route::get('Export/{id}/destroy', 'App\Http\Controllers\ExportController@delete')->name('Export.destroy');
    Route::get('Export/{id}/printQR', 'App\Http\Controllers\ExportController@printQR')->name('Export.printQR');
    Route::resource('Import', ImportController::class);
    Route::get('Import/{id}/destroy', 'App\Http\Controllers\ImportController@delete')->name('Import.destroy');
    Route::resource('User', UserController::class);
    Route::get('User/{id}/destroy', 'App\Http\Controllers\UserController@delete')->name('Users.destroy');
    Route::resource('Generate', GenerateController::class);
    Route::get('Generate/{id}/destroy', 'App\Http\Controllers\GenerateController@delete')->name('Generate.destroy');
    Route::get('Generate/{id}/display', 'App\Http\Controllers\GenerateController@display_doc')->name('Generate.display');

// Route::prefix('Docs')->middleware('auth')->group(function () {

  
// });
