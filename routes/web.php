<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\TeacherController;
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
    return view('welcome');
});



Route::prefix('admin')->group(function () {
    // Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    // Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');

    Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
    Route::get('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
});

Route::prefix('admin')->middleware(['auth:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
      Route::get('/sliders', [SliderController::class, 'index'])->name('sliders');
    Route::get('/sliders/create', [SliderController::class, 'create'])->name('sliders.create');
    Route::post('/sliders/store', [SliderController::class, 'store'])->name('sliders.store');
    Route::get('/sliders/edit/{id}', [SliderController::class, 'edit'])->name('sliders.edit');
    Route::put('/sliders/update/{id}', [SliderController::class, 'update'])->name('sliders.update');
    Route::get('/sliders/delete/{id}', [SliderController::class, 'destroy'])->name('sliders.destroy');

    Route::resource('/teachers', TeacherController::class);

});


