<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\SliderController;
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
    return view('admin.admin_dashboard');
});



Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');

    Route::get('/sliders', [SliderController::class, 'index'])->name('sliders');
    Route::get('/sliders/create', [SliderController::class, 'create'])->name('sliders.create');
    

});