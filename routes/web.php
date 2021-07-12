<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ShowJobController;
use App\Http\Controllers\ShowController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('post-login', [CustomAuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register');
Route::post('post-registration', [CustomAuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');
Route::get('add-job',[JobController::class,'addjob'])->name('add-job');
Route::post('post-addjob',[JobController::class,'postAddJob'])->name('add-job.post');
Route::get('admin/home', function () {
    return view('admin.home');
});

Route::get('show-jobs',[ShowJobController::class,'index']);

Route::get('/search', [ShowController::class, 'search']);

?>