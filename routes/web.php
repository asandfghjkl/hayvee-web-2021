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

Route::get('/', 'LandingPageController@index')->name('landingpage');
Route::get('/hayPedia', 'LandingPageController@hayPedia')->name('hayPedia');
Route::get('/hayTalk', 'LandingPageController@hayTalk')->name('hayTalk');
Route::get('/post', 'LandingPageController@post')->name('hayPediaPost');


     
// Route::group(['middleware' => 'auth'], function () {
    
//     // Route::get('dashboard', 'AuthController@dashboard'); 
//     Route::get('logout', 'AuthController@logout')->name('logout');
// });