<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 

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


// Admin Siswa
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return redirect('/admin/siswa');
    });

    Route::get('/siswa', function () {
        return view('tables.siswa');
    });
    Route::get('/import', function () {
        return view('section.import');
    });

    Route::get('/add-siswa', function () {
        return view('forms.siswa');
    });

    Route::get('/update-siswa/{id}', function () {
        return view('forms.siswa');
    });
});

// Siswa
Route::get('/', function () {
    return view('index');
});

// excel
Route::get('/file-import', [
    SiswaController::class,
    'importView'
])->name('import-view');

Route::post('/import', [
    SiswaController::class,
    'import'
])->name('import');
Route::get('/export', [
    SiswaController::class,
    'exportSiswa'
])->name('export');
