<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WeightController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\DmgTypesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryAllController;
use App\Http\Controllers\ProfileAdminController;
use App\Http\Controllers\IdentificationController;
use App\Http\Controllers\KnowledgeBasesController;
use App\Http\Controllers\DmgCharacteristicsController;

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

// Route::get('/', function () {
//     return view('front.main');
// });
Route::controller(LoginController::class)->group(function(){
    Route::get('/','index')->name('login');
    Route::post('login/proses','proses');
    Route::get('logout','logout');
    Route::resource('register', RegisterController::class);


 });


 Route::group(['middleware' => ['auth']], function (){
    Route::group(['middleware' => ['cekUserLogin:1']], function () {
        Route::resource('dashboard', DashboardController::class);
        Route::resource('characteristics', DmgCharacteristicsController::class);
        Route::resource('types', DmgTypesController::class);
        Route::resource('expert', WeightController::class);
        Route::resource('knowledge', KnowledgeBasesController::class);
        Route::resource('historys', HistoryAllController::class);
        Route::resource('users', DataUserController::class);
        Route::resource('profiles', ProfileAdminController::class);
    });

    Route::group(['middleware' => ['cekUserLogin:2']], function () {
        Route::resource('sispejkj', IdentificationController::class);
        Route::resource('history', HistoryController::class);
        Route::resource('profile', UserController::class);
        Route::resource('home', HomeController::class);
        Route::resource('instructions', FAQController::class);
        Route::resource('about', AboutController::class);
        Route::resource('team', TeamController::class);
    });
});

