<?php
namespace App\Models;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReletionController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' , [ReletionController::class,'index'])->name('reletion');
Route::get('/onetoone' , [ReletionController::class,'onetoone'])->name('onetoone');
Route::get('/onetomany' , [ReletionController::class,'onetomany'])->name('onetomany');
Route::get('/manytomany' , [ReletionController::class,'manytomany'])->name('manytomany');
Route::get('/onetoonethrow' , [ReletionController::class,'onetoonethrow'])->name('onetoonethrow');
Route::get('/manytomanythrow' , [ReletionController::class,'manytomanythrow'])->name('manytomanythrow');








// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
