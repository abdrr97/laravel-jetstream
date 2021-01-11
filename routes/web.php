<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

// Route::get('/contact/{id}',[ContactController::class,'index'])->name('contact');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $users = App\Models\User::all();
    return view('dashboard',compact('users'));
})->name('dashboard');
