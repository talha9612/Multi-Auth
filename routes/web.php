<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserReportController;
use App\Http\Controllers\ProfileController;
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


Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
// Route::get('/user/products', [ProductController::class, 'index1'])->name('user/products');
Route::middleware('auth','user')->group(function (){
    Route::get('user/dashboard', [HomeController::class,'index1'])->name('user/dashboard');
   Route::get('/user/products', [ProductController::class, 'index1'])->name('user/products');
});


Route::middleware('auth', 'admin')->group(function (){
Route::get('admin/dashboard', [HomeController::class,'index'])->name('admin/dashboard');
Route::get('/admin/products', [ProductController::class, 'index'])->name('admin/products');
Route::get('admin/products/create', [ProductController::class, 'create'])->name('admin/products/create');
Route::post('admin/products/save', [ProductController::class, 'save'])->name('admin/products/save');
Route::get('admin/products/edit{id}', [ProductController::class, 'edit'])->name('admin/products/edit');
Route::put('admin/products/edit{id}', [ProductController::class, 'update'])->name('admin/products/update');
Route::delete('admin/products/delete{id}', [ProductController::class, 'delete'])->name('admin/products/delete');
Route::get('admin/user_report', [UserReportController::class, 'index'])->name('admin/user_report');
});
// web.php

Route::middleware('auth')->group(function () {
    // View Profile
    Route::get('/profile', function () {
        return view('user.profile');
    })->name('profile');

    // Edit Profile
    Route::get('/edit', function () {
        return view('user.edit');
    })->name('edit');

    // Update Profile
    Route::put('/profile', [ProfileController::class, 'update'])->name('user/update');
});

require __DIR__.'/auth.php';