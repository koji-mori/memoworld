<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\MemoController;
Route::controller(MemoController::class)->middleware('auth')->group(function() {
    Route::get('memo', 'index')->name('memo.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



use App\Http\Controllers\RecordController;
Route::controller(RecordController::class)->middleware('auth')->group(function() {
    Route::get('record/create', 'add')->name('record.add');
    Route::post('record/create', 'create')->name('record.create');
    Route::get('record', 'index')->name('record.index');
    Route::get('record/edit', 'edit')->name('record.edit');
    Route::post('record/edit', 'update')->name('record.update');
    Route::get('record/delete', 'delete')->name('record.delete');
});


use App\Http\Controllers\MagicController;
Route::controller(MagicController::class)->middleware('auth')->group(function() {
    Route::get('magic/create', 'add')->name('magic.add');;
    Route::post('magic/create', 'create')->name('magic.create');
    Route::get('magic', 'index')->name('magic.index');
    Route::get('magic/edit', 'edit')->name('magic.edit');
    Route::post('magic/edit', 'update')->name('magic.update');
    Route::get('magic/delete', 'delete')->name('magic.delete');
});




Route::get('/chartjs', function () {
    return view('chartjs');
});