<?php

use App\Http\Controllers\CustomerAuth\CustomerBack;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RecoverPasswordController;
use App\Http\Controllers\Customer\LoginController1;
use App\Http\Controllers\Auth\CustomerLoginController;
use App\Http\Controllers\CustomerAuth\Adminfront;
use App\Http\Controllers\CustomerAuthController;

Route::get('/customer/login', [Adminfront::class, 'Customerlogin'])->name('customer-login');
Route::post('/login/customer', [Adminfront::class, 'loginCustomer'])->name('login-customer');


Route::get('/register/buyer', [Adminfront::class, 'showRegistrationForm'])->name('buyer.register');
Route::post('/register_buyer', [CustomerBack::class, 'register'])->name('buyerregister_submit');

Route::group(['middleware'=>'buyer'], function(){
    Route::get('/customer/dashboard', [CustomerBack::class, 'Dashboard'])->name('customer_dashboard');
    Route::post('/logout/buyer', [CustomerBack::class, 'logout'])->name('buyer.logout');
    
});

Route::get('/customer-logout', [Customer1Controller::class, 'logout'])->name('customer-logout');
Route::get('/customer-registration', [Customer1Controller::class, 'showRegistrationForm'])->name('customer-registration');
Route::post('/customer-registration', [Customer1Controller::class, 'register'])->name('customer-registration.post');

// Home1 Route
Route::get('/home1', [HomeController::class, 'home1'])->name('home1');
Route::get('home1', [HomeController::class, 'home1'])->name('home1');
Route::get('/home1', [Customer1Controller::class, 'home1'])->name('home1');





Route::get('/signup', 'AuthController@showSignUpForm')->name('signup');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware'=>['guest']],function (){
    Route::get('login',[LoginController::class,'index'])->name('login');
    Route::post('login',[LoginController::class,'login']);
    Route::get('recover-password',[RecoverPasswordController::class,'index'])->name('reset-password');

});
Route::group(['middleware'=>['auth']],function (){
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('logout',[LogoutController::class,'index'])->name('logout');

    Route::get('cloth-types',[ClothTypeController::class,'index'])->name('cloth-types');
    Route::post('cloth-types',[ClothTypeController::class,'store']);
    Route::put('cloth-types',[ClothTypeController::class,'update']);
    Route::delete('cloth-types',[ClothTypeController::class,'destroy'])->name('cloth-type.destroy');

    Route::get('measurement-parts',[MeasurementPartController::class,'index'])->name('measurement-parts');
    Route::post('measurement-parts',[MeasurementPartController::class,'store']);
    Route::put('measurement-parts',[MeasurementPartController::class,'update']);
    Route::delete('measurement-parts',[MeasurementPartController::class,'destroy']);

});

