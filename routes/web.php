<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function(){
    Route::get('home',[ProjectController::class,'home'])->name('projects.home');

    Route::get('home/store', [ProjectController::class, 'store'])->name('projects.store'); 
    Route::get('/record', [ProjectController::class, 'record'])->name('record.index');

    Route::get('/record/{id}', [ProjectController::class, 'showData'])->name('showData');
    Route::get('/record/update/{id}', [ProjectController::class, 'record_update'])->name('record_update'); 
    Route::get('/record/edit/{id}', [ProjectController::class, 'update_store'])->name('record_updateStore');
    
    Route::get('/article/delete/{id}', [ProjectController::class, 'record_delete'])->name('record_delete');
});

require __DIR__.'/auth.php';
