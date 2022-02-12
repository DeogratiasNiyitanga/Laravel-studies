<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\memberRegistration;
use App\Http\Controllers\fileUploadController;
// use App\Http\Controllers\Studies;
use App\Http\Controllers\UserHttpCleintController;

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

// Route::get('/{name}', function ($name) {
//     return view('welcome', ['name' => $name]);
// });

Route::get('/', function () {
    // return view('welcome');
    return view('/welcome');
});


Route::get('/about', function () {
    // echo $name;
    return view('about');
});


Route::get('nonaccesspage', function () {
    return view('nonaccesspage');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/index', function () {
    // echo $name;
    return view('index');
});

// Return a controller 
// Route::get('users', 'Users@index');// tHis works in php 7
Route::get('/users/{age}', [Users::class, 'index']);
// Login data 
Route::post('/userLogin', [Users::class, 'getLoginData']);

// fetch users form db 
Route::get('/fetchAllUsers', [Users::class, 'fetchUsers']);


// Route::get('study', [Studies::class, 'studies']);

// Getting user APIS 
Route::get('UserApi', [Users::class, 'apiuser']);


// Adding a grouped midleware to  some routes 
// Route::group(['middleware' => ['checkagaemidleware']], function () {
//     Route::get('/contact', function () {
//         return view('contact');
//     });

//     Route::get('/index', function () {
//         // echo $name;
//         return view('index');
//     });
// });

// Adding a routed midleware to  some routes 
// Route::view('/contact', 'contact')->middleware('checkagaemidleware');

// =====================================
// user http client test API 
// Route::get('userApi', [UserHttpCleintController::class, 'index']);

// ===================================
// User login with sessions 

// Making a rout on home page 
Route::get('home', function () {
    return view('home');
});

// Make a route on logout button 
Route::get('logout', function () {
    if (session()->has('userCred')) {
        session()->pull('userCred');
    }
    return redirect('/study');
});

// preventing the user to go back to login page while he still logged in 
Route::get('/study', function () {
    if (session()->has('userCred')) {
        return redirect('/home');
    }
    return view('/study');
});

// ==================================

// USING FLASH SESSIONS 
// Rout on view
Route::get('membergeg', function () {
    return view('memberRegistration');
});
// Route on controller 
Route::post('memberRegist', [memberRegistration::class, 'addMember']);

// ======================================

// FILE UPLOAD 
// View route 
Route::get('uploadFile', function () {
    return view('fileUpload');
});
// Controller route 
Route::post('fileUpload', [fileUploadController::class, 'uploadFile']);

// ==========================

// LOCALIZATION 
// view route 
Route::get('localization', function () {
    return view('localization');
});
