<?php

use App\Models\About;
use App\Models\Kegiatan;
use App\Models\Management;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    $aboutContent = About::first();
    $management = Management::all();
    $kegiatan = Kegiatan::where('published', true)->get();
    return view('landing_page', compact('aboutContent', 'management', 'kegiatan'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

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

    Route::resource('users', UserController::class)->middleware('admin');

    Route::controller(PpdbController::class)->group(function () {
        Route::get('murid/ppdb', 'index')->name('ppdb');
        Route::post('murid/insert/ppdb', 'store')->name('ppdb.store');
        Route::delete('murid/delete-ppdb/{id}', 'destroy')->name('ppdb.destroy');
    });

    Route::get('contact', [WebController::class, 'contact'])->name('contact');
    Route::get('contact-edit/{id}', [WebController::class, 'contactedit'])->name('contact.edit');
    Route::post('contact-update/{id}', [WebController::class, 'contactupdate'])->name('contact.update');

    Route::get('about', [WebController::class, 'about'])->name('about');
    Route::get('about-edit/{id}', [WebController::class, 'aboutedit'])->name('about.edit');
    Route::post('about-update/{id}', [WebController::class, 'aboutupdate'])->name('about.update');

    Route::get('management', [WebController::class, 'management'])->name('management');
    Route::get('management-edit/{id}', [WebController::class, 'managementedit'])->name('management.edit');
    Route::post('management-update/{id}', [WebController::class, 'managementupdate'])->name('management.update');

    Route::get('kegiatan', [WebController::class, 'kegiatan'])->name('kegiatan');
    Route::get('kegiatan-create', [WebController::class, 'kegiatancreate'])->name('kegiatan.create');
    Route::post('kegiatan-store', [WebController::class, 'kegiatanstore'])->name('kegiatan.store');
    Route::get('kegiatan-edit/{id}', [WebController::class, 'kegiatanedit'])->name('kegiatan.edit');
    Route::post('kegiatan-update/{id}', [WebController::class, 'kegiatanupdate'])->name('kegiatan.update');
});

require __DIR__ . '/auth.php';
Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');
