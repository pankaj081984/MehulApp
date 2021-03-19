<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceCategoryController;
use App\Models\User;

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
    return view('auth.login');
});
Route::get('/home', function () {
    echo "This is HOMEPAGE redirection";
});

Route::get('/ServiceRequest/Categories', [ServiceCategoryController::class, 'AllCat'])->name('service.category');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
   // $users = User::all();
    return view('admin.index');
})->name('dashboard');
