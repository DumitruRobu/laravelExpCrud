<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function() {
    Route::get('/', 'MainPageController')->name("MainPage");
    Route::get('/utilizatori', 'ShowAllUtilizatoriController')->name("ShowAllUtilizatori");
    Route::post('/utilizatori', 'StoreUtilizatoriController')->name("StoreUtilizatori");
    Route::get('/utilizatori/create', 'CreateUtilizatoriController')->name("CreateUtilizatori");
    Route::get('/utilizatori/{id}', 'ViewUtilizatorController')->name("ViewUtilizator");
    Route::get('/utilizatori/{id}/edit', 'EditUtilizatorController')->name("EditUtilizator");
    Route::patch('/utilizatori/{id}', 'UpdateController')->name("UpdateUtilizator");
    Route::delete('/utilizatori/{id}', 'DeleteUtilizatorController')->name("DeleteUtilizator");
});

//Route::get('/posts/{post}/edit', [Controller1::class, "edit"])->name("controller1.edit");
//Route::patch('/posts/{post}', [Controller1::class, "patch"])->name("controller1.patch");















Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
