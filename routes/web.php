<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\DepartmentController;
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

Route::get('/', function () {
    return view('frontend.index');
})->name('index');
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');
Route::get('/service', function () {
    return view('frontend.service');
})->name('service');
Route::get('/pricing', function () {
    return view('frontend.pricing');
})->name('pricing');
Route::get('/appointment', function () {
    return view('frontend.appointment');
})->name('appointment');
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');
Route::get('/doctor', function () {
    return view('frontend.doctor');
})->name('doctor');

Route::get('/latest_news', function () {
    return view('frontend.news');
})->name('latest_news');
Route::get('/testimonial', function () {
    return view('frontend.testimonial');
})->name('testimonial');
Route::get('/search', function () {
    return view('frontend.search');
})->name('search');
Route::get('/doctor-profie', function () {
    return view('frontend.doctor_profile');
})->name('doctor-profile');
Route::get('/patient-login', function () {
    return view('frontend.login');
})->name('patient-login');
Route::get('/patient-register', function () {
    return view('frontend.register');
})->name('patient-register');

Route::prefix('/admin')->group(function(){
    Route::match(['get', 'post'], 'login',[AdminController::class,'login'])->name('admin.login');

    Route::group(['middleware'=>['web']],function(){

        Route::get('dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');

        Route::resource('user', UserController::class);
        Route::resource('role', RoleController::class);
        Route::resource('department', DepartmentController::class);
    });
});

