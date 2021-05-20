<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

Route::get('/category/all',[CategoryController::class,'index'])->name('categies');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $users = App\Models\User::all();
    return view('dashboard',compact('users'));
})->name('dashboard');
