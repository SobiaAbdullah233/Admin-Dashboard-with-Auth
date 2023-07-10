<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
Route::get('loginform', function () {
    return view('admin.includes.login');
});

// middleware are applied
Route::middleware(['auth'])->group(function(){
    Route::get('admin', function () {
        return view('admin.dashbord');
    })->middleware('admin');

    Route::get('user', function () {
        return view('admin.userdashbord');
    });


});

Route::get('/logout', [HomeController::class, 'logout']);



Route::get('error', function () {
    return view('admin.401');
});

Route::get('passwordform', function () {
    return view('admin.password');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

