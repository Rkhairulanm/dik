<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\MuridController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', function () {
    return view('landing_page');
});
Route::prefix('murid')->group(function () {
    Route::controller(MuridController::class)->group(function () {
        Route::get('', 'index')->name('murid');
        Route::get('insert', 'create')->name('murid.create');
        Route::post('insert', 'store')->name('murid.store');
        Route::get('edit/{id}', 'edit')->name('murid.edit');
        Route::post('update/{id}', 'update')->name('murid.update');
        Route::delete('delete/{id}', 'destroy')->name('murid.delete');
    });
});
Route::controller(PpdbController::class)->group(function () {
    Route::get('murid/ppdb', 'index')->name('ppdb');
    Route::post('murid/insert/ppdb', 'store')->name('ppdb.store');
    Route::delete('murid/delete-ppdb/{id}', 'destroy')->name('ppdb.destroy');
});
