<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\managercontroller;

//Auth::routes();

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// صفحة المدير
Route::get('/manger', function () {
    return view('manger.mdashboard');
})->middleware('auth')->name('manger.dashboard');





Route::post('/logout', function () {
    return redirect('/')->with('success', 'Logged out successfully!');
})->name('logout');
Route::get('/test-edit/{id}', function ($id) {
    return "<h1>Editing Bus #{$id}</h1>";
});
// Route لحذف الباص
/*Route::delete('/delete-bus/{id}', function ($id) {
    return 'Bus #' . $id . ' deleted (simulated)';
});*/
/*
Route::get('/driver/dashboard' /*, [driverController::class], 'dashboard')
->name('driver.dashboard')->middleware('auth');*/
Route::get('/driver/dashboard',function()
{
    return view('driver.dashboard');
}
)->middleware('auth')->name('driver.dashboard');  /* هون الاسم هي بحطوا اختياري لو بدي و بسمي يلي بدي ياه يعني لما اجي اكتب اسم صفحة بكتبها بهاد المفتاح*/ 
/*
// route new bus
Route::get('/bus/buscreae', function () {
    return view('bus.buscreae');
})->name('bus.buscreae');

//rout the new driver
Route::get('/driver/drivercreat',function()
{
    return view('driver.drivercreate');
})->name('driver.drivercreat');

*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
